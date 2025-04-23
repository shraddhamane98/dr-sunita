@php($title = "About Dr. Sunita Malladi | first branch")
@section('meta_desc')Learn more about Dr. Sunita Malladi, a highly experienced radiologist offering expert imaging diagnostics in Navi Mumbai.@endsection

@extends('layouts.default')

@section('content')

<!-- /.preloader -->
<div class="page-wrapper">

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);"></div><!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title">About</h2>
                <ul class="insuba-breadcrumb list-unstyled">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li><span>About</span></li>
                    <!-- <li><span>Life Insurance</span></li> -->
                </ul><!-- /.insuba-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->




    </section><!-- /.page-header -->

    <!-- main content  -->
    <section class="about-two" id="about">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="about-two__image wow fadeInUp" data-wow-duration="1500ms">
                        <div class=" wow fadeIn animated" data-wow-duration="1500ms">
                            <img src="{{ asset('/resources/assets/images/banners/dr-sunita-malladi-rediologist-img.png'); }}" alt="consultations">
                        </div>


                    </div>

                </div>
                <!-- /.col-xl-6 -->
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title sec-title--two @@extrClassName wow fadeInUp" data-wow-duration="1500ms">
                            <div class="sec-title__top">
                                <!-- <div class="sec-title__box">
                                        <div class="sec-title__box__inner"></div>
                                    </div> -->
                                <!-- /.sec-title__box -->
                                <!-- <h6 class="sec-title__tagline">About Company</h6> -->
                                <!-- /.sec-title__tagline -->
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


<!-- section-1 -->
<section class="eduction-section mt-30">
    <div class="container">
        <div class="row gutter-y-30 align-items-center education-bg">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="need-contact__left">
                    <h3 class="need-contact__title">Education:</h3><!-- /.need-contact__title -->
                    <ul class="need-contact__list list-unstyled">
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                            <span class="bold-txt">MBBS: </span> Sheth NHL Municipal Medical College, Ahmedabad
                        </li>
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                            <span class="bold-txt">MD, DMRE Radiodiagnosis: </span> KM School of Post Graduate Medicine, Vadilal Sarabhai Hospital, Ahmedabad, 2002
                        </li>
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                            <span class="bold-txt">DNB Radiodiagnosis: </span> National Board of Examinations, New Delhi
                        </li>

                    </ul><!-- /.need-contact__list -->
                </div><!-- /.need-contact__left -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row gutter-y-30 -->
    </div>
</section>
<!-- section-1 end -->

<!-- section-2 -->
<section class="eduction-section">
    <div class="container">
        <div class="row gutter-y-30 align-items-center education-bg">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="need-contact__left">
                    <h3 class="need-contact__title">Experience:</h3><!-- /.need-contact__title -->
                    <div class="col-md-6">
                    <ul class="need-contact__list list-unstyled">
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                            <span class="bold-txt">Current Position: </span> <br> Consultant Radiologist at MITR Hospital, Kharghar

                        </li>
                        <ul class="edu-list">
                            <li><span class="need-contact__list__icon">
                                    <i class="icon-tick"></i>
                                </span>Specializes in all types of ultrasound studies including routine and specialized scans.</li>
                            <li><span class="need-contact__list__icon">
                                    <i class="icon-tick"></i>
                                </span>Conducts ultrasound-guided procedures such as FNAC, biopsies, aspirations, and TRUS-guided prostate biopsies.</li>
                            <li><span class="need-contact__list__icon">
                                    <i class="icon-tick"></i>
                                </span>Experienced in pediatric ultrasound, including challenging cases in pediatric urology and urogenital problems.</li>
                            <li><span class="need-contact__list__icon">
                                    <i class="icon-tick"></i>

                                </span>Proficient in reporting various X-ray procedures like IVP, HSG, RGU, and MCU.</li>
                        </ul>

                    </ul><!-- /.need-contact__list -->
                    </div>
                    <!-- <div class="hr-set"></div> -->
                    <div class="col-md-6">
                    <ul class="need-contact__list list-unstyled">
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                            <span class="bold-txt">Previous Experience: </span>

                        </li>
                        <ul class="edu-list">
                            <li><span class="need-contact__list__icon">
                                    <i class="icon-tick"></i>

                                </span> <span class="bold-txtt">DNB Radiodiagnosis : </span>Specializes in all types of ultrasound studies including routine and specialized scans.</li>
                            <li><span class="need-contact__list__icon">
                                    <i class="icon-tick"></i>

                                </span> <span class="bold-txtt">Fortis Hiranandani Hospital: </span>Senior Consultant Radiologist and Head of Department, responsible for ultrasound, CT, and MRI imaging.</li>


                        </ul>

                    </ul><!-- /.need-contact__list -->
                    </div>
                </div><!-- /.need-contact__left -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row gutter-y-30 -->
    </div>
</section>
<!-- section-2 end -->


<!-- section-3 -->
<section class="eduction-section">
    <div class="container">
        <div class="row gutter-y-30 align-items-center education-bg">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="need-contact__left">
                    <h3 class="need-contact__title">Specialized Training:</h3><!-- /.need-contact__title -->
                    <ul class="need-contact__list list-unstyled">
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                            Intensive training in Fetal/Obstetric ultrasound through the ScholarMD fetal medicine training program.
                        </li>


                    </ul><!-- /.need-contact__list -->
                </div><!-- /.need-contact__left -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row gutter-y-30 -->
    </div>
</section>
<!-- section-3 end -->


<!-- section 4 -->
<section class="eduction-section">
    <div class="container">
        <div class="row gutter-y-30 align-items-center education-bg">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="need-contact__left">
                    <h3 class="need-contact__title">Professional Memberships:</h3><!-- /.need-contact__title -->
                    <ul class="need-contact__list list-unstyled">
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                           Active member of national and state radiology organizations including IRIA and MSBIRIA.
                        </li>
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                           Committee member of the Navi Mumbai and Raigad local chapter (NMRRIA).
                        </li>


                    </ul><!-- /.need-contact__list -->
                </div><!-- /.need-contact__left -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row gutter-y-30 -->
    </div>
</section>
<!-- section 4 end -->
<!-- section 5 -->
<section class="eduction-section">
    <div class="container">
        <div class="row gutter-y-30 align-items-center education-bg">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="need-contact__left">
                    <h3 class="need-contact__title">Areas of Interest:</h3><!-- /.need-contact__title -->
                    <ul class="need-contact__list list-unstyled">

                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                          Pelvic and breast ultrasound.
                        </li> <br>
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                           3D Transvaginal (TVS) and Transrectal (TRUS) ultrasounds.
                        </li> <br>
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                          Pediatric urology and urogenital problems.
                        </li>


                    </ul><!-- /.need-contact__list -->
                </div><!-- /.need-contact__left -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row gutter-y-30 -->
    </div>
</section>
<!-- section 5 end -->
<!-- section 6 -->
<section class="eduction-section">
    <div class="container">
        <div class="row gutter-y-30 align-items-center education-bg">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="need-contact__left">
                    <h3 class="need-contact__title">Personal Approach:</h3><!-- /.need-contact__title -->
                    <ul class="need-contact__list list-unstyled">

                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                          Committed to spending adequate time with each patient to ensure precise diagnosis.
                        </li> <br>
                        <li>
                            <span class="insurance-details__list__icon"><i class="far fa-check-circle"></i></span>
                           Known for a keen analytical mind and a pleasing personality.
                        </li> <br>



                    </ul><!-- /.need-contact__list -->
                </div><!-- /.need-contact__left -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row gutter-y-30 -->
    </div>
</section>
<!-- section 6 end -->

</div><!-- /.page-wrapper -->



<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>

@stop