'use strict';

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
  const url = `https://viacep.com.br/ws/${cep}/json`;
  if (cep) {
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
        .addEventListener('input', pesquisarCep);