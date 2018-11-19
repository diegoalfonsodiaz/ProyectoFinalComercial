@include('header')

<div class="form-group">
	@if (Auth::guest())
	<script>alert('Ingrese Credenciales')</script>
	@else
	<form method="POST" action="{{route('pago.update',$tproducto->idpago)}}">
		{!!method_field('PUT')!!}
		{!!csrf_field()!!}
		<p>
		<label for="nit">NIT
		<input class="form-control" type="text" name="nit" value="{{$tproducto->nit}}">
		{!!$errors->first('nit','<span class=error>:message</span>')!!}
		</label>
		</p>
		
		<select name="idcliente" >
			@foreach ($clientes as $cliente)
			  <option  value="{{ $tproducto->idcliente }}">{{ $cliente->nombre }}</option>
			@endforeach
		</select>

		<br>
		<br>
		
		<select name="idcombo" >
			@foreach ($combos as $combo)
			  <option  value="{{ $tproducto->idcombo }}">{{ $combo->nombre }}</option>
			@endforeach
		</select>

		<br>
		<br>
		
		<input  class="btn btn-primary" type="submit" value="Enviar">
	</form>
	@endif
</div>
@include('footer')