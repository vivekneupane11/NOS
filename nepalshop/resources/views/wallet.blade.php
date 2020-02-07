<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        
        
.banner{
background-color:#f2f3f7;
   
    
    height:120px;
    border-radius:5px;
    
       background-size:cover;
    background-attachment: fixed;
    box-shadow: 5px 10px 20px #888888;
}
.banner .left-image{
    float:left;
    width:150px;
    height:120px;
    
}
.banner a{
    color:#161616;
   text-shadow: 0.08em 0em #333;
    margin:15px;
    margin-top:5px;
    display:inline-block;
    background-color: black;
    width:100px;
    height:40px;
    line-height: 40px;
    color: white;
    
}
.banner a:hover{
    text-decoration:none;
   color:white;
    transition: all 0.5s linear;
    background-color: red;
  
}
       #active
        {
            background-color: aqua;
            color:black;
        }  
        
        
    </style>
    <body style=" width:100%;   overflow-x:hidden;"
>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                     
                   <a id="active" href="{{route('wallet')}}">WALLETS</a>
                
           </center>
                       
 
       
           <p style="margin-bottom:1px; text-align:center; font-size:12px;"><span style="margin:7px;" class="glyphicon glyphicon-phone-alt"></span>Contact Us: 9876543334 </p>             
        </div> 
                </div>
                         <div class="text-center" style="margin-bottom:0;">
                    {!! $wallet->links(); !!}
                     </div>
                
                
                
                

                 <div class="row" >
                          
                  @foreach($wallet as $sunax)
                           
                            <div class="col-md-3">
 

                             <a href="{{route('order',['id'=> $sunax->id])}}"> <img id="myImgs" src="{{$sunax->productimage}}" alt="Trolltunga, Norway" width="220 fixed" height="200"  style="margin-left:120px;margin:90px; border-radius:5px;  "  > </a>
      <center>	<h4  style="
            margin-top:0 fixed;
    text-shadow: 0 0 20px rgba(198,28,39,0.8), 0 0 0 black;
    font-family:'ProclamateHeavy'; 
    font-size:15px;
	font-weight: 400;
      "> {{$sunax->productname}} <br> {{$sunax->productprice}}   </h4> </center>
    
</div>
                    @endforeach
                  
                     </div>
                       
                 </div> 
                   
                    
                     
                         <div class="text-center" style="margin-bottom:0;">
                    {!! $wallet->links(); !!}
                     </div>
                       
                        
                         
                          
                           
                            
                             
                              
                               
                                
                                 
                                  
                                   
                                    
                                     
                                      
                                       
                                        
                                         
                                          
                                           
                                            
                                             
                                              
                                               
                                                
                                                 
                                                  
                                                   
                                                    
                                                     
                                                      
                                                       
                                                        
                                                         
                                                          
                                                           
                                                            
                                                             
                                                              
                                                               
                                                                
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
    </body>
</html>