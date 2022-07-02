$(document).ready(function(){// aguardar documento ser carregado




    $("#enviar1").click(function(event){// executar evento click no botão com id submit
     // event.preventDefault();// previnir evento padrão do botão 
      var data = new FormData($("#formComments1")[0]); //capturar dados dos inputs do formulário 
      $.ajax({
        url: "ajax/envia_comentariol.php", // ação do chamda do formulário
        data: data, // dados capturados do formulário
        type: 'post', // tipo de envio dos dados  - post, get, 
        processData: false,
        cache: false,
        contentType: false,
        success: function( data ) { // caso seja sucesso 
            alert('Obrigado por seu comentário!');
            document.location.reload(true);
        },
        error: function (request, status, error) { // em caso de erros 
            alert(request.responseText);
        }
  
      });
    });



    $("#enviar2").click(function(event){// executar evento click no botão com id submit
      // event.preventDefault();// previnir evento padrão do botão 
       var data = new FormData($("#formComments2")[0]); //capturar dados dos inputs do formulário 
       $.ajax({
         url: "ajax/envia_comentariol.php", // ação do chamada do formulário
         data: data, // dados capturados do formulário
         type: 'post', // tipo de envio dos dados  - post, get, 
         processData: false,
         cache: false,
         contentType: false,
         success: function( data ) { // caso seja sucesso 
             alert('Obrigado por seu comentário!');
             document.location.reload(true);
         },
         error: function (request, status, error) { // em caso de erros 
             alert(request.responseText);
         }
   
       });
     });
 

     $("#enviar3").click(function(event){// executar evento click no botão com id submit
      // event.preventDefault();// previnir evento padrão do botão 
       var data = new FormData($("#formComments3")[0]); //capturar dados dos inputs do formulário 
       $.ajax({
         url: "ajax/envia_comentariol.php", // ação do chamda do formulário
         data: data, // dados capturados do formulário
         type: 'post', // tipo de envio dos dados  - post, get, 
         processData: false,
         cache: false,
         contentType: false,
         success: function( data ) { // caso seja sucesso 
             alert('Obrigado por seu comentário!');
             document.location.reload(true);
         },
         error: function (request, status, error) { // em caso de erros 
             alert(request.responseText);
         }
   
       });
     });
 






    
  });



