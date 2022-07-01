<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/header'); ?>
<?php $this->load->view('user/includes/mini_shopping_card'); ?>
      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu fix"></div>

               <div class="sidebar__search p-relative mt-40 ">
                  <form action="#">
                     <input type="text" placeholder="Search...">
                     <button type="submit"><i class="fad fa-search"></i></button>
                  </form>
               </div>
               <div class="sidebar__cart mt-30">
                  <a href="#">
                     <div class="header__cart-icon">
                        <svg viewBox="0 0 24 24">
                           <circle class="st0" cx="9" cy="21" r="1"/>
                           <circle class="st0" cx="20" cy="21" r="1"/>
                           <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                        </svg>
                     </div>
                     <span class="cart-item">2</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>

         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="sign__shape">
               <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
               <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
               <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
               <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
               <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
               <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55">
                        <h2 class="section__title">Sign in to <br>  recharge direct.</h2>
                        <p>it you don't have an account you can <a href="#">Register here!</a></p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                           <div class="sign__in text-center">
                              <a href="#" class="sign__social text-start mb-15"><i class="fab fa-facebook-f"></i>Sign in with Facebook</a>
                              <p> <span>........</span> Or, <a href="sign-in.php">sign in</a> with your email<span> ........</span> </p>
                           </div>
                        </div>
                        <div class="sign__form">
                           <form action="#">
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Work email</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="e-mail address">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-10">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Password">
                                    <i class="fal fa-lock"></i>
                                 </div>
                              </div>
                              <div class="sign__action d-sm-flex justify-content-between mb-30">
                                 <div class="sign__agree d-flex align-items-center">
                                    <input class="m-check-input" type="checkbox" id="m-agree">
                                    <label class="m-check-label" for="m-agree">Keep me signed in
                                       </label>
                                 </div>
                                 <div class="sign__forgot">
                                    <a href="#">Forgot your password?</a>
                                 </div>
                              </div>
                              <button class="e-btn  w-100"> <span></span> Sign In</button>
                              <div class="sign__new text-center mt-20">
                                 <p>New to Markit? <a href="sign-up.html">Sign Up</a></p>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->
         
      </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>