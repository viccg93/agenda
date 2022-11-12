<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lista de tareas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mostrar tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agregar tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eliminar tareas</a>
                    </li>
                </ul>
            </div>
        </div>
  
    </nav>

    <h2>La lista de tareas de Abi</h2>

    <ul>
        <?php

        class MiConexion extends PDO{
            private $cadenaConexion = "mysql:host=db;dbname=agenda";
            public function __construct(){
                parent::__construct($this -> cadenaConexion, 'root', 'admin');
                $this->query("SET NAMES 'utf8'");
			    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }

                //conexion a BD

                $conexion = null;
                try{
                    $conexion = new MiConexion();
                    $query = $conexion -> prepare('SELECT * FROM agenda.tarea where status = 1');
                    $query -> execute();
                    $registros = $query -> fetchAll(PDO::FETCH_ASSOC);
                    $numRegistros = $query -> rowCount();
        
                    if($numRegistros > 0){
                        foreach($registros as $registro){
                            echo '<li>'.$registro["nombre"].'</li>';
                        }
                    }else{
                        echo 'No hay registros';
                    }
        
                }catch(PDOException $e){
                    echo 'Error';
                    echo $e -> getMessage();
                }finally{
                    $conexion = null;
                }
        ?>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>