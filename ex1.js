$(document).ready(function(){
    $("div").html($("div:has(.special)")).css("border", "2px solid ye");
   $(":contains('REPLACE_ME')");
  setInterval(function() {
    for(var i=1;i<9;i++){
        $('div#square').animate({left: '250px'});
        $('div#square').css({"position":"absolute"});
        }
    })


  });