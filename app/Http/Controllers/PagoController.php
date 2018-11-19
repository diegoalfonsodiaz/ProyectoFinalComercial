<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagoFormRequest;
use App\Pago;
use App\Cliente;
use App\Combo;
use DB;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = DB::table('pago')
            ->leftJoin('cliente', 'pago.idcliente', '=', 'cliente.idcliente')
            ->leftJoin('combo', 'pago.idcombo', '=', 'combo.idcombo')
            ->select('pago.*', 'cliente.nombre as nombrecliente', 'combo.nombre as nombrecombo')
            ->get();
            return view('pago.index', compact('categorias'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $combos=Combo::all();
        $clientes=Cliente::all();
        $categorias = DB::table('pago')
            ->leftJoin('cliente', 'pago.idcliente', '=', 'cliente.idcliente')
            ->leftJoin('combo', 'pago.idcombo', '=', 'combo.idcombo')
            ->select('pago.*','cliente.*','combo.*', 'cliente.nombre as nombrecliente', 'combo.nombre as nombrecombo')
            ->get();
            
            return view('pago.create', compact('categorias','combos', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$i = 1;
        //foreach ($request->get('category_id') as $key=>$value) {

          //  $product = new Pago;
            //$product->idcliente =  $request->get("idcliente");
            //$product->idcombo = $request->get('category_id');
            //$product->nit =  $request->get('nit');
            //$product->save();
            //$i++;
        //}
        $idcombo = $request->get('category_id');
        $idcliente = $request->get("idcliente");

        $cont = 0;
        while($cont < count($idcombo)){
            $detalle = new Pago();
            $detalle->idcliente = $idcliente;
            $detalle->idcombo = $idcombo[$cont];
            $detalle->nit = $request->get('nit');
            $detalle->save();
            $cont=$cont+1;
        }



        return redirect()->route('pago.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tpago=Pago::findOrFail($id);
        
        return view('pago.show',compact('tpago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tproducto=Pago::findOrFail($id);
        $combos=Combo::all();
        $clientes=Cliente::all();
        return view('pago.edit',compact('tproducto','combos','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pago::findOrFail($id)->update($request->all());
        return redirect()->route('pago.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pago::findOrFail($id)->delete();
        return redirect()->route('pago.index');
    }
}