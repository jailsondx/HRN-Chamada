
            var formData = document.getElementById('#txtInput');
            //var txtInput = document.querySelector('#txtInput');
            //var txtInput = 'TESTE CODIGO';
            //var txtInput = '<?php echo $paciente; ?>';
            var txtInput;
            console.log("Nome do Paciente: " + txtInput);
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
