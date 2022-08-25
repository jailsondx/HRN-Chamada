<?php
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="style.css" rel="stylesheet">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--<script type="text/javascript" src="speech.js"></script>-->

    <title>Chamada</title>
</head>
<body id="fundo2">

<div class="conteudo2">
    <div class="row cabecalho2">
        <!--<div class = "d-flex justify-content-center"><img src=".\img\Logo_HRN.png" width="500vh"></div>-->
    </div>
    <div class="row chamada">
        <div class = "flex-item infor">
            <div class="paciente"><?php
            if (isset($_POST["btn_chamada"])){
                $paciente = $_POST["Nome_Paciente"];
            }
            echo $paciente;
            ?></div>
        <br>
        <div class="especialidade"><?php
            if (isset($_POST["btn_chamada"])){
                $especialidade = $_POST["Especialidade"];
            }
            echo $especialidade;
            ?></div>
        <br>
        <div class="consultorio"><?php
            if (isset($_POST["btn_chamada"])){
                $consultorio = $_POST["Consultorio"];
            }
            echo $consultorio;
            ?></div>
        </div>
    </div>
    </div>
    <div class="row rodape">
                <div class = "d-flex justify-content-center">Copyrigth - Jailson Sousa - 2022</div>
            </div>
</div>
<?php logUsuario($paciente, $especialidade, $consultorio); ?>
<script>
    var paciente = '<?php echo $paciente; ?>';
    var paciente = '<?php echo $especialidade; ?>';
    var consultorio = '<?php echo $consultorio; ?>';
    console.log('Nome do Paciente: ' + paciente);
    console.log('Especialidade ' + consultorio);
    console.log('Consultorio Chamado: ' + consultorio);
</script>

</body>
</html>