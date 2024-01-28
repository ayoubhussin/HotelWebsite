<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Home</title>
    <style>
        body{
  background-color: rgb(40, 40, 43); 
    
}
.card{
    background-color: #343434;  
}

.slider-img{
    height: 700px;
    object-fit: cover;
    filter: brightness(35%);
}

    </style>
  </head>
  <body>
   
     <?php include_once("header.inc.php") ?>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
         
        <div class="carousel-item active">
    <img class="d-block slider-img w-100" src="./images/img5.jpg" alt="First slide">
    <div class="carousel-caption  car-cap d-none d-md-block">
        <h3>Welcome to Smart Hotel!</h3>
        <p>Providing the Best of Experiences!</p>
        <a href="book.php"><button class="btn btn-danger">Book Now!</button></a>
    </div>
</div>


          <div class="carousel-item">
            <img class="d-block slider-img w-100" src="./images/img4.jpg" alt="First slide">
          <div class="carousel-caption car-cap d-none d-md-block">
          <h3>Welcome to Smart Hotel!</h3>
        <p>Providing the Best of Experiences!</p>
        <a href="book.php"><button class="btn btn-danger">Book Now!</button></a>
          </div>
          </div>

          <div class="carousel-item ">
            <img class="d-block slider-img w-100" src="./images/img1.jpg" alt="First slide">
          <div class="carousel-caption car-cap d-none d-md-block">
          <h3>Welcome to Smart Hotel!</h3>
        <p>Providing the Best of Experiences!</p>
        <a href="book.php"><button class="btn btn-danger">Book Now!</button></a>
        </div>
          </div>

          <div class="carousel-item">
            <img class="d-block slider-img w-100" src="./images/img3.jpg" alt="First slide">
          <div class="carousel-caption car-cap d-none d-md-block">
          <h3>Welcome to Smart Hotel!</h3>
        <p>Providing the Best of Experiences!</p>
        <a href="book.php"><button class="btn btn-danger">Book Now!</button></a>
          </div>
          </div>
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div
    
      <section id="services" class="section-bg  container-fluid py-5">
    <div class="container">
        <h1 class="text-center" style="color: aliceblue; margin-top:40px">Our Services</h1>
        <hr>
        <div class="row mt-5 text-light">

            <div class="col-lg-4 card">
                <div class="card-body text-center">
                    <i class="icon"></i>
                    <h5 class="card-title">Luxurious Accommodations</h5>
                    <p>Experience the epitome of comfort and elegance in our well-appointed rooms and suites. Unwind in style and enjoy a restful stay.</p>
                </div>
            </div>

            <div class="col-lg-4 card">
                <div class="card-body text-center">
                    <i class="icon"></i>
                    <h5 class="card-title">Gourmet Dining</h5>
                    <p>Savor exquisite culinary delights prepared by our renowned chefs.</p>
                </div>
            </div>

            <div class="col-lg-4 card">
                <div class="card-body text-center">
                    <i class="icon"></i>
                    <h5 class="card-title">Relaxation and Wellness</h5>
                    <p>Rejuvenate your body and mind at our spa and wellness center.</p>
                </div>
            </div>

            <div class="col-lg-4 card">
                <div class="card-body text-center">
                    <i class="icon"></i>
                    <h5 class="card-title">Event Spaces</h5>
                    <p>Host your special events with us.</p>
                </div>
            </div>

            <div class="col-lg-4 card">
                <div class="card-body text-center">
                    <i class="icon"></i>
                    <h5 class="card-title">Exciting Activities</h5>
                    <p>Explore local attractions and enjoy a variety of activities during your stay.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="container-fluid react fluid mt-5 py-5">
    <div class="container text-light">
        <div class="row">

            <div class="col-lg-6 card-body">
                <h1 class="card-title">Luxurious Accommodations</h1>
                <p>Discover our elegant and comfortable accommodations, designed to provide you with the perfect place to relax during your stay. Whether you choose a standard room or a deluxe suite, we ensure a memorable experience.</p>
                <a href="rooms.php">
                    <button type="button" class="btn btn-primary">Explore Rooms</button>
                </a>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <img class="img-size" src="./images/img7.jpg" alt="">
            </div>

        </div>
    </div>
</section>


    <div class="container-fluid mt-5 section-bg py-5 ">
      <h1 class="text-center" style="color:aliceblue"> Our Rooms <hr></h1>
      <div class="container featured-container mt-5">
      <div class="row py-5">
       
        <div class="card" style="width: 15rem; margin:auto;">
  <img class="card-img-top card-img" src="./images/img6.jpg" alt="Card image cap">
  <div class="card-body featured text-light">
    <h5 class="card-title">Standard Room</h5>
    <p class="card-text">Comfort and Convenience in Our Standard Rooms</p>
            
      
    <a href="standard.php"><button type="submit" class="btn btn-primary">Read More!</button></a>
  </div>
</div>
        <div class="card" style="width: 15rem; margin:auto;">
  <img class="card-img-top card-img" src="./images/img3.jpg" alt="Card image cap">
  <div class="card-body featured text-light">
    <h5 class="card-title">Deluxe Room</h5>
    <p class="card-text">Elevate Your Stay with Our Deluxe Rooms</p>
            
      
    <a href="deluxe.php"><button type="submit" class="btn btn-primary">Read More!</button></a>
  </div>
</div>
        
        <div class="card" style="width: 15rem; margin:auto;">
  <img class="card-img-top card-img" src="./images/img4.jpg" alt="Card image cap">
  <div class="card-body featured text-light">
    <h5 class="card-title">Suite</h5>
    <p class="card-text">Luxury Redefined in Our Suites</p>
            
      
    <a href="suite.php"><button type="submit" class="btn btn-primary">Read More!</button></a>
  </div>
</div>

      </div>
    </div>
   </div>

 

   <?php include_once("footer.inc.php") ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>