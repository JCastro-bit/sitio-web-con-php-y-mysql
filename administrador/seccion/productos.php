<?php include("../template/cabecera.php")?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos de Libro
        </div>

        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="Escriba el ID">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Escriba el Nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Imagen</label>
            <input type="file" class="form-control" name="txtID" id="txtID" placeholder="Subir imagen">
        </div>
        <div class="btn-group" role="group" aria-label=" ">
            <button type="button" class="btn btn-success">Agregar</button>
            <button type="button" class="btn btn-warning">Modificar</button>
            <button type="button" class="btn btn-info">Cancelar</button>
        </div>
        
    </form>
        </div>
    </div>
    <br>
    


</div>
<div class="col-md-7">
    crt
</div>

<?php include("../template/pie.php")?>