var contador = 0; // tornando a variavel GOBAL para ser acessivel fora da função

function startTime(){ 
		setInterval(() => contador++, 1000);   //incrementando um segundo ao contador

}

   

  function endTime(){
     
    var tempo = "O formulário levou " + contador + " segundos para ser preenchido";
     document.getElementById("hora").value =  tempo;
  }