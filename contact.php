<!DOCTYPE html>
<html lang="en">
<?php require_once "template-parts/head.php"; ?>
<body>

<?php
	require_once "template-parts/pages-parallax.php"; 
	require_once "template-parts/navbar.php"; 
?>

<section id="contact" class="position-relative overflow-hidden">
	<div class="container-fluid">
	  <div class="row">
         <div class="col-md-12 p-0">
			
      <div id="map"></div>
      <script type="text/javascript">
          function initMap(){
    // var location = {lat: 14.468549, lng: 120.980587 }; //object data type
    var location = {lat: 25.1212825, lng: 55.3983622};
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: location,
      mapTypeId: google.maps.MapTypeId.HYBRID,
    });

    var popContent = 'Ammon Constructing L.L.C <br> +971 4 3306633';

    var info = new google.maps.InfoWindow({
      content: popContent
    });

    var marker = new google.maps.Marker({
      position: location,
      map: map,
      title: 'Notions Building Contracting LLC | DUBAI'
    });

    marker.addListener('mouseover', function(){
      info.open(map, marker);
    });

    }
   </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrzBRd-5Zwq-ABwR28gRis9rqqNUwdN9E&callback=initMap" type="text/javascript"></script>
		</div>
		<!-- end of google map -->
      </div>
      
      <div class="row">
       <div class="col-md-12 bg-light lightBackgroundMode p-lg-4 p-md-4 p-3"> 
        <h4 class="fs-4 text-change-color text-lg-start text-md-start text-center animate__animated animate__flash animate__slow fw-bolder text-primary animate__infinite infinite">For Inquiries Contact Us</h4>
       </div>
      </div>

    </div>
</section>

<?php
  require_once "template-parts/scrollTop.php";
	require_once "template-parts/footer.php"; 
	require_once "template-parts/bottom.php"; 
?>
</body>
</html>