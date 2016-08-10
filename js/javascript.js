window.onload = function () {
	// count = 0;
	$('.button').on('click', function(e) {
		e.preventDefault();
		$('.collapse').not($(this).siblings('.collapse')).removeClass('in');
		
		if (!$(".collapse").hasClass("in")) {
		
			$('.slider').stop().animate({width:"130%", left:"-225px"})
		
		} else {
		
			$('.slider').css({"left":"auto"})
			$('.slider').css({"width":"auto"})
		}
		count++;
	})
}

	function load_modal(){
	$('#myModal').modal('show');
	}




<!-- //google map-->


var myCenter=new google.maps.LatLng(51.508742,-0.120850);

function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:5,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(9);
  map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);





