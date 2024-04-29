function updateInfo() {
    // Faz uma requisição AJAX para obter informações de um arquivo externo
    var xhr_p = new XMLHttpRequest();
    var xhr_e = new XMLHttpRequest();
    var xhr_c = new XMLHttpRequest();
    xhr_p.open("GET", "../informacoes/infor_p.txt", true); //arquivo do Paciente
    xhr_e.open("GET", "../informacoes/infor_e.txt", true); //arquivo da Especialidade
    xhr_c.open("GET", "../informacoes/infor_c.txt", true); //arquivo do Consultorio

    xhr_p.onload = function() {
      if (xhr_p.status === 200) {
        var infoData = xhr_p.responseText;
        document.getElementById("paciente").textContent = infoData;
      }
    };

    xhr_e.onload = function() {
      if (xhr_e.status === 200) {
        var infoData = xhr_e.responseText;
        document.getElementById("especialidade").textContent = infoData;
      }
    };

    xhr_c.onload = function() {
      if (xhr_c.status === 200) {
        var infoData = xhr_c.responseText;
        document.getElementById("consultorio").textContent = infoData;
      }
    };

    xhr_p.send();
    xhr_e.send();
    xhr_c.send();
  }