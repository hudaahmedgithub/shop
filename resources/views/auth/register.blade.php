@extends('layouts.frontend.main')
@section('content')
 <link rel="stylesheet" href="{{asset('css/register.css')}}">
<div class="register">
            <div class="container">
                    <div class="register-form">
                        <h4>create account</h4>
                        <form action="{{route('register')}}"method="post">
							  @csrf
                            <input type="text" name="first-name" id="first" placeholder="first name">
                            <input type="text" name="last-name" id="last" placeholder="last name">
                            <input type="email" name="email" id="email" placeholder="e-mail">
                            <input type="password" name="password" id="password" placeholder="password">
                            <input type="tel" name="phone" id="phone" placeholder="phone number (optional)">
                     
                        <input class="check" type="checkbox" name="accept" id="accept"><label for="accept">i accept <a href="#">terms & conditions</a></label><br>
                        <input class="check" type="checkbox" name="receive" id="receive"><label for="receive">i want to receive your newsletter with deals and best offers</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              user
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              customer
                            </label>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">create account</button>
						<button class="btn btn-block face"><i class="fa fa-facebook-square" aria-hidden="true"></i><a href="https://www.facebook.com/">register with facebook</a></button>
                        <div class="go-login"><p>Already have an account?</p><a href="{{route('login')}}">@lang('login.login')</a></div>
							   </form>
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
                    <li><a href="{{route('register')}}">Create account <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a> </li>
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