<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="speech_old.js"></script>

    <title>Document</title>
</head>
<body>

<div hidden>
        Select Voice: <select id='voiceList'></select> <br><br>
        </div>


<div class="container">
    <div class="row cabecalho">
        <div class = "flex-item logo">Inserir a Logo</div>
    </div>
    <div class="row conteudo">
        <div class = "flex-item infor">
            <div class="paciente"><?php
            if (isset($_POST["btn_chamada"])){
                $paciente = $_POST["Nome_Paciente"];
            }
            echo $paciente;
            ?>
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

</div>

<script type="text/javascript">

            var txtInput = '<?php echo $paciente; ?>';
            console.log("Nome do Paciente: " + txtInput);
            var txtRadio = '<?php echo $consultorio; ?>';
            console.log("Consultorio: " + txtRadio);
            var voiceList = document.querySelector('#voiceList');
            var btnSpeak = document.querySelector('#btnSpeak');
            var synth = window.speechSynthesis;
            var voices = [];
    
            PopulateVoices();
            if(speechSynthesis !== undefined){
                speechSynthesis.onvoiceschanged = PopulateVoices;
            }
    
            //btnSpeak.addEventListener('click', ()=> {
                window.addEventListener("load", ()=> {
                var toSpeak = new SpeechSynthesisUtterance(txtInput);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice)=>{
                    if(voice.name === selectedVoiceName){
                        toSpeak.voice = voice;
                    }
                });
                synth.speak(toSpeak);
            });
    
            function PopulateVoices(){
                voices = synth.getVoices();
                var selectedIndex = voiceList.selectedIndex < 0 ? 4 : voiceList.selectedIndex;
                voiceList.innerHTML = '';
                voices.forEach((voice)=>{
                    var listItem = document.createElement('option');
                    listItem.textContent = voice.name;
                    listItem.setAttribute('data-lang', voice.lang);
                    listItem.setAttribute('data-name', voice.name);
                    voiceList.appendChild(listItem);
                });
    
                voiceList.selectedIndex = selectedIndex;
            }
            </script>


</body>
</html>