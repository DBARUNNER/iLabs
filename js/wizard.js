searchVisible = 0;
transparent = true;

$(document).ready(function(){
    /*  Activate the tooltips      */
$('[rel="tooltip"]').tooltip();

    
$('#wizard').bootstrapWizard({
'tabClass': 'nav nav-pills',
'nextSelector': '.btn-next',
'previousSelector': '.btn-previous',
 onInit : function(tab, navigation,index){
 
   //check number of tabs and fill the entire row
   var $total = navigation.find('li').length;
   $width = 100/$total;
   
   $display_width = $(document).width();
   
   if($display_width < 400 && $total > 3){
       $width = 50;
   }
   navigation.find('li').css('width',$width + '%');
},
 onTabClick : function(tab, navigation, index){
    // Disable the posibility to click on tabs
    return false;
},onNext : function(tab, navigation, index) {
      if (index == 1) {
        // Make sure we entered the name
        if (!$('#fname').val()) {
          document.getElementById('error1').innerHTML = "please inter your Firstname..";
          $('#error1').fadeIn();
          return false;
        }
        if (!$('#lname').val()) {
          document.getElementById('error2').innerHTML = "please enter your lastname..";
          $('#error2').show();
          return false;
        }
        var rr = document.myform.tel.value;
        var filte = /^[07]{1}[0-9]{8}/i;
        if (!filte.test(rr)) {
          document.getElementById('error3').innerHTML = "please inter a valid phon number";
          $('#error3').show();
          return false;
        }
        var em = document.myform.email.value;
        var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if (!filter.test(em)) {
          document.getElementById('error4').innerHTML = "please inter a valid email address..";
          $('#error4').show();
          return false;
        }
        if (!$('#job').val()) {
          document.getElementById('error5').innerHTML = "please enter your job..";
          $('#error5').show();
          return false;
        }
        if (!$('#company').val()) {
          document.getElementById('error6').innerHTML = "please enter your company..";
          $('#error6').show();
          return false;
        }
        if (!document.getElementById('lan1').checked && !document.getElementById('lan2').checked && !document.getElementById('lan3').checked) {
          document.getElementById('error7').innerHTML = "please check at least one language";
          return false;
        }
      }

      // Set the name for the next tab
      $('#tab3').html('Hello, ' + $('#name').val());

    }, 
onTabShow: function(tab, navigation, index) {
    var $total = navigation.find('li').length;
var $current = index+1;

var wizard = navigation.closest('.wizard-card');

// If it's the last tab then hide the last button and show the finish instead
if($current >= $total) {
    $(wizard).find('.btn-next').hide();
$(wizard).find('.btn-finish').show();
} else {
    $(wizard).find('.btn-next').show();
$(wizard).find('.btn-finish').hide();
        }
    }
});

// Prepare the preview for profile picture
$("#wizard-picture").change(function(){
    readURL(this);
});


$('[data-toggle="wizard-radio"]').click(function(event){
wizard = $(this).closest('.wizard-card');
wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
$(this).addClass('active');
$(wizard).find('[type="radio"]').removeAttr('checked');
$(this).find('[type="radio"]').attr('checked','true');
});

$height = $(document).height();
$('.set-full-height').css('height',$height);

//functions for demo purpose
    
  
});


 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    
$(document).ready(function(){
    $('#fname').click(function  () {
      $('#error1').fadeOut();
    });
    $('#lname').click(function  () {
      $('#error2').hide();
    });
    $('#tel').click(function  () {
      $('#error3').hide();
    });
    $('#email').click(function  () {
      $('#error4').hide();
    });
    $('#job').click(function  () {
      $('#error5').hide();
    });
    $('#job').click(function  () {
      $('#error5').hide();
    });
    $('#company').click(function  () {
      $('#error6').hide();
    });
    
    $('#lan1').click(function  () {
      $('#error7').hide();
    });
    $('#lan2').click(function  () {
      $('#error7').hide();
    });
    
    $('#lan3').click(function  () {
      $('#error7').hide();
    });
    
    $('#lan4').click(function  () {
      $('#error7').hide();
    });
    
    
});











