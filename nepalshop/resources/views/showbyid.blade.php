<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="css/adminviewpost.css" rel="stylesheet">
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        input[type="select"] {
            height:20px;
        } 
        
    </style>
    <body>
    <div class="container">
        <div class="row" id="banner">
            <h4>Sort product by :</h4>
           <br>
            

            <center> <h3>NEPAL ONLINE STORE  </h3>  </center>
        </div>
        <div class="row">
          
            <div class="col-md-12 " id="content" >
            
 <div class="table-responsive cart_info">
         
            <table class="table table-condensed">
                <thead>

                    <tr class="cart_menu" style="background-color: #e69900;height:50px;color:white;">

                        <td class="image" style="line-height: 50px;">Item Image</td>
                        <td class="description" style="line-height: 50px;">Name & Type</td>
                        <td class="price" style="line-height: 50px;">Price</td>
                        <td class="quantity" style="line-height: 50px;">Description</td>
                        <td class="total" style="line-height: 50px;">Range</td>
                           <td class="total" style="line-height: 50px;">Operate</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
            
                     
                    <tr>
                       
   
                        <td class="cart_product">
                            <a href=""><img src="{{$v->productimage}}" alt="" width="120px"; height="80px;"></a>
                        </td>
                        <td class="cart_description" style="color:#999966;font-size:9px; font-weight: 200;
">
                            <h4><a href="">{{$v->productname}}</a></h4>
                            <p>{{$v->producttype}}</p>
                                <p style="color:black;    ">id: {{$v->id}}</p>
                        </td>
                        <td class="cart_price" style="color:#0f0f0a;font-size:16px; font-weight: 600;
">
                        <br>
                            <p>{{$v->productprice}}</p>
                        </td>
                        <td class="cart_quantity">
                        <br>
                   {{$v->productdescription}}
                        </td>
                        <td class="cart_total">
                        <br>
                            <p class="cart_total_price" style="color:light-blue;font-size:16px; font-weight: 600;
">{{$v->productrange}}</p>
                        </td>
                        <td class="cart_delete">
                            <a href="{{route('edit',['id' => $v->id])}}"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit</button> </a>
                                    
                                    


                                     {{Form::open(array( 
    'route' => array( 'delete', $v->id ), 
    'method' => 'delete', 
    'style' => 'display:inline',
    'onsubmit' => "return confirm('Are you sure you want to delete?')",
))}}
     {{Form::submit('Delete', array('class' => 'btn btn-danger'))}}
{{Form::close()}}
                        </td>
                    </tr>
           
                
             
            
                </tbody>
            </table>
        </div>

  
            </div>
           
    </div>
        </div>
    </body>
</html>