'use strict';

function mascara_cep() {
	if(cep.value.length == 5) {
		cep.value += "-"
  }
}

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

const limparFormulario = (endereco) => {
  document.getElementById('endereco').value = '';
  // document.getElementById('bairro').value = '';
  document.getElementById('cidade').value = '';
  document.getElementById('estado').value = '';
}

const preencherFormulario = (endereco) => {
  document.getElementById('endereco').value = endereco.logradouro + ", " + endereco.bairro;
  // document.getElementById('bairro').value = endereco.bairro;
  document.getElementById('cidade').value = endereco.localidade;
  document.getElementById('estado').value = endereco.uf;
}

const pesquisarCep = async() => {
  limparFormulario();

  const cep = document.getElementById('cep').value;
  const url = `http://viacep.com.br/ws/${cep}/json/`;
  if (cepValido(cep)) {
      const dados = await fetch(url);
      const endereco = await dados.json();
      if (endereco.hasOwnProperty('error')) {
          document.getElementById('endereco').value = 'CEP não encontrado!';
      }else {
        preencherFormulario(endereco);
      }
  }else {
    document.getElementById('endereco').value = 'CEP incorreto!';
  }
}

document.getElementById('cep')
        .addEventListener('focusout', pesquisarCep);