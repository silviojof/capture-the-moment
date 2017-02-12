            <?php $name="home"; include "partials/header.php"; ?>

            <!-- Slide Show -->
            <div class="slide-wrapper row show-for-medium">

                <!-- Slides -->
                <div class="slide-container">
                    <div class="slide-box fade">
                        <img src="img/slider1.jpg" class="slide-img" alt="Slide Image">
                        <div class="slide-text">
                            <h3>Wedding Photography</h3>
                            <p>Nam volutpat in neque ac placerat. Duis libero risus, lacinia in vulputate eu, molestie vel lacus.</p>
                            <a class="slider-btn" href="about.php">I want to book<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="slide-box fade">
                        <img src="img/slider2.jpg" class="slide-img" alt="Slide Image">
                        <div class="slide-text">
                            <h3>Experienced Photographers</h3>
                            <p>Integer id neque sit amet nunc ultrices rhoncus at vel lorem. Nullam at accumsan eros.</p>
                            <a class="slider-btn" href="about.php">See Gallery<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="slide-box fade">
                        <img src="img/slider3.jpg" class="slide-img" alt="Slide Image">
                        <div class="slide-text">
                            <h3>Images that last</h3>
                            <p> Pellentesque est neque, porttitor et justo vel, bibendum volutpat augue.</p>
                            <a class="slider-btn" href="gallery.php">See Testimonial<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="slide-box fade">
                        <img src="img/slider4.jpg" class="slide-img" alt="Slide Image">
                        <div class="slide-text">
                            <h3>Are you getting married?</h3>
                            <p>Morbi nec purus varius lorem euismod pulvinar. Aliquam erat volutpat.</p>
                            <a class="slider-btn" href="prices.php">See our packages<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Arrows -->
                <a class="prev" onclick="moveSlide(-1)"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                <a class="next" onclick="moveSlide(1)"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                
                <!-- Dots -->
                <div class="dots-container">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <!-- End of Slide Show -->

            <!-- Start of Banner -->
            <div class="banner-wrapper">
                <div class="row banner-container">
                    <div class="small-12 medium-7 column">
                        <h2>Register that special day.</h2>
                        <hr class="bar">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et pretium orci.</p>
                    </div>
                    <div class="small-12 medium-5 column banner-btn-container">
                        <ul class="btn-container">
                            <li>
                                <a href="gallery.php">
                                    Visit our Gallery
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="prices.php">
                                    Check our Prices
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End of Banner -->

            <!-- Start of Features -->
            <div class="features-wrapper">
                <div class="row features-container">
                    <!-- Box 01 -->
                    <section class="small-12 medium-6 large-4 column features-box">
                        <div class="features-round">
                            <a href="gallery.php" class="features-img"><img src="img/thumbnail4.jpg" alt="Wedding Image"/></a>
                            <div class="features-text">
                                <header>
                                    <h4>Special Moments</h4>
                                    <p>Photos that bring you back to special moments</p>
                                </header>
                                <p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
                                <a class="btn-no-bg" href="gallery.php">
                                    Check our Gallery
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- Box 02 -->
                    <section class="small-12 medium-6 large-4 column features-box">
                        <div class="features-round">
                            <a href="gallery.php" class="features-img"><img src="img/thumbnail6.jpg" alt="Wedding Image"/></a>
                            <div class="features-text">
                                <header>
                                    <h4>Special People</h4>
                                    <p>More than 150 couples can testify our experience</p>
                                </header>
                                <p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
                                <a class="btn-no-bg" href="testimonials.php">
                                    Check our Testimonials
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- Box 03 -->
                    <section class="small-12 large-4 column show-for-large features-box">
                        <div class="features-round">
                            <a href="gallery.php" class="features-img"><img src="img/thumbnail9.jpg" alt="Wedding Image"/></a>
                            <div class="features-text">
                                <header>
                                    <h4>Special Conditions</h4>
                                    <p>Why we can make your special day happen</p>
                                </header>
                                <p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
                                <a class="btn-no-bg" href="prices.php">
                                    Our Packages
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- End of Features -->

            <!-- Start of Section -->
            <div class="main-wrapper">
                <div class="row">

                    <!-- Sidebar -->
                    <div class="small-12 large-4 column main-box">
                        <section>
                            <h3>Our Gallery</h3>
                            <hr class="bar">
                            <div class="main-mosaic">
                                <div class="row">
                                    <div class="small-6 column sidebar-img"><a href="gallery.php" class="fit"><img src="img/thumbnail1.jpg" alt="flowers"/></a></div>
                                    <div class="small-6 column sidebar-img"><a href="gallery.php" class="fit"><img src="img/thumbnail2.jpg" alt="stairs"/></a></div>
                                    <div class="small-6 column sidebar-img"><a href="gallery.php" class="fit"><img src="img/thumbnail3.jpg" alt="field"/></a></div>
                                    <div class="small-6 column sidebar-img"><a href="gallery.php" class="fit"><img src="img/thumbnail4.jpg" alt="bride"/></a></div>
                                </div>
                            </div>
                            <a class="btn-small" href="gallery.php">
                                More Images
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </section>
                    </div>

                    <!-- Content -->
                    <div class="small-12 large-8 column main-box">
                        <section>
                            <h3>Why choosing us?</h3>
                            <hr class="bar">
                            <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
                            <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
                            <a class="btn-small" href="about.php">
                                Continue Reading
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </section>
                    </div>
                </div>
            </div>
            <!-- Start of Section -->

            <?php include "partials/footer.php"; ?>
