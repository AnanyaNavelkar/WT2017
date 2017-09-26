<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Book Exchange Portal</title>
    <meta name="viewport" content="width=device-width", initial-scale="1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Pacifico|Questrial|Vast+Shadow" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animations.css') }}" rel="stylesheet">
</head>


<body>
  <!--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div> -->

        <div id="landing">

        
            <div class="container" style="width: 100%;background: url(https://images.freecreatives.com/wp-content/uploads/2016/02/Amazing-Free-Navy-Blue-Texture-Background.jpg);">
                <div class="row">
                    <div class="col-md-12 heading" >
                    <div class="col-md-6">
                    <img src="http://img.talkandroid.com/uploads/2015/09/google-play-books-logo.png">
                       
                         </div>
                        <div class="col-md-6">
                        <h2 id="landing-heading">bookworm</h2>
                        <h4 id="landing-subhead" style="font-size: 50px;">The best portal for exchange of books...</h4>
                    </div>
                    </div>

                </div>
                <!-- <div class="row1"> -->
                <div class="col-md-12" style="background-color:black; position:relative; top:150px; width: 1000px; margin-left: 425px;">
                    <font style="color: white;">
                        <div class="col-md-6 login" style="position: relative;">
                                <!------ Registration page goes here ---->

                                <div class="col-md-6 col-md-offset-4 panel-heading">Login</div>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
</div>
                                <div class=" col-md-6 register">
                                    <div class="col-md-6 col-md-offset-4 panel-heading">Register</div>
                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Name</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </font>
                        </div>
                        <!-- </div> -->
                        </div>


            <div class="image">
                <div class="one col-sm-4">
                    <div id="circular_sell">
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p id="circular-text-sell">Sell</p>
                </div>
                <div class="one col-sm-4">
                    <div id="circular_call">
                        <div class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p id="circular-text-call">Call</p>
                </div>
                <div class="one col-sm-4">
                    <div id="circular_buy">
                        <div class="icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p id="circular-text-buy">Buy</p>
                </div>

            </div>

            <div id="sell">
                <div class="animatedParent col-md-8" data-sequence="1000'">
                  <h1 class='animated rotateInDownLeft desc' data-id="1">  
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Login / Sign Up
                      <br><br>
                      <i class="fa fa-book" aria-hidden="true"></i>
                      Enter the details of the book that you wish to sell
                      <br><br>
                      <i class="fa fa-book" aria-hidden="true"></i>
                      Wait for interested buyers
                      <br><br>
                      <i class="fa fa-book" aria-hidden="true"></i>
                      Aaaand you're done!
                      <br><br>
                  </h1>
              </div>
              <div class="desc-title col-md-4 animatedParent" data-sequence="1000'">
              <div id="flowBoxes">
        <div class="left"><h1 class="animated bounceInDown" data-id="2">Sell</h1>
       </div>
</div>
                     </div>
        </div>


        <div id="call">
            <div class="desc-title col-md-4 animatedParent" data-sequence="1000'">
                <h1 class="animated bounceInDown" data-id="2">Call</h1>
            </div>
            <div class="animatedParent col-md-8" data-sequence="1000'">
                <h1 class='animated rotateInDownRight desc' data-id="1" style="color: cyan;">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    The prospective buyer clicks on "Buy"
                    <br><br>
                    <i class="fa fa-book" aria-hidden="true"></i>
                    An email is sent about the prospective buyer's details to the seller on his/her registered email id
                    <br><br>
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Additionally, a text message is also sent to the seller on his/her registered mobile number
                    <br><br>
                </h1>


            </div>
        </div>

        <div id="buy" style="height: 800px;">
            <div class="animatedParent col-md-8" data-sequence="1000'">
              <h1 class='animated rotateInDownLeft desc' data-id="1">
                  <i class="fa fa-book" aria-hidden="true"></i>
                    The interested buyer first logs in/registers to the portal
                    <br><br>
                  <i class="fa fa-book" aria-hidden="true"></i>
                    The prospective buyer clicks on "Buy"
                    <br><br>
                    <i class="fa fa-book" aria-hidden="true"></i>
                    An email is sent about the prospective buyer's details to the seller on his/her registered email id
                    <br><br>
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Additionally, a text message is also sent to the seller on his/her registered mobile number
                    <br><br>
              </h1>
          </div>
          <div class="desc-title col-md-4 animatedParent" data-sequence="1000'">
            <h1 class="animated bounceInDown" data-id="2">Buy</h1>
        </div>
    </div>
    
    
    <div id="footer" >
        <p id="para">Website designed and developed by:</p>
        <a href=""><p class="names">Abha Mutalik</p></a>
        <a href=""><p class="names">Ananya Navelkar</p></a>
    </div>

</div>
<script src="{{ asset('js/javascript.js') }}"></script>
<script src="{{ asset('js/css3-animate-it.js') }}"></script>
<!--
<script src='css3-animate-it.js'></script>
<script src='javascipt.js'></script>
-->

</body>
</html>