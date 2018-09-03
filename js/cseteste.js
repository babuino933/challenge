function Cseteste() {
  ////////////////////////////////
  //pEsquerda, pDireita, pCima, pBaixo, pPosDestinoX, pPosDestinoY
  this.csetest = [];
  var testecse = new Teste(3893,3944,1237,1343);
  this.csetest.push(testecse);

}
function funcaocse(jogador){
  for (var i in csetest){
    var avccse = csetest[i];
    if ((jogador.posX > avccse.esquerda && jogador.posX < avccse.direita) && (jogador.posY > avccse.cima && jogador.posY < avccse.baixo)) {
      document.getElementById("cse").style.visibility = "visible";
      document.getElementById("csebd").style.visibility = "visible";
      jogador.posX = 3396;
      jogador.posY = 1462;
    }
  }

}

function Teste(pEsquerda, pDireita, pCima, pBaixo){
  this.esquerda = pEsquerda,
  this.direita = pDireita,
  this.cima = pCima,
  this.baixo = pBaixo

}
