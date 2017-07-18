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
var posLat = "";
var posLong = "";
var latMax = "";
var latMin = "";
var longMax = "";
var longMin = "";
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

function CalculCoordo (crd){
	//Calcul rayon 5 kms	 
		  
		//lat 1° => 111km  donc 5kms représentent 1/111*5 degrés;
		var ratio_lat = 1/111*rayon;
		latMin = crd.latitude - ratio_lat;
		latMax = crd.latitude + ratio_lat;
		console.log("lat : "+latMin+"/"+latMax);
		//long 1° = 5*111*Math.cos(lat_actuelle);
		var ratio_long = rayon/111*Math.cos(crd.latitude);
		longMin = crd.longitude - ratio_long;
		longMax = crd.longitude + ratio_long;
		console.log("long : "+longMin+"/"+longMax);

}


$( document ).delegate("#archive-animaux-map", "pagecreate", function() {

		Geolocalisation();
        CalculCoordo(crd);

});


  }); // end of document ready
  
})(jQuery); // end of jQuery name space
