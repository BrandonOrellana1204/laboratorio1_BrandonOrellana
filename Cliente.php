<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Laboratorio1_Brandon</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Clientes</a>
              </li>
             
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-6 p-5 bg-white shadow-lg rounded">


            <form method="post" action="Recibe_Datos.php">
            <div class="form-group">

            <label for="Codigo"> Codigo: </label>
            <input id="Codigo" class="form-control" type="text" name="Codigo">

            <label for="Nombres"> Nombres: </label>
            <input id="Nombres" class="form-control" type="text" name="Nombres">

            <label for="Apellidos"> Apellidos </label>
            <input id="Apellidos" class="form-control" type="text" name="Apellidos">

            <label for="DUI"> DUI </label>
            <input id="DUI" class="form-control" type="text" name="DUI">

            <label for="Direccion"> Direccion </label>
            <input id="Direccion" class="form-control" type="text" name="Direccion">

            <label for="Telefono"> Telefono: </label>
            <input id="Telefono" class="form-control" type="text" name="Telefono">



            

            <button class="btn btn-primary" type="submit"> ENVIAR </button>
            </form >
        </div>
          </div>
        </div>
      </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>