<?php
    require_once(__DIR__.'/MiConexion.php');

    class TareaDao {
        public function guardarTarea($tarea, $descripcion, $lugar, $horarioInicial){
            $conexion = null;
            try{
                $conexion = new MiConexion();
                $query = $conexion -> prepare('INSERT INTO agenda.tarea (nombre, descripcion, lugar, horario_inicial, status) VALUES (
                                                :nombre, :descripcion, :lugar, :horario_inicial, 1)');
                $data = array(':nombre' => $tarea, ':descripcion' => $descripcion, ':lugar' => $lugar, ':horario_inicial' => $horarioInicial);
                $isInserted = $query -> execute($data);
                //avisar al usuario
                if($isInserted){
                    echo 'Tarea insertada correctamente';
                }else{
                    echo 'No se inserto tarea';
                }
    
            }catch(PDOException $e){
                echo 'Error';
                echo $e -> getMessage();
            }finally{
                $conexion = null;
            }
        }

        // mostrar tareas

        public function mostrarTareas(){
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
        }
    }
?>
