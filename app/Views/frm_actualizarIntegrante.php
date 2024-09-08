<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
    <h1>Actualización de Integrantes</h1>

    <form action="<?= base_url('modificarIntegrante') ?>" method="post">
            <div class="mb-3">
              <label for="txt_codigo" class="form-label">Integrante_id</label>
              <input type="number" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="ID here" value="<?=$datosIntegrantes['integrante_id']?>">
            </div>
            <div class="mb-3">
              <label for="txt_nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Name" value="<?=$datosIntegrantes['nombre']?>">
            </div>
            <div class="mb-3">
              <label for="txt_apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Last Name" value="<?=$datosIntegrantes['apellido']?>">
            </div>
            <div class="mb-3">
              <label for="txt_fechaNac" class="form-label">Fecha Nacimiento</label>
              <input type="date" class="form-control" id="txt_fechaNac" name="txt_fechaNac" placeholder="Date" value="<?=$datosIntegrantes['fecha_nacimiento']?>">
            </div>
            <div class="mb-3">
              <label for="txt_fechaMuerte" class="form-label">Fecha Muerte</label>
              <input type="date" class="form-control" id="txt_fechaMuerte" name="txt_fechaMuerte" placeholder="Dead" value="<?=$datosIntegrantes['fecha_muerte']?>">
            </div>
            <div class="mb-3">
              <label for="txt_webOficial" class="form-label">Web Oficial</label>
              <input type="text" class="form-control" id="txt_webOficial" name="txt_webOficial" placeholder="Web site" value="<?=$datosIntegrantes['web_oficial']?>">
            </div>
            <div class="mb-3">
              <label for="txt_email" class="form-label">Pais Nacimiento</label>
              <input type="text" class="form-control" id="txt_pais" name="txt_pais" placeholder="Country" value="<?=$datosIntegrantes['pais_nacimiento']?>">
            </div>
            
            <div class="mb-3">
              <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar">
            </div>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>