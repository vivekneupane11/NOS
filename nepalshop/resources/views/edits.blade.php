
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
        }
        
    </style>
    <body style="background-color:lightblue;">

        <center><h1>Update your products here. </h1></center>  <br> 
   
      <center>  <form action="{{route('getpostedit',['id' => $edit->id])}}" method="POST" enctype="multipart/form-data" >
        {{csrf_field()}}
            <label> Product Name: </label>
        <input type="text" name="productname" class="form-control" value="{{$edit->productname}}">
        <br>  <br> 
         <label> Product Price: </label>
        <input type="text" name="productprice" class="form-control" value="{{$edit->productprice}}">
        <br>  
            <label>Product type: </label>
            <select name="producttype" class="form-control" style="width:50%; height:5%;" value="{{$edit->producttype}}">
                <option>Watches</option>
                <option>Caps and Hats </option>
                  <option>Accessories </option>
                    <option>Name Lockets: </option>
                      <option>Wallets </option>
                      <option>Shoes</option>
                      <option>Clothes </option>
                      <option>Sunglasses</option>
                        <option>Bags</option>
                          <option>Others </option>
            </select>
        <br> 
            
         <label> Product Description: </label>
        <input type="text" name="productdescription"  style="width:70%; height:15%;" value="{{$edit->productdescription}}">
        <br>  <br>
        
         <label> Product Images: </label>
        
        <input type="file" name="productimage" class="form-control" style="width:50%; height:5%;" value="" >
        <br>  <br>
        
         <label> Product Range: </label>
        <input type="range" name="productrange" name="productrange" min="1" max="10" class="form-control" style="width:50%; height:5%;" value="{{$edit->productrange}}"> <br>
        <input type="submit" name="GetEdit" value="submit" class="btn btn-primary">
        <input type="hidden" value="_token" >
          </form> </center> 
    </body>
</html> 