<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="images/R.png" alt="" id="logoborg">
  </div>
</nav>
<form id=loginreg>
  <p id="txtreg">Registro de Hojas de chequeo</p>
  <br><br>
  <div>
  <a href="welcome"class="btn" id="b1" data-bs-toggle="modal" data-bs-target="#exampleModal">Inciar Sesion</a>    
  </div>
  <p></p>
  <div>
  <a href="registro" class="btn" id="b2">Registrarse</a>    
  </div>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Usuario:</h6>
        <input type="text" placeholder="Escribir usuario..." id="name">
        <br><br>
        <h6>Contraseña:</h6>
        <input type="password" placeholder="Esribir contraseña..." id="password">
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</a>
        <a type="button" href="welcome"class="btn btn-primary">Iniciar Sesion</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>