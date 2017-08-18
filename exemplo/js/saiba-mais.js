var postAcao = document.querySelector('.post-acao')
var postConteudo = document.querySelector('.post-conteudo')

postAcao.addEventListener('click', function() {
  postConteudo.classList.toggle('post-conteudo_exibirTexto')
})
