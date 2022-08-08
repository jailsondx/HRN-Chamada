<?php    
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
date_default_timezone_set('America/Fortaleza');

function logUsuario($paciente, $consultorio){ 
        //Cria o log se der erro na pasta der acesso chmod 777
        $log_diario = date("d-m-Y");
        $data = date("d-m-Y H-i-s");
        $ip = getIp(); 
        $msg = "[".$data."]\nPaciente: " . $paciente . "\nConsultorio: " . $consultorio . "\n\n"; 
        //$fp = fopen("/logs/IP_USUARIO_".$data.".txt",'a+');
        $fp = fopen("./logs/LOG_CHAMADA_".$log_diario.".txt",'a+'); 
        fwrite($fp,$msg); 
        fclose($fp); 
    }

    function getIp() {

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
    
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
    
        return $ip;
    }

?>