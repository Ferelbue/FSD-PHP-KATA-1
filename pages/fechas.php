<?php

function calculoTiempo($fecha1, $fecha2){
        $date1 = (strtotime($fecha1) / (60*60*24));
        $date2 = (strtotime($fecha2) / (60*60*24));

        if($date1 < $date2){
            $resta =  $date2 - $date1;
        } else
        $resta =  $date1 - $date2;

        print_r("Entre el día $fecha1 y el día $fecha2 hay $resta dias.");

    return $resta;

}

calculoTiempo('2024-4-19','2024-5-13');