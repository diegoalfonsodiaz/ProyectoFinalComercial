@include('header')

<div class="container">
	<div class="jumbotron">
	<div class="row">
		<div class="col-md-4">
			<h4>id: </h4>
			<p class="lead">{{$tcombos->idcliente }}</p> 
			<h4>Nombre: </h4>
			<p class="lead">{{$tcombos->nombre }}</p> 
			<h4>Precio: </h4>
			<p class="lead">{{$tcombos->precio }}</p> 
											
		</div>
		</div>
										
	</div>
									
</div>
@include('footer')