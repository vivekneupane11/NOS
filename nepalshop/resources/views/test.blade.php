<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700');

body { background: #F2F2F2; }
body, * { padding: 0; margin: 0; }
.nav { list-style: none; padding: 0; margin: 0; background: #222222; display: inline-block; height: 100vh; position: absolute; }
.nav li { cursor: pointer; border-top: 1px solid #F2F2F2; border-bottom: 1px solid #F2F2F2; margin-bottom: -1px; width: 60px; height: 60px; line-height: 60px; font-size: 18px; font-family: 'Roboto Slab', serif; color: #ffffff; }
.nav li div, .nav li i { position: absolute; text-align: center; }
.nav li div { margin-left: 60px; text-align: center; width: 160px; }
.nav li i { line-height: 60px; width: 60px; z-index: 9; background: #222222; }
.nav li div { display: none; z-index: 1; background: #ed1c24; }

.nav li:hover > div { display: inline-block; }
.nav li:hover i { background: #ed1c24; }

.hero { height: 50vh; text-align: center; padding-top: 22%; font-family: 'Roboto Slab', serif; font-size: 28px; }
.credits { position: absolute; bottom: 0; right: 0; padding: 10px;  }
.credits a { margin: 10px; }
    
    </style>
</head>
<body>
    <ul class="nav">
  <li>
    <i class="fa fa-home"></i>
    <div class="animated slideInLeft">Home</div>
  </li>
  <li>
    <i class="fa fa-user"></i>
    <div class="animated slideInLeft">About</div>
  </li>
  <li>
    <i class="fa fa-certificate"></i>
    <div class="animated slideInLeft">Skills</div>
  </li>
  <li>
    <i class="fa fa-desktop"></i>
    <div class="animated slideInLeft">Projects</div>
  </li>
  <li>
    <i class="fa fa-align-right"></i>
    <div class="animated slideInLeft">Articles</div>
  </li>
  <li>
    <i class="fa fa-phone"></i>
    <div class="animated slideInLeft">Contact</div>
  </li>
</ul>

<div class="hero">
  <h1>CSS3 Side Menu</h1>
</div>

<div class="credits">
  <a href="https://twitter.com/arximughal"><i class="fa fa-twitter"></i></a>
  <a href="https://facebook.com/arximughal"><i class="fa fa-facebook"></i></a>
  <a href="https://arslanaslam.me"><i class="fa fa-globe"></i></a>
</div>
</body>
</html>