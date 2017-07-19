(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  //  tooglePhoneInput (function(){
      

   // });
  $('#test5').on('click',function(){
     if(document.getElementById('test5').checked){
          $('#icon_telephone').prop('disabled',false).prop("required",true);
          $('#icon_telephone').val('');

          //console.log('hello');
      }
      else{
        $('#icon_telephone').prop('disabled',true).prop("required",false);
		$('#icon_telephone').val('');
       // console.log('bye');
      }
    });
 
////////

//////Géolocalisation


// VARIABLES
var posLat = "";
var posLong = "";
var latMax = "50.472787";
var latMin = "50.470010";
var longMax = "4.470686";
var longMin = "4.464793";
var crd = "";

//GEOLOC
function Geolocalisation(){
		var optionsGeo = {
	  	enableHighAccuracy: true,
	  	timeout: 12000, //durée avant affichage d'erreur
	  	maximumAge: 600 //Durée de mise en cache de la position
		  
		}

	navigator.geolocation.watchPosition(successGeo, errorGeo, optionsGeo);
}
function successGeo(pos) {
			//alert("ok");
		  crd = pos.coords;

		  console.log('Latitude : ' + crd.latitude);
		  console.log('Longitude: ' + crd.longitude);
		  posLat = crd.latitude;
		  posLong = crd.longitude;
          CalculCoordo(crd);

		}

function errorGeo(err) {
		  console.warn('Geoloc : ERROR(' + err.code + '): ' + err.message);
		  alert("Erreur de Géolocalisation : " + err.code + " "+err.message);
		};

function CalculCoordo (){

var ratioLong = longMax-longMin;
var ratioLat = latMax-latMin;
var longStep1 = longMin-posLong;
var longStep2 = longStep1/ratioLong;
var longResult = longStep2*100;
var latStep1 = posLat-latMin;
var latStep2 = latStep1/ratioLat;
var latResult = latStep2*100;


console.log(ratioLong);
console.log('longStep1 : '+longStep1);
console.log('longStep2 : '+longStep2);
console.log('loatStep2 : '+latStep2);
console.log('llatStep1 : '+latStep1);
console.log('top : '+latResult);
console.log('left : '+longResult);


$('#self-position').css({'top': '-'+latResult+'%', 'left': longResult+'%'});

}
/*
function ChooseYourAnimal (){
	if($('.option_animal_map').val() !=''){
		
	}
}
*/

Geolocalisation();


  }); // end of document ready
  
})(jQuery); // end of jQuery name space
