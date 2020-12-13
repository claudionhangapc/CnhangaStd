/*=========== MENU=====================*/
checkInput = document.getElementById("check");
navMenu = document.getElementById("main-nav");
iconMenu = document.getElementById("icon-menu");


checkInput.addEventListener("change", function(){
  if(checkInput.checked===true){
    navMenu.style.display ="flex";
    iconMenu.setAttribute("class", "fa fa-times");
  }else{
    navMenu.style.display ="none";
    iconMenu.setAttribute("class", "fa fa-bars");
  }
  
});


/*========== Buscando cep de forma automatica====================== */

inputCep = document.getElementById("orcamento-cep");
if(inputCep){
  inputCep.setAttribute("oninput","contaNummberCep(this)");
}

function contaNummberCep(element){
  if(element.value.length===8){
    getCep(element);
    return true;
  }else{
    return false;
  }
}

function getCep(element){
  var caminho=`https://viacep.com.br/ws/${element.value}/json/`;
  requisacao(caminho);  
}

function requisacao(caminho){
    fetch(caminho).then(function(m){
    return m.json();
    }).then(function(response){
      //console.log(response);
      if(response.erro){
        SpanErroCep = document.getElementById("cep-sapn");
        SpanErroCep.innerText="Ops! Cep não encontrado";
        SpanErroCep.style.display="block";
        document.getElementById("orcamento-rua").value= "";
        document.getElementById("orcamento-bairro").value="";
        document.getElementById("orcamento-cidade").value=""
        document.getElementById("orcamento-estado").value ="";
      }else{
        SpanErroCep = document.getElementById("cep-sapn");
        SpanErroCep.innerText="Ops! Cep não encontrado";
        SpanErroCep.style.display="none";

        document.getElementById("orcamento-rua").value= response.logradouro;
        document.getElementById("orcamento-bairro").value=response.bairro;
        document.getElementById("orcamento-cidade").value=response.localidade;
        document.getElementById("orcamento-estado").value =response.uf;
        
      }
    });}

/*========== Validação Formulario ====================== */
function isFill(element){
  if(element.value===""){
    return true;
  }else{
    return false;
  }
}

function displayError(element){
  let elementSpan = element.parentNode.querySelector("span");
  if(isFill(element)){
    elementSpan.innerText = "ops! campo obrigatorio";
    elementSpan.style.display="block";
  }else{
    elementSpan.style.display="none";
  }
}

function displayErrorUsingArrayElement(arrayId){
  for(let i=0;i<arrayId.length;i++){
    elemento = document.getElementById(arrayId[i]);
    displayError(elemento);
  }
}

function validarEmail(element){
  let emailPattern =  /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
  let elementSpan = element.parentNode.querySelector("span");

  if(emailPattern.test(element.value)){
    elementSpan.innerText="Ops! campo obrigatorio";
    elementSpan.style.display="none";
    return true;
  }else{
    elementSpan.innerText="Ops! email invalido";
    elementSpan.style.display="block";
    return false;
  }
      
}

function activeSubmit(allAspan, idForm){
  
  let vericar = true;
  for(let i = 0; i<allAspan.length; i++){
    if(allAspan[i].style.display!=="none"){
      vericar = false;
    }
      }

  if(vericar){
    document.getElementById(idForm).submit();;
    }
}

function displayNoneAllSpan(elementPai){
  if(elementPai){
    let allAspan = elementPai.querySelectorAll("span");
    for(var i = 0; i<allAspan.length; i++){
      if(allAspan[i].innerText===""){
        allAspan[i].style.display="none";
      }   
    }
  }
}

// contatto
var divContatoSpan = document.getElementById("page-contato-conteudo-item-1");
var arrayId=["input-nome","input-email","input-assunto","textarea-mensagem"];
var submitContato = document.getElementById("submit-contato");
displayNoneAllSpan(divContatoSpan);

if(submitContato){
  submitContato.addEventListener("click",function(event){
    event.preventDefault();
    displayErrorUsingArrayElement(arrayId);
    let allAspan = divContatoSpan.querySelectorAll("span");
    
    let conrollSpan = true;
    for(var i = 0; i<allAspan.length; i++){
      if(allAspan[i].style.display==="block"){
        conrollSpan = false;
      }
    }
    if(conrollSpan){
      validarEmail(document.getElementById("input-email"));
    }
    activeSubmit(allAspan,'form-contato');
  });
}

//orçamento


var divOrcamentoLESpan = document.getElementById("page-orcamento-conteudo-item-esquerdo");
displayNoneAllSpan(divOrcamentoLESpan);


var divOrcamentoLDSpan = document.getElementById("page-orcamento-conteudo-item-direito");
displayNoneAllSpan(divOrcamentoLDSpan);

/*
submit-orcamento */

var submitOrcamento = document.getElementById("submit-orcamento");
var arrayIdOrcamento=["orcamento-nome","orcamento-tel","orcamento-email","orcamento-evento","orcamento-data","orcamento-observacao","orcamento-cep","orcamento-rua","orcamento-numero","orcamento-bairro","orcamento-cidade","orcamento-estado"];

if(submitOrcamento){
  submitOrcamento.addEventListener("click",function(event){
    event.preventDefault();
    
    displayErrorUsingArrayElement(arrayIdOrcamento);
    let allAspan =document.querySelector(".page-orcamento-conteudo-item").querySelectorAll("span");

    let conrollSpan = true;
    for(var i = 0; i<allAspan.length; i++){
      if(allAspan[i].style.display==="block"){
        conrollSpan = false;
      }
    }

    if(conrollSpan){
      validarEmail(document.getElementById("orcamento-email"));
    }

    activeSubmit(allAspan,'form-orcamento');
    
  });
}



/*========== Programando os Slides ====================== */

// slide introcução

let currentSlide = 0;

function goPrev(){
  currentSlide--;
  if(currentSlide < 0){
    currentSlide = 2;
  }
  updateMargin();
}

function goNext(){
  currentSlide++;
  if(currentSlide>2){
      currentSlide = 0;
  }
    updateMargin();
  }

function updateMargin(){
  let slideItemWidth = document.querySelector(".introducao-conteudo").clientWidth;
  let newMargin = (currentSlide * slideItemWidth);
  document.querySelector(".introducao-slide").style.marginLeft =`-${newMargin}px`;
}

setInterval(goNext,4000);


// slide utlimos serviço
function slideMaster(n,elementoSpan){
  let elementoPrincipal = elementoSpan.parentElement.parentElement.querySelectorAll('.slider-master');
  let elementoActivo = elementoSpan.parentElement.parentElement.querySelector(".slider-master-ctive");
  elementoActivo.classList.remove("slider-master-ctive");

  elementoPrincipal[n].className += " slider-master-ctive";

  let elementoActivoSpan = elementoSpan.parentElement.parentElement.querySelector(".active-sapn");
  elementoActivoSpan.classList.remove("active-sapn");
  elementoSpan.className += " active-sapn";

}