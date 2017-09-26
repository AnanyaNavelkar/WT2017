<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Exo+2|Pacifico|Questrial|Vast+Shadow" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--  <script src="javascript.js"></script>-->
  <style>

  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  .quote, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #ffffff;
  }
  .container {
      padding: 80px 120px;
  }

 .carousel-inner .item {
 /*   background: url(img/image-buysell.jpg); */
    margin: 0px; padding: 0px;
    position: relative;
    width: 100%; 
    height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
      

  .nav-tabs li a {
      color: #777;
  }
      
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
      
.navbar-brand {
      font-family: 'Pacifico', cursive;    
}
      
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }

      
    #footer {
    background-color: #000000;
/*    background-position: center center;*/
    width: 100%;
    height: 170px;
    text-align: center;
}



#para {
    font-size: 20px;
    color: #FFFFFF;
    padding-top: 20px;
}

.names {
    font-size: 15px;
    color: #FFFFFF;
    padding-top: 10px;
}

a:hover {
    color: #FFFFFF;
    text-decoration: underline;
}


  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">bookworm</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle active" data-toggle="dropdown" href='/buy'>BUY
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">FE</a></li>
            <li><a href="#">SE</a></li>
            <li><a href="#">TE</a></li>
            <li><a href="#">BE</a></li>
          </ul>
        </li>
        <li><a href='/sell'>SELL</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name}}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='/user'>ACCOUNT DETAILS</a></li>
            <li><a href='/logout'>LOGOUT</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="header">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active" style="background-image: url(/img/image-buysell1.jpg);">
        
        <div class="carousel-caption">
          <h3 class="quote">“Education is the most powerful weapon which you can use to change the world.”</h3>
            <p>-Nelson Mandela</p>
        </div>
      </div>

      <div class="item" style="background-image: url(/img/image-buysell2.jpg);">
        
        <div class="carousel-caption">
          <h3 class="quote">"Power is gained by sharing knowledge, not hoarding it."</h3>
        </div>
      </div>
    
      <div class="item" style="background-image: url(/img/image-buysell3.jpg);">
        
        <div class="carousel-caption">
          <h3 class="quote">"An investment in knowledge pays the best interest."</h3>
            <p>-Benjamin Franklin</p>
        </div>
      </div>
  
    </div>  

    <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
    
</div>

    <br> <br>
    
    
<!----- Cards -------->
      @foreach($data as $displaybook)
<div class="w3-card-4 col-sm-6" style="margin-left: 80px; margin-bottom: 30px;  width: 40%; text-align: center;">
<div style="margin:20px;">
<img src = "{{$displaybook->uploadimage}}" alt="" height="350" width="350"/>
</div>
    <header class="w3-container w3-light-grey">
      <h3 class="book-name">{{$displaybook->book_name}}</h3>
        <h5>{{$displaybook->book_author}}</h5>
    </header>
    <div class="w3-container">
      <p>Edition: {{$displaybook->book_edition}}</p>
      <p>Subject: {{$displaybook->subject}}</p>
      <p>Year: {{$displaybook->year}}</p>
      <p>Branch: {{$displaybook->branch}}</p>
      <p>Price: {{$displaybook->price}}</p>
      <hr>
      <p><strong>Seller:</strong></p>
      <span>Simran Nayak</span><br>
      <p><strong>Class:</strong></p>
      <span>TE Comps</span><br><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey connect-button" onclick="onClickBuy()">+ Buy</button>
</div>
@endforeach
<!--    
<div class="w3-card-4 col-sm-6" style="margin-left: 80px; margin-bottom: 30px;  width: 40%; text-align: center;">
    <header class="w3-container w3-light-grey">
      <h3 class="book-name">Book Name</h3>
        <h5>Book Author</h5>
    </header>
    <div class="w3-container">
      <p>Edition</p>
      <p>Subject</p>
      <p>Branch</p>
      <p>Price</p>
      <hr>
      <p><strong>Seller:</strong></p>
      <span>Simran Nayak</span><br>
      <p><strong>Class:</strong></p>
      <span>TE Comps</span><br><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey connect-button" onclick="onClickBuy()">+ Buy</button>
</div>
    
<div class="w3-card-4 col-sm-6" style="margin-left: 80px; margin-bottom: 30px;  width: 40%; text-align: center;">
    <header class="w3-container w3-light-grey">
      <h3 class="book-name">Book Name</h3>
        <h5>Book Author</h5>
    </header>
    <div class="w3-container">
      <p>Edition</p>
      <p>Subject</p>
      <p>Branch</p>
      <p>Price</p>
      <hr>
      <p><strong>Seller:</strong></p>
      <span>Simran Nayak</span><br>
      <p><strong>Class:</strong></p>
      <span>TE Comps</span><br><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey connect-button" onclick="onClickBuy()">+ Buy</button>
</div>
    
<div class="w3-card-4 col-sm-6" style="margin-left: 80px; margin-bottom: 30px;  width: 40%; text-align: center;">
    <header class="w3-container w3-light-grey">
      <h3 class="book-name">Book Name</h3>
        <h5>Book Author</h5>
    </header>
    <div class="w3-container">
      <p>Edition</p>
      <p>Subject</p>
      <p>Branch</p>
      <p>Price</p>
      <hr>
      <p><strong>Seller:</strong></p>
      <span>Simran Nayak</span><br>
      <p><strong>Class:</strong></p>
      <span>TE Comps</span><br><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey connect-button" onclick="onClickBuy()">+ Buy</button>
</div>
    -->
    
    
<div id="footer" class="col-sm-12">
        <p id="para">Website designed and developed by:</p>
        <a href=""><p class="names">Abha Mutalik</p></a>
        <a href=""><p class="names">Ananya Navelkar</p></a>
</div>

    
    
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<script src="{{ asset('js/javascript.js') }}"></script>

</body>
</html>