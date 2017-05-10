jQuery(function($) {
  /* ==============================================
     SMOOTH SCROLL       
  =============================================== */
  $('a[href*="#"]:not([href="#"])').click(function(e) {
    e.preventDefault();
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  /* ==============================================
     CLIENT SLIDER
  =============================================== */
  $('#clients-slider, #clients1-slider').owlCarousel({
      item:3,
      loop:true,
      margin:30,
      nav:true,
      dots:false,
      navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:false,
              dots:true,
          },
          767:{
              items:1,                    
          },
          1000:{
              items:3
          }
      }
  });
});  

/* ==============================================
   GOOGLE MAP
=============================================== */
(function(){
  var map;

  map = new GMaps({
    el: '#map',
    lat: 51.52450981777342,
    lng: -0.0742587517559068,
    scrollwheel:false,
    zoom: 16,
    zoomControl : true,
    panControl : false,
    streetViewControl : false,
    mapTypeControl: false,
    overviewMapControl: false,
    clickable: false
  });
  var loc = window.location;
  var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
  var path = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
  var image = path+'sites/all/themes/geeklabel/cdn/images/mapicon.png';

  var marker = map.addMarker({
    lat: 51.52450981777342,
    lng: -0.0742587517559068,
    icon: image,
    animation: google.maps.Animation.DROP,
    verticalAlign: 'bottom',
    horizontalAlign: 'center',
    backgroundColor: '#d3cfcf',            
  });          

  var contentString = '<div id="content" class="text-left">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 id="firstHeading" class="firstHeading">Geek Label</h4>'+
      '<div id="bodyContent">'+
      '<p>4th Floor<br/>27 - 33 Bethnal Green Road<br/>Shoreditch<br/>London<br/>E1 6LA </p>'+              
      '</div>'+
      '</div>';          

  var infowindow = new google.maps.InfoWindow({
    content: contentString, 
    
  });  

  marker.addListener('click', function() {
  infowindow.open(map, marker);
});


  var styles = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e3e3e3"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b4b4b4"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e3e3e3"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]; 

  map.addStyle({
    styledMapName:"Styled Map",
    styles: styles,
    mapTypeId: "map_style"  
  });

  map.setStyle("map_style");
}()); 