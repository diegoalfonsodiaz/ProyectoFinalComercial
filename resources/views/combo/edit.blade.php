@include('header')

<div class="form-group">
	@if (Auth::guest())
	<script>alert('Ingrese Credenciales')</script>
	@else
	<form method="POST" action="{{route('combo.update',$tcombos->idcombo)}}">
		{!!method_field('PUT')!!}
		{!!csrf_field()!!}
		<p>
		<label for="nombre"> Nombre
		<input class="form-control" type="text" name="nombre" value="{{$tcombos->nombre}}">
		{!!$errors->first('nombre','<span class=error>:message</span>')!!}
		</label>
		</p>

		<p>
		<label for="precio"> Precio
		<input class="form-control" type="text" name="precio" value="{{$tcombos->precio}}">
		{!!$errors->first('precio','<span class=error>:message</span>')!!}
		</label>
		</p>
		
		
		<input  class="btn btn-primary" type="submit" value="Enviar">
	</form>
	@endif
</div>
@include('footer')