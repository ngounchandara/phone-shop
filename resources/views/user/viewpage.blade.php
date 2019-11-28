<!DOCTYPE html>
<html>
<head>
<title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    .center{
        margin:auto;
        padding:auto;
    }
    .menu{
      float: left;
      
    }
   .head{
     margin:10px 10px 10px 10px;
     padding:10px;
     position: fixed;
      width: 100%;
      top:0px;
      z-index: 1;

  
   }
   .body{
     margin-top: 100px;
   }
   .menu-list{
     padding:10px;
     color:#4a4a4a;
     text-decoration: none;
     cursor: pointer;
     
   }
   .menu-list:hover{
     color:black;
    background:#ccc;
    text-decoration: none;
   }
</style>
<body>


<div class="container-fluid">

    <div class="row head">
        <div class="col-8" style="letter-spacing:4px;">
              <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>
        </div>
        <div class="menu col-4">
            <a href="#about" class="menu-list">About</a>
            <a href="#menu" class="menu-list">Menu</a>
            <a href="#contact" class="menu-list">Contact</a>
        </div>
    </div>
      <div class="row body">
        <div class="col-3" style="background-color:lavender;">.col</div>
        <div class="col-3" style="background-color:orange;">.col</div>
        <div class="col-3" style="background-color:lavender;">.col</div>
    
    </div>

</div>




</body>

</html>