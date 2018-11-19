@include('header')

<ul class="actions vertical">
	@if (Auth::guest())
	<a>Ingrese sus credenciales para editar e ingresar nuevos datos</a>
	@else
	
	<form action="{{route('pago.create')}}">
		<button  class="btn btn-primary" class="button special fit">Crear</button>
	</form>	  
	@endif
		
	
</ul>

		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr  class="table-info">
					

					<th>ID</th>
					<th>Cliente</th>
					<th>Combo</th>
					<th>NIT</th>
					
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categorias as $tprod)
				<tr>
					<td>{{$tprod->idpago}}</td>
					<td>{{$tprod->nombrecliente}}</td>
					<td>{{$tprod->nombrecombo}}</td>
					<td>{{$tprod->nit}}</td>
					
					<td>

					<a href="{{route('pago.show',$tprod->idpago)}}"> Mostrar </a>
					@if (Auth::guest())
					<script>alert('Ingrese Credenciales')</script>
	@else
					<a href="{{route('pago.edit',$tprod->idpago)}}"> Editar </a>
					
						<form style="display: inline" method="POST" action="{{route('pago.destroy', $tprod->idpago)}}">
						{!!method_field('DELETE')!!}
						{!!csrf_field()!!}
							<button  type="submit" class="btn btn-primary">Eliminar</button>
						</form>
					@endif

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
@include('footer')