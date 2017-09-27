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

  <link href="https://fonts.googleapis.com/css?family=Exo+2|Pacifico|Questrial|Vast+Shadow" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="stylesheet.css">
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
      
  .navbar-nav li a.navbar-active {
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

      
      .signup-form {
/*  padding-top: 100px;*/
  margin-top: 300px;
  position:relative;
  width: 70%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  background-color: #fff;
  border: 3px solid #999;
}

.h-center {
  display: block;
  clear: both;
  text-align: center;
  margin-bottom: 0px;
}

.gray{
  color: #999;
  font-weight: 100;
}

input, select {
  display: inline-block;
  transition: 0.15s ease-out all;
  outline: none;
  background-color: transparent;
}

.fancy-form {
  margin: 20px auto;
  width: 100%;
  text-align: center;
  
  
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;

  flex-flow: row wrap;
  -moz-flex-flow: row wrap;
  -webkit-flex-flow: row wrap;
  justify-content: space-between;
}
.fancy-text-form {
  margin: 20px 15px;
  position: relative;
}

.fancy-text-form > input,
.fancy-text-form > select
{
  border-bottom-width: 2px;
  box-shadow: none;
  outline: none;
  padding: 15px 0px;
  font-size: 20px;
}
      

.white-blue-button {
  color: #21a1e1;
  cursor: pointer;
  background-color: transparent;
  border: 2px solid #21a1e1;
  transition: 0.15s all ease-in-out;
  position: relative;
}

.white-blue-box {
  color: #21a1e1;
  width: 245px;
  border: 2px solid transparent;
  border-bottom-color: #21a1e1;
  display: inline-block;
  transition: 0.15s ease-out all;
}

.white-blue-select {
  color: #21a1e1;
  font-size: 20px;
  width: 245px;
  border: 2px solid transparent;
  border-bottom-color: #21a1e1;
  -moz-appearance:  none;
}

.fancy-text-form > input + label,
.fancy-text-form > select + label
{
  position: absolute;
  color: #777;
  font-style: italic;
  left: 0px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  pointer-events: none;
  transition: 0.15s ease-out all;
}

.white-blue-button:hover{
  color: #fff;
  background-color: #21a1e1;
}
      
#upload_image a {
  color: #777;
  font-style: italic;
  left: 0px;
  top: 40%;  
  font-size: 20px;
}
      
#upload_image a:hover {
    text-decoration: underline;
    color: #777;
}

.med-box {
  width: 245px;
  font-size: 20px;
}

.white-blue-box:focus + label,
.white-blue-select:focus + label,
input.focusFancy + label,
select.focusFancy + label{
  top: -10px;
  font-size: 12px;
  color: #999;
}

.error {
  border-bottom-color: red;
}



/*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Data Tooltip////////////////////////////*/





*,
*:before,
*:after {
  box-sizing: inherit;
}

header,
.demo,
.demo p {
  margin: 4em 0;
  text-align: center;
}

[data-tooltip],
.tooltip {
  position: relative;
}

/* Base styles for the entire tooltip */
[data-tooltip]:before,
[data-tooltip]:after,
.tooltip:before,
.tooltip:after {
  position: absolute;
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: 
      opacity 0.2s ease-in-out,
        visibility 0.2s ease-in-out,
        -webkit-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
    -moz-transition:    
        opacity 0.2s ease-in-out,
        visibility 0.2s ease-in-out,
        -moz-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
    transition:         
        opacity 0.2s ease-in-out,
        visibility 0.2s ease-in-out,
        transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24);
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform:    translate3d(0, 0, 0);
  transform:         translate3d(0, 0, 0);
  pointer-events: none;
}

/* Show the entire tooltip on hover and focus */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after,
[data-tooltip]:focus:before,
[data-tooltip]:focus:after,
.tooltip:hover:before,
.tooltip:hover:after,
.tooltip:focus:before,
.tooltip:focus:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}

/* Base styles for the tooltip's directional arrow */
.tooltip:before,
[data-tooltip]:before {
  z-index: 1001;
  border: 6px solid transparent;
  background: transparent;
  content: "";
}

/* Base styles for the tooltip's content area */
.tooltip:after,
[data-tooltip]:after {
  z-index: 1000;
  padding: 8px;
  width: 100px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 1);
  color: #fff;
  content: attr(data-tooltip);
  font-size: 14px;
  line-height: 1.2;
}

/* Directions */

/* Top (default) */
[data-tooltip]:before,
[data-tooltip]:after,
.tooltip:before,
.tooltip:after,
.tooltip-top:before,
.tooltip-top:after {
  bottom: 100%;
  left: 50%;
}

[data-tooltip]:before,
.tooltip:before,
.tooltip-top:before {
  margin-left: -6px;
  margin-bottom: -12px;
  border-top-color: #000;
  border-top-color: hsla(0, 0%, 20%, 0.9);
}

/* Horizontally align top/bottom tooltips */
[data-tooltip]:after,
.tooltip:after,
.tooltip-top:after {
  margin-left: -60px;
  text-align: center;
}

[data-tooltip]:hover:before,
[data-tooltip]:hover:after,
[data-tooltip]:focus:before,
[data-tooltip]:focus:after,
.tooltip:hover:before,
.tooltip:hover:after,
.tooltip:focus:before,
.tooltip:focus:after,
.tooltip-top:hover:before,
.tooltip-top:hover:after,
.tooltip-top:focus:before,
.tooltip-top:focus:after {
  -webkit-transform: translateY(-12px);
  -moz-transform:    translateY(-12px);
  transform:         translateY(-12px); 
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
          <a class="dropdown-toggle" data-toggle="dropdown" href='#'>BUY
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='/filter'>ALL</a></li>
            <li><a href='/filter'>FE</a></li>
            <li><a href='/filter'>SE</a></li>
            <li><a href='/filter'>TE</a></li>
            <li><a href='/filter'>BE</a></li>
          </ul>
        </li>
        <li><a href='/sell'>SELL</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name}}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/user">ACCOUNT DETAILS</a></li>
            <li><a href='/'>LOGOUT</a></li>
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

    <br> <br> <br>
    
<!------------- Form -------------------------->
<div class="signup-form">
  <h1 class="h-center gray">Please fill up the book details</h1>

  <form class="fancy-form" method="POST" action="uploadbook" enctype="multipart/form-data">

  <div class="fancy-text-form">
      <input type="hidden" value="{{ Auth::user()->id}}" name="uploader_UID" id="uid" class="white-blue-box form-signup" />
      <label></label>
    </div>

    <div class="fancy-text-form">
      <input type="text" name="book_name" id="name" class="white-blue-box form-signup" />
      <label>Book Name</label>
    </div>

    <div class="fancy-text-form">
      <input type="text" name="book_author" id="author" class="white-blue-box form-signup" />
      <label>Book Author</label>
    </div>
      
      <div class="fancy-text-form">
      <input type="text" name="book_edition" id="edition" class="white-blue-box form-signup" />
      <label>Edition</label>
    </div>
      
      <div class="fancy-text-form">
      <input type="text" name="subject" id="subject" class="white-blue-box form-signup" />
      <label>Subject</label>
    </div>


    <div class="fancy-text-form">
      <select name="year" id="year" class="white-blue-select form-signup">
        <option value=""></option>
        <option value="FE">FE</option>
        <option value="SE">SE</option>
        <option value="TE">TE</option>
        <option value="BE">BE</option>
      </select>
      <label>Year</label>
    </div>
      
      <div class="fancy-text-form">
      <select name="branch" id="year" class="white-blue-select form-signup">
        <option value="all">ALL</option>
        <option value="comp">COMPS</option>
        <option value="it">IT</option>
        <option value="extc">EXTC</option>
        <option value="etrx">ETRX</option>
      </select>
      <label>Branch</label>
    </div>
      
      <div class="fancy-text-form">
      <input type="text" name="price" id="subject" class="white-blue-box form-signup" />
      <label>Price</label>
    </div>
      
      <br><br>
      <div class="fancy-text-form">
        <label>Upload Image</label>
        <input type="file" name="uploadimage" id="file"/>
      </div>

    <div class="fancy-text-form">
      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block" value="submit" >
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </form>
</div>    

   
    
<div id="footer" class="col-sm-12">
        <p id="para">Website designed and developed by:</p>
        <a href=""><p class="names">Abha Mutalik</p></a>
        <a href=""><p class="names">Ananya Navelkar</p></a>
</div>

    
    
<script>
    
//////////function for navigation bar///////////////
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
//////////end of function for navigation bar///////////////
  
//////////function for form/////////////////
$(function() {

  $('.fancy-form .fancy-text-form input, .fancy-form .fancy-text-form select').focusout(function() {

    var focusFancy = $(this).val();

    if (focusFancy === "") {

      $(this).removeClass('focusFancy');

    } else {

      $(this).addClass('focusFancy');
      $(this).removeClass('error');

    }

  });
});




//////////end offunction for form/////////////////
    
$(document).ready(function(){
  $('.navbar-nav li a').click(function(){
    $('.navbar-nav li a').removeClass("navbar-active");
    $(this).addClass("navbar-active");
});
});
    
//    $(".navbar-nav li a").each(function() {   
//    if (this.pathname == window.location.href) {
//        $(this).addClass("navbar-active");
//    }
//});
    
</script>
<!--
<script type="text/javascript">
$(document).ready(function(){
    
$('#upload').submit(function(e){
    e.preventDefault();

    console.log("working.");
    console.log($('#upload').serialize().toString());

$.ajax({
type: "POST",
url: "http://127.0.0.1:8000/uploadbook",
dataType: 'json',
data: $('#upload').serialize(),
success: function(data){
alert("done");
window.location.href = "http://127.0.0.1:8000/sell";
},
});      
}); 
});

</script>
-->

</body>
</html>