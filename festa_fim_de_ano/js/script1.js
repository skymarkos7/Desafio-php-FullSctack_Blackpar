$(document).ready(function(){// aguardar documento ser carregado
    $("#enviar").click(function(event){// executar evento click no botão com id submit
      event.preventDefault();// previnir evento padrão do botão 
      var data = new FormData($("#formComments")[0]); //capturar dados dos inputs do formulário 
      $.ajax({
        url: "ajax/envia_comentariol.php", // ação do chamda do formulário
        data: data, // dados capturados do formulário
        type: 'post', // tipo de envio dos dados  - post, get, 
        processData: false,
        cache: false,
        contentType: false,
        success: function( data ) { // caso seja sucesso 
            alert('email enviado com sucesso!');
        },
        error: function (request, status, error) { // em caso de erros 
            alert(request.responseText);
        }
  
      });
    });
  });
  
  