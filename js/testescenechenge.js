function testescenechange(r1, r2) {
  //r1 -> bloqueado
  //r2 -> parede
  //catetos
  var catX = r1.centerX() - r2.centerX();
  var catY = r1.centerY() - r2.centerY();

  //soma das metades
  var sumHalfWidth = r1.halfWidth() + r2.halfWidth();
  var sumHalfHeight = r1.halfHeight() + r2.halfHeight();

  if(Math.abs(catX) < sumHalfWidth && Math.abs(catY) < sumHalfHeight){


  }

}
