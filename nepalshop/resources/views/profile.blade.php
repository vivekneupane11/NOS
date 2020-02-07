<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
           <link href="css/home.css" rel="stylesheet">
           <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
        input[type="text"]{
            width:50%;
        }
            input[type="select"]{
            width:50%;
                background-color: aliceblue;
        }
        
    </style>
    <body>
        
        <center><h3>Welcome!!! </h3>      <h3>!!!Upload your products here.</h3></center>  <br> 
      
        
        
      <center>  <form action="{{route('getpost')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
            <label> Product Name: </label>
        <input type="text" name="productname" class="form-control" required>
        <br>  <br>
         <label> Product Price: </label>
        <input type="text" name="productprice" class="form-control" required>
        <br>  
            <label>Product type: </label>
            <select name="producttype" class="form-control" style="width:50%; height:5%;">
                <option>Watches</option>
              
                    <option>Lockets </option>
                      <option>Wallets </option>
                      <option>Shoes</option>
                
                      <option>Sunglasses</option>
                        <option>Bags</option>
                        
            </select>
        <br> 
            
         <label> Product Description: </label>
        <input type="text" name="productdescription"  style="width:70%; height:15%;" required>
        <br>  <br>
        
         <label> Product Images: </label>
        <input type="file" name="productimage" class="form-control" style="width:50%; height:5%;" required>
        <br>  <br>
        
         <label> Product Range: </label>
        <input type="range" name="productrange" name="productrange" min="1" max="10" class="form-control" style="width:50%; height:5%;" > <br>
        <input type="submit" name="submit" value="submit" class="btn btn-primary" >
        <input type="hidden" value="_token" >
          </form> </center>
          
    </body>
</html>