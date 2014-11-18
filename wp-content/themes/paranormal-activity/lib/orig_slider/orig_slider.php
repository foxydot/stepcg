<?php
function msdlab_add_js_for_orig_sliders(){
    if(!is_admin()){
       wp_enqueue_style('orig_slider',get_stylesheet_directory_uri().'/lib/orig_slider/css/orig-slider.css');
       wp_enqueue_script('orig_slider-superscrollorama',get_stylesheet_directory_uri().'/lib/orig_slider/js/jquery.superscrollorama.js',array('jquery'));
       wp_enqueue_script('orig_slider-tweenmax',get_stylesheet_directory_uri().'/lib/orig_slider/js/greensock/TweenMax.min.js',array('jquery'));
       wp_enqueue_script('orig_slider-tweenlite',get_stylesheet_directory_uri().'/lib/orig_slider/js/greensock/TweenLite.min.js',array('jquery'));
       wp_enqueue_script('orig_slider-timelinemax',get_stylesheet_directory_uri().'/lib/orig_slider/js/greensock/TimelineMax.min.js',array('jquery'));
        if(is_front_page()){
            wp_enqueue_script('orig_slider-homepage-jquery',get_stylesheet_directory_uri().'/lib/orig_slider/js/slider-home.js',array('jquery'));
        } else {
            
        }
    }
}

add_action('wp_enqueue_scripts', 'msdlab_add_js_for_orig_sliders', 2);

function msdlab_add_orig_slider(){
    if(is_front_page()){
        $ret = '
   <!-- SLIDER START -->   
    <section>
    
        <div class="lines-box white-bkg lines-box-home">
            <div class="page-width-container">
                
                
                
                <div class="left-arrow-blue">
                
                </div>
                
                <div class="swirl-container">

            <div class="item-container">
            <!--  item 1 -->
                    <div class="item">
                        <h4>
                            <?php the_field("slider_01_title");?>
                        </h4>
                        
                        <div class="white-h5-container">
                            <h5>
                                <?php the_field("slider_01_subtitle_a");?>
                            </h5>
                            <h6>
                                <?php the_field("slider_01_subtitle_b");?>
                            </h6>
                        </div>
                        <div class="gif"></div>
                        <div class="gif-1-ent-1"></div>
                        
                        <img src="'.get_stylesheet_directory_uri().'/lib/orig_slider/images/home-slider/1-entertainment.jpg" class="photo-bkg"/>
                    
                    </div>
                    <!-- end above this line ^ -->
                    <!--  item 2 -->
                    <div class="item">
                        <h4 class="blue-color">
                            <?php the_field("slider_02_title");?>
                        </h4>
                        
                        <div class="white-h5-container">
                            <h5>
                                <?php the_field("slider_02_subtitle_a");?>
                            </h5>
                            <h6>
                                <?php the_field("slider_02_subtitle_b");?>
                            </h6>
                        </div>
                        
                        <div class="gif-2-med-1"></div>
                        <div class="gif-2-med-2"></div>
                        
                        <img src="'.get_stylesheet_directory_uri().'/lib/orig_slider/images/home-slider/2-medical.jpg" class="photo-bkg"/>
                    
                    </div>
                    <!-- end above this line ^ -->
                    <!--  item 3 -->
                    <div class="item">
                        <h4 class="pink-color">
                            <?php the_field("slider_03_title");?>
                        </h4>
                        
                        
                        <div class="white-h5-container">
                            <h5>
                                <?php the_field("slider_03_subtitle_a");?>
                            </h5>
                            <h6>
                                <?php the_field("slider_03_subtitle_b");?>
                            </h6>
                        </div>
                        
                        <div class="gif-3-ret-1"></div>
                        <div class="gif-3-ret-2"></div>
                        
                        <img src="'.get_stylesheet_directory_uri().'/lib/orig_slider/images/home-slider/3-retail.jpg" class="photo-bkg"/>
                    
                    </div>
                    <!-- end above this line ^ -->
                    </div>
                    
                    
                    
                </div>
                <div class="right-arrow-blue">
                    
                    </div>


                
            </div>
            <div class="blue-box">
                <div class="page-width-container">
                <div class="orange-line-fixed orange-gradient"></div>
                    <div class="item-text-container">
                        <div class="item-text center-text">
                            <p>                 
                                <?php the_field("slider_01_caption");?>
                            </p>
                        </div>
                        <div class="item-text center-text">
                            <p>                 
                                <?php the_field("slider_02_caption");?>
                            </p>
                        </div>
                        <div class="item-text center-text">
                            <p>                 
                                <?php the_field("slider_03_caption");?>
                            </p>
                        </div>
                    </div>
                    <div class="orange-line-fixed orange-gradient float-left"></div>
                </div>
            </div>
        </div>
        
    </section>
<!-- SLIDER END --> ';
    } else {
        
    }
    return $ret;
}


add_shortcode('orig_slider','msdlab_add_orig_slider');