<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        /* This CSS is for a button with rounded corners, white text, and a light blue background. */

button {
    font-size: 14px;
    font-weight: bold;
    padding: 8px 16px;
    border: none;
    border-radius: 24px;
    cursor: pointer;
    background-color: #4CA1AF;
    color: white;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #2E7D87;
}
body{
    align-content: center;
}
</style>
</head>

<body>
  <header>
  <?php include('../templates/cabecera.php'); ?>
  </header>
  <main>
<div class = "cointainer">
    <div class = "row">
        <div class = "col-md-4">

         </div>       
        
        <div class = "col-md-3">
            <br><br><br><br>
            <div class="card">
                
                <div class="card-body">
                 
                    <div class="mb-3">
                      <label for="" class="form-label">Usuario</label>
                      <input type="text"
                        class="form-control" 
                        name="usuario"
                        id="usuario" 
                        aria-describedby="helpId"
                        placeholder="">
                      <small id="helpId" 
                      class="form-text text-muted">Escriba su usuario</small>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Contraseña</label>
                      <input type="password"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Escriba su contraseña</small>
                    </div>

                    <button onclick="window.location.href='vista_crear_concurso.php'">Iniciar sesión</button>

                </div>
                
                   
                </div>
            </div>
</div>
   

  </main>
  <footer>

    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>