<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>NEPAL ONLINE SHOP </title>
  
  
  
      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>
  <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="image/admin.jpg" alt="Avatar" /> 
    </button>
    <div class="profile__form">
      <div class="profile__fields">
           <form action="{{route('admin')}}" method="POST" >
    {{csrf_field()}}
        <div class="field">
          <input type="text" id="fieldUser" class="input" name ="username" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" name="password" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
          <input type="submit" class="btn" value="Log In">
        </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
      </div>
     </div>
  </div>
</div>
  
    <script  src="js/index.js"></script>

</body>
</html>