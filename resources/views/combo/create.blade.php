@include('header')

							<section id="content" class="main">
								<h1>Nuevo Combo</h1>
								@if (Auth::guest())
								<form method="POST" action="{{route('combo.store')}}">
									{!!csrf_field()!!}
									<p><label for="nombre">Nombre
									<input type="text" name="nombre" value="{{old('nombre')}}">
									{!!$errors->first('nombre','<span class=error>:message</span>')!!}
									</label>
									</p>

									<p><label for="precio">Precio
									<input type="text" name="precio" value="{{old('precio')}}">
									{!!$errors->first('precio','<span class=error>:message</span>')!!}
									</label>
									</p>
									
									<input  class="btn btn-primary" type="submit" value="Enviar">
								</form>
								@endif
							</section>
@include('footer')