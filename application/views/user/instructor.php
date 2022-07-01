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

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Instructor</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Instructor</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- teacher area start -->
         <section class="teacher__area pt-115 pb-110">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3">
                     <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">Our Most <br>
                           Popular <span class="yellow-bg"> Teachers <img src="<?php echo base_url('assets/user/'); ?>assets/img/shape/yellow-bg-2.png" alt="">  </span> <br>
                        </h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                     </div>
                  </div>
               </div>
               <div class="row">

                   <?php foreach ($all_teachers as $all_teachers_key){ ?>
                       <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                           <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                               <div class="teacher__thumb w-img fix">
                                   <a href="<?php echo base_url('instructor_single/'.$all_teachers_key['t_id']); ?>">
                                       <img src="<?php echo base_url('upload/teachers/'.$all_teachers_key['t_img']); ?>" alt="">
                                   </a>
                               </div>
                               <div class="teacher__content">
                                   <h3 class="teacher__title"><?php echo $all_teachers_key['t_title']; ?>,</h3>
                                   <span><?php echo $all_teachers_key['t_position_az']; ?></span>

                                   <div class="teacher__social">
                                       <ul>
                                           <?php if ($all_teachers_key['t_fb']){ ?>
                                               <li><a target="_blank" href="<?php echo $all_teachers_key['t_fb']; ?>"><i class="social_facebook"></i></a></li>
                                           <?php } ?>

                                           <?php if ($all_teachers_key['t_instagram']){ ?>
                                               <li><a href="<?php echo $all_teachers_key['t_instagram']; ?>"><i class="social_instagram"></i></a></li>
                                            <?php } ?>

                                           <?php if ($all_teachers_key['t_twitter']){ ?>
                                               <li><a href="<?php echo $all_teachers_key['t_twitter']; ?>"><i class="social_twitter"></i></a></li>
                                            <?php } ?>

                                           <?php if ($all_teachers_key['t_linkedin']){ ?>
                                               <li><a href="<?php echo $all_teachers_key['t_linkedin']; ?>"><i class="social_linkedin"></i></a></li>
                                           <?php } ?>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php } ?>



<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="--><?php //echo base_url('instructor_single/1'); ?><!--">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-2.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Kelly Franklin,</h3> -->
<!--                           <span>Desginer</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-3.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Hilary Ouse,</h3> -->
<!--                           <span>Markater</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-5.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Lillian Walsh,</h3> -->
<!--                           <span>CO Founder</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-4.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Shahnewaz,</h3> -->
<!--                           <span>Web Developer</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-6.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Nicola Tesla,</h3> -->
<!--                           <span>Engineer</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
               </div>
            </div>
         </section>
         <!-- teacher area end -->

         <!-- banner area start -->
         <section class="banner__area pb-80">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="banner__item p-relative mb-40" data-background="<?php echo base_url('assets/user/'); ?>assets/img/banner/banner-bg-1.jpg">
                        <div class="banner__content">
                           <span>Free</span>
                           <h3 class="banner__title">
                              <a href="course-details.php">Germany Foundation <br> Document</a>
                           </h3>
                           <a href="course-grid.html" class="e-btn e-btn-2">View Courses</a>
                        </div>
                        <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">
                           <img src="<?php echo base_url('assets/user/'); ?>assets/img/banner/banner-img-1.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="banner__item p-relative mb-40" data-background="<?php echo base_url('assets/user/'); ?>assets/img/banner/banner-bg-2.jpg">
                        <div class="banner__content">
                           <span class="orange">new</span>
                           <h3 class="banner__title">
                              <a href="course-details.php">Online Courses <br>From Eduka University</a>
                           </h3>
                           <a href="course-grid.html" class="e-btn e-btn-2">Find Out More</a>
                        </div>
                        <div class="banner__thumb banner__thumb-2 d-none d-sm-block d-md-none d-lg-block">
                           <img src="<?php echo base_url('assets/user/'); ?>assets/img/banner/banner-img-2.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- banner area end -->
      </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>