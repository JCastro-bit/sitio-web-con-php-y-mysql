<?php include("../template/cabecera.php")?>
<?php 

    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtImagen=(isset($_FILES['txtImagen']['name']))?$_POST['txtImagen']['name']:"";
    $accion=(isset($_POST['txtID']))?$_POST['txtID']:"";
?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos de Libro
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre"
                        placeholder="Escriba el Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Imagen</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Subir imagen">
                </div>
                <div class="btn-group" role="group" aria-label=" ">
                    <button type="submit" name="accion" value="Agregar"class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Modificar"class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar"class="btn btn-info">Cancelar</button>
                </div>

            </form>
        </div>
    </div>
    <br>



</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende PHP</td>
                <td>imgen.jpg</td>
                <td>Seleccionar | Borrar</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include("../template/pie.php")?>