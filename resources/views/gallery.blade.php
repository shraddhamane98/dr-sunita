@php($title = "Gallery | Dr. Sunita Malladi - Radiologist in Navi Mumbai")
@section('meta_desc')View our gallery  showcasing Dr. Sunita Malladi's state-of-the-art radiology practice in Navi Mumbai, featuring our advanced imaging facilities and patient care environment. @endsection

@extends('layouts.default')

@section('content')

<!-- /.preloader -->
<div class="page-wrapper">

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);"></div><!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title">Gallery</h2>
                <ul class="insuba-breadcrumb list-unstyled">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li><span>Gallery</span></li>
                </ul><!-- /.insuba-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="gallery section-space-top section-space-bottom2">
        <div class="container">
            <div class="row gutter-y-30">
                <!-- Gallery Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-1.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-1.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-9.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-9.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-3.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-3.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-4.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-4.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-6.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-6.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-5.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-5.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-7.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-7.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="gallery__item__image">
                            <a href="{{ url('resources/assets/images/services-images/gallery-8.jpg') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ url('resources/assets/images/services-images/gallery-8.jpg') }}" alt="">
                                <div class="gallery__item__overlay">
                                    <span class="gallery__item__icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div><!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        Fancybox.bind("[data-fancybox]", {
            // Custom options
            loop: true,
            buttons: [
                "zoom",
                "slideShow",
                "fullScreen",
                "thumbs",
                "close"
            ],
            animationEffect: "fade",
            transitionEffect: "fade",
            protect: true,
            idle: false,
            baseClass: "fancybox-custom",
            on: {
                done: (fancybox, slide) => {
                    console.log(`done! ${slide.index}`);
                }
            }
        });
    });
</script>

@stop