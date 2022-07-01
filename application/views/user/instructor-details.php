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
                  <img src="<?php echo base_url('assets/user/'); ?>assets/img/logo/logo.png" alt="logo">
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

         <!-- instructor details area start -->
         <section class="teacher__area pt-100 pb-110">
            <div class="page__title-shape">
               <img class="page-title-shape-5 d-none d-sm-block" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-1.png" alt="">
               <img class="page-title-shape-6" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-6.png" alt="">
               <img class="page-title-shape-3" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-3.png" alt="">
               <img class="page-title-shape-7" src="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title-shape-4.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="teacher__details-thumb p-relative w-img pr-30">
                        <img src="<?php echo base_url('upload/teachers/'.$single_teacher['t_img']); ?>" alt="">
                        <div class="teacher__details-shape">
                           <img class="teacher-details-shape-1" src="<?php echo base_url('assets/user/'); ?>assets/img/teacher/details/shape/shape-1.png" alt="">
                           <img class="teacher-details-shape-2" src="<?php echo base_url('assets/user/'); ?>assets/img/teacher/details/shape/shape-2.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     <div class="teacher__wrapper">
                        <div class="teacher__top d-md-flex align-items-end justify-content-between">
                           <div class="teacher__info">
                              <h4><?php echo $single_teacher['t_title']; ?></h4>
                               <?php if($single_teacher['t_position_az']){ ?>
                                   <span><?php echo $single_teacher['t_position_az']; ?></span>
                               <?php } ?>

                           </div>
<!--                           <div class="teacher__rating">-->
<!--                              <h5>Review:</h5>-->
<!--                              <div class="teacher__rating-inner d-flex align-items-center">-->
<!--                                 <ul>-->
<!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
<!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
<!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
<!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
<!--                                    <li><a href="#"> <i class="icon_star"></i> </a></li>-->
<!--                                 </ul>-->
<!--                                 <p>4.5</p>-->
<!--                              </div>-->
<!--                           </div>-->
                           <div class="teacher__social-2">
<!--                              <h4>Follow Us:</h4>-->
                              <ul>
                                  <?php if($single_teacher['t_fb']){ ?>
                                      <li>
                                          <a href="<?php echo $single_teacher['t_fb']; ?>">
                                              <i class="social_facebook"></i>
                                          </a>
                                      </li>
                                  <?php } ?>

                                  <?php if($single_teacher['t_instagram']){ ?>
                                      <li>
                                          <a href="<?php echo $single_teacher['t_instagram']; ?>">
                                              <i class="social_instagram"></i>
                                          </a>
                                      </li>
                                  <?php } ?>

                                  <?php if($single_teacher['t_twitter']){ ?>
                                      <li>
                                          <a href="<?php echo $single_teacher['t_twitter']; ?>">
                                              <i class="social_twitter"></i>
                                          </a>
                                      </li>
                                  <?php } ?>

                                  <?php if($single_teacher['t_linkedin']){ ?>
                                      <li>
                                          <a href="<?php echo $single_teacher['t_linkedin']; ?>">
                                              <i class="social_linkedin"></i>
                                          </a>
                                      </li>
                                  <?php } ?>





                              </ul>
                           </div>
<!--                           <div class="teacher__follow mb-5">-->
<!--                              <a href="#" class="teacher__follow-btn">follow <i class="icon_plus"></i> </a>-->
<!--                           </div>-->
                        </div>
                        <div class="teacher__bio">
                           <h3>Short Bio</h3>
                           <?php echo $single_teacher['t_description']; ?>
                        </div>
                        <div class="teacher__courses pt-55">
                           <div class="section__title-wrapper mb-30">
                              <h2 class="section__title">Teacher <span class="yellow-bg yellow-bg-big">Course<img src="<?php echo base_url('assets/user/'); ?>assets/img/shape/yellow-bg.png" alt=""></span></h2>
                           </div>
                           <div class="teacher__course-wrapper">
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="course-details.php">
                                             <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/course-1.jpg" alt="">
                                          </a>
                                          <div class="course__tag">
                                             <a href="#">Art & Design</a>
                                          </div>
                                       </div>
                                       <div class="course__content">
                                          <div class="course__meta d-flex align-items-center justify-content-between">
                                             <div class="course__lesson">
                                                <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                             </div>
                                             <div class="course__rating">
                                                <span><i class="icon_star"></i>4.5 (44)</span>
                                             </div>
                                          </div>
                                          <h3 class="course__title"><a href="course-details.php">Become a product Manager learn the skills & job.</a></h3>
                                          <div class="course__teacher d-flex align-items-center">
                                             <div class="course__teacher-thumb mr-15">
                                                <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/teacher/teacher-1.jpg" alt="">
                                             </div>
                                             <h6><a href="#">Jim Séchen</a></h6>
                                          </div>
                                       </div>
                                       <div class="course__more d-flex justify-content-between align-items-center">
                                          <div class="course__status">
                                             <span>Free</span>
                                          </div>
                                          <div class="course__btn">
                                             <a href="course-details.php" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="course-details.php">
                                             <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/course-2.jpg" alt="">
                                          </a>
                                          <div class="course__tag">
                                             <a href="#" class="sky-blue">Mechanical</a>
                                          </div>
                                       </div>
                                       <div class="course__content">
                                          <div class="course__meta d-flex align-items-center justify-content-between">
                                             <div class="course__lesson">
                                                <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                             </div>
                                             <div class="course__rating">
                                                <span><i class="icon_star"></i>4.5 (44)</span>
                                             </div>
                                          </div>
                                          <h3 class="course__title"><a href="course-details.php">Fundamentals of music theory Learn new</a></h3>
                                          <div class="course__teacher d-flex align-items-center">
                                             <div class="course__teacher-thumb mr-15">
                                                <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/teacher/teacher-2.jpg" alt="">
                                             </div>
                                             <h6><a href="#">Barry Tone</a></h6>
                                          </div>
                                       </div>
                                       <div class="course__more d-flex justify-content-between align-items-center">
                                          <div class="course__status d-flex align-items-center">
                                             <span class="sky-blue">$32.00</span>
                                             <span class="old-price">$68.00</span>
                                          </div>
                                          <div class="course__btn">
                                             <a href="course-details.php" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="course-details.php">
                                             <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/course-3.jpg" alt="">
                                          </a>
                                          <div class="course__tag">
                                             <a href="#" class="green">Development</a>
                                          </div>
                                       </div>
                                       <div class="course__content">
                                          <div class="course__meta d-flex align-items-center justify-content-between">
                                             <div class="course__lesson">
                                                <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                             </div>
                                             <div class="course__rating">
                                                <span><i class="icon_star"></i>3.5 (55)</span>
                                             </div>
                                          </div>
                                          <h3 class="course__title"><a href="course-details.php">Strategy law and organization Foundation</a></h3>
                                          <div class="course__teacher d-flex align-items-center">
                                             <div class="course__teacher-thumb mr-15">
                                                <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/teacher/teacher-3.jpg" alt="">
                                             </div>
                                             <h6><a href="#">Elon Gated</a></h6>
                                          </div>
                                       </div>
                                       <div class="course__more d-flex justify-content-between align-items-center">
                                          <div class="course__status d-flex align-items-center">
                                             <span class="green">$46.00</span>
                                             <span class="old-price">$68.00</span>
                                          </div>
                                          <div class="course__btn">
                                             <a href="course-details.php" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="course-details.php">
                                             <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/course-4.jpg" alt="">
                                          </a>
                                          <div class="course__tag">
                                             <a href="#" class="blue">Marketing</a>
                                          </div>
                                       </div>
                                       <div class="course__content">
                                          <div class="course__meta d-flex align-items-center justify-content-between">
                                             <div class="course__lesson">
                                                <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                             </div>
                                             <div class="course__rating">
                                                <span><i class="icon_star"></i>4.5 (42)</span>
                                             </div>
                                          </div>
                                          <h3 class="course__title"><a href="course-details.php">The business Intelligence analyst Course 2022</a></h3>
                                          <div class="course__teacher d-flex align-items-center">
                                             <div class="course__teacher-thumb mr-15">
                                                <img src="<?php echo base_url('assets/user/'); ?>assets/img/course/teacher/teacher-4.jpg" alt="">
                                             </div>
                                             <h6><a href="#">Eleanor Fant</a></h6>
                                          </div>
                                       </div>
                                       <div class="course__more d-flex justify-content-between align-items-center">
                                          <div class="course__status d-flex align-items-center">
                                             <span class="blue">$62.00</span>
                                             <span class="old-price">$97.00</span>
                                          </div>
                                          <div class="course__btn">
                                             <a href="course-details.php" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- instructor details area end -->

         <!-- cta area start -->
         <section class="cta__area mb--120">
            <div class="container">
               <div class="cta__inner blue-bg fix">
                  <div class="cta__shape">
                     <img src="<?php echo base_url('assets/user/'); ?>assets/img/cta/cta-shape.png" alt="">
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                        <div class="cta__content">
                           <h3 class="cta__title">You can be your own Guiding star with our help</h3>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                        <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                           <a href="contact.php" class="e-btn e-btn-white">Get Started</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta area end -->


      </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>