var cadastro = document.querySelector('.cadastro')
var tamanho = cadastro.querySelector('.tamanho')
var output = document.getElementsByTagName('output').



atualizaOutput()

tamanho.oninput = atualizaOutput

function atualizaOutput() {
  output.value = tamanho.value
}

// tamanho.onchange = function () {
//   alert(tamanho.value)
//   alert('Alterar valor do output e deixar o valor igual ao valor do input do type range')
// }
