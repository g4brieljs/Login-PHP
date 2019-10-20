<?php include('./server/server.php') ?>

<?php require './partials/header.php' ?>
<body>

<div class="container p-4">
    <div class="row">

      <div class="col-sm">
        <h1>Adquiera sus boletas</h1>
      </div>

        <div class="col-sm mx-auto text-center px-3">
            <div class="card">
                <div class="card-header">
                    <h2>Registrarse</h2>
                </div>
                <div class="card-body">
                    <form action="/register" method="POST">

                        <?php include('errors.php'); ?>

                        <div class="form-group">
                            <input type="text" name="nombre" placeholder="Nombre" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="correo" placeholder="Correo" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="cedula" class="form-control" placeholder="Cedula" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Contraseña" />
                        </div>
                        <h3>Primera base</h3>
                        <div class="form-group">
                            <input type="text" name="b1nombre" placeholder="Nombre" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="b1cedula" placeholder="Cedula" class="form-control" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">
                                Registrarse
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>

  <!-- Js -->
  
  <?php require './partials/body.php' ?>
  
</body>
</html>