<?php
    $archivo = fopen("tmptxt/archivo.txt", "w+");
    $contenido = "Total de tareas:\n ";
    for($i=0;$i < 1000000; $i++)
    {
        $digit = rand(0, 6);
    }
    $contenido.= $digit."\n \n \n \n";

    $contenido.= "Tiempo que toma cada tarea: "."\n \n";
    for($i=0;$i < 6; $i++)
    {
        
        $start_time = microtime(true);
        $tiempo_final = microtime(true);
        $end_time = microtime(true);
        $duration = $end_time - $start_time;

        $contenido.= $i.",".$duration."\n";
    }
    fwrite($archivo, PHP_EOL ."$contenido");
    fclose($archivo);

?>