<?php 




defined('WPINC') || die();

const NT_META_HERO = 'hero';
const NT_META_HERO_TITLE = 'hero_title';
const NT_META_MOTTO_OR_SITE_DESCRIPTION = 'motto_or_site_description';
const NT_META_HERO_BACKGROUND = 'hero_background';
const NT_META_HERO_VIDEO_URL = 'hero_video';
const NT_META_HERO_IMAGE_URL = 'hero_image';
const NT_META_CALL_TO_ACTION_LABEL = 'call_to_action_label';
const NT_META_CALL_TO_ACTION_URL = 'call_to_action_link';
const NT_META_SHOW_SERVICES = 'show_services';
const NT_META_SERVICES_TITLE_1 = 'services_1_title';
const NT_META_SERVICES_INFO_1 = 'services_1';
const NT_META_SERVICES_TITLE_2 = 'services_2_title';
const NT_META_SERVICES_INFO_2 = 'services_2';
const NT_META_SERVICES_TITLE_3 = 'services_3_title';
const NT_META_SERVICES_INFO_3 = 'services_3';



function nTheme_insert_hero_banner() {

    $post_id = get_the_id();
    $visible_hero = get_post_meta($post_id, NT_META_HERO, true);

    if(is_admin() || wp_doing_ajax()) {

    } elseif(is_single()) {

    }
    elseif(($visible_hero === 'no' || empty($visible_hero)) && !is_single()) {
?>
   
    <div class="page-title-container" aria-controls="hidden" <?php if(!empty(get_the_post_thumbnail_url($post_id))) : echo 'style="background: black;"'; endif; ?>>

        <?php if( !empty(get_the_post_thumbnail_url($post_id)) ) : ?> 

            <div class="hero-bg-container">
                <img class="page-title-bg" src=" <?php the_post_thumbnail_url('thumbnail'); ?>" alt="Featured Image">
            </div>
        
        <?php endif; ?>


        <h1 class="page-title"><?php echo wp_title( false, 'right'); ?></h1>
    </div>

<?php
    }
    else {

        $hero_title = get_post_meta($post_id, NT_META_HERO_TITLE, true);
        $hero_site_description = get_post_meta($post_id, NT_META_MOTTO_OR_SITE_DESCRIPTION, true);
        $hero_bg = get_post_meta($post_id, NT_META_HERO_BACKGROUND, true);
        $hero_video_url = get_post_meta($post_id, NT_META_HERO_VIDEO_URL, true);
        $hero_image_url = get_post_meta($post_id, NT_META_HERO_IMAGE_URL, true);
        $hero_call_to_action_label = get_post_meta($post_id, NT_META_CALL_TO_ACTION_LABEL, true);
        $hero_call_to_action_url = get_post_meta($post_id, NT_META_CALL_TO_ACTION_URL, true);
        $show_services = get_post_meta($post_id, NT_META_SHOW_SERVICES, true);
        $services_1 = get_post_meta($post_id, NT_META_SERVICES_TITLE_1, true);
        $services_1_info = get_post_meta($post_id, NT_META_SERVICES_INFO_1, true);
        $services_2 = get_post_meta($post_id, NT_META_SERVICES_TITLE_2, true);
        $services_2_info = get_post_meta($post_id, NT_META_SERVICES_INFO_2, true);
        $services_3 = get_post_meta($post_id, NT_META_SERVICES_TITLE_2, true);
        $services_3_info = get_post_meta($post_id, NT_META_SERVICES_INFO_3, true);

        $services = array(
            array( 'title' => $services_1, 'info' => $services_1_info ),
            array( 'title' => $services_2, 'info' => $services_2_info ),
            array( 'title' => $services_3, 'info' => $services_3_info )
        );

?>

    <div class="hero <?php if($hero_bg !== 'none') : echo ' bg-image-video'; endif; ?>">

        <div class="hero-bg-container">
            <?php if($hero_bg === 'image') : ?>  <img src="   <?php echo $hero_image_url; ?>    " alt="Hero Background Image" class="hero-bg">
            <?php elseif($hero_bg === 'video') : ?>   <video autoplay muted loop src="  <?php echo $hero_video_url; ?>  " class="hero-bg"></video>    
            <?php endif; ?>
        </div>
    
        <section class="intro">
            <?php if($hero_bg === 'none') { ?>
                <div class="intro-circle" aria-controls="hidden">
                    <div class="circle"></div>
                </div>
            <?php }; ?>
    
            <div class="intro-text">
                <div class="welcome-text">
                    <h1>    <?php echo $hero_title; ?>    </h1>
                    <hr/>
                    <p class="description"><?php echo $hero_site_description; ?></p>
                </div>
                
                <button class="join-us" id="hero-btn"><?php echo $hero_call_to_action_label; ?></button>
                <script> 
                    document.getElementById('hero-btn').addEventListener('click', () => {location.href = '<?php echo $hero_call_to_action_url; ?>'}); 
                </script>
                
            </div>
        </section>
        <section class="services-container">

            <?php if($show_services === 'yes'): foreach($services as $service) : ?>

                <div class="services-box">
                    <h2 class="top">
                        <?php echo $service['title']; ?>
                    </h2>
                    <hr>
                    <p class="bottom">
                        <?php echo $service['info']; ?>
                    </p>
                </div>

            <?php endforeach; endif; ?>

        </section>

    </div>

<?php

    };

}

?>