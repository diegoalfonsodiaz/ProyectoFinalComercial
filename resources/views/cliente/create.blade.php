@include('header')

							<section id="content" class="main">
								
								@if (Auth::guest())
								<script>alert('Ingrese Credenciales')</script>
								@else
								<h1>Nuevo Cliente</h1>
								<form method="POST" action="{{route('cliente.store')}}">
									{!!csrf_field()!!}
									<p><label for="nombre">Nombre
									<input type="text" name="nombre" value="{{old('nombre')}}">
									{!!$errors->first('nombre','<span class=error>:message</span>')!!}
									</label>
									</p>

									<p><label for="telefono">telefono
									<input type="text" name="telefono" value="{{old('telefono')}}">
									{!!$errors->first('nombre','<span class=error>:message</span>')!!}
									</label>
									</p>

									<p><label for="email">email
									<input type="text" name="email" value="{{old('email')}}">
									{!!$errors->first('nombre','<span class=error>:message</span>')!!}
									</label>
									</p>
									
									
									
									<input  class="btn btn-primary" type="submit" value="Enviar">
								</form>
								@endif
							</section>
@include('footer')