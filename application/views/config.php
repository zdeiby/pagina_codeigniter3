<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>Welcome to CodeIgniter</title>

	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./c_login">Inicia session</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="./c_register">Registrate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Deiby Graciano
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./c_profile">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configuracion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Salir</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container pt-4 ">
    <div class="row">
        <div class="col-auto">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Información</th>

    </tr>
  </thead>
  <tbody>
    <tr onclick="executePHP()">
     <th scope="row" >Cambiar contraseña</th>
     
    </tr>
    <tr>
      <th scope="row">Eliminar cuenta</th>
   
    </tr>
    <tr>
      <th scope="row">Salir</th>
    
    </tr>
  </tbody>
</table>
        </div>
        <div class="col">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Deiby</th>


    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Apellido</th>
      <th scope="col">Graciano</th>
     
    </tr>
    <tr>
      <th scope="row">Email</th>
      <th scope="col">Deibygj@hotmail.com</th>
   
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
