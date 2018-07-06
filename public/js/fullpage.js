
var $window = $(window);

var isLoaded = false;
var dots = true;

$(document).ready(function() {
   
    
    $window.trigger('scroll');

    
    $('#fullpage').addClass('hide');
    $('.divMenu').addClass('hide');
    $('.img-letters-container').addClass('hide');
    
    $('.loadingDiv').height(window.innerHeight);
    
    
    loading();
    toggleDots();
    
    fullPage();

});

$window.on('load', function(){
    loaded();
    
})



    function loading(){
        
        var lContainerWidth = ($('.load-letters-container').width()/window.innerWidth) * 100;
        var lContainerHeight = ($('.load-letters-container').height()/window.innerHeight) * 100;
        
        
        if(isLoaded==false){
            $('.load-letters-container').animate({'left': Math.floor((Math.random() * (95-lContainerWidth)) + 1) + '%' , 'bottom': Math.floor((Math.random() * (95-lContainerHeight)) + 1) + '%' }, 1500, function(){
              setInterval(loading(), 2100);
            });
        }else{
            
            dots=false;
            
            var mainPicHeight;
            if(window.innerWidth<1500){
                
                 mainPicHeight = window.innerWidth/2.24;
            }else{
                 mainPicHeight = 667;
            }

            var $fivPercent = mainPicHeight * 0.06;
            
            $(".slideRelative").height(mainPicHeight);
            $(".img-letters-container").height(mainPicHeight/2);
            $(".img-letters-container").css("top", mainPicHeight/2 - $fivPercent);
            
            $('.load-letters-container').fadeOut('slow');
            
            $('.loadingDiv').addClass('hide');
            $('#fullpage').removeClass('hide');
            $('.divMenu').removeClass('hide');
            $('.img-letters-container').removeClass('hide');
        }
    }
    
    function loaded(){
        isLoaded = true;
    }
    
    function toggleDots(){
        if(dots == true)
        {
            $('.dot1').fadeIn(500, function(){
                $('.dot2').fadeIn(500, function(){
                    $('.dot3').fadeIn(500, function(){
                        $('.dot3').fadeOut(500);
                        $('.dot2').fadeOut(500);
                        $('.dot1').fadeOut(500, function(){
                             setInterval(toggleDots(), 2500);
                        });
                    });
                });
            });
            
        }else{
            $('.dot3').fadeOut(500);
            $('.dot2').fadeOut(1000);
            $('.dot1').fadeOut(1500);
        }
    }

    function fullPage(){
        $('#fullpage').fullpage({
            sectionSelector: '.section',
            slideSelector: '.slide',
            anchors: ['home', 'about', 'events', 'danzas', 'contact'],
            menu: '#myMenu',
                // more options here 
            // sectionsColor: ['rgba(217, 217, 217, 0.4)', 'rgba(217, 217, 217, 0.8)', '#f2f2f2', 'rgba(217, 217, 217, 0.9)'],
            css3:true,
            hybrid:true,
            autoScrolling:false,
            fitToSection: false,
            navigation:false,
            showActiveTooltip:false,
            // slidesNavigation: true,
            // interlockedSlides: true,
            
            afterLoad: function(anchorLink, index){
                // var loadedSection = $(this);
    
                //using anchorLink

                 if(anchorLink == 'events'){
                    $('.head2').addClass('in-view');
                    $('.pink').addClass('opacity');
                    
                 }
                 if(anchorLink == 'danzas'){
                    $('.head4').addClass('in-view');
                    $('.pink').addClass('opacity');
                    
                 }
            },
            
            onSlideLeave: function(anchorLink, index, slideIndex, direction){
				
				var leavingSlide = $(this);

            }
        });
    }
    




$window.resize(function(){
    
        var $mainPicHeight = $(".mainPic").height();
        var $fivPercent = $mainPicHeight * 0.06;
    
        $(".slideRelative").height($mainPicHeight);
        $(".img-letters-container").height($mainPicHeight/2);
        $(".img-letters-container").css("top", $mainPicHeight/2 - $fivPercent);
        
        
        $('.loadingDiv').height(window.innerHeight);
        
});

// jQuery("#main-picture").on('load', function(){
//     picLoaded=true;
//     if( $(window).scrollTop() == 0 ){
//          $(".divMenu").css("background-color", "rgba(89, 89, 89, 0.6");
//          console.log($(window).scrollTop());
//     }
//     console.log($(window).scrollTop());
// });

$window.on('scroll', function() {
    
        var height = $(window).scrollTop();

        if($(window).scrollTop() == 0){
             $(".divMenu").css("background-color", "transparent");
             $(".myMenuHolder").addClass("menuFont");
        }
        else if(height  > $(".slideRelative").height()- $('#myMenu').height()) {
            $(".divMenu").css("background-color", "rgba(89, 89, 89, 0.9");
            $(".myMenuHolder").removeClass("menuFont");
        }else{
             $(".divMenu").css("background-color", "transparent");
             $(".myMenuHolder").addClass("menuFont");
        }
        
        var $fivPercent = $(".mainPic").height() * 0.25;
        
        
        if(isLoaded == true){
            if($(window).scrollTop() == 0){
                $(".img-letters-container").css("display", "block");
            }else if($(window).scrollTop() > $fivPercent){
                $(".img-letters-container").css("display", "none");
            }else{
                $(".img-letters-container").css("display", "block");
            }
        }
            
        
    
});

function toggleVisibility(id, mButton, lButton){
    var e = document.getElementById(id);
    var m = document.getElementById(mButton);
    var l = document.getElementById(lButton);
    
    if(e.style.display=='block'){
        e.style.display = "none";
        m.style.display="inline-block";
        l.style.display="none";
    }
    else{
        e.style.display = "block";
        m.style.display ="none";
        l.style.display="inline-block";
    }
}




$(document).on('click', '#homeid', function(){
  $.fn.fullpage.moveTo(1);
});

$(document).on('click', '#aboutusid', function(){
  $.fn.fullpage.moveTo(2);
});
$(document).on('click', '#eventsid', function(){
  $.fn.fullpage.moveTo(3);
});
$(document).on('click', '#danzasid', function(){
  $.fn.fullpage.moveTo(4);
});
$(document).on('click', '#contactusid', function(){
  $.fn.fullpage.moveTo(5);
});



