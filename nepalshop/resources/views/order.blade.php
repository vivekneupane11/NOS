<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
#myImg {
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
    


#loader {
    position: relative;
 margin-left: 600px;
    margin-bottom: -20px;
    display: none;
     
    
}

.line {
  animation: expand 1s ease-in-out infinite;
  border-radius: 10px;
  display: inline-block;
  transform-origin: center center;
  margin: 0 3px;
  width: 4px;
  height: 25px;
}

.line:nth-child(1) {
  background: #27ae60;
}

.line:nth-child(2) {
  animation-delay: 180ms;
  background: #f1c40f;
}

.line:nth-child(3) {
  animation-delay: 360ms;
  background: #e67e22;
}

.line:nth-child(4) {
  animation-delay: 540ms;
  background: #2980b9;
}

@keyframes expand {
  0% {
    transform: scale(1);
  }
  25% {
    transform: scale(2);
  }
}
    
    
</style>
</head>
<body>
<div class="container">


<div class="row">
<div class="col-md-4" style="overflow-x:hidden;">
<h1  style="
            margin-top:20px; fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:25px;
	font-weight: 200;
            ">  View product and Order it Now! </h1>
<p>Click Image for full screen view.</p>

<img id="myImg" src="/{{$v->productimage}}" alt="Trolltunga, Norway" width="300" height="200">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<h2  style="
            margin-top:50px; fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
      ">  
Product Name ::
 <br><br>
   {{$v->productname}}
     <hr>
    Product Price ::
    <br> <br>
    {{$v->productprice}}
  <hr>
    Product Descriptions ::
  <br> <br>
    {{$v->productdescription}}
    
      <hr>
     </h2>
      <br>

    </div>
    <div class="col-md-8" style="height:100vh;">
    <br>
        
        <center>  <h5  id="message"style=" color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 36px; margin: 0; "> Order Now!  </h5>
        <div id="loader">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>
          </center>
     
        <div class="form-group" style="background-color:white;">
   
        <form name="myform" action="{{route('sendmail',['id'=>$v->id])}}" method="POST" style="width:40%; border-radius:5px; margin:10px; margin-right:5px;">
        {{csrf_field()}}
       <br>
          <span class="glyphicon glyphicon-user"> </span>  <input type="text" class="form-control" name="username" placeholder="Enter your name" required> <br>
        <span class="glyphicon glyphicon-map-marker"> </span> <input type="text" class="form-control " name="location"  placeholder="Where to deliver?" required><br>
            <span class="glyphicon glyphicon-phone-alt"> </span>   <input type="text" class="form-control" name="contact" pattern="\d*" placeholder="Phone No:" required>  <br>

       <h4  style="
            margin-top:0 fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
                   "> Optional*</h4>  
           <textarea name="textarea" placeholder="You can mention quantity, type of color and extra queries here.Or can wait till we call you back.Thanks" style="width:300px;height:150px;"></textarea>
           <br> <br>
           <input type="submit" name="order" value="Order Now" class="btn btn-primary" id="orderbtn" >
        </form>
     
        </div>
    </div>

    </div>

    </div>
<script>
   
    var element = document.getElementById("orderbtn");
    
        
    element.addEventListener("click", myFunction);
        
function myFunction() {
    var contact = document.forms["myform"]["contact"].value
if(document.forms["myform"]["username"].value.length > 0 && document.forms["myform"]["location"].value.length > 0 && document.forms["myform"]["contact"].value.length > 0 && !(isNaN(contact)))

    {
        var msg = document.getElementById("message");
    msg.style.color = "purple";
        msg.style.fontsize = "50px";
        msg.style.fontFamily = "Arial"
    msg.innerHTML = "Ordering Please Wait";
    document.getElementById("loader").style.display = "block";    
    }

}
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

</body>
</html>
