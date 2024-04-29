<?php
require 'functions.php';
error_reporting(0);
ini_set("display_errors", 0);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="../css/style_chamada.css" rel="stylesheet">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--<script type="text/javascript" src="speech.js"></script>-->

  <title>Chamada</title>
  <link rel="icon" type="image/x-icon" href="../img/chamada.ico">
</head>

<body id="fundo_chamada">
<script src="functions_scripts.js"></script>

  <div class="conteudo_chamada">
    <div class="row cabecalho_chamada">
      <!--<div class="d-flex justify-content-center"><img src=".\img\Logo_HRN.png" width="500vh"></div>-->
      <H1>HOSPITAL REGIONAL NORTE</H1>
    </div>
    <div class="row chamada">
      
        <div class="paciente" id="paciente"><!--ID faz escrever o nome do paciente na tela de chamada-->
          <?php
          if (isset($_POST["btn_chamada"])) {
            $paciente = $_POST["Nome_Paciente"];
          }
          //echo $paciente;
          ?>
        </div>
        <br>
        <div class="sala">
          <div class="especialidade" id="especialidade"><!--ID faz escrever a especialidade na tela de chamada-->
            <?php
            if (isset($_POST["btn_chamada"])) {
              $especialidade = $_POST["Especialidade"];
            }
            //echo $especialidade;
            ?>
          </div>
          
          <div class="consultorio" id="consultorio"><!--ID faz escrever o consultorio na tela de chamada-->
            <?php
            if (isset($_POST["btn_chamada"])) {
              $consultorio = $_POST["Consultorio"];
            }
            //echo $consultorio;
            ?>
          </div>
        </div>
    </div>
  </div>
  

<div id="rodape">
    <img src="../img/Logo_HRN.png" id="logo_rodape">
    <br>
    Copyrigth - Jailson Sousa - 2024
  </div>


  <?php logUsuario($paciente, $especialidade, $consultorio); ?>

  <script>
    var paciente = '<?php echo $paciente; ?>';
    var especialidade = '<?php echo $especialidade; ?>';
    var consultorio = '<?php echo $consultorio; ?>';
    console.log('Nome do Paciente: ' + paciente);
    console.log('Especialidade ' + especialidade);
    console.log('Consultorio Chamado: ' + consultorio);
  </script>

<?php echo '<script>updateInfo();</script>'; ?><!--Chama a função updateinfor() que está no arquivo externo functions_script.js, essa função faz a escrita na tela de chamada-->

</body>

</html>
