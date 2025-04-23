

        <header class="main-header main-header--two sticky-header sticky-header--normal">
            <img src="assets/images/shapes/header-shape-2-1.png" alt="shape" class="main-header__shape">
            <div class="container">
                <div class="main-header__inner">
                    <div class="main-header__logo logo-retina">
                        <a href="{{ route('home')}}">

                            <h2>Dr. Sunita Malladi</h2>
                            <h4>Radiologist MD, DNB, DMRE</h4>
                        </a>
                    </div>
                    <!-- /.main-header__logo -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- /.mobile-nav__toggler -->
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list">


                            <li>
                                    <a href="{{ route('home')}}">Home</a>
                                </li>
                            <li>
                                    <a href="{{ route('about')}}">About</a>
                                </li>



                                <li class="dropdown">
                                    <a href="{{ route('services')}}">Services </a>
                                    <ul class="menu--list">

                                          <li><a href="{{ route('obstetric-ultrasound-routine-ultrasound')}}">Obstetric Ultrasound & Routine Ultrasound</a></li>
                                          <li><a href="{{ route('anomaly-scan')}}">2D/3D/4D Anomaly Scan</a></li>
                                          <li><a href="{{ route('nt-scan')}}">NT Scan</a></li>
                                          <li><a href="{{ route('transrectal-transvaginal-scan')}}">Transrectal & Transvaginal Scan</a></li>
                                          <li><a href="{{ route('colour-doppler')}}">Colour Doppler</a></li>
                                          <li><a href="{{ route('usg-guided-procedures-biopsy')}}">USG Guided Procedures/Biopsy</a></li>
                                          <li><a href="{{ route('usg-breast-sonomammography')}}">USG Breast/Sonomammography</a></li>
                                          <li><a href="{{ route('usg-thyroid-neck-local-part')}}">USG Thyroid/Neck/Local Part</a></li>

                                    </ul>
                                </li>


                                <li>
                                    <a href="{{ route('patient-info')}}">Patient Info</a>
                                </li>
                                <li>
                                    <a href="{{ route('testimonials')}}">Testimonials</a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery')}}">Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /.main-header__nav -->

                        <a href="{{ route('contact')}}" class="insuba-btn insuba-btn--base main-header__btn">
                                <span>Book Appointment</span>
                                <!-- <span class="insuba-btn__icon-box">
                                    <span class="insuba-btn__icon"><i class="fas fa-arrow-right"></i></span>
                                </span> -->
                            </a>
                    </div>

                </div>

            </div>

        </header>
        <!-- /.main-header -->
