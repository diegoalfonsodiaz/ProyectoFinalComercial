@include('header')

<div class="container">
	<div class="jumbotron">
	<div class="row">
		<div class="col-md-4">
			<h4>id: </h4>
			<p class="lead">{{$tpago->idpago }}</p> 
			<h4>Cliente: </h4>
			<p class="lead">{{$tpago->idcliente}}</p> 
			<h4>Combo: </h4>
			<p class="lead">{{$tpago->idcombo }}</p> 
			<h4>NIT: </h4>
			<p class="lead">{{$tpago->nit }}</p> 
										
		</div>
		</div>
										
	</div>
									
</div>
@include('footer')