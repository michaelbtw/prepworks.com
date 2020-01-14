<?php
/**
  Template Name: Why Prep Works
 */
get_header('act-sat');

/**
 * determine main column size from actived sidebar
 */
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$imagevt = get_field('vt_last');
$contentvt = get_field('vt_last_content');
?>

<div id="page-topper" style="background: #ffffff url(<?php echo $url; ?>) no-repeat center top;">
    <?php
    $image = get_field('header_icon');
    $image2 = get_field('first_section_background_image');
    $image3 = get_field('first_section_background_image_faded');

    if (!empty($image)):
        ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="page-icon"/>

    <?php endif; ?>

    <h1><?php the_title(); ?></h1>

</div>
<div id="courses-strip-course">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="course-listing-course <?php if ($slug == "test-preparation") echo "current-course"; ?>">
                    <a href="/our-courses/test-preparation/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-test-prep.png" alt="Test Prep"> TEST PREPARATION</a>
                </div>
                <div class="course-listing-course  <?php if ($slug == "math") echo "current-course"; ?>">
                    <a href="/our-courses/math/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-math.png" alt="Math">MATH</a>
                </div>
                <div class="course-listing-course  <?php if ($slug == "science") echo "current-course"; ?>">
                    <a href="/our-courses/science/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-science.png" alt="Science">SCIENCE</a>
                </div>
                <div class="course-listing-course  <?php if ($slug == "civics-history") echo "current-course"; ?>">
                    <a href="/our-courses/civics-history/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-civics.png" alt="Civics">CIVICS & HISTORY</a>
                </div>
            </div>
        </div>
    </div>
</div>


<main id="main" class="site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!--<div id="first-item" style="background: url(<?php echo $image2['url']; ?>) no-repeat left top;background-size: cover;">-->

        <div class="why_prepworks_first_section">
            <div class="container">
                <div class="row">

                    <div class="why_prepworks_bg_left col-md-5 col-xs-12">
                            <div style="background: url(<?php echo $image2['url']; ?>) no-repeat left top; background-size: cover; width: 100%; min-height: 350px;"></div>
                    </div>

                    <?php
                    while (have_posts()) {
                        the_post();
                        $ficwidth = get_field('first_section_copy_area_width');
                        if ($ficwidth == "")
                            $ficwidth = "775";
                        ?>    

                        <div class="why_prepworks_bg_right col-md-7 col-xs-12">
                                <ul id="page-tabs" class="page-tabs-why-override">
                                    <li><a href="#guarantee" rel="m_PageScroll2id">OUR GUARANTEE</a></li>
                                    <!--<li><a href="#instructors" rel="m_PageScroll2id">OUR INSTRUCTORS</a></li>-->
                                    <li><a href="#awards" rel="m_PageScroll2id">OUR AWARDS</a></li>
                                    <li><a href="#tech" rel="m_PageScroll2id">OUR TECH</a></li>
                                </ul>
                                <?php the_content(); ?> 
                        </div>    
                    </div>
                </div>            
            </div>



            <!--<div class="why-prepworks-section">-->       
                <!--            <div class="container">
                                <div class="row">
                                    <div class="col-md-12"> 
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <ul id="page-tabs" class="page-tabs-why-override">
                                                <li><a href="#guarantee" rel="m_PageScroll2id">OUR GUARANTEE</a></li>
                                                <li><a href="#instructors" rel="m_PageScroll2id">OUR INSTRUCTORS</a></li>
                                                <li><a href="#awards" rel="m_PageScroll2id">OUR AWARDS</a></li>
                                                <li><a href="#tech" rel="m_PageScroll2id">OUR TECH</a></li>
                
                                            </ul>
                                        </div>    
                                    </div>
                                </div>
                            </div>-->

                <script>
                    jQuery(document).ready(function () {

                        jQuery('#first-item').css('backgroundSize', 'cover');
                        //jQuery('#first-item-content-vpi').css('float','right');

                        if (jQuery(window).width() < (<?php echo $ficwidth; ?> + 20)) {
                            jQuery('#first-item-content-vpi').css('width', '100%');
                        } else {
                            jQuery('#first-item-content-vpi').css('width', '<?php echo $ficwidth; ?>px');
                        }

                        if (jQuery(window).width() < ((<?php echo $ficwidth; ?> * 2) + 300)) {
                            jQuery('#first-item').css('background', 'url(<?php echo $image3['url']; ?>) no-repeat left top');
                            //jQuery('#first-item-content-vpi').css('float', 'right');
                            jQuery('#first-item-content-vpi').css('margin', '0 30%');
                            jQuery('#first-item-content-vpi').css('padding-right', '0');
                            if (jQuery(window).width() < 500) {
                                jQuery('#first-item').css('background', 'none');
                                jQuery('#first-item').css('background-color', '<?php echo get_field('first_section_background_color'); ?>');
                            }
                        } else {
                            jQuery('#first-item').css('background', 'url(<?php echo $image2['url']; ?>) no-repeat left top');

                        }


                    });

                    jQuery(window).on('resize', function () {


                        if (jQuery(window).width() < (<?php echo $ficwidth; ?> + 20)) {
                            jQuery('#first-item-content-vpi').css('width', '100%');
                        } else {
                            jQuery('#first-item-content-vpi').css('width', '<?php echo $ficwidth; ?>px');
                        }

                        if (jQuery(window).width() < ((<?php echo $ficwidth; ?> * 2) + 300)) {
                            jQuery('#first-item').css('background', 'url(<?php echo $image3['url']; ?>) no-repeat left top');
                            //jQuery('#first-item-content-vpi').css('float', 'right');
                            jQuery('#first-item-content-vpi').css('margin', '0 auto');
                            jQuery('#first-item-content-vpi').css('padding-right', '0');
                            if (jQuery(window).width() < 500) {
                                jQuery('#first-item').css('background', 'none');
                                jQuery('#first-item').css('background-color', '<?php echo get_field('first_section_background_color'); ?>');
                            }
                        } else {
                            jQuery('#first-item').css('background', 'url(<?php echo $image2['url']; ?>) no-repeat left top');
                            //jQuery('#first-item-content-vpi').css('float', 'right');
                            jQuery('#first-item-content-vpi').css('margin', 'none');
                            jQuery('#first-item-content-vpi').css('padding-right', '160px');

                        }
                    });
                </script> 
            <!--</div>-->  
            
            <!--END FIRST SECTION-->

            <!--REPEATABLE SECTIONS-->

            <?php
// check if the repeater field has rows of data
            if (have_rows('additional_sections')):

                // loop through the rows of data
                while (have_rows('additional_sections')) : the_row();

                    $section_type = get_sub_field('section_type');
                    if ($section_type == "two-column") :
                        ?>
                        <span id="<?php echo get_sub_field('section_anchor'); ?>" class="anchor"></span>
                        <div class="container" style="padding-bottom:5px;">
                            <div class="row">
                                <?php if (get_sub_field('which_column_should_include_the_copy') == "left") : ?>
                                    <div class="col-md-6" style="padding:15px;"><?php echo get_sub_field('section_copy'); ?></div>
                                <?php endif; ?> 
                                <div class="col-md-6" style="padding:15px;">
                                    <?php
                                    if (get_sub_field('right_column_video') != "")
                                        echo get_sub_field('right_column_video');

                                    if (get_sub_field('right_column_image') != "") {
                                        $right_image = get_sub_field('right_column_image');
                                        $style_override = get_sub_field('image_style_overrides');
                                        $override = "";
                                        if ($style_override != "")
                                            $override = 'style="' . get_sub_field('image_style_overrides') . '"';

                                        echo '<img src="' . $right_image['url'] . '" alt="' . $right_image['alt'] . '" class="img-responsive" ' . $override . '/>';
                                    }
                                    ?>		
                                </div>
                                <?php if (get_sub_field('which_column_should_include_the_copy') == "right") : ?>
                                    <div class="col-md-6" style="padding:15px;"><?php echo get_sub_field('section_copy'); ?><a class="btn btn-primary" href="<?php echo get_site_url(); ?>/enroll-now/" role="button">ENROLL NOW</a></div>
                                <?php endif; ?>
                            </div>
                        </div>         
                        <?php
                    endif;

                    if ($section_type == "single-column") :

                        $bgimage = get_sub_field('section_background_image');
                        $extra = "";
                        if ($bgimage != "")
                            $extra = "background: url(" . $bgimage['url'] . ") no-repeat center top;background-size: cover;";
                        ?>

                        <span id="<?php echo get_sub_field('section_anchor'); ?>" class="anchor"></span>
                        <div style="<?php echo $extra; ?>"> 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12" style="padding:15px;"><?php echo get_sub_field('section_copy'); ?></div>
                                </div>
                            </div>  
                        </div>       
                        <?php
                    endif;

                endwhile;

            endif;
            ?>

            <!--END REPEATABLE SECTIONS-->

            <?php
            $award = get_field('award_img');
            $award2 = get_field('award_img_2');
            $award3 = get_field('award_img_3');
            $awardleft = get_field('award_content_left');
            $awardmiddle = get_field('award_content_middle');
            $awardright = get_field('award_content_right');
            $bgimage_awards = get_field('bg_award');
            $extra_awards = "";
            if ($bgimage_awards != "")
                $extra_awards = "background: url(" . $bgimage_awards['url'] . ") no-repeat center top; background-size: cover;";
            ?>    


            <span id="awards" class="anchor"></span>
            <div class="award" style="<?php echo $extra_awards; ?>">
                <div class="container">
                    <div class="row">


                        <div class="col-md-offset-1 col-md-10">

                            <h1><?php echo the_field('award_title') ?></h1>

                        </div>

                        <div class="col-md-12">




                            <p><?php the_field('award_content'); ?></p>


                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="awards-wrap"> 
                                        <div style="height:150px;">  
                                            <img  src="<?php echo $award['url']; ?>" alt="<?php echo $award['alt']; ?>" style="margin:0 auto;display:block;"/>  
                                        </div>
                                        <p><?php the_field('award_content_left'); ?></p>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="awards-wrap">
                                        <div style="height:150px;"> 
                                            <img  src="<?php echo $award2['url']; ?>" alt="<?php echo $award2['alt']; ?>" style="margin:0 auto;display:block;"/>
                                        </div>
                                        <p><?php the_field('award_content_right'); ?></p>
                                    </div>
                                </div> 

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="awards-wrap">
                                        <div style="height:150px;"> 
                                            <img  src="<?php echo $award3['url']; ?>" alt="<?php echo $award3['alt']; ?>" style="margin:0 auto;display:block;"/>
                                        </div>
                                        <p><?php the_field('award_content_middle'); ?></p>
                                    </div>
                                </div>
                            </div> 


                        </div>









                    </div>
                </div>
            </div> 


            <!-- Bottom Section -->     

            <?php
            $bgimage_awards_last = get_field('last_content_img_pre');
            $extra_awards_last = "";
            if ($bgimage_awards_last != "")
                $extra_awards_last = "background: url(" . $bgimage_awards_last['url'] . "); background-repeat:no-repeat;";
            ?>    


            <span id="tech" class="anchor"></span>
            <div class="award" style="<?php echo $extra_awards_last; ?>">
                <div class="container" >
                    <div class="row">


                        <div class="col-sm-12 col-md-offset-1 col-md-5 content-last-vt btn-ltp">

                            <?php the_field('vt_last_content'); ?>



                            <div class="button-area btn-ltp">
                                <a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>/enroll-now/" role="button">ENROLL NOW</a>
                            </div> 

                        </div>   





                    </div>
                </div>
            </div>

            <!--END Bottom Section -->  


        </article><!-- #post-## -->
    <?php } //endwhile;
    ?> 
</main>


<?php get_footer(); ?> 
