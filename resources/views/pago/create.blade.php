@include('header')

							<section id="content" class="main">
								
								@if (Auth::guest())
								<script>alert('Ingrese Credenciales')</script>
								@else
								<h1>Nuevo pago</h1>
								<form method="POST" action="{{route('pago.store')}}">
									{!!csrf_field()!!}
									<p><label for="nit">NIT 
									<input type="text" name="nit" value="{{old('nit')}}">
									{!!$errors->first('nit','<span class=error>:message</span>')!!}
									</label>
									</p>
									
									<select name="idcliente" >
										@foreach ($clientes as $cliente)
										  <option  value="{{ $cliente->idcliente }}">{{ $cliente->nombre }}</option>
										@endforeach
									</select>

									<br>
									<br>

									
									@foreach ($combos as $com)
										<input type="checkbox" name="category_id[]" value="{{ $com->idcombo }}">{{ $com->nombre }}
									@endforeach
									<br>
									<br>
									
									<input  class="btn btn-primary" type="submit" value="Enviar">
								</form>
								@endif
							</section>
@include('footer')