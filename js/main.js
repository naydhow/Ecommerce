// header e footer das páginas

// carregaDocumento("./utils/header.php", "#header");
// // carregaDocumento("./utils/footer.php", "#footerzao");

// function carregaDocumento(arquivo, target)
// {
//     var el = document.querySelector(target);

//     //Se o elemento não existir então não requisita
//     if (!el) return;

//     var xhr = new XMLHttpRequest();
//     xhr.open("GET", arquivo, true);
//     xhr.onreadystatechange = function(){
//           if (xhr.readyState == 4 && xhr.status >= 200 && xhr.status < 300){
//               el.innerHTML = xhr.responseText;
//           }
//     };

//     xhr.send();
// }

// verificador de number
function onlynumber(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  //var regex = /^[0-9.,]+$/;
  var regex = /^[0-9.]+$/;
  if( !regex.test(key) ) {
     theEvent.returnValue = false;
     if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

/* abre e fecha o carrinho com o clicar no icone: carrinho e x */
const nav = document.querySelector('#header nav')
const toggle = document.querySelectorAll('nav .toggle')

for (const element of toggle) {
  element.addEventListener('click', function () {
    nav.classList.toggle('show')
  })
}

/* abre e fecha o perfil do usuário com o clicar no icone: user e x */
const taggle = document.querySelectorAll('nav .taggle')
for (const element of taggle) {
  element.addEventListener('click', function () {
    nav.classList.toggle('new')
  })
}

/* abre as configurações do usuário adm com o passar do mouse no icone: engrenagem */
const oggle = document.querySelectorAll('nav .oggle')
const conf = document.querySelectorAll('nav .configuration')
for (const element of oggle) {
  element.addEventListener('mouseover', function () {
    nav.classList.add('settings')
  setTimeout(function() {
    nav.classList.remove('settings');
    }, 5000);
  })
}

// Botão voltar ao topo
const backToTopButton = document.querySelector('.back-to-top')

if(backToTopButton)
{
  function backToTop() {
    if (window.scrollY >= 560) {
      backToTopButton.classList.add('show')
    } else {
      backToTopButton.classList.remove('show')
    }
  }
  
  window.addEventListener('scroll', function(){
    backToTop()
  })
}

// Atualizar a quantidade de produtos
function mais(num){
  var atual = document.getElementById(num).value;
  var novo = atual - (-1); //Evitando Concatenacoes
  document.getElementById(num).value = novo;
  atualizaDados('true');
}

function menos(num){
  var atual = document.getElementById(num).value;
  if(atual > 0) { //evita números negativos
    var novo = atual - 1;
    document.getElementById(num).value = novo;
    atualizaDados('true');
  }
}

function atualizaDados(bool) {  
    var form = document.getElementById("IdForm");
    setTimeout(function() {
      window.location.reload(1);
    }, 180000);
    if(bool == 'true')
    {
      form.submit();
    }
  //   document.getElementById("IdLink").addEventListener("click", function () {
  //   form.submit();
  // });
}

const senha = document.getElementById('password')
const olho = document.getElementById('eye')

if(senha)
{
  senha.addEventListener('input', function () {
    if(senha.value != '')
    {
      olho.style.opacity = 1
      olho.style.visibility = 'visible'
    }
    else
    {
      olho.style.opacity = 0
      olho.style.visibility = 'hidden'
    }
  })

  olho.addEventListener('click', function() {
    if(senha.type == 'text')
    {
      senha.type = 'password';
      olho.setAttribute('src', '../img/img_eye.svg')
    }
    else
    {
      senha.type = 'text';
      olho.setAttribute('src', '../img/img_eyeclose.svg')
    }
  });
}

const opc = document.querySelectorAll('.opcoes')
const div = document.querySelector('.resumo_venda')

for (const element of opc) {
  element.addEventListener('click', function () {
    div.classList.toggle('open')
  })
}

if(document.getElementById('press'))
{
  document.getElementById('press').addEventListener('input', function(){
    setTimeout(function() {
      atualizaDados('true');
    }, 1000);
  })
}

// iframe

// var div = document.getElementById("iframers");

// if(div)
// {
//   div.onload = function() {
//     div.style.height =
//       div.contentWindow.document.body.scrollHeight + 'px';
// }
// }

//atualizar página por tempo
// setTimeout(function() {
//   window.location.reload(1);
// }, 180000);