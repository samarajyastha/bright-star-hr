<?php get_header(); ?>
<!-- Main Section -->
<section class="main-slider p-0">
    <div class="main-slider-carousel owl-carousel owl-theme">
        <?php while (have_rows('slider')) : the_row(); ?>

            <!-- Slider -->
            <div class="slide" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>');">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="content-column col-xl-7 col-lg-7 col-md-10 col-sm-12">
                            <div class="inner-column">
                                <div class="title"><?php echo get_sub_field('small-title'); ?></div>
                                <h1><?php echo get_sub_field('title'); ?></h1>
                                <div class="text"><?php echo get_sub_field('content'); ?></div>
                                <div class="options-box">
                                    <!-- Button Box -->
                                    <div class="button-box d-flex flex-wrap">
                                        <a href="#" class="btn">
                                            <span class="btn-wrap">
                                                <span class="text-one">Learn More</span>
                                                <span class="text-two">Learn More</span>
                                            </span>
                                        </a>
                                        <a href="#" class="btn btn-three">
                                            <span class="btn-wrap">
                                                <span class="text-one">Get Service</span>
                                                <span class="text-two">Get Service</span>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Slider -->

        <?php endwhile; ?>

    </div>
</section>
<!-- End Main Section -->

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <!-- Business Section -->
        <div class="inner-container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-5 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/business-6.png" alt="img">
                            <div class="experience-counter">
                                <div class="experience-counter-inner">
                                    20
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-7 col-sm-12 px-lg-0">
                    <div class="inner-column">
                        <!-- Title Box -->
                        <div class="title-box">
                            <div class="title">About Jackcerra Consultancy</div>
                            <h1>We deliver customer driven business success</h1>
                            <p>Blending insight, strategy and imagination, we help clients explore
                                and act on opportunity. We help them to adapt to the changing customer landscape and maintain positive momentum towards their goals.</p>
                        </div>
                        <!-- End Title Box -->

                        <!-- Feature Block -->
                        <div class="work-list d-md-flex align-items-center justify-content-between">
                            <ul>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/chevron-right.png" alt="img"> Market Competitor Analysis</li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/chevron-right.png" alt="img"> Research & Development</li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/chevron-right.png" alt="img"> Marketing Decision Making</li>
                            </ul>
                            <ul>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/chevron-right.png" alt="img"> New Branding Strategies</li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/chevron-right.png" alt="img"> Leadership Training program</li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/chevron-right.png" alt="img"> Auditing & Taxation Service</li>
                            </ul>
                        </div>

                        <div class="author-block d-lg-flex align-items-center justify-content-between">
                            <div class="author-profile d-flex align-items-center">
                                <div class="author-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/author-3.png" alt="img">
                                </div>
                                <div class="author-info">
                                    <h4>+0(412) 789-4432</h4>
                                    <p>Do you have any question?</p>
                                </div>
                            </div>

                            <div class="author-signature">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/signature.png" alt="img">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Business Section -->
<section class="business-section-three pb-0">
    <div class="image-layer" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/19.jpg)"></div>
    <div class="container">
        <!-- Service Sec  -->
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">INTELLIGENT DECISION MAKING</div>
            <h1>Providing Best Services</h1>
            <div class="separator"></div>
        </div>
        <div class="inner-column">
            <div class="row clearfix">

                <!-- Service Block -->
                <div class="service-block-style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box bg-white">
                        <div class="hidden-image" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/services/bg-hover-1.png');"></div>
                        <div class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/services/icons/7-1.png" alt="">
                        </div>
                        <h5><a href="service-details.html">Financial Consultation</a></h5>
                        <div class="text">We are providing growth consultancies & financial services for companies who want to excel their business.</div>
                        <a href="service-details.html" class="read-more"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/services/arrow-right.png" alt="arrow"></span> Read More</a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box bg-white">
                        <div class="hidden-image" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/services/bg-hover-2.png');"></div>
                        <div class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/services/icons/8-1.png" alt="">
                        </div>
                        <h5><a href="service-details.html">Leadership Training</a></h5>
                        <div class="text">We try to provide new project Ideas for new entrepreneurs who already have investor & looking for ideas.</div>
                        <a href="service-details.html" class="read-more"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/services/arrow-right.png" alt="arrow"></span> Read More</a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box bg-white">
                        <div class="hidden-image" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/services/bg-hover-3.png');"></div>
                        <div class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/services/icons/9-1.png" alt="">
                        </div>
                        <h5><a href="service-details.html">Global Operation Plan</a></h5>
                        <div class="text">For a growing business firm we provide market research & competitor analysis before a product launch in market.</div>
                        <a href="service-details.html" class="read-more"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/services/arrow-right.png" alt="arrow"></span> Read More</a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box bg-white">
                        <div class="hidden-image" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/services/bg-hover-4.png');"></div>
                        <div class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/services/icons/10-1.png" alt="">
                        </div>
                        <h5><a href="service-details.html">Global Operation Plan</a></h5>
                        <div class="text">Do you have dream to expand your business globally? we are providing the best planning proposal for this.</div>
                        <a href="service-details.html" class="read-more"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/services/arrow-right.png" alt="arrow"></span> Read More</a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box bg-white">
                        <div class="hidden-image" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/services/bg-hover-5.png');"></div>
                        <div class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/services/icons/11-1.png" alt="">
                        </div>
                        <h5><a href="service-details.html">Leadership Evaluation</a></h5>
                        <div class="text">We are providing growth consultancies & financial services for companies who want to excel their business.</div>
                        <a href="service-details.html" class="read-more"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/services/arrow-right.png" alt="arrow"></span> Read More</a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-style-two all-services-link col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/services/bg-2.png');">
                        <h5>Explore all the Other services by Jackcerra</h5>
                        <a href="service.html" class="btn btn-two">
                            <span class="btn-wrap">
                                <span class="text-one">See All Services</span>
                                <span class="text-two">See All Services</span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Business Section -->
        <div class="inner-container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-5 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/business-4.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-7 col-sm-12">
                    <div class="inner-column">
                        <!-- Title Box -->
                        <div class="title-box">
                            <div class="title">About Company</div>
                            <h1>Setting up Milestones in World of Business</h1>
                        </div>
                        <!-- End Title Box -->

                        <!-- Feature Block -->
                        <div class="feature-block two">
                            <div class="inner-box">
                                <span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/globe.png" alt="img"></span>
                                <h5>Operating All over the World</h5>
                                A business firm is either the sole proprietorship partnership owned by an individual.
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block two">
                            <div class="inner-box">
                                <span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/people.png" alt="img"></span>
                                <h5>Trusted By Agile Companies</h5>
                                Designing and implementing the technology tools that they need to win.
                            </div>
                        </div>

                        <!-- Button Box -->
                        <div class="button-box d-flex align-items-center flex-wrap">
                            <a href="#" class="btn">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact Us</span>
                                    <span class="text-two">Contact Us</span>
                                </span>
                            </a>
                            <!-- Play Box -->
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video play-box">
                                <span><i class="fa fa-play"></i></span> Watch Video
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Box -->
        <div class="counter-box">
            <div class="row clearfix">
                <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                    <div class="counter"><span class="odometer" data-count="15"></span></div>
                    <h6>Number Of Awards</h6>
                </div>
                <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                    <div class="counter"><span class="odometer" data-count="5"></span> stars</div>
                    <h6>Ranked Company</h6>
                </div>
                <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                    <div class="counter"><span class="odometer" data-count="150"></span><i>+</i></div>
                    <h6>Successful Campeigns</h6>
                </div>
                <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                    <div class="counter"><span class="odometer" data-count="40"></span><i>+</i></div>
                    <h6>Ongoing Projects</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="image-layer-bottom" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/7.jpg)"></div>
</section>
<!-- End Business Section -->

<!-- Business Section Two -->
<section class="business-section-two">
    <div class="container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <div class="title">Why Choose Us</div>
                        <h1>Bringing Business Innovation in the real world of consultation</h1>
                        <div class="text">We help businesses bring ideas to life in the digital world, by designing and implementing the technology tools that they need to win.We help businesses bring ideas to life in the digital world, by designing.</div>
                    </div>
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="options">
                                <li><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/business-1.png" alt="img"></span> 98% Success Rate</li>
                                <li><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/business-2.png" alt="img"></span> 200+ Expert Analyst</li>
                            </ul>
                        </div>
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="options">
                                <li><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/business-3.png" alt="img"></span> 25 Years Experience</li>
                                <li><span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/business-4.png" alt="img"></span> Big Collaborations</li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-group d-flex align-items-center justify-content-between">
                        <div class="avatar-group d-flex align-items-center">
                            <div class="avatar rounded-circle">
                                <img class="avatar-img rounded-circle" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/commenter1.png" alt="img">
                            </div>
                            <div class="avatar rounded-circle">
                                <img class="avatar-img rounded-circle" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/commenter2.png" alt="img">
                            </div>
                            <div class="avatar rounded-circle">
                                <img class="avatar-img rounded-circle" src="<?php bloginfo('template_directory'); ?>/assets/images/blog/commenter1.png" alt="img">
                            </div>
                            <div class="text">
                                <h4 class="number">1500 +</h4>
                                <p class="content">Happy Reviews</p>
                            </div>
                        </div>

                        <div class="rating-point">
                            <span class="vote">4.9</span> <span class="divider">/</span><span class="total">5</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/business-5.png" alt="img">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Business Section Two -->

<!-- Team Section -->
<section class="team-section home">
    <div class="container">
        <div class="inner-column">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Our Team</div>
                <h1>Meet Our Consultants</h1>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">

                <!-- Team Block -->
                <div class="team-style-one col-lg-4 col-md-4 col-sm-6">
                    <div class="teambox">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/team/1.jpg" alt="img">
                        <div class="teambox-inner">
                            <div class="team-social">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="teambox-intro text-center">
                                <h5>Jackson Miller</h5>
                                <p>Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-style-one col-lg-4 col-md-4 col-sm-6">
                    <div class="teambox">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/team/2.jpg" alt="img">
                        <div class="teambox-inner">
                            <div class="team-social">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="teambox-intro text-center">
                                <h5>Soamson Doglus</h5>
                                <p>Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-style-one col-lg-4 col-md-4 col-sm-6">
                    <div class="teambox">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/team/3.jpg" alt="img">
                        <div class="teambox-inner">
                            <div class="team-social">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="teambox-intro text-center">
                                <h5>Hazel Grace</h5>
                                <p>Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->

<!-- Call to Action Section -->
<div class="call-to-action" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/background/12.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                <h1 class="text-white">Grow Big with best consultation From Jackcerra</h1>
            </div>
            <div class="col-lg-4 col-md-4 text-center text-md-end">
                <a href="#" class="btn btn-two">
                    <span class="btn-wrap">
                        <span class="text-one">Get Appointment</span>
                        <span class="text-two">Get Appointment</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Call to Action Section -->

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">HOW WE WORK</div>
            <h1>Our Work Process</h1>
            <div class="separator"></div>
        </div>
        <div class="inner-container">
            <div class="separater-line" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/separator-line.png)"></div>
            <div class="row clearfix">

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-outer">
                            <div class="number">01</div>
                            <div class="image">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/process-1.jpg" alt="img">
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4>Meeting Client</h4>
                            <div class="text">We help to develop marketing campaign strategy with market worthy communication.</div>
                        </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="image-outer">
                            <div class="number">02</div>
                            <div class="image">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/process-2.jpg" alt="img">
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4>Project Brief</h4>
                            <div class="text">We help to develop marketing campaign strategy with market worthy communication.</div>
                        </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-outer">
                            <div class="number">03</div>
                            <div class="image">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/process-3.jpg" alt="img">
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4>Project Strategy</h4>
                            <div class="text">We help to develop marketing campaign strategy with market worthy communication.</div>
                        </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="image-outer">
                            <div class="number">04</div>
                            <div class="image">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/process-4.jpg" alt="img">
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4>Campaign Design</h4>
                            <div class="text">We help to develop marketing campaign strategy with market worthy communication.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Process Section -->

<!-- Testimonial Section -->
<section class="testimonial-section two" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/background/13.jpg');">
    <div class="container">
        <div class="row d-block d-lg-flex clearfix flex-nowrap">

            <!-- Title Column -->
            <div class="title-column col-xl-4 col-lg-4 col-md-12 col-sm-12 pe-0">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title">CLIENTS TESTIMONIAL</div>
                        <h1 class="text-white">What our Clients <br> say about Us</h1>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column">
                <div class="inner-column">
                    <div class="testimonial-carousel-two owl-carousel owl-theme">

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="rating">
                                        Rating &nbsp;
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
                                </div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <span class="quote fa fa-quote-right"></span>
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/reviewer-1.png" alt="img">
                                            </div>
                                            <strong>Trent Ballinger</strong>
                                            <span class="designation">CEO, Bizzbreak Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="rating">
                                        Rating &nbsp;
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
                                </div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <span class="quote fa fa-quote-right"></span>
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/reviewer-2.png" alt="img">
                                            </div>
                                            <strong>Kevin Miller</strong>
                                            <span class="designation">Manager, PPS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="rating">
                                        Rating &nbsp;
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
                                </div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <span class="quote fa fa-quote-right"></span>
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/reviewer-3.png" alt="img">
                                            </div>
                                            <strong>Trent Ballinger</strong>
                                            <span class="designation">CEO, Bizzbreak Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="rating">
                                        Rating &nbsp;
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
                                </div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <span class="quote fa fa-quote-right"></span>
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/reviewer-4.png" alt="img">
                                            </div>
                                            <strong>Kevin Miller</strong>
                                            <span class="designation">Manager, PPS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="rating">
                                        Rating &nbsp;
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
                                </div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <span class="quote fa fa-quote-right"></span>
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/reviewer-5.png" alt="img">
                                            </div>
                                            <strong>Trent Ballinger</strong>
                                            <span class="designation">CEO, Bizzbreak Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="rating">
                                        Rating &nbsp;
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
                                </div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <span class="quote fa fa-quote-right"></span>
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/reviewer-6.png" alt="img">
                                            </div>
                                            <strong>Kevin Miller</strong>
                                            <span class="designation">Manager, PPS</span>
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
<!-- End Testimonial Section -->

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Latest News</div>
            <h1>Read Our Latest News</h1>
            <div class="separator"></div>
        </div>
        <div class="news-carousel owl-carousel owl-theme">

            <!-- News Block -->
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/1.jpg" alt="img"></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date">January 11, 2023</div>
                        <div class="author-box">
                            <div class="content">
                                <div class="author-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/author-3.jpg" alt="img">
                                </div>
                                <strong>Rayan Kellar</strong>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h5><a href="blog-details.html">How consultation in business is affecting new ventures</a></h5>
                            <div class="text">We consult our clients to strengthen their decision making for marketing...</div>
                            <a href="blog-details.html" class="read-more">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/2.jpg" alt="img"></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date">January 11, 2023</div>
                        <div class="author-box">
                            <div class="content">
                                <div class="author-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/author-4.jpg" alt="img">
                                </div>
                                <strong>Mellisa Obrian</strong>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h5><a href="blog-details.html">Challanges of consultating new Business Firms</a></h5>
                            <div class="text">We consult our clients to strengthen their decision making for marketing...</div>
                            <a href="blog-details.html" class="read-more">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/3.jpg" alt="img"></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date">January 11, 2023</div>
                        <div class="author-box">
                            <div class="content">
                                <div class="author-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/author-5.jpg" alt="img">
                                </div>
                                <strong>Jessica Ballinger</strong>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h5><a href="blog-details.html">How consultation in business is affecting new ventures</a></h5>
                            <div class="text">We consult our clients to strengthen their decision making for marketing...</div>
                            <a href="blog-details.html" class="read-more">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/1.jpg" alt="img"></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date">January 11, 2023</div>
                        <div class="author-box">
                            <div class="content">
                                <div class="author-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/author-3.jpg" alt="img">
                                </div>
                                <strong>Rayan Kellar</strong>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h5><a href="blog-details.html">How consultation in business is affecting new ventures</a></h5>
                            <div class="text">We consult our clients to strengthen their decision making for marketing...</div>
                            <a href="blog-details.html" class="read-more">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/2.jpg" alt="img"></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date">January 11, 2023</div>
                        <div class="author-box">
                            <div class="content">
                                <div class="author-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/author-4.jpg" alt="img">
                                </div>
                                <strong>Mellisa Obrian</strong>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h5><a href="blog-details.html">Challanges of consultating new Business Firms</a></h5>
                            <div class="text">We consult our clients to strengthen their decision making for marketing...</div>
                            <a href="blog-details.html" class="read-more">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/3.jpg" alt="img"></a>
                    </div>
                    <div class="lower-content">
                        <div class="post-date">January 11, 2023</div>
                        <div class="author-box">
                            <div class="content">
                                <div class="author-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/author-5.jpg" alt="img">
                                </div>
                                <strong>Jessica Ballinger</strong>
                                <span class="designation">Consultant</span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h5><a href="blog-details.html">How consultation in business is affecting new ventures</a></h5>
                            <div class="text">We consult our clients to strengthen their decision making for marketing...</div>
                            <a href="blog-details.html" class="read-more">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End News Section -->

<!-- Contact Section -->
<section class="contact-section home">
    <div class="container">

        <div class="contact-form default-form mt-0">
            <div class="row">
                <div class="col-lg-7 col-md-8 offset-lg-5 offset-md-4">
                    <form method="post" action="contact.html">
                        <div class="sec-title">
                            <div class="title">Make Appointment</div>
                            <h1>Get Free Consultation</h1>
                            <div class="separator"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name*" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address*" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/calender.png" alt="" /></span>
                                    <input type="text" name="date" class="datepicker form-control" value="" placeholder="Appointment Date*" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message Here*" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <input class="btn-submit dark" type="submit" value="Get Appointment" name="submit">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Contact Section -->

<?php get_footer(); ?>