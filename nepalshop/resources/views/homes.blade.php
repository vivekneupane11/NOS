<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	<meta charset="UTF-8" />
	    
<link href="https://fastcdn.org/Animate.css/3.4.0/animate.min.css" rel="stylesheet">
 
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="keywords" content="carousel, jquery, responsive, fluid, elastic, resize, thumbnail, slider" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/elastic/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/elastic/elastislide.css" />
		<link rel="stylesheet" type="text/css" href="css/elastic/custom.css" />
		<link rel="stylesheet" href="http://icono-49d6.kxcdn.com/icono.min.css">
		<script src="js/modernizr.custom.17475.js"></script>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

		<meta name="description" content="Simple Multi-Item Slider: Category slider with CSS animations" />
		<meta name="keywords" content="jquery plugin, item slider, categories, apple slider, css animation" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
           <link href="css/home.css" rel="stylesheet">
           <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function() {
        
	jQuery('.carousel[data-type="multi"] .item').each(function(){
		var next = jQuery(this).next();
		if (!next.length) {
			next = jQuery(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo(jQuery(this));
	  
		for (var i=0;i<2;i++) {
			next=next.next();
			if (!next.length) {
				next = jQuery(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
		}
	});
        
});
</script>
  
  
<style>
.carousel-control.left, .carousel-control.right {
	background-image:none;

}

.img-responsive{
	width:100%;
	height:auto;
}

@media (min-width: 992px ) {
	.carousel-inner .active.left {
		left: -25%;
	}
	.carousel-inner .next {
		left:  25%;
	}
	.carousel-inner .prev {
		left: -25%;
	}
}

@media (min-width: 768px) and (max-width: 991px ) {
	.carousel-inner .active.left {
		left: -33.3%;
	}
	.carousel-inner .next {
		left:  33.3%;
	}
	.carousel-inner .prev {
		left: -33.3%;
	}
	.active > div:first-child {
		display:block;
	}
	.active > div:first-child + div {
		display:block;
	}
	.active > div:last-child {
		display:none;
	}
}

@media (max-width: 767px) {
	.carousel-inner .active.left {
		left: -100%;
	}
	.carousel-inner .next {
		left:  100%;
	}
	.carousel-inner .prev {
		left: -100%;
	}
	.active > div {
		display:none;
	}
	.active > div:first-child {
		display:block;
	}
}
</style>
        <style>   #myImgs {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
} </style>
<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

    #myImgs {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
	</head>
	<body>
		<div class="container">	
		  <div class="row">
    <div class="col-md-12" >  
      <div class="banner-back">
    
       <div class="banner animated fadeInDown">
       <img src = "../image/a.png" class="left-image">
          <br>
           <center>
            <a href="{{route('home')}}">HOME</a>
           <a href="{{route('sunglass')}}">SUNGLASSES</a>
           <a href="{{route('watch')}}">WATCHES</a>
             <a href="{{route('bag')}}">BAGS</a>
               <a href="{{route('locket')}}">LOCKETS</a>
                 <a href="{{route('purse')}}">SHOES</a>
                     
                   <a href="{{route('wallet')}}">WALLETS</a>
                
           </center>
                       
 
       
           <p style="margin-bottom:1px; text-align:center; font-size:12px;"><span style="margin:7px;" class="glyphicon glyphicon-phone-alt"></span>Contact Us: 9876543334 </p>             
        </div>
         </div>
      </div>
      
  </div>
  <div class="row">
      
      <div class="col-md-12">   
  
			<div class="main">
          @if(Session::has('status'))
          <ul>
              <center>    <li class="alert alert-danger">  {{Session::get('status')}} <span class="glyphicon glyphicon-heart"> </li> </center>
                
                </ul>
          
          @endif
			  <center> <h3 class="tour">Featured Products   </h3>  </center> 
			  <br>
				<div id="mi-slider" class="mi-slider">
			
					<ul>
						@foreach($xfeaturedwatches as $featwatch)
						{{--xfeaturedshoes array banera aako thiyo tehi vayera [] use garna paryo hai --}}
						<li><a href="{{route('order',['id'=> $featwatch['id']])}}"><img src="{{$featwatch['productimage']}}" alt="img01"><h5>{{$featwatch['productname']}} </h5>
						<br> <h4>{{$featwatch['productprice']}} </h4>
						</a></li>
						@endforeach
					</ul>
					<ul>
						@foreach($xfeaturedsunglasses as $featass)
				
						<li><a href="{{route('order',['id'=> $featass['id']])}}"><img src="{{$featass['productimage']}}" alt="img01"><h4>{{$featass['productname']}} </h4>	<br> <h4>{{$featass['productprice']}} </h4>
						</a></li>
						@endforeach
					</ul>
							<ul>
				  @foreach($xfeaturedbag as $featba)
				
						<li><a href="{{route('order',['id'=> $featba['id']])}}"><img src="{{$featba['productimage']}}" alt="img01"><h4>{{$featba['productname']}} </h4>	<br> <h4>{{$featba['productprice']}} </h4>
						</a></li>
						@endforeach
					</ul>
					<ul>
	                     @foreach($xfeaturedlockets as $featwa)
				
						<li><a href="{{route('order',['id'=> $featwa['id']])}}"><img src="{{$featwa['productimage']}}" alt="img01"><h4>{{$featwa['productname']}} </h4>	<br> <h4>{{$featwa['productprice']}} </h4>
						</a></li>
						@endforeach
					</ul>
			
					<nav>
						<a href="#">Watches</a>
						<a href="#">Sunglasses</a>
						<a href="#">Bags</a>
						<a href="#">Lockets</a>
					</nav>
				</div>
				
          </div> </div> </div>
			           <div class="row">
      
      <div class="col-md-12">
   
          <div class = "wrapper" >
          
         <div class="foo">
          <span class="letter" data-letter="N">N</span>
          <span class="letter" data-letter="E">E</span>
           <span class="letter" data-letter="P">P</span>
            <span class="letter" data-letter="A">A</span>
              <span class="letter" data-letter="L">L</span>
              &nbsp;   &nbsp;   &nbsp;
                <span class="letter" data-letter="O">O</span>
                   <span class="letter" data-letter="N">N</span>
                       <span class="letter" data-letter="L">L</span>
                           <span class="letter" data-letter="I">I</span>
                             <span class="letter" data-letter="N">N</span>
                                <span class="letter" data-letter="E">E</span>    &nbsp;   &nbsp;  
    <span class="letter" data-letter="S">S</span>
      <span class="letter" data-letter="T">T</span>
         <span class="letter" data-letter="O">O</span>
           <span class="letter" data-letter="R">R</span>
               <span class="letter" data-letter="E">E</span>

</div>
            

      </div>
  </div>
  
                  
        </div>  <br> 
        <div class="row">
      
      <div class="col-md-12">
         <div class="container text-center" style="margin-left:20px;width:100%;">
         	 <header >	
                 <h1>Sunglasses <span><p style="font-size:14px; font-family:San Serif;">Slide it for more. </p ></span></h1>
				
				</header>
				<br>
				<br>
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel" style="width:100%;">

    <div class="carousel-inner" style="margin-left:20px;width:100%;">
       	@foreach($xfeaturedsunglassesone as $featassone)
        <div class="item active" >
            <div class="col-md-3 col-sm-4 col-xs-12" style="width:100%;"><a href="{{route('order',['id'=> $featassone['id']])}}"><img src="{{$featassone['productimage']}}" class="img-responsive"></a>	<h4  style="
            margin-top:0 fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
	">
            {{$featassone['productname']}} <br> {{$featassone['productprice']}}</h4></div>
        </div>
        @endforeach
        @foreach($sunglasses as $sun)
        <div class="item" style="width:100%;">
            <div class="col-md-3 col-sm-4 col-xs-12" style="width:100%; "><a href="{{route('order',['id'=> $sun->id ])}}"><img src="{{$sun->productimage}}" class="img-responsive"></a>	<h4  style="
            margin-top:0 fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
	">
       {{$sun->productname}} <br> {{$sun->productprice}}</h4></div>
        </div>
       @endforeach
    </div>
    

    <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"  style="color:#8fdb02;"></i></a>
    <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"  style="color:#8fdb02;"></i></a> 

</div>
            

          </div> </div> </div>
               {{--lockets starts here--}}
               
               
                <div class="row">
      
      <div class="col-md-12">
                 <div class="main" style="width:100%;">
				<header class="clearfix">	
				  <h1>Lockets</h1>
				
				</header>

				<!-- Elastislide Carousel -->
				<ul id="carousel" class="elastislide-list" style="width:100%;">
				@foreach($locket as $lock)
					<li><a href="{{route('order',['id'=> $lock->id])}}"><img src="{{$lock->productimage}}" alt="image01" style="width:100%; margin:5px;"/></a>
					<center>	<h4  style="
            margin-top:0 fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
	"> {{$lock->productname}} <br>
                        {{$lock->productprice}} </h4> </center>
					
					
					
					</li>
			
				@endforeach
				</ul>

			</div>
       
                    </div>
      
                  </div>
                  
                  
                  
                  
                  
                  {{--LOckets ends here--}}
                  
                  
                  
                  {{--Watches starts here--}}
                  
                  
            <h1 style="font-weight:bold;color:rgb(0, 1, 2);">Watches  </h1>
                  
                  <div class="row">
      
    
     	
 @foreach($xfeaturedwatcheslots as $xxx)
      <div class="col-md-3 col-sm-4 col-xs-12" style="width:100%; border-radius:5px;">
   <a href="{{route('order',['id'=> $xxx['id']])}}"> <img id="myImg" style="max-height:240px; max-width:240px;  margin:15px;margin-left:120px;margin:7px;  
    padding: 10px;
      " src="{{$xxx['productimage']}}" alt="Trolltunga, Norway" > </a>
  <center>	<h4  style="
            margin-top:0 fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
      "> {{$xxx['productname']}} <br> {{$xxx['productprice']}}   </h4> </center>
  

</div>
                     @endforeach   <br>
                      </div> 
                      {{--Watches ends Here--}}
                      
                      
                      
                      
                      
                      
                      </div> {{--Container ends here--}}
<br> <br>

{{--Bags starts here--}}
 	<header class="clearfix">	
					<h1 style="font-weight:bold;color:rgb(0, 1, 2); margin-left:120px;">Bags</h1>
				
				</header>
				
<div class="container">
<div class="row">
      @foreach($bagxxx as $bagall)
    <div class="col-md-4">
 <a href="{{route('order',['id'=> $bagall['id']])}}">
     <img id="myImgs" src="{{$bagall['productimage']}}" alt="Trolltunga, Norway" width="300" height="250"  style="margin-left:120px;margin:7px; "  > </a>
      <center>	<h4  style="
            margin-top:0 fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
      "> {{$bagall['productname']}} <br> {{$bagall['productprice']}}   </h4> </center>
    
</div>
@endforeach
    </div>
    <div class="row" style="background-color:#080b0f;  height:200px">
                          
      <div class="col-md-4">
         <br>
   
           <h6 style="color:white; margin-left:120px;"> For more offers:</h6>
           <h4 style="color:white; margin-left:120px;"> Follow Nepal Online Store:</h4><a href="#"> <img src="image/footer/images.png" style="max-width:70px; max-height:60px;"> </a> <a href="#">manish@gmail.com </a>
           
       </div>   
          <div class="col-md-4">
           <br>
     <center>  <h4 style="color:white; margin-left:120px;"> Thanks For Visit</h4> </center>
            
  
         
          <br>
        
         <a href="#"> <img src="image/footer/insta.png" style="max-width:70px; max-height:60px;"> </a> <a href="#">manish@gmail.com </a>
           
       </div> 
              <div class="col-md-4">
        <br>
   <br>
           
            <h4 style="color:white; margin-left:120px;"> Any Suggestions?</h4>
         <a href="#"> <img src="image/footer/call.png" style="max-width:70px; max-height:60px;"> </a> <a href="#">987355363363 </a>
           
       </div>     
       
    </div>
         </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
     </div>
      
       
        
         
          
           
            
             
              
               
                
                 
                  
                   
                    
                     
                      
                       
                        
                         
                          
                           
                            
                             
                              
                               
                                
                                 
                                  
                                   
                                    
                                     
                                      
                                       
                                        
                                         
                                          
                                           
                                            
                                             
                                              
                                               
                                                
                                                 
                                                  
                                                   
                                                    
                                                     
                                                      
                                                       
                                                        
                                                         
                                                          
                                                           
                                                            
                                                             
                                                              
                                                                </div> {{--Conrainers ends here--}}
hmds
ds
dsds
ds
ds
sd
ds

ds

ddsd
d
d
d
d
d
d
d
d
d

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>




			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
		</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
	</body>
</html>