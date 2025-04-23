@php($title = "Radiology Services in Navi Mumbai by Dr. Sunita Malladi")
@section('meta_desc')Explore advanced radiology services in Navi Mumbai offered by Dr. Sunita Malladi, including ultrasounds, biopsies, and Doppler scans.  @endsection

@extends('layouts.default')

@section('content')

<!-- /.preloader -->
<div class="page-wrapper">

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);"></div><!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title">Services</h2>
                <ul class="insuba-breadcrumb list-unstyled">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li><span>Services</span></li>
                    <!-- <li><span>Life Insurance</span></li> -->
                </ul><!-- /.insuba-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->

    </section>





    <section class=" section-space">

     <div class="container">
       
         <!-- /.services-three__top -->
         <div class="" data-owl-options="{
            &quot;items&quot;: 1,
            &quot;margin&quot;: 10,
            &quot;loop&quot;: true,
            &quot;smartSpeed&quot;: 700,
            &quot;nav&quot;: false,
            &quot;dots&quot;: true,
            &quot;navText&quot;: [&quot;<i class=\&quot;fas fa-chevron-left\&quot;></i>&quot;,&quot;<i class=\&quot;fas fa-chevron-right\&quot;></i>&quot;],
            &quot;autoplay&quot;: true,
            &quot;responsive&quot;: {
                &quot;0&quot;: {
                    &quot;items&quot;: 1,
                    &quot;nav&quot;: true,
                    &quot;dots&quot;: false,
                    &quot;margin&quot;: 10
                },
                &quot;768&quot;: {
                    &quot;items&quot;: 2,
                    &quot;margin&quot;: 30
                },
                &quot;992&quot;: {
                    &quot;items&quot;: 3,
                    &quot;margin&quot;: 30
                }
            }
        }">

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
                                
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('usg-breast-sonomammography')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->
                  <!-- /.item -->
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/nt-scan-service-image.jpg'); }}" alt="USG Breast/sonomammography">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/nt-scan-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">NT Scan</a></h3>
                                 <!-- /.service-card-three__title -->
                            
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('nt-scan')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->
                 <!-- /.item -->
                 <div class="col-md-4 mt-30">
                     <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                         <div class="service-card-three">
                             <div class="service-card-three__image">
                                 <img src="{{ asset('/resources/assets/images/services-img/usg-thyroid-service-img.jpg'); }}" alt="USG Breast/sonomammography">
                             </div>
                             <!-- /.service-card-three__image -->
                             <div class="service-card-three__content">
                                 <div class="service-card-three__icon-box">
                                     <span class="service-card-three__icon"><img src="{{ asset('/resources/assets/images/icons/usg-thyroid-icon.png'); }}" alt=""></span>
                                 </div>
                                 <!-- /.service-card-three__icon-box -->
                                 <h3 class="service-card-three__title"><a href="#">USG Thyroid/Neck/Local Part</a></h3>
                                 <!-- /.service-card-three__title -->
                            
                                 <!-- /.service-card-three__text -->
                                 <a href="{{ route('usg-thyroid-neck-local-part')}}" class="service-card-three__link">Read More <i class="icon-plus"></i></a>
                                 <!-- /.service-card-three__link -->
                             </div>

                         </div>
                         <!-- /.service-card-three -->
                     </div>
                 </div>
                 <!-- /.item -->


             </div>



             <!-- /.about-two__text-box -->

     

         </div>
         <!-- /.services-three__carousel -->
     </div>
     <!-- /.container -->
 </section>







</div><!-- /.page-wrapper -->


<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="insuba-btn insuba-btn--base">
                <i class="icon-search"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>

@stop