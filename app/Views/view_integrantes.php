<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Integrantes</title>
</head>

<body>
    <h1>Integrantes</h1>
    <br>

    <!-- Button trigger modal para agregar registros-->
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#regionModal">
        Nuevo
    </button>

    <!-- Modal -->
    <div class="modal fade" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Integrante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('guardarIntegrante') ?>" method="post">
                        <div class="mb-3">
                            <label for="txt_codigo" class="form-label">Integrante_id</label>
                            <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="ID">
                        </div>
                        <div class="mb-3">
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="txt_apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <label for="txt_fechaNac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" class="form-control" id="txt_fechaNac" name="txt_fechaNac" placeholder="Date">
                        </div>
                        <div class="mb-3">
                            <label for="txt_fechaMuerte" class="form-label">Fecha Muerte</label>
                            <input type="date" class="form-control" id="txt_fechaMuerte" name="txt_fechaMuerte" placeholder="Dead">
                        </div>
                        <div class="mb-3">
                            <label for="txt_webOficial" class="form-label">Web Oficial</label>
                            <input type="text" class="form-control" id="txt_webOficial" name="txt_webOficial" placeholder="Web site">
                        </div>
                        <div class="mb-3">
                            <label for="txt_email" class="form-label">Pais Nacimiento</label>
                            <input type="text" class="form-control" id="txt_pais" name="txt_pais" placeholder="Country">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>integrante_id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>fecha_nacimiento</th>
                <th>fecha_muerte</th>
                <th>web_oficial</th>
                <th>pais_nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultado as $fila) {

            ?>
                <tr class="table-active">
                    <td><?php echo $fila['integrante_id'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['apellido'] ?></td>
                    <td><?php echo $fila['fecha_nacimiento'] ?></td>
                    <td><?php echo $fila['fecha_muerte'] ?></td>
                    <td><?php echo $fila['web_oficial'] ?></td>
                    <td><?php echo $fila['pais_nacimiento'] ?></td>
                    <td>
                        <a href="<?=base_url('localizarIntegrante/'.$fila['integrante_id']) ?>"><img src="../public/img/restore.png" alt="img"></a>
                        /
                        <a href="<?= base_url('eliminarIntegrante/'.$fila['integrante_id']) ?>"><img src="../public/img/delete.png" alt=""></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>