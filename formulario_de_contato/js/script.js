

var contador = 0; // tornando a variavel GOBAL para ser acessivel fora da função

function startTime(){ 
		setInterval(() => contador++, 1000);   //incrementando um segundo ao contador

}

  function endTime(){
     
    var tempo = `O formulário levou  ${contador}  segundos para ser preenchido`; /// chamado de template string
     document.getElementById("hora").value =  tempo;


  }


$(document).ready(function(){// aguardar documento ser carregado
  $("#submit").click(function(event){// executar evento click no botão com id submit
    event.preventDefault();// previnir evento padrão do botão 
    var data = new FormData($("#formularioenvio")[0]); //capturar dados dos inputs do formulário 
    $.ajax({
      url: "https://formspree.io/f/xoqrykay", // ação do chamda do formulário
      data: data, // dados capturados do formulário
      type: 'post', // tipo de envio dos dados  - post, get, 
      processData: false,
      cache: false,
      contentType: false,
      headers: { /// tipo de dados no request 
        'Accept': 'application/json'
    },
      success: function( data ) { // caso seja sucesso 
          alert('email enviado com sucesso!');
      },
      error: function (request, status, error) { // em caso de erros 
          alert(request.responseText);
      }

    });
  });
});
