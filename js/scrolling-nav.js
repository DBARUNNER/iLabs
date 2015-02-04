//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
	if ($(".navbar").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
	$('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop : $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
});
$(document).ready(function() {
	$("#noe").click(function() {
		$("#ioe").show("slow");
		$("#itwo").hide("slow");
		$("#ithree").hide("slow");
		$("#ione").hide("slow");
	});
	$("#none").click(function() {
		$("#ione").show("slow");
		$("#itwo").hide("slow");
		$("#ithree").hide("slow");
		$("#ioe").hide("slow");
	});
	$("#ntwo").click(function() {
		$("#itwo").show("slow");
		$("#ione").hide("slow");
		$("#ithree").hide("slow");
		$("#ioe").hide("slow");
	});
	$("#nthree").click(function() {
		$("#ithree").show("slow");
		$("#itwo").hide("slow");
		$("#ione").hide("slow");
		$("#ioe").hide("slow");
	});
});

$(document).ready(function() {
	$("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
		e.preventDefault();
		$(this).siblings('a.active').removeClass("active");
		$(this).addClass("active");
		var index = $(this).index();
		$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
	});
});



// about section
$(document).ready(function(){
		$("a#showAn1").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div1').removeClass('hidden').addClass('show');

		});
		$("a#showAn2").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div2').removeClass('hidden').addClass('show');

		});
		$("a#showAn3").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div3').removeClass('hidden').addClass('show');

		});
		$("a#showAn4").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div4').removeClass('hidden').addClass('show');

		});
		$("a#showAn5").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div5').removeClass('hidden').addClass('show');

		});
		$("a#showAn6").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div6').removeClass('hidden').addClass('show');

		});
		$("a#showAn7").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div7').removeClass('hidden').addClass('show');

		});
		$("a#showAn8").click(function(event){
			event.preventDefault();
			$(this).hide();
			$('#div8').removeClass('hidden').addClass('show');

		});
	});
		
		$(document).ready(function() {
			var clock;

			clock = $('.kabul').FlipClock({
		        clockFace: 'DailyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('The clock has stopped!')
		        	}
		        }
		    });
				    
		    clock.setTime(220880);
		    clock.setCountdown(true);
		    clock.start();

		});
		$(document).ready(function() {
			var clock;

			clock = $('.herat').FlipClock({
		        clockFace: 'DailyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('The clock has stopped!')
		        	}
		        }
		    });
				    
		    clock.setTime(220880);
		    clock.setCountdown(true);
		    clock.start();

		});

		$(function(){
$('a[title]').tooltip();
});