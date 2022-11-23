
<?php
    // view fragments template fragments
    require_once(__DIR__.'/header.php');
?>
    <div class="container">
    <h2>Agregar tarea</h2>
<form action="./guardarTarea.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputTarea">Tarea: </label>
            <input id="inputTarea" name="inputTarea" type="text" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="inputDesc">Descripcion: </label>
            <textarea name="inputDesc" id="inputDesc" cols="30" rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputLugar">Lugar: </label>
            <input id="inputLugar" name="inputLugar" type="text" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="inputHorarioInicial">Horario inicial: </label>
            <input id="inputHorarioInicial" name="inputHorarioInicial" type="time" class="form-control">
        </div>
    </div>
    <br>
    <div class="form-row">
    <button type="submit" class="btn btn-success">Guardar tarea</button>
    </div>
</form>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
</body>
</html>