@include('header')

<ul class="actions vertical">
	@if (Auth::guest())
	<form action="{{route('combo.create')}}">
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
					<th>Precio</th>
					
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($combos as $tprod)
				<tr>
					<td>{{$tprod->idcombo}}</td>
					<td>{{$tprod->nombre}}</td>
					<td>{{$tprod->precio}}</td>
					
					<td>

					<a href="{{route('combo.show',$tprod->idcombo)}}"> Mostrar </a>
					@if (Auth::guest())
					<a href="{{route('combo.edit',$tprod->idcombo)}}"> Editar </a>
					
						<form style="display: inline" method="POST" action="{{route('combo.destroy', $tprod->idcombo)}}">
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