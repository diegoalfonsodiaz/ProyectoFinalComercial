<!DOCTYPE html>
<html>
<head>
	<title>
		Compra Combos
	</title>

	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Compra Combos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('cliente.index')}}">Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('combo.index')}}">Combos</a>
      </li>
      
      @if (Auth::guest())
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">login</a>
      </li>
      @else
      <li class="nav-item">
          
          <a class="nav-link" href="{{ route('logout') }}">logout</a>
      </li>
	    @endif
      
      
      
    </ul>


</nav>

<div class="container">
  <section id="content" class="main">
    <br>
    <br>
