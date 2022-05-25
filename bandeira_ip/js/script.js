function searchData(){

    var ip = $("#ip").val();

    $.ajax({
        url: `http://ip-api.com/json/${ip}`, // ação do chamda do formulário
        type: 'post', // tipo de envio dos dados  - post, get, 
        processData: false,
        cache: false,
        contentType: false,
        success: function( data ) { // caso seja sucesso 
            // console.log(data);
            let city = data.city;
            let nameRegion = data.region;
           // console.log(nameRegion);

            document.querySelector("#region").innerText = city;
            document.querySelector("#nameRegion").innerText = nameRegion;

            $.ajax({
                url: `https://kgsearch.googleapis.com/v1/entities:search?query=${city}&key=AIzaSyATGmUNDSIptFLj5LZ3mTgegvG3O7t45C0&limit=1&indent=True&languages=pt`, // ação do chamda do formulário
                type: 'get', // tipo de envio dos dados  - post, get, 
                processData: false,
                cache: false,
                contentType: false,
                success: function( dataGoogle ) { // caso seja sucesso 

                    

                    if(dataGoogle.itemListElement[0].result.image != undefined){
                        let image = dataGoogle.itemListElement[0].result.image.contentUrl;
                        document.querySelector("#flag").src = image;

                    }else{
                        alert("Nenhuma imagem correspondente encontrata!");
                    }
                   // console.log(dataGoogle);
                   // console.log(dataGoogle.itemListElement[0].result.image.contentUrl);
                    
        
                    //alert('Obrigado por seu comentário!');
                    //document.location.reload(true);
                },
                error: function (request, status, error) { // em caso de erros 
                    alert("Nenhuma imagem correspondente encontrata!");
                }
          
              });

           // alert('Obrigado por seu comentário!');
            //document.location.reload(true);
        },
        error: function (request, status, error) { // em caso de erros 
            alert("Ip incorrerto");
        }
  
      });
    };

