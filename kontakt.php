<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
	<link rel="stylesheet" href="style.css">
    <style>

	      	ul{
			list-style: none outside none;
		    padding-left: 0;
		}
		.gallery li {
			position: relative;
			z-index: 1;
			cursor: pointer;
			background-color: rgb(0,0,0);
			height:163px;
			width:163px;
			margin-right:16px;
			margin-bottom:15px;
			float:left;
			overflow:hidden;
		}
		.gallery li a {
			overflow: hidden;
			height: 100%;
		}
		.gallery li a img {
			width:163px; 
			height:163px;
			-webkit-transition: all 0.8s ease-in-out;
			transition: all 0.8s ease-in-out;
		}
		
		.gallery li a img:hover {
			-webkit-transform: scale(1.5) ;
			transform: scale(1.5) ;
			opacity: 0.3;
		}
    </style>
  </head>
  <body>
  
 
  
  
  
  
  
    <div id="map"></div>
	
	
	
	
    <script>

function initMap() {
  var myLatLng = {lat: 40.8404553, lng: -73.9033178};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,

  scaleControl: false,
  scrollwheel: false,
  disableDoubleClickZoom: true,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
	
    title: 'Hello World!'
  });
}

    </script>
	
		<input type="checkbox" id="menu" />
<div class="menu">
        <label for="menu" class="menu-trigger" >Menu</label>
  <label for="menu" class="menu-bar" >
    <ul>
      <li id="one"><a href="index.html">Strona główna</a>
      </li>
      <li id="two"><a href="o-mnie.html">O mnie</a>
      </li>
	  <li id="three"><div class="mega"><a href="galeria.html">Galeria</a></div>
      </li>
	  	  <li id="four"><a href="kontakt.php">Kontakt</a>
      </li>
      <li id="five">
        <label for="menu">wyłącz</label>
      </li>
    </ul>

</div>
      <script type="text/javascript">
	var element = document.getElementById("one");
	element.classList.add("super");

	var element = document.getElementById("two");
	element.classList.add("super2");
	
		var element = document.getElementById("three");
	element.classList.add("super3");
	
			var element = document.getElementById("four");
	element.classList.add("super4");

	var element = document.getElementById("five");
	element.classList.add("super5");
</script>		
	
			<div class="galeria2">

			<h1 class="kontakt-h1">Kontakt</h1>	
				<p class="kontakt-p">Skontaktuj się ze mną aby podzielić się wrażeniami na temat moich prac, jestem również otwarty na wszelakie
oferty wspołpracy. pozdrawiam.

			</p>

				<h4>Send Us Mail</h4><br/>
				
				
	<?php
if ($_GET[msg_sent]=='true' ) {
    echo '<div>Your message has been sent!</div>';
}elseif ($_GET[msg_sent]=='false') {
    echo '<div>An error occurred sending your message.</div>';
}else{
?>			
    			
    			    			<form method="post" action="kontakt1.php">
			<label>Name</label>
			<input name="name" placeholder="Type Here">
	
			<label>Email</label>
			<input name="email" type="email" placeholder="Type Here">
					
			<label>Message</label>
			<textarea name="message" placeholder="Type Here"></textarea>
			
			<label>*What is 2+2? (Anti-spam)</label>
			<input name="human" placeholder="Type Here">
					
			<input id="submit" name="submit" type="submit" value="Submit">
			
		</form>
		
		<?php } ?>
		
				
			<footer> © 2013 Keres Theme</footer>

		</div>	

	
	
	
	
	
	
	
	
	
	
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>

		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
  </body>
</html>