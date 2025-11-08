function calculaLinha() {
  const tabela = document.getElementById("tabela");
  const linhas = tabela.rows;
  const colunas = linhas[1].cells.length; 
  const qtdAlunos = linhas.length - 2;    

  if (linhas[linhas.length - 1].cells[0].innerText === "Média") return;

  const nova = tabela.insertRow(-1);
  nova.insertCell(0).innerHTML = "<b>Média</b>";

  for (let c = 0; c < colunas; c++) {
    let soma = 0;
    for (let l = 2; l < linhas.length - 1; l++) {
      soma += parseFloat(linhas[l].cells[c].innerText.replace(",", "."));
    }
    nova.insertCell(-1).innerText = (soma / qtdAlunos).toFixed(2);
  }
}

function calculaColuna() {
  const tabela = document.getElementById("tabela");
  const linhas = tabela.rows;
  const colunas = linhas[1].cells.length;

  if (linhas[0].cells[linhas[0].cells.length - 1].innerText === "Média") return;

  linhas[0].insertCell(-1).outerHTML = "<th rowspan='2'>Média</th>";

  for (let l = 2; l < linhas.length; l++) {
    let soma = 0;
    for (let c = 1; c < colunas; c++) {
      soma += parseFloat(linhas[l].cells[c].innerText.replace(",", "."));
    }
    linhas[l].insertCell(-1).innerText = (soma / (colunas - 1)).toFixed(2);
  }
}
