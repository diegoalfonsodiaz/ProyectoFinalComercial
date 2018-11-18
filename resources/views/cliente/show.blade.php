@include('header')

<div class="container">
	<div class="jumbotron">
	<div class="row">
		<div class="col-md-4">
			<h4>id: </h4>
			<p class="lead">{{$tproducto->idcliente }}</p> 
			<h4>Nombre: </h4>
			<p class="lead">{{$tproducto->nombre }}</p> 
			<h4>Telefono: </h4>
			<p class="lead">{{$tproducto->telefono }}</p> 
			<h4>email: </h4>
			<p class="lead">{{$tproducto->email }}</p> 								
		</div>
		</div>
										
	</div>
									
</div>
@include('footer')