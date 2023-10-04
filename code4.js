$(function(){    
    var par = $('p');
    var plus = $('.plus');
    var minus = $('.minus');
    var reset = $('.reset');
    
    var no = 0;
    var fontsize =16;

    plus.click( function() {
        no++;
        fontsize++;
        par.text(no);
        par.css( 'font-size', fontsize + 'px');
      });
      minus.click( function() {
        no--;
        fontsize--;
        par.text(no);
        par.css('font-size', fontsize + 'px');
      });
    
      reset.click( function() {
        no = 0;
        fontsize = 16;
        par.text(no);
        par.css('font-size', fontsize + 'px');
      });
    



});
/**
 * jquery return array
 */