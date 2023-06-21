<?php
/**
 * Template Name: About Us
 * Template for botiga canvas
 *
 * This tempalte won't display the header, footer and sidebar. But you can display them with the filter 'botiga_template_canvas_remove_header_footer'
 * 
 * @package Botiga
 */
get_header();
?>
<?php
$about_us_head_xtmim= get_field('about-us_head__xtmim');
$about_us_head_description= get_field('about_us_head_description');
$about_us_intro_subtitle= get_field('about_us_intro_subtitle');
$about_us_intro_title= get_field('about_us_intro_title');
$about_us_pillars= get_field('about_us_pillars');
$about_us_pillars_description= get_field('about_us_pillars_description');
$learn_more_btn= get_field('learn_more_btn');
$about_us_achievement_logo= get_field('about_us_achievement_logo');
$about_us_achievement_logo_2= get_field('about_us_achievement_logo_2');
?>
<main id="primary" class="site-main <?php echo esc_attr( apply_filters( 'botiga_content_class', '' ) ); ?>">
    <div class="container-fluid section-padding">  
        <div class="about-us_head__xtmIM">
            <h1 class="text-align-center font-bold"><?php echo $about_us_head_xtmim; ?></h1>
            <p class="text-align-center mt-7"> <?php echo $about_us_head_description; ?> <p>    
        </div> 
    </div>
    <div class="about-us_intro__LucKo section-padding">
        <p class="text-align-center text-white"><?php echo $about_us_intro_subtitle ?></p>
        <h2 class="text-align-center text-white mt-7 font-bold text-2xl"><?php echo $about_us_intro_title ?></h2>
    </div>
    <div class="container-fluid section-padding">  
        <div class="about-us_pillars__LIKj6">
            <h1 class="text-align-center font-bold"><?php echo $about_us_pillars; ?></h1>
            <p class="text-align-center mt-7"> <?php echo $about_us_pillars_description; ?> <p>    
        </div> 
        <div class="pt-8">
            <a class="buttons_darkButton__MBfed" href="<?php echo $learn_more_btn; ?>">Learn More</a>
        </div> 
    </div>
    
    <div class="container-fluid section-padding b-f3">  
        <div class="md:flex mb-img-content">           
            <div class="flex-initial md:w-3/6 about-text-cus">
                <?php the_field('about_us_achievement')?>
            </div>
            <div class="flex-initial w-1/6">
            </div>
            <div class="flex-initial md:w-2/6">
                <div class="w-360px">
                <img src="<?php echo $about_us_achievement_logo?>">
                </div>               
            </div>
        </div>
    </div>
    <div class="container-fluid section-padding ">  
        <div class="md:flex">   
            <div class="flex-initial md:w-2/6">
                <div class="w-360px">
                <img src="<?php echo $about_us_achievement_logo_2?>">
                </div>               
            </div>
            <div class="flex-initial w-1/6">
            </div>
            <div class="flex-initial md:w-3/6 about-text-cus">
                <?php the_field('about_us_achievement_content_line_2')?>
            </div>
        </div>
    </div>
    <div class="container-fluid section-padding-300 b-f3">  
        <div class="about_us_core">
            <div class="md:flex">     
                <div class="flex-initial md:w-1/6 mr-7">
                    <div class="w-360px">
                    <img src="<?php echo get_field('about_us_core_value_img_1')?>">
                    </div>               
                </div>
                <div class="flex-initial md:w-5/6 ">
                    <?php the_field('about_us_core_value_content_1')?>
                </div>
            </div>
        </div>
        <div class="about_us_core">
            <div class="md:flex">     
                <div class="flex-initial md:w-1/6 mr-7">
                    <div class="w-360px">
                    <img src="<?php echo get_field('about_us_core_value_img_2')?>">
                    </div>               
                </div>
                <div class="flex-initial md:w-5/6 ">
                    <?php the_field('about_us_core_value_content_2')?>
                </div>
            </div>
        </div>
        <div class="about_us_core">
            <div class="md:flex">     
                <div class="flex-initial md:w-1/6 mr-7">
                    <div class="w-360px">
                    <img src="<?php echo get_field('about_us_core_value_img_3')?>">
                    </div>               
                </div>
                <div class="flex-initial md:w-5/6 ">
                    <?php the_field('about_us_core_value_content_3')?>
                </div>
            </div>
        </div>
    </div>
    
</main><!-- #main -->

<?php 
get_footer();