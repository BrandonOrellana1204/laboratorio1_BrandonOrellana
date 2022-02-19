<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
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

</head>
<body>
    

    <?php
    $Codigo= $_POST['Codigo'];
    $Nombres= $_POST['Nombres'];
    $Apellidos= $_POST['Apellidos'];
    $DUI= $_POST['DUI'];
    $Direccion= $_POST['Direccion'];
    $Telefono= $_POST['Telefono'];
    ?>
    <div class ="container"><br>
    <table class ="table table-striped table-hover table-bordered">
        <tbody>
            <tr>
                <th>Codigo</th>
                <th>Nombres</th>
                <th>Apellidos </th>
                <th>DUI</th>
                <th>Direccion</th>
                <th>Telefono</th>
             </tr>
             <tr>
                 <td><?php echo $Codigo ?></td>
                 <td><?php echo $Nombres ?></td>
                 <td><?php echo $Apellidos  ?></td>
                 <td><?php echo $DUI ?></td>
                 <td><?php echo $Direccion?></td>
                 <td><?php echo $Telefono?></td>

             </tr>

        </tbody>

    </table>

</div>


    
</body>
</html>