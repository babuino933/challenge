function teleport() {
////////////////////////////////
//pEsquerda, pDireita, pCima, pBaixo, pPosDestinoX, pPosDestinoY
 this.teleportaArray = [];
 var teleportcorredorprova = new Porta(2088,2100,1123,1187,1126,672);
 this.teleportaArray.push(teleportcorredorprova);
/////////////////////////////////

 var teleportprovacorredor = new Porta(1166,1182,618,739,2110,1150);
 this.teleportaArray.push(teleportprovacorredor);
////////////////////////////////
}
function teleportajogador(jogador){
  for (var i in teleportaArray){
      var porta = teleportaArray[i];
      if ((jogador.posX > porta.esquerda && jogador.posX < porta.direita) && (jogador.posY > porta.cima && jogador.posY < porta.baixo)) {
        jogador.posX = porta.posDestinoX;
        jogador.posY = porta.posDestinoY;
      }
  }

}

function Porta(pEsquerda, pDireita, pCima, pBaixo, pPosDestinoX, pPosDestinoY){
  this.esquerda = pEsquerda,
  this.direita = pDireita,
  this.cima = pCima,
  this.baixo = pBaixo,
  this.posDestinoX = pPosDestinoX,
  this.posDestinoY = pPosDestinoY
}
