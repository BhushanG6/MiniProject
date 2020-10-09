$(document).ready(function() {
            $('#mycarousel').carousel({interval:1000});
            $('#carouselbtn').click(function(){
                if($('#carouselbtn').children('span').hasClass('fa-pause')){
                     $('#mycarousel').carousel('pause');
                     $('#carouselbtn').children('span').removeClass('fa-pause');
                     $('#carouselbtn').children('span').addClass('fa-play');
                }
                else{
                     $('#mycarousel').carousel('cycle');
                     $('#carouselbtn').children('span').removeClass('fa-play');
                     $('#carouselbtn').children('span').addClass('fa-pause');
                }
               
            });
            
            
        });