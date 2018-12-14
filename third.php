<?php

?>
<!DOCTYPE html>
<html>
<head>
  <title>Third Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <style>
  body {
    background-color: darkcyan;
  font-family:sans-serif;
  }
  h1{
    display:block;
    text-align: center;
    color: white;
    background-color: darkgrey;

  }

  h3{
  display:inline-block;
  text-align: center;
  padding: 10px 20px;
  color:darkblue;
  }

  a{
    text-decoration: none;
  }

  a>h3:hover{
    background-color: darkgrey;
    color:darkcyan;
  }

  p {
    color: red;
  }

  .caintainer{
      display:block;
    text-align: center;


  }
  .tab{
    display:block;
    text-align: center;

  }
  .box{
    margin: auto;
   width: 50%;
   padding: 10px;
     display:block;
    text-align: center;

  }


  /*animation*/
  .circle {
    height: 55px;
    width:55px;
    display:inline-block;
    background-color: red;
    border-radius:50%;
    position: relative;
    -webkit-animation: myfirst 5s linear .5s infinite alternate; /* Safari 4.0 - 8.0 */
    animation: myfirst 5s linear .5s infinite alternate;

  }

  .circle2{
    height: 50px;
    width:50px;
    display:inline-block;
    background-color: green;
    border-radius:50%;
    position: relative;
    -webkit-animation: myfirst 7s linear .5s infinite alternate-reverse; /* Safari 4.0 - 8.0 */
    animation: myfirst 7s linear .5s infinite alternate-reverse;

  }
  .circle3{
    height: 60px;
    width:60px;
    display:inline-block;
    background-color: blue;
    border-radius:50%;
    position: relative;
    -webkit-animation: myfirst 6s linear .5s infinite alternate; /* Safari 4.0 - 8.0 */
    animation: myfirst 6s linear .5s infinite alternate;

  }

  /* Safari 4.0 - 8.0 */
  @-webkit-keyframes myfirst {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
  }

  /* Standard syntax */
  @keyframes myfirst {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
  }

  </style>
</head>
<body>
  <h1>This is Third Page!!</h1>

<div class="container">

<div class="tab">
  <a href="index.html"><h3>First Page</h3></a>
  <a href="second.php"><h3>Second Page</h3></a>
  <a href="third.php"><h3>Third Page</h3></a>
</div>

<div class="box">
  <div class="circle"><h3>1</h3></div>
  <div class="circle2"><h3>2</h3></div>
  <div class="circle3"><h3>3</h3></div>
</div>

</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
