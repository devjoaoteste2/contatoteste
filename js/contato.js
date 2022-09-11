// Formata o Contato

const tel = document.getElementById('phone')

tel.addEventListener('keypress', (e) => mascaraTelefone(e.target.value))
tel.addEventListener('change', (e) => mascaraTelefone(e.target.value))

const mascaraTelefone = (valor) => {
    valor = valor.replace(/\D/g, '')
    valor = valor.replace(/^(\d{2})(\d)/g, '($1) $2')
    valor = valor.replace(/(\d)(\d{4})$/, '$1-$2')
    tel.value = valor
}


function checkInputs(inputs) {

  var filled = true;
  
  inputs.forEach(function(input) {
      
    if(input.value === "") {
        filled = false;
    }
  
  });
  
  return filled;
  
}

var inputs = document.querySelectorAll("input");
var button = document.querySelector("#button");

inputs.forEach(function(input) {
    
  input.addEventListener("keyup", function() {

    if(checkInputs(inputs)) {
      button.disabled = false;
    } else {
      button.disabled = true;
    }

  });

});


const buttons = document.querySelector("#button"),
    toast = document.querySelector(".toast")
    closeIcon = document.querySelector(".close"),
    progress = document.querySelector(".progress");

    let timer1, timer2;

    buttons.addEventListener("click", () => {
      toast.classList.add("active");
      progress.classList.add("active");

      timer1 = setTimeout(() => {
          toast.classList.remove("active");
      }, 5000); //1s = 1000 milliseconds

      timer2 = setTimeout(() => {
        progress.classList.remove("active");
      }, 5300);
    });
    
    closeIcon.addEventListener("click", () => {
      toast.classList.remove("active");
      
      setTimeout(() => {
        progress.classList.remove("active");
      }, 300);

      clearTimeout(timer1);
      clearTimeout(timer2);
    });

const form =document.getElementById("form");
form.addEventListener('submit', handleSubmit);
var submitTimer;

function handleSubmit(event) {
event.preventDefault();
submitTimer = setTimeout(() => {
  this.submit();
}, 6000);
};


function mostrarDiv(event) {
  if(!event){
    document.getElementById("container").style.visibility = "visible";
  }else{
    document.getElementById("container").style.visibility = "visible";
  }
}


//Contact Form in PHP
const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");
form.onsubmit = (e)=>{
  e.preventDefault();
  statusTxt.style.color = "#0D6EFD";
  statusTxt.style.display = "block";
  statusTxt.innerText = "Sending your message...";
  form.classList.add("disabled");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "message.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState == 4 && xhr.status == 200){
      let response = xhr.response;
      if(response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1){
        statusTxt.style.color = "red";
      }else{
        form.reset();
        setTimeout(()=>{
          statusTxt.style.display = "none";
        }, 3000);
      }
      statusTxt.innerText = response;
      form.classList.remove("disabled");
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}

 
// // * Volta a Tela Inicial

// function retornar() {
//     window.location = "../index.html"
// }
