<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Weddingz</title>
  </head>
  <body>
    <!-- Navbar -->

    <nav class="navbar sticky-lg-top  navbar-expand-lg navbar-dark bg-white">
      <div class="container-fluid">
        <i class="fas fa-home" style="color:black "><span class="navbar-brand mb-0 h4" style="color: rgb(8, 8, 8); padding-left: 5%;">Weddingz.in</span></i> 
      </div>

      <div class="container-fluid ">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="nav-item">
            <a class="nav-link active" style="color: rgb(14, 13, 13);" aria-current="page" href="#">View Magazine</a>
            
          </div>

          <li class="nav-item">
            <a class="nav-link active" style="color: rgb(8, 8, 8);" aria-current="page" href="#">Download App</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" style="color: rgb(8, 8, 8);" aria-current="page" href="#">List your Bussiness</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-4" type="search" placeholder="Locations" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>

        <a href="userlogin.php" class="btn btn-dark m-lg-1" role="button">login</a>
        <a href="userlogin.php" class="btn btn-dark m-lg-1" role="button">SignUP</a>
      </div>
</nav>

<!-- Image carousel -->
<div  id="carouselExampleCaptions" class="carousel slide fluid-container" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="static/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

     <div class="carousel-item">
      <img src="static/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="static/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<!-- section 1 venues -->
<section style="border-color: black;padding-top: 5%;">
  <h3  style=" background-color: cadetblue; color: white; text-align: center; padding-bottom: 2%; padding-top: 2%;" >Browse Wedding Venues</h3>
  <div class=" fluid-container" style="background-color: white; width: auto; height: auto; padding-bottom: 2%; padding-top: 2%; padding-left: 2%;padding-right: 2%;">

    <div class="card-group">
      <div class="card bg-white"style="width: 300px; height: 400px; margin-right: 2%;">
        <div class="card-body text-center" style="    border-radius: 37px;
        border: 3px solid cadetblue;
        padding: 20px;
        width: 518px;
        height: 150px;
        margin-left: 145px">
          <h2>Best locations </h2>
          <p class="card-text">Some text inside the first</p>
        </div>
      </div>
      
        

        <div class="card bg-transparent"  style="width: 100px; height: 400px;">
          <div class="card-body text-center ">
            <button class="btn btn-outline-dark" style=" color: rgb(255, 253, 253); position: absolute; margin-top: 23%; margin-left: 40%;">View more</button>
            <img class="shadow lg-6 mb-5 bg-transparent rounded-2" style="width: 17cm; height: 10cm;" src="static/venue.jpg" ></img>
          </div>
      </div>
</div>
</div>
</section>

<!-- Section 2  vendors-->
<section style="border-color: black;padding-top: 4%;">
  <h3  style=" background-color: cadetblue; color: white; text-align: center; padding-bottom: 2%; padding-top: 2%;" >Browse Wedding  Vendors</h3>
  <div class="container-fluid">
    <div class="row" style="padding-top: 3%;">
      <div class="col-lg-5" style="margin-left: 4%;">
        <button class="btn btn-outline-light" style=" color: rgb(15, 15, 15); position: absolute; margin-top: 11%; margin-left: 15%;">View more</button>
        <img class="shadow lg-6 mb-5 bg-transparent rounded-3"  style="width: 17cm; height: 10cm;" src="static/vendors.jpg"></img>
      </div>
      <div class="col-lg-5" style="text-align: center;     border-radius: 37px;
      border: 3px solid cadetblue;
      padding: 20px;
      width: 518px;
      height: 400px;
      margin-left: 145px">
        <h3> Select best Vendors</h3>
        <p>Sed ut perspiciatis...</p>
      </div>
    </div>
  </div>
  

</section>



<!-- Section 3 photo gallery -->
<section style="border-color: black;padding-top: 4%;">
  <h3  style=" background-color: cadetblue; color: white; text-align: center; padding-bottom: 2%; padding-top: 2%;" >Photo Gallery</h3>
  <div class="container-fluid">
    <div class="row" style="padding-top: 3%;">
      <div class="col-lg-5" style="margin-left: 4%;">
        <button class="btn btn-outline-light" style="color: rgb(15, 15, 15); position: absolute; margin-top: 9%; margin-left: 15%;">View more</button>
        <img class="shadow lg-6 mb-5 bg-transparent rounded-3" src="https://source.unsplash.com/600x250/?wedding"></img>
        
      </div>
      <div class="col-lg-5" style="text-align: center;border-radius: 37px;
      border: 3px solid cadetblue;
      padding: 20px;
      width: 518px;
      height: 250px;
      margin-left: 145px">
        <h3> Our best Shoots</h3>
        <p>Sed ut perspiciatis...</p>
      </div>
    </div>
  </div>
  

</section>
<!-- footer section -->
<section>
  <div class="container-fluid" style="background-color: cadetblue; color: white; padding-top: 5%; padding-bottom: 5%;">
    <h3 style="text-align: center;">PLAN A WEDDING IN INDIA</h3>
  <div class="row">
    <div class="col-lg-4" style="text-align: center;">
      
      <i class="fas fa-phone" style="color:white "></i>
      <h3>contact</h3>
    </div>
    <div class="col-lg-4" style="text-align: center;">
      <h3>|</h3>
    </div>
    <div class="col-lg-4">
      <h3>Why Weddingz </h3>
      <div>
      <ul>
       <li> India's Largest Wedding Company.</li>
        <li>Compare And Book Wedding Venues And Services.</li>
        <li>Best Prices Guaranteed.</li>
        <li>Find Inspiration, Ideas And Insights For Your Wedding</li>
      </ul>
    </div>
    </div>

  </div>
  <!-- contact form -->
  <div style="    margin-left: 10%;">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1" style="    margin-left: 10px;">Email address</label>
      <input type="email" style="    width: 500px; margin-left: 10px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-light" style="margin-left: 10px">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="InputContactNumber" style="margin-left: 10px;">Contact Number</label>
      <input type="text" class="form-control" id="InputContactNumber" placeholder="+91" style="width: 500px; margin-left: 10px;">
    </div>
    
    <button type="submit" class="btn btn-outline-dark" style="margin-top: 10px; margin-left: 10px;">Submit</button>
  </form>
</div>
</section>

    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>