<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Mega menu with Bootstap 4</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
            <div class="row">
              <div class="col-md-3" style="max-height: 450px;">
            <!-- MEGAMENU CARSOUL............................................. -->
              <div style="">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href="">
                          <img src="img1.jpg" class="d-block w-100" alt="...">
                        </a>
                        
                      </div>
                      <div class="carousel-item">
                        <a href="">
                          <img src="img2.jpg" class="d-block w-100" alt="...">
                        </a>
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
                  </div>

                  <h3>There have a title</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  .</p>

                
              </div>
                  


              </div>
            
            <div class="col-md-3">
              <p><strong>Kid Item</strong></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
            </div>

             <div class="col-md-3">
              <p><strong>Kid Item</strong></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
            </div>

             <div class="col-md-3">
              <p><strong>Kid Item</strong></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
              <p><a href="">List Item 1</a></p>
            </div>



            </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>






  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  









  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>