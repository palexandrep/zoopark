(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  //  tooglePhoneInput (function(){
      

   // });
    $('#test5').on('click',function(){
      if($('#test5').prop('checked',true)){
          $('#icon_telephone').prop('disabled',false);
          $('#icon_telephone').val('');

          //console.log('hello');
      }
      else{
        $('#icon_telephone').prop('disabled',true);
       // console.log('bye');
      }
    });
 
  }); // end of document ready
  
})(jQuery); // end of jQuery name space
