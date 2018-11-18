@include('header')

<ul class="actions vertical">
	@if (Auth::guest())
	<form action="{{route('cliente.create')}}">
		<button  class="btn btn-primary" class="button special fit">Crear</button>
	</form>
	@else
		<a>Ingrese sus credenciales para editar e ingresar nuevos datos</a>
	  
	@endif
		
	
</ul>

		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr  class="table-info">
					

					<th>ID</th>
					<th>Nombre</th>
					<th>Telefono</th>
					<th>Correo Electronico</th>
					
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categorias as $tprod)
				<tr>
					<td>{{$tprod->idcliente}}</td>
					<td>{{$tprod->nombre}}</td>
					<td>{{$tprod->telefono}}</td>
					<td>{{$tprod->email}}</td>
					
					<td>

					<a href="{{route('cliente.show',$tprod->idcliente)}}"> Mostrar </a>
					@if (Auth::guest())
					<a href="{{route('cliente.edit',$tprod->idcliente)}}"> Editar </a>
					
						<form style="display: inline" method="POST" action="{{route('cliente.destroy', $tprod->idcliente)}}">
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