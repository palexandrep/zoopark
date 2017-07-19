(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  //  tooglePhoneInput (function(){
      

   // });
  $('#test5').on('click',function(){
     if(document.getElementById('test5').checked){
          $('#icon_telephone').prop('disabled',false);
          $('#icon_telephone').val('');

          //console.log('hello');
      }
      else{
        $('#icon_telephone').prop('disabled',true);
       // console.log('bye');
      }
    });
 
////////

//////Géolocalisation


// VARIABLES
//var rayon = 10;
//var etat = "offline";
//var idGare = "";

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
	navigator.geolocation.getCurrentPosition(successGeo, errorGeo, optionsGeo);
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

function CalculCoordo (lat, long ){

var ratioLong = longMax-longMin;
var ratoiLat = latMin-latMax;
var longStep1 = posLong-longMin;
var longStep2 = longStep1/ratioLong;
var long = longStep2*100;
var latStep1 = posLat-latMin;
var latStep2 = latStep1/ratioLat;
var lat = latStep2*100;

$('#self-position').css({'top': lat+'%', 'left': long+'%'});
}


Geolocalisation();
CalculCoordo(crd);


  }); // end of document ready
  
})(jQuery); // end of jQuery name space
