<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Blog</title>
    <style>
        body{
  background-color: rgb(40, 40, 43); 
    
}
.card{
    background-color: #343434;  
}
.blog-card-img{
  width: 300px; 
  height: 300px;
  border-bottom-right-radius: 5px; 
  object-fit: cover;
}
.img-size{
    height: 300px;
}

.card-img{
    height: 200px;
    object-fit: cover;
    background-color: #353839;

}
.card{
    background-color: #343434;  
}
.card-post{
    margin-bottom:20px; 
    display: flex;
     flex: 1 1 auto;
      border:none;
      background-color: #343434;
       flex-direction: row; 
       align-items: center; 
    height: 300px;
}


.blog-card-body{
    margin-left:50px; 
    margin-bottom:20px;
}
    </style>
  </head>
  <body>
   
      <?php include_once("header.inc.php") ?>
    </div>

    <div class="container">
        <div class="heading-style container text-light" ><h1 style="position:relative ;">Our Rooms
         <hr style="position:absolute; left:0"></h1></div>
        <div class="container mt-5" style="margin-top:12px; margin-bottom: 20px;">

  
     <div class='card card-post text-light'>
     <img src="./images/img6.jpg" class='d-none d-md-block blog-card-img card-img-top'/>
     <div class='card-body blog-card-body d-sm-12 '>
     <h3 class='card-title' style='font-weight: bold;'>Standard Room</h3>
     <p class='card-title d-none d-lg-block' style="font-size:20px; color:rgb(193, 193, 193)">Comfort and Convenience in Our Standard Room</p>
  
     <a href='standard.php'><button style='width:100px' type='submit' name='read' class='btn btn-primary mt-3 ml-0'><b>Read More </b> </button></a>
    </div>
    </div>

     <div class='card card-post text-light'>
     <img src="./images/img3.jpg" class='d-none d-md-block blog-card-img card-img-top'/>
     <div class='card-body blog-card-body d-sm-12 '>
     <h3 class='card-title' style='font-weight: bold;'>Deluxe Room</h3>
     <p class='card-title d-none d-lg-block' style="font-size:20px; color:rgb(193, 193, 193)">Elevate Your Stay with Our Deluxe Rooms</p>
     
  
     <a href='deluxe.php'><button style='width:100px' type='submit' name='read' class='btn btn-primary mt-3 ml-0'><b>Read More </b> </button></a>
    </div>
    </div>
   
     <div class='card card-post text-light'>
     <img src="./images/img4.jpg" class='d-none d-md-block blog-card-img card-img-top'/>
     <div class='card-body blog-card-body d-sm-12 '>
     <h3 class='card-title' style='font-weight: bold;'>Suite</h3>
     <p class='card-title d-none d-lg-block' style="font-size:20px; color:rgb(193, 193, 193)">Luxury Redefined in Our Suites</p>
   
     <a href='suite.php'><button style='width:100px' type='submit' name='read' class='btn btn-primary mt-3 ml-0'><b>Read More </b> </button></a>
    </div>
    </div>
    
 
  

   </div>
 </div>
<?php include_once("footer.inc.php")?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        </body>
        </html>