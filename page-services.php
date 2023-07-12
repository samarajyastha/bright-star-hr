<?php get_header(); ?>


<!-- Page Header Section -->
<div class="page_header">
    <div class="page_header_content">
        <div class="container">
            <h2 class="heading">Our Services</h2>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Header Section -->

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">INTELLIGENT DECISION MAKING</div>
            <h1>Providing Best Services</h1>
            <div class="separator"></div>
        </div>
        <div class="inner-column">
            <div class="row clearfix">
                <?php while (have_rows('services')) : the_row(); ?>

                    <!-- Service Block -->
                    <div class="service-block-style-two col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/images/services/bg-1.png');">
                            <div class="hidden-image" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/images/services/bg-hover-2.png');"></div>
                            <div class="icon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/icons/4-2.png" alt="" class="open_image">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/icons/4-2.png" alt="" class="hidden_image">
                            </div>
                            <h5><a href="service-details.html"><?php echo get_sub_field('title'); ?></a></h5>
                            <div class="text"><?php echo get_sub_field('description'); ?></div>
                            <a href="service-details.html" class="read-more"><span><img src="<?php bloginfo('template_directory') ?>/assets/images/services/arrow-right.png" alt="arrow"></span> Read More</a>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

<?php get_footer(); ?>