<?php    
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
date_default_timezone_set('America/Fortaleza');

//Função que escreve as informações do paciente em arquivos separados na pasta "informacoes", esses arquivos são usados pelo arq. pacienteamb.php para escrever os dados na tela de chamada
function chamada_txt($paciente, $especialidade, $consultorio){ 
        //Cria o log se der erro na pasta der acesso chmod 777
        //$fp = fopen("/logs/IP_USUARIO_".$data.".txt",'a+');
        $msg = $paciente;
        //Com modo 'w'(Abrir um arquivo texto para gravação. Se o arquivo não existir, ele será criado. Se já existir, o conteúdo anterior será destruído.)
        $fp = fopen("../informacoes/infor_p.txt",'w');
        fwrite($fp, $msg);
        fclose($fp);

        $msg = $especialidade;
        $fp = fopen("../informacoes/infor_e.txt",'w');
        fwrite($fp, $msg);
        fclose($fp); 

        $msg = $consultorio;
        $fp = fopen("../informacoes/infor_c.txt",'w');
        fwrite($fp, $msg);
        fclose($fp); 
    }

//função que escreve o log
function logUsuario($paciente, $especialidade,$consultorio){ 
        //Cria o log se der erro na pasta der acesso chmod 777
        $log_diario = date("d-m-Y");
        $data = date("d-m-Y H-i-s");
        $ip = getIp(); 
        $msg = "[".$data."]\nIP: " . $ip . "\nPaciente: " . $paciente . "\nEspecialidade: " . $especialidade . "\nConsultorio: " . $consultorio . "\n\n"; 
        //$fp = fopen("/logs/IP_USUARIO_".$data.".txt",'a+');
        $fp = fopen("../logs/LOG_CHAMADA_".$log_diario.".txt",'a+'); 
        fwrite($fp,$msg); 
        fclose($fp);
        chamada_txt($paciente, $especialidade, $consultorio);
    }

//função que pega o IP do computador
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
