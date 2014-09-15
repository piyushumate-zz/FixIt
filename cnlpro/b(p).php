

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maps</title><!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="search.css">  
 
  
  <script type="text/javascript" src="modal.js"></script>
</head>
<body>
<?php
session_start();
?>
    <div id="map-canvas"></div>
	<div class="container">

		<form action="javascript:void(0);" method="get">
			
			<fieldset>
				
				<ul class="toolbar clearfix">

				
					<li><input type="search" id="search" placeholder="Search"></li>
					<li><button type="submit" id="btn-search"><span class="fontawesome-search"></span></button></li>
					<li><button type="submit" id="btn-search" onclick="window.location='../Electricians.php'"><span class="fontawesome-th-list"></span></button></li>
          
				</ul>
                   <div id="suggest">
                   </div>
			</fieldset>

		</form>
  



  
    <style>
     .unorganised{
	list-style: none;
	width:205px;
	background:#3598db ;
    color: #fff;
	height:auto;
	margin:0px;
	text-align:left;         
	position:fixed;
	/*padding: 0em 1em;*/
     }
     .hover{
     	width:205px;
     	margin:0px;
     	/*padding: 1em 1em;*/
     	background:#2a80b9;
     	border-color: #2a80b9;
     }


   
    </style>
	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	( function() {
    
	$('#btn-search').on('click', function(e) {

		e.preventDefault();
		$('#search').animate({width: 'toggle'}).focus();
       /* $("#suggest ul").remove();*/
        $('#suggest ul').animate({width:'toggle'}).focus();
	});

    } () );
     
var map;
  
function initialize() {
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(18.5241852,73.8646889),
    
    disableDefaultUI: true,
    styles: [{'featureType':'water','stylers':[{'color':'#021019'}]},{'featureType':'landscape','stylers':[{'color':'#08304b'}]},{'featureType':'poi','elementType':'geometry','stylers':[{'color':'#0c4152'},{'lightness':5}]},{'featureType':'road.highway','elementType':'geometry.fill','stylers':[{'color':'#000000'}]},{'featureType':'road.highway','elementType':'geometry.stroke','stylers':[{'color':'#0b434f'},{'lightness':25}]},{'featureType':'road.arterial','elementType':'geometry.fill','stylers':[{'color':'#000000'}]},{'featureType':'road.arterial','elementType':'geometry.stroke','stylers':[{'color':'#0b3d51'},{'lightness':16}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#000000'}]},{'elementType':'labels.text.fill','stylers':[{'color':'#ffffff'}]},{'elementType':'labels.text.stroke','stylers':[{'color':'#000000'},{'lightness':13}]},{'featureType':'transit','stylers':[{'color':'#146474'}]},{'featureType':'administrative','elementType':'geometry.fill','stylers':[{'color':'#000000'}]},{'featureType':'administrative','elementType':'geometry.stroke','stylers':[{'color':'#144b53'},{'lightness':14},{'weight':1.4}]}]

  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  var contentstring;
  var item;
var infowindow=new google.maps.InfoWindow({
                   content:contentstring
                });
var infowindow2=new google.maps.InfoWindow({
                   content:contentstring
                });
$.post("store2.php",{},function(data,status){//map.setCenter(new google.maps.LatLng(37.4419, -122.1419));
                //var objJSON = eval("(function(){return " + data + ";})()");
               var i=0,myicon,j=0;
               var flag=0;
              var marker1=new Array();
              //var infowindow;
               data = $.parseJSON(data);
               $.each(data, function(i, item) {
                 if(item.category=='carpenter')
                  {myicon='carpenter.png'}
                 else if(item.category=='electrician')
                  {myicon='electrician.png'}
                 else if(item.category=='plumber')
                  {myicon='plumber.png'}
             
                   
                  marker1[item.id] = new google.maps.Marker({
                   position:new google.maps.LatLng(item.latitude,item.longitude),
                   map: map,
                   draggable:false,
                   icon:myicon
                   });
                 
                 google.maps.event.addListener(marker1[item.id], 'mouseover', function() {
                     if(infowindow2.getMap())
                     {}
                    else
                    {
                     infowindow.setContent(item.name);
                     if(item.category=='carpenter'){marker1[item.id].setIcon("carpenter2.png");}
                      else if (item.category=='plumber') {marker1[item.id].setIcon("plumber2.png");}
                        else if(item.category=='electrician'){marker1[item.id].setIcon("electrician2.png");}
                         
                     infowindow.open(map,marker1[item.id]);
                   }
                 });
                 

                 
                 google.maps.event.addListener(marker1[item.id], 'mouseout', function() {
                  //alert(j);
                  infowindow.close();
                  if(item.category=='carpenter'){marker1[item.id].setIcon("carpenter.png");}
                      else if (item.category=='plumber') {marker1[item.id].setIcon("plumber.png");}
                        else if(item.category=='electrician'){marker1[item.id].setIcon("electrician.png");}
                       
                 });

                 google.maps.event.addListener(marker1[item.id], 'click', function() {
                  //alert(j);
                  
                  infowindow.close();
                  //alert("bitch");
                //<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  //document.write(" <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">");
                  //$('#myModal').modal('show')
                   
                 // alert("ass");
                  //$( "#dialog" ).dialog();
                
                   infowindow2.setContent('<form role="form" action="email4.php" method="post">To: <input type="text" name="to" value='+item.email+' /><br>From: <input type="text" name="from"/><br>Subject: <input type="text" name="subject"/><br>Message: <input type="text" name="message"/><br><br><br><input type="submit" value="Submit"></form>');
                    //document.getElementById("mytext").value = item.id;
                   
                  //infowindow2.setContent('<input style="vertical-align:bottom;overflow:visible; font-size:1em; display:inline;  margin:0; padding:0; border:0; border-bottom:1px solid blue; color:blue; cursor:pointer;" name="Submit" type="submit" value="Submit">')
                  infowindow2.open(map,marker1[item.id]);
                  if(item.category=='carpenter'){marker1[item.id].setIcon("carpenter.png");}
                      else if (item.category=='plumber') {marker1[item.id].setIcon("plumber.png");}
                        else if(item.category=='electrician'){marker1[item.id].setIcon("electrician.png");}
                       
                 });
                 
                  


                  });
              
               //alert(data);
              

                   
                   });



}

google.maps.event.addDomListener(window, 'load', initialize);


  



    $("#search").keyup(function()
    {
    	$("#suggest").html("");
       var input= $("#search").val();
       input=$.trim(input);
          if(input)
          {
                  $.ajax({url: "ajax.php",data:"input="+input})
                   .done(function( msg ) 
                  {
              	     $("#suggest").html(msg);
              	     $("#suggest ul li").mouseover(function(){
              		 $("#suggest ul li").removeClass("hover");
              		 $(this).addClass("hover");
              	   });
              	$("#suggest ul li").click(function(){

              		var value = $(this).html();
                 // map.setCenter(new google.maps.LatLng(37.4419, -122.1419));
              		$("#search").val(value);
              		$("#suggest ul").remove(); 
                  $.post("store.php",{value:value},function(data,status){//map.setCenter(new google.maps.LatLng(37.4419, -122.1419));
                  var objJSON = eval("(function(){return " + data + ";})()");
                  map.setCenter(new google.maps.LatLng(objJSON[1].latitude,objJSON[1].longitude));
                  map.setZoom(15);
                   var marker = new google.maps.Marker({
                   position:new google.maps.LatLng(objJSON[1].latitude,objJSON[1].longitude),
                   map: map,
                
                   });

                   
                   

                  });
                  
                
              	});

          });   
    
       
      }


    });
  

  

	</script>
	
   


</body>

</html>