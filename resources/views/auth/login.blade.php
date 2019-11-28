@extends('layouts.frontend.main')
  
@section('content')
<link rel="stylesheet" href="css/login.css">
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 login-form">
                        <h4>login</h4>
                        <form action="{{{route('login')}}}">
							 {{ csrf_field()}}
                            <input type="email" name="email" id="email" placeholder="e-mail">
                            <input type="password" name="password" id="password" placeholder="password">
                      
                        <input class="check" type="checkbox" name="remember" id="remember"><label for="remember">remember me</label><a href="{{ route('password.request') }}"><span>forget your password?</span></a>
                        <button class="btn btn-block btn-primary"><i class="fa fa-envelope-o" aria-hidden="true"></i>@lang('login.login')</button>
                        <button class="btn btn-block face"><i class="fa fa-facebook-square" aria-hidden="true"></i>login with facebook</button>
							  </form>
                    </div>
                    <div class="col-md-6 create-account">
                        <h4>create your account</h4>
                        <p>Create your customer account in just a few clicks! You can register either using your e-mail address or through your Facebook account.</p>
                        <a href="{{route('register')}}"><button class="btn btn-block btn-primary"><i class="fa fa-envelope-o" aria-hidden="true"></i>create an account via email</button></a>
                        <button class="btn btn-block face"><i class="fa fa-facebook-square" aria-hidden="true"></i>register with facebook</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Start Pre Footer -->
      <section class="pre-footer">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <h4> Quick Links</h4>
                  <ul class="ula">
                    <li><a href="">about us <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                    <li><a href="">Faq <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                    <li><a href="">Help <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                    <li><a href="">My account <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                    <li><a href="">Create account <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                    <li><a href="">Contacts<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
    
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4> Categories</h4>
                    <ul class="ula">
                      <li><a href="">Shops <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                      <li><a href="">Hotels <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                      <li><a href="">Restaurant <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                      <li><a href="">Bars <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                      <li><a href="">Events <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
                      <li><a href="">Fitness <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
    
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <h4> Contacts</h4>
                      <ul class="ula">
                        <li><a href=""><i class="fas fa-home" aria-hidden="true"></i>97845 Baker st. 567
                          Los Angeles - US </a> </li>
                        <li><a href=""><i class="fas fa-headphones-alt" aria-hidden="true"></i>01015683986 </a> </li>
                        <li><a href=""> <i class="far fa-envelope" aria-hidden="true"></i>medhatashour19@gmail.com</a> </li>
                      </ul>
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <h4> Keep in touch</h4>
                      <ul class="ula">
                        <li>
                          <input type="email" placeholder="your email"><button class=" cclr">submit</button>
                        </li>
                        <li class="spli follow">
                          <h5>Follow Us</h5>
                          <ul>
                            <li class="spli"><i class="scl fab fa-facebook-f" aria-hidden="true"></i></li>
                            <li class="spli"><i class="scl fab fa-twitter" aria-hidden="true"></i></li>
                            <li class="spli"><i class="scl fab fa-google-plus-g" aria-hidden="true"></i></li>
                            <li class="spli"><i class="scl fab fa-pinterest-p" aria-hidden="true"></i></li>
                            <li class="spli"><i class="scl fab fa-instagram" aria-hidden="true"></i></li>
    
                          </ul>
                        </li>
    
                      </ul>
                    </div>
    
              </div>
            </div>
          </section>
          <!-- End Pre footer -->
    
@endsection