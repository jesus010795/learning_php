<?php
// $localtime = localtime();
// $localtime_assoc = localtime(time(), true);
// print_r($localtime);
// print_r($localtime_assoc);

date_default_timezone_set('America/Mexico_City');


// $semanaSiguiente = time() + (7 * 24 * 60 * 60);
                   // 7 días; 24 horas; 60 minutos; 60 segundos
echo "Hora             " . date("g:i:s a") . "\n";
echo 'Ahora:            '. date('Y-m-d') ."\n";
echo 'Ahora:            '. date('Y-F-d') ."\n";
echo 'Ahora:            '. date('e') ."\n";

// echo 'Semana Siguiente: '. date('Y-m-d', $semanaSiguiente) ."\n";
// o usar strtotime():
// echo 'Semana Siguiente: '. date('Y-m-d', strtotime('+1 week')) ."\n";
?>