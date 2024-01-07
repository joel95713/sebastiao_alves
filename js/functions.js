function voltarAtras() {
  window.history.back();
}

document.addEventListener("DOMContentLoaded", function () {
  let caixaBranca = document.querySelector("#caixa_branca");
  caixaBranca.scrollIntoView();
});


function abrirLivros() {
  console.log("aaa")
  let menuLivros = document.querySelector("#menu-livros");

  setTimeout(function () {
    menuLivros.click();
  }, 800);
}

document.addEventListener('DOMContentLoaded', function () {
  let mensagem = document.getElementById('exibirAlerta').getAttribute('data-mensagem');
  if (mensagem !== '') {
    let divAlerta = document.getElementById('exibirAlerta');
    divAlerta.innerHTML = mensagem;
    divAlerta.style.color = mensagem.includes('sucesso') ? 'green' : 'red';
  }
});

function sair() {
  if (confirm('Deseja mesmo sair ?')) {
    window.location.href = '../backoffice/index.php?pagina=sair';
  }
}

function openFileManager() {
  let win = window.open('../filemanager/tinyfilemanager.php', 'tinyfilemanager', 'width=800,height=600');
  win.focus();
}


function toggleMenu() {
  let toggleButton = document.getElementById("toggleButton");
  let imgElement = toggleButton.querySelector("img");

  // Verifique se a barra de navegação está aberta ou fechada e altere a imagem
  if (toggleButton.getAttribute("aria-expanded") === "false") {
    imgElement.src = "images/menu.svg";
  } else {
    imgElement.src = "images/fechar.svg";
  }
}

function mostrarTextoCompleto() {
  document.getElementById('textoincompleto').style.display = 'none';
  document.getElementById('textoCompleto').style.display = 'block';
  document.getElementById("vermais").style.display = "none";
}


