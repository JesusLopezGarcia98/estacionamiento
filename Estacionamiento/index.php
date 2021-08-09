
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login-admint</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-dark">
  


<!-- Content -->
<div class="container" style="padding: 200px 0px;">
  <div class="row">
    <div class="offset-xl-3 col-xl-6">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center mb-5">Ingresa</h2>


          <form action="logica/logear-admin.php" method="POST">
            <div class="form-group">
              <label >Usuario</label>
              <input type='text' class="form-control" name='usuario' required>
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input type='password' class="form-control"  name='contraseña' required>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Iniciar sesion</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Content -->

</body>
</html>