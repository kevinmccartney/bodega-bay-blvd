function geofarmImgSizer() {
    var imgBox = document.querySelectorAll( '.geofarm-custom-img' );

    for( i = 0; i < imgBox.length; i++ ) {
      imgBox[i].style.height = ( imgBox[i].offsetWidth * 0.75 ) + 'px';
    }
}

function gridImgSizer() {
  var ctaImg = document.querySelectorAll( '.ch-item' );

  for( i = 0; i < ctaImg.length; i++ ) {
    ctaImg[i].style.height = ( ctaImg[i].offsetWidth * 0.75 ) + 'px';
  }
}

window.onload = function() {
  gridImgSizer();
  geofarmImgSizer();
}
window.addEventListener( 'resize', gridImgSizer );
window.addEventListener( 'resize', geofarmImgSizer );