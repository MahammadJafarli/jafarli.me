$(document).ready(function(){
	$(window).scroll(function(event) {
		var animate= $(window).scrollTop();
		console.log(animate);

		if(animate>80){
			$("#about .about").css({
                transform: 'translateX(0px)',
                transition:'1s ease',
			});
            $("#about .about_title").css({
                transform: 'translateX(0px)',
                transition:'1s ease',
            });
            $("#about .about_text").css({
                transform: 'translateX(0px)',
                transition:'1s ease',
            });
            $("#about button").css({
                transform: 'translateX(0px)',
                transition:'1s ease',
            });
		}

		if (animate>220) {
			$(".navbar_change").css({
        background:'black',
        width:'100%',
        height:'70px',
        position:'fixed',
        top:'0px',

			});
		}
		if (animate==0) {
			$(".navbar_change").css({
				background:'transparent',
			});
			$(".move_top").css({
				display:'none',
			});
		}

		if(animate>100){
            $(".move_top").css({
                display:'block',
        });
		}

        var skillsInput = $('#skills').attr('value');
        var skills = skillsInput.split(' ');

        if (animate>660){
			for(i in skills){
                var percent = $(skills[i]).attr('aria-valuenow');
				$(skills[i]).css({
                    width:percent+'%',
                    transition:'.5s',
                });
			}
		}
		if(animate>2000){
			$(".hear_title").css({
				transform: 'translateX(0px)',
	      		transition:'1s',
			});
			$(".hear_text").css({
				transform: 'translateX(0px)',
	      transition:'1s',
			});
			$(".hear_btn").css({
				transform: 'translatey(0px)',
	      transition:'1s',
			});
		}else{
            $(".hear_title").css({
                transform: 'translateX(-1000px)',
                transition:'1s',
            });
            $(".hear_text").css({
                transform: 'translateX(1190px)',
                transition:'1s',
            });
            $(".hear_btn").css({
                transform: 'translatey(110px)',
                transition:'1s',
            });
		}
	});
});


$(function(){
  $.scrollIt();
});

$(document).ready(function() {
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });

