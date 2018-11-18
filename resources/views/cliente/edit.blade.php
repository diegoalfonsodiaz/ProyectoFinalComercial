@include('header')

<div class="form-group">
	@if (Auth::guest())
	<form method="POST" action="{{route('cliente.update',$tproducto->idcliente)}}">
		{!!method_field('PUT')!!}
		{!!csrf_field()!!}
		<p>
		<label for="nombre">Nombre
		<input class="form-control" type="text" name="nombre" value="{{$tproducto->nombre}}">
		{!!$errors->first('nombre','<span class=error>:message</span>')!!}
		</label>
		</p>

		<p>
		<label for="telefono">Telefono
		<input class="form-control" type="text" name="telefono" value="{{$tproducto->telefono}}">
		{!!$errors->first('nombre','<span class=error>:message</span>')!!}
		</label>
		</p>
		<p>
		<label for="email">email
		<input class="form-control" type="text" name="email" value="{{$tproducto->email}}">
		{!!$errors->first('nombre','<span class=error>:message</span>')!!}
		</label>
		</p>
		
		<input  class="btn btn-primary" type="submit" value="Enviar">
	</form>
	@endif
</div>
@include('footer')