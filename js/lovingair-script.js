$(document).ready( function(){
    // remove p tags from images
    $('p > img').unwrap();
/*
    $phoneLinks = $( 'a[href^="tel:"]' );
    $isAdPage = $( '.header__phone a' ).data( 'isadphone' );

    if( $isAdPage ) {
        $adNumber = $( '.header__phone a' ).data( 'adnumber' );
        console.log( $adNumber );
        // $newNumber = $( '.header__phone a' ).text();
        createCookie( 'adPhone', $adNumber, 45 );
    }*/

    // if( readCookie( 'adPhone' ) ) {
    //     $phoneLinks.each(function(){
    //         $( this ).text( readCookie( 'adPhone' ) );
    //         $( this ).attr( 'href', 'tel:' + readCookie( 'adPhone' ) );
    //     });
    // }
    //$('a[href^="tel:"]').each(function(){
    //    $(this).text(adPhone);
    //    $(this).attr('href', 'tel:' + adPhone);
    //});

    $('.print-coupon').on('click', function(){
      $couponImg = $(this).data('coupon_img');
      printCoupon($couponImg);
    });
} );

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

function couponForPrint(source) {
  return "<html><head><script>function step1(){\n" +
    "setTimeout('step2()', 10);}\n" +
    "function step2(){window.print();window.close();}\n" +
    "</scri" + "pt></head><body onload='step1()'>\n" +
    "<img src='" + source + "' /></body></html>";
}

function printCoupon(source) {
  pageLink = "about:blank";
  var pwa = window.open(pageLink, "_new");
  pwa.document.open();
  pwa.document.write(couponForPrint(source));
  pwa.document.close();
}