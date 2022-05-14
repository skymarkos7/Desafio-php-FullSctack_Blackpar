var contador = 0; // tornando a variavel GOBAL para ser acessivel fora da função

function startTime(){ 
		setInterval(() => contador++, 1000);   //incrementando um segundo ao contador

}

  function endTime(){
     
    var tempo = "O formulário levou " + contador + " segundos para ser preenchido";
     document.getElementById("hora").value =  tempo;


  }







// ----------  jQUERY DO FORMSPREE para o envio de email ---------------------------
    var form = document.getElementById("formularioenvio");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Email enviado com sucesso!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! Existe algum problema"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! Ocorreu um erro na submissão"
      });
    }
    form.addEventListener("submit", handleSubmit)

