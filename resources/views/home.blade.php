@php($title = "Dr. Sunita Malladi | Top Radiologist in Navi Mumbai")
@section('meta_desc')Consult Dr. Sunita Malladi, a leading radiologist in Navi Mumbai for expert imaging diagnostics. Book your appointment today for personalized care.  @endsection

 @extends('layouts.default')

 @section('content')


 <!-- slider start -->

 <div class="container-auto ">
     <div class="row ">

         <div id="carousel-example-generic" class="carousel-fade carousel slide" data-ride="carousel">
             <!-- Indicators -->
             <ol class="carousel-indicators">
                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                 <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>
             </ol>
             <!-- Wrapper for slides -->
             <div class="carousel-inner desk-view" role="listbox">
                 <div class="item active">
                     <a href="{{ route('contact')}}">
                         <img src="{{ asset('/resources/assets/images/banners/final.png'); }}" alt="...">
                     </a>
                 </div>
                 <div class="item">
                     <a href="{{ route('contact')}}">
                         <img src="{{ asset('/resources/assets/images/banners/dr-sunita-malladi-banner-2.jpg'); }}" alt="...">

                     </a>

                 </div>
                 <div class="item">
                     <a href="{{ route('contact')}}">
                         <img src="{{ asset('/resources/assets/images/banners/dr-sunita-malladi-banner-1.jpg'); }}" alt="...">
                     </a>
                 </div>
             </div>



             <!-- Controls -->
             <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
             </a>
             <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
             </a>
         </div>


     </div>
 </div>

 <!-- Mobile View -->
 <div class="container-auto mobile-view">
     <div class="row ">

         <div id="carousel-example-generic1" class="carousel-fade carousel slide" data-ride="carousel">

             <ol class="carousel-indicators">
                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                 <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>
             </ol>

             <div class="carousel-inner" role="listbox">
                 <div class="item active">
                     <a href="{{ route('contact')}}">
                         <img src="{{ asset('/resources/assets/images/banners/final-mobile.png'); }}" alt="...">
                     </a>
                 </div>
                 <div class="item">
                     <a href="{{ route('contact')}}">
                         <img src="{{ asset('/resources/assets/images/banners/dr-sunita-malladi-mobile-banner-2.jpg'); }}" alt="...">
                     </a>
                 </div>
                 <div class="item">
                     <a href="{{ route('contact')}}">
                         <img src="{{ asset('/resources/assets/images/banners/dr-sunita-malladi-mobile-banner-3.jpg'); }}" alt="...">
                     </a>
                 </div>
             </div>

             <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
             </a>
             <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
             </a>
         </div>


     </div>
 </div>
 <!-- Mobile View End-->



 <!-- slider End -->

 <section class="about-two" id="about">
     <div class="container">
         <div class="row gutter-y-60">
             <div class="col-xl-6 fadeInUp">
                 <div class="about-two__image fadeInUp">
                     <div class="consultations-one__inner__image  fadeIn animated">
                         <img src="{{ asset('/resources/assets/images/banners/dr-sunita-malladi.jpg'); }}" alt=" consultations ">
                     </div>


                 </div>

             </div>
             <!-- /.col-xl-6 -->
             <div class="col-xl-6">
                 <div class="about-two__content">
                     <div class="sec-title sec-title--two @@extrClassName wow fadeInUp" data-wow-duration="1500ms">
                         <div class="sec-title__top">

                         </div>
                         <!-- /.sec-title__top -->
                         <h1 class="sec-title__title">Dr. Sunita V Malladi </h1>
                         <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="1500ms">
                             <li>
                                 <span class="about-two__list__icon"><i class="fas fa-angle-double-right"></i></span> Radiologist MD, DNB, DMRE
                             </li>
                         </ul>

                         <!-- /.sec-title__title -->
                     </div>
                     <!-- /.sec-title -->
                     <div class="about-two__text-box-1 wow fadeInUp" data-wow-duration="1500ms">
                         <p class="about-two__text">Dr Sunita V Malladi is a practicing Consultant Radiologist at MITR Hospital Kharghar. She brings with her an experience of 20 years of practice in various aspects of radiology. Currently at MITR, she offers her services in performing all types of ultrasound studies including routines sonographies like Abdomen, Pelvis, KUB, Breast, Neck, Scrotum, Local parts and also specialized studies like Venous and Arterial Dopplers of different areas of body. Her expertise includes Fetal/ Obstetric ultrasound for which she has undergone intensive training through ScholarMD fetal medicine training program.</p>
                         <p class="about-two__text pt-20">Her areas of interest encompass pelvic and breast ultrasound. She's adept at performing and interpreting 3D Transvaginal (TVS) and Transrectal (TRUS) ultrasounds. She has rich experience in performing pediatric ultrasound especially challenging cases of pediatric urology and urogenital problems. She's also involved in Ultrasound guided procedures like FNAC, Biopsies, Aspirations including TRUS guided biopsy of prostate which are conducted regularly at MITR. Besides reporting X-rays accurately, she's proficient in conducting and reporting various X-Ray procedures like IVP, HSG, RGU and MCU as well.</p>

                     </div>
                     <!-- /.about-two__text-box -->
                     <a href="{{ route('about')}}" class="about-read">Read More <i class="fa-solid fa-angles-right"></i></a>

                     <!-- /.skills-item -->
                 </div>
                 <!-- /.about-two__skill -->
             </div>
             <!-- /.about-two__content -->
         </div>
         <!-- /.col-xl-6 -->


     </div>
     <!-- /.row gutter-y-60 -->
     </div>
     <!-- /.container -->
 </section>
 <!-- /.about-two -->





 <!-- services-2 -->
 <section class="services-three section-space">

     <div class="container">
         <div class="sec-title sec-title--two sec-title--center wow fadeInUp" data-wow-duration="1500ms">
             <div class="sec-title__top">
                 <div class="sec-title__box">
                     <div class="sec-title__box__inner"></div>
                 </div>

                 <div class="sec-title__box sec-title__box--right">
                     <div class="sec-title__box__inner"></div>
                 </div>
                 <!-- /.sec-title__box -->
             </div>
             <!-- /.sec-title__top -->
             <h3 class="sec-title__title"> Services</h3>
             <!-- /.sec-title__title -->
             <!-- /.sec-title__box -->
             <h6 class="sec-title__tagline">Your Trusted Partner in Advanced Diagnostic Imaging for Every Stage of Care</h6>
             <!-- /.sec-title__tagline -->
         </div>
         <!-- /.services-three__top -->
         <div class="" data-owl-options='{
            "items": 1,
            "margin": 10,
            "loop": true,
            "smartSpeed": 700,
            "nav": false,
            "dots": true,
            "navText": ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
            "autoplay": true,
            "responsive": {
                "0": {
                    "items": 1,
                    "nav": true,
                    "dots": false,
                    "margin": 10
                },
                "768": {
                    "items": 2,
                    "margin": 30
                },
                "992": {
                    "items": 3,
                    "margin": 30
                }
            }
        }'>

             <div class="row">
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/obstetric-ultrasound-routine-ultrasound.jpg'); }}" alt="Obstetric Ultrasound & Routine Ultrasound">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/obstetrics-ultrasound-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">Obstetric Ultrasound & Routine Ultrasound</a></h3>
                                 <!-- /.service-card-three__title -->
                                 <p class="service-card-three__text">Obstetric & Routine Ultrasound, Accurate Imaging Solutions</p>
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('obstetric-ultrasound-routine-ultrasound')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/2D-3D-4D-anomaly-scan-NT.jpg'); }}" alt="2D/3D/4D Anomaly scan NT scan">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/anomaly-scan-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">2D/3D/4D Anomaly Scan</a></h3>
                                 <!-- /.service-card-three__title -->
                                 <p class="service-card-three__text">Precise 2D/3D/4D Anomaly for Your Peace of Mind</p>
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('anomaly-scan')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/transrectal-transvaginal-scan-service.jpg'); }}" alt="Business Insurance">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/transrectal-transvaginal-scan-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">Transrectal & Transvaginal Scan</a></h3>
                                 <!-- /.service-card-three__title -->
                                 <p class="service-card-three__text">Accurate Transrectal & Transvaginal Scans for precise diagnosis</p>
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('transrectal-transvaginal-scan')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/colour-doppler-service-img.jpg'); }}" alt="Colour Doppler">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/color-doppler-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">Colour Doppler</a></h3>
                                 <!-- /.service-card-three__title -->
                                 <p class="service-card-three__text">Advanced Colour Doppler for detailed, accurate diagnostics.</p>
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('colour-doppler')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/usg-guided-procedures-img.jpg'); }}" alt="USG Guided procedures/ Biopsy">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/usg-guided-procedures-biopsy-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">USG Guided procedures/ Biopsy</a></h3>
                                 <!-- /.service-card-three__title -->
                                 <p class="service-card-three__text">Precise USG-guided procedures and biopsy services for accurate diagnosis.</p>
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('usg-guided-procedures-biopsy')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/usg-breast-sonomammography.jpg'); }}" alt="USG Breast/sonomammography">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/usg-breast-sonomammography-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">USG Breast/sonomammography</a></h3>
                                 <!-- /.service-card-three__title -->
                                 <p class="service-card-three__text">Accurate USG Breast/sonomammography for early detection and diagnosis</p>
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('usg-breast-sonomammography')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->

             </div>


             <!-- /.about-two__text-box -->

             <div class="view-all-btn mt-30">
                 <a href="{{ route('services')}}" class="about-read-view ">View All <i class="fa-solid fa-angles-right"></i></a>
             </div>

         </div>
         <!-- /.services-three__carousel -->
     </div>
     <!-- /.container -->
 </section>
 <!-- services-2 end -->




 <!-- why choose  -->
 <section class="blog-three section-space-top section-space-bottom2" id="blog">
     <div class="container">
         <div class="sec-title sec-title--center wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">

             <h3 class="sec-title__title">Why Choose Dr. Sunita V. Malladi for Radiology Services ?</h3><!-- /.sec-title__title -->
         </div><!-- /.sec-title -->
         <div class="row gutter-y-50">
             <div class="col-lg-6 wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                 <a href="#" class="blog-three__blog">
                     <img src="{{ asset('/resources/assets/images/banners/dr-sunita-choose.png'); }}" alt="blog" class="blog-three__blog__image">

                 </a><!-- /.blog-three__blog -->
             </div><!-- /.col-lg-6 -->
             <div class="col-lg-6">
                 <ul class="blog-three__list list-unstyled">
                     <li>
                         <div class="blog-three__card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                             <div class="blog-three__card__date">
                                 <img src="{{ asset('/resources/assets/images/icons/extensive-experience-icon.png'); }}" alt="">
                             </div><!-- /.blog-three__card__date -->


                             <div class="blog-three__card__content">
                                 <h3 class="blog-three__card__title"><a href="#">Extensive Experience:</a></h3>
                                 <p class="blog-three__card__text">Dr. Sunita Malladi, with 20 years in radiology, provides precise and reliable imaging diagnoses.</p>
                             </div><!-- /.blog-three__card__content -->




                         </div><!-- /.blog-three__card -->
                     </li>



                     <li>
                         <div class="blog-three__card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                             <div class="blog-three__card__date">
                                 <img src="{{ asset('/resources/assets/images/icons/ultrasound-expertise-icon.png'); }}" alt="">
                             </div><!-- /.blog-three__card__date -->
                             <div class="blog-three__card__content">
                                 <h3 class="blog-three__card__title"><a href="#">Comprehensive Ultrasound Expertise:</a></h3>
                                 <p class="blog-three__card__text"> Dr. Sunita Malladi provides a full spectrum of ultrasound services, including routine and specialized sonographies, Doppler studies, and complex fetal, obstetric, and pediatric ultrasounds. Her specialized training in fetal medicine and expertise in pediatric urology ensures precise diagnostics and compassionate care for patients of all ages.</p>
                             </div><!-- /.blog-three__card__content -->

                         </div><!-- /.blog-three__card -->
                     </li>


                     <li>
                         <div class="blog-three__card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                             <div class="blog-three__card__date">
                                 <img src="{{ asset('/resources/assets/images/icons/patient-centered-approach-icon.png'); }}" alt="">
                             </div><!-- /.blog-three__card__date -->
                             <div class="blog-three__card__content">
                                 <h3 class="blog-three__card__title"><a href="#">Patient-Centered Approach</a></h3>
                                 <p class="blog-three__card__text">Dr. Sunita Malladi approach combines technical precision with compassion, dedicating time to thoroughly analyze scans for accurate diagnosis.</p>
                             </div><!-- /.blog-three__card__content -->

                         </div><!-- /.blog-three__card -->
                     </li>
                 </ul><!-- /.blog-three__list -->
             </div><!-- /.col-lg-6 -->
         </div><!-- /.row gutter-y-50 -->
     </div><!-- /.container -->
 </section>
 <!-- why choose end -->



 <!-- testimonials -->
 <section class="testimonials-two section-space-bottom" id="testimonials">
     <div class="container">
         <div class="sec-title sec-title--center wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">

             <h3 class="sec-title__title pt-40">Patient Testimonials</h3><!-- /.sec-title__title -->
         </div><!-- /.sec-title -->
         <div class="testimonials-two__inner">
             <div class="testimonials-two__carousel insuba-owl__carousel insuba-owl__carousel--with-shadow insuba-owl__carousel--basic-nav insuba-owl__carousel--custom-dots owl-carousel owl-theme owl-loaded owl-drag" data-thumb-elm="#testimonials-two__thumb__custom-dots" data-owl-options="{
            &quot;items&quot;: 1,
            &quot;margin&quot;: 1,
            &quot;loop&quot;: false,
            &quot;smartSpeed&quot;: 700,
            &quot;nav&quot;: false,
            &quot;dots&quot;: true,
            &quot;navText&quot;: [&quot;<i class=\&quot;fas fa-chevron-left\&quot;></i>&quot;,&quot;<i class=\&quot;fas fa-chevron-right\&quot;></i>&quot;],
            &quot;autoplay&quot;: true
        }">
                 <!-- /.item -->
                 <!-- /.item -->
                 <!-- /.item -->
                 <!-- /.item -->
                 <!-- /.item -->
                 <!-- /.item -->
                 <div class="owl-stage-outer">
                     <div class="owl-stage" style="transform: translate3d(-4720px, 0px, 0px); transition: all 0.7s ease 0s; width: 7080px;">
                         <div class="owl-item active" style="width: 1170px; margin-right: 10px;">
                             <div class="item">
                                 <div class="testimonials-two__item">
                                     <div class="testimonials-two__content">
                                         <div class="testimonials-two__image">
                                             <img src="{{ asset('/resources/assets/images/icons/google-icon.png'); }}" alt="">

                                         </div><!-- /.testimonials-two__image -->

                                         <p class="testimonials-two__quote">Very co-operative doctor. Shown great patience in conducting anamoly scan. Immensely satisfied with the service. Would recommend to everyone.</p><!-- /.testimonials-two__quote -->
                                         <h3 class="testimonials-two__name">Rukayya Kadiri</h3><!-- /.testimonials-two__name -->
                                         <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                     </div><!-- /.testimonials-two__content -->

                                 </div><!-- /.testimonials-two__item -->
                             </div>
                         </div>
                         <div class="owl-item" style="width: 1170px; margin-right: 10px;">
                             <div class="item">
                                 <div class="testimonials-two__item">
                                     <div class="testimonials-two__content">
                                         <div class="testimonials-two__image">
                                             <img src="{{ asset('/resources/assets/images/icons/google-icon.png'); }}" alt="">

                                         </div><!-- /.testimonials-two__image -->
                                         < <p class="testimonials-two__quote">My experience in this hospital is very good .I had my 5th month anomaly scan done here.. doctors are very supportive .the hospital reports are accurate and the baby images are very beautiful.doctors and oll other staff take care to ensure that the patient does not any inconveniences in this hospital..</p><!-- /.testimonials-two__quote -->
                                             <h3 class="testimonials-two__name">Snehal Chawan</h3><!-- /.testimonials-two__name -->
                                             <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                     </div><!-- /.testimonials-two__content -->

                                 </div><!-- /.testimonials-two__item -->
                             </div>
                         </div>
                         <div class="owl-item" style="width: 1170px; margin-right: 10px;">
                             <div class="item">
                                 <div class="testimonials-two__item">
                                     <div class="testimonials-two__content">
                                         <div class="testimonials-two__image">
                                             <img src="{{ asset('/resources/assets/images/icons/google-icon.png'); }}" alt="">

                                         </div><!-- /.testimonials-two__image -->

                                         <p class="testimonials-two__quote">My experience in this hospital is very good. I did my wife's pregnancy scan ' Anomaly Scan' here. Doctors are very good. Although the position was not available due to the movement of the baby, the doctor was very supportive. She was taken back to back and scanned. The reports done in this hospital are accurate and the images of the baby are also beautiful. All the staff of the hospital are very cooperative from the reception. Patients are treated with respect.</p><!-- /.testimonials-two__quote -->
                                         <h3 class="testimonials-two__name">greenvallley satara</h3>
                                         <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><!-- /.testimonials-two__name -->

                                     </div><!-- /.testimonials-two__content -->

                                 </div><!-- /.testimonials-two__item -->
                             </div>
                         </div>
                         <div class="owl-item" style="width: 1170px; margin-right: 10px;">
                             <div class="item">
                                 <div class="testimonials-two__item">
                                     <div class="testimonials-two__content">
                                         <div class="testimonials-two__image">
                                             <img src="{{ asset('/resources/assets/images/icons/google-icon.png'); }}" alt="">

                                         </div><!-- /.testimonials-two__image -->

                                         <p class="testimonials-two__quote">Doctor is polite, professional and accurately diagnosed the issues and great supporting staff.</p><!-- /.testimonials-two__quote -->
                                         <h3 class="testimonials-two__name">Sanit Srivastava</h3>
                                         <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><!-- /.testimonials-two__name -->

                                     </div><!-- /.testimonials-two__content -->

                                 </div><!-- /.testimonials-two__item -->
                             </div>
                         </div>
                         <div class="owl-item " style="width: 1170px; margin-right: 10px;">
                             <div class="item">
                                 <div class="testimonials-two__item">
                                     <div class="testimonials-two__content">
                                         <div class="testimonials-two__image">
                                             <img src="{{ asset('/resources/assets/images/icons/google-icon.png'); }}" alt="">

                                         </div><!-- /.testimonials-two__image -->

                                         <p class="testimonials-two__quote">Dr Sunita Malladi is best female sonologist in Kharghar. She is having very good experience and very humble doctor.</p><!-- /.testimonials-two__quote -->
                                         <h3 class="testimonials-two__name">Laxman shelke</h3>
                                         <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><!-- /.testimonials-two__name -->

                                     </div><!-- /.testimonials-two__content -->

                                 </div><!-- /.testimonials-two__item -->
                             </div>
                         </div>
                         <div class="owl-item" style="width: 1170px; margin-right: 10px;">
                             <div class="item">
                                 <div class="testimonials-two__item">
                                     <div class="testimonials-two__content">
                                         <div class="testimonials-two__image">
                                             <img src="{{ asset('/resources/assets/images/icons/google-icon.png'); }}" alt="">

                                         </div><!-- /.testimonials-two__image -->

                                         <p class="testimonials-two__quote">The procedure was very hastle free. Dr. Sunita Malladi and team have been very cooperative and patiently handled my grandmother's concern. Thanks to the Sonography department for making sure that the reports generated are giving a detailed insight.</p><!-- /.testimonials-two__quote -->
                                         <h3 class="testimonials-two__name">Meghna Chandrasekharan</h3>
                                         <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><!-- /.testimonials-two__name -->

                                     </div><!-- /.testimonials-two__content -->

                                 </div><!-- /.testimonials-two__item -->
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="owl-dotss"><button role="button" class="owl-dot" aria-label="carousel button"><span></span></button><button role="button" class="owl-dot" aria-label="carousel button"><span></span></button><button role="button" class="owl-dot" aria-label="carousel button"><span></span></button><button role="button" class="owl-dot" aria-label="carousel button"><span></span></button><button role="button" class="owl-dot active" aria-label="carousel button"><span></span></button><button role="button" class="owl-dot" aria-label="carousel button"><span></span></button></div>


             </div>
             <div class="view-all-btn">
                 <a href="{{ route('testimonials')}}" class="about-read-view ">View All <i class="fa-solid fa-angles-right"></i></a>
             </div>
         </div><!-- /.testimonials-two__inner -->
     </div><!-- /.container -->
 </section>
 <!-- testimonials end -->

 <!-- petient  -->
 <section class="need-contact video-one">
     <div class="sec-title sec-title--two @@extrClassName wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
         <div class="sec-title__top">
             <div class="sec-title__box">
                 <div class="sec-title__box__inner"></div>
             </div><!-- /.sec-title__box -->

         </div><!-- /.sec-title__top -->
         <h3 class="sec-title__title text-center">Patient Education Videos</h3><!-- /.sec-title__title -->
     </div><!-- /.sec-title -->
     <div class="video-one__description wow fadeInUp animated text-center" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
         <p class="video-one__text">Dr. Sunita Malladi simplifies radiology concepts in these educational Videos </p><!-- /.video-one__text -->
     </div><!-- /.video-one__description -->


     <div class="need-contact__bg insuba-jarallax" data-jarallax="" data-speed="0.3s" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(assets/images/backgrounds/need-contact-bg.jpg);">
         <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
             <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;file:///C:/Users/dev/Desktop/Dr-Sunita-Malladi-template/bracketweb.com/insuba-html/assets/images/backgrounds/need-contact-bg.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1903px; height: 565.1px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 40.95px; transform: translate3d(0px, 2.90625px, 0px);"></div>
         </div>
     </div><!-- /.need-contact__bg -->
     <div class="container">
         <div class="row gutter-y-30 align-items-center">
             <div class="col-lg-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                 <div class="need-contact__left">

                     <iframe width="560" height="315" src="https://www.youtube.com/embed/MM3PvUmlhbM?si=WrheDBcPRO4MKSO2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>



                 </div><!-- /.need-contact__left -->
             </div><!-- /.col-lg-6 -->
             <div class="col-lg-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                 <div class="need-contact__right">


                     <iframe width="560" height="315" src="https://www.youtube.com/embed/tTSNakOMxd0?si=O6EsICtIKMCzSJ_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


                 </div><!-- /.need-contact__right -->
             </div><!-- /.col-lg-6 -->
         </div><!-- /.row gutter-y-30 -->
     </div><!-- /.container -->

     <div class="video-one__button wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;justify-content: center;
    margin: auto;
    text-align: center;
    display: flex;
    padding-top: 35px;">
         <a href="{{ route('patient-info')}}" class="video-one__btn insuba-btn">
             <span>View All</span>
             <span class="insuba-btn__icon-box">
                 <span class="insuba-btn__icon"><i class="fas fa-arrow-right"></i></span>
             </span>
         </a><!-- /.video-one__btn insuba-btn -->
     </div><!-- /.video-one__button -->
 </section>
 <!-- petient end  -->


 @stop