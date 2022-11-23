<?php
    require_once(__DIR__.'/TareaDao.php');

    //obtener valores
    $tarea = $_POST['inputTarea'];
    $descripcion = $_POST['inputDesc'];
    $lugar = $_POST['inputLugar'];
    $horarioInicial = $_POST['inputHorarioInicial'];

    //limpiar valores

    //guardar valores
    $tareaDao = new TareaDao();
    $tareaDao -> guardarTarea($tarea, $descripcion, $lugar, $horarioInicial);
?>

<script>
    setTimeout(() => {
        window.open('./index.php');
    }, 2000);
</script>