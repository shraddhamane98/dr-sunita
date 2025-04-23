@php($title = "Contact Dr. Sunita Malladi | Radiologist in Navi Mumbai")
@section('meta_desc')Reach out to Dr. Sunita Malladi, best Radiologist in Navi Mumbai for expert radiology services. Get in touch for appointments and inquiries. @endsection

@extends('layouts.default')

@section('content')

<!-- /.preloader -->
<div class="page-wrapper">

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);"></div><!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title"> Contact Us</h2>
                <ul class="insuba-breadcrumb list-unstyled">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li><span> Contact Us</span></li>
                    <!-- <li><span>Life Insurance</span></li> -->
                </ul><!-- /.insuba-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->




    </section><!-- /.page-header -->



    <section class="contact-area">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="features-two__card">
                                    <div class="features-two__card__bg">
                                        <div class="features-two__card__bg__inner" style="background-image: url(assets/images/resources/features-2-4.jpg);"></div>
                                    </div><!-- /.features-two__card__bg -->
                                    <div class="features-two__card__content">
                                        <div class="features-two__card__icon-box">
                                            <span class="features-two__card__icon"><i class="fa-solid fa-phone"></i></span>
                                        </div><!-- /.features-two__card__icon-box -->
                                        <h3 class="features-two__card__title"><a href="tel:+919004690790">Contact Now </a></h3>
                                        <!-- /.features-two__card__title -->
                                        <a href="tel:+919004690790">
                                            <p class="features-two__card__text">+919004690790</p>
                                        </a>
                                    </div><!-- /.features-two__card__content -->

                                </div><!-- /.features-two__card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="features-two__card">
                                    <div class="features-two__card__bg">
                                        <div class="features-two__card__bg__inner" style="background-image: url(assets/images/resources/features-2-1.jpg);"></div>
                                    </div><!-- /.features-two__card__bg -->
                                    <div class="features-two__card__content">
                                        <div class="features-two__card__icon-box">
                                            <span class="features-two__card__icon"><i class="far fa-envelope"></i></span>
                                        </div><!-- /.features-two__card__icon-box -->
                                        <h3 class="features-two__card__title"><a href="mailto:malladisunita@gmail.com">Mail Us</a></h3>
                                        <a href="mailto:malladisunita@gmail.com">
                                            <p class="features-two__card__text">malladisunita@gmail.com</p>
                                        </a>
                                        <!-- /.features-two__card__title -->

                                    </div><!-- /.features-two__card__content -->

                                </div><!-- /.features-two__card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="features-two__card">
                                    <div class="features-two__card__bg">
                                        <div class="features-two__card__bg__inner" style="background-image: url(assets/images/resources/features-2-1.jpg);"></div>
                                    </div><!-- /.features-two__card__bg -->
                                    <div class="features-two__card__content">
                                        <div class="features-two__card__icon-box">
                                            <span class="features-two__card__icon"><i class="fas fa-map-marker-alt"></i></span>
                                        </div><!-- /.features-two__card__icon-box -->
                                        <h3 class="features-two__card__title"><a href="#">Address</a></h3>
                                        <p class="features-two__card__text">Plot: 37, Eden Gardens, opposite Harmony International School, Sector-5, Kharghar, Navi Mumbai, 410210</p>
                                        <!-- /.features-two__card__title -->

                                    </div><!-- /.features-two__card__content -->

                                </div><!-- /.features-two__card -->
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>



    <!--  -->



</div><!-- /.page-wrapper -->


<!-- Mobile form -->
<div class="container">
<div class="mobile-form">
    <div class="heading-form">
    <h3>Book Appointment </h3>
    </div>
    <form onsubmit="submitForm(); return false;">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Your message" style="height: 143px;"></textarea>
        </div>
        <button type="submit" class="mobile-submit btn btn-primary">Submit</button>
    </form>
</div>
</div>
<!-- Mobile form end -->


<section class="map-area">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.601085853966!2d73.058846!3d19.037292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4adf3031903f82b7%3A0xb0f886159876e2d7!2sDr%20Sunita%20Malladi!5e0!3m2!1sen!2sin!4v1724933517348!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>






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