<?php
function msdlab_add_js_for_orig_sliders(){
    if(!is_admin()){
       wp_enqueue_style('orig_slider',get_stylesheet_directory_uri().'/lib/orig_slider/css/orig-slider.css');
       wp_enqueue_script('orig_slider-superscrollorama',get_stylesheet_directory_uri().'/lib/orig_slider/js/jquery.superscrollorama.js',array('jquery'),NULL,TRUE);
       wp_enqueue_script('orig_slider-tweenmax',get_stylesheet_directory_uri().'/lib/orig_slider/js/greensock/TweenMax.min.js',array('jquery'),NULL,TRUE);
       wp_enqueue_script('orig_slider-tweenlite',get_stylesheet_directory_uri().'/lib/orig_slider/js/greensock/TweenLite.min.js',array('jquery'),NULL,TRUE);
       wp_enqueue_script('orig_slider-timelinemax',get_stylesheet_directory_uri().'/lib/orig_slider/js/greensock/TimelineMax.min.js',array('jquery'),NULL,TRUE);
        if(is_front_page()){
            wp_enqueue_script('orig_slider-homepage-jquery',get_stylesheet_directory_uri().'/lib/orig_slider/js/slider-home.js',array('jquery'),NULL,TRUE);
        } else {
            
        }
    }
}

add_action('wp_enqueue_scripts', 'msdlab_add_js_for_orig_sliders', 2);

function msdlab_add_orig_slider(){
    if(is_front_page()){
        $ret = '
   <!-- SLIDER START -->   
    <section class="slider">
    
        <div class="lines-box white-bkg lines-box-home">
            <div class="page-width-container">
                
                
                
                <div class="left-arrow-blue">
                
                </div>
                
                <div class="swirl-container">

            <div class="item-container">
            <!--  item 1 -->
                    <div class="item">
                        <h4>
                            '.get_field("slider_01_title").'
                        </h4>
                        
                        <div class="white-h5-container">
                            <h5>
                                '.get_field("slider_01_subtitle_a").'
                            </h5>
                            <h6>
                                '.get_field("slider_01_subtitle_b").'
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
                            '.get_field("slider_02_title").'
                        </h4>
                        
                        <div class="white-h5-container">
                            <h5>
                                '.get_field("slider_02_subtitle_a").'
                            </h5>
                            <h6>
                                '.get_field("slider_02_subtitle_b").'
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
                            '.get_field("slider_03_title").'
                        </h4>
                        
                        
                        <div class="white-h5-container">
                            <h5>
                                '.get_field("slider_03_subtitle_a").'
                            </h5>
                            <h6>
                                '.get_field("slider_03_subtitle_b").'
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
                                '.get_field("slider_01_caption").'
                            </p>
                        </div>
                        <div class="item-text center-text">
                            <p>                 
                                '.get_field("slider_02_caption").'
                            </p>
                        </div>
                        <div class="item-text center-text">
                            <p>                 
                                '.get_field("slider_03_caption").'
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
        $ret = '<section class="slider">
    
        <div class="lines-box">
            <div class="page-width-container">
                <p class="purple-heading">
                    '.get_field("method_title").'
                </p>
                
                
                
                <div class="left-arrow-blue">
                
                </div>
                
                <div class="swirl-container">
                    <div class="pagination">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                        <div class="circle circle-4"></div>
                        <div class="pag-line"></div>
                    </div>
                    <div class="left-title">
                            Goal<br/>
                            <span class="bold">Set</span>
                        </div>
                    <div class="woman" id="woman-1"></div>
                    <div class="woman" id="woman-2"></div>
                    <div class="right-title">
                            Goal<br/>
                            <span class="bold">Achieved</span>
                        </div>
            <div class="item-container">
            <!--  item 1 -->
                    <div class="item">

                    
                        <!--<div class="woman" id="woman-1"></div>-->
                        
                        <div class="blue-arrow-container">
                            <div class="blue-arrow" id="blue-arrow-1">
                                    '.get_field("method_01_arrow_a").'
                            </div>
                            <div class="blue-arrow" id="blue-arrow-2">
                                    '.get_field("method_01_arrow_b").'
                            </div>
                            <div class="blue-arrow" id="blue-arrow-3">
                                '.get_field("method_01_arrow_c").'
                            </div>          
                        </div>
                    
                        <!--<div class="woman" id="woman-2"></div>-->

                        
                        <div class="swirl-1"></div>
                    
                    </div>
                    <!-- end above this line ^ -->
                    <!--  item 2 -->
                    <div class="item">
                        
                        <div class="blue-arrow-container">
                            <div class="blue-arrow" id="blue-arrow-4">
                                '.get_field("method_02_arrow").'
                            </div>          
                        </div>
                        
                        <div class="swirl-2"></div>
                        
                    </div>
                    <!-- end above this line ^ -->
                    <!--  item 3 -->
                    <div class="item">
                            
                        <div class="blue-arrow-container">
                            <div class="blue-arrow" id="blue-arrow-5">
                                '.get_field("method_03_arrow").'
                            </div>          
                        </div>
                        
                        <div class="swirl-1"></div>
                    
                    </div>
                    <!-- end above this line ^ -->
                    <!--  item 4 -->
                    <div class="item">
                    <div id="woman-3">
                        </div>
                        
                        <!--<div class="last-circle">
                        </div>-->
                        <div class="blue-arrow-container">
                            <div class="blue-arrow" id="blue-arrow-6">
                                '.get_field("method_04_arrow").'
                            </div>          
                        </div>
                        
                        
                        <div class="end-swirl"></div>
                        
                        
                                            
                    </div>
                    <!-- end above this line ^ -->
                    </div>
                    
                    
                    
                </div>
                <div class="right-arrow-blue">
                    
                    </div>


                
            </div>
            <div class="blue-box">
                <div class="page-width-container">
                    <div class="item-text-container">
                    <!-- 
                    
                    "To remain competitive, organizational leadership must break down functional silos with new methodologies that enable the success of <span class=\'semi-bold italic\'>cross-functional, customer-centric strategies</span>.";
            var $itemText2 = "<span class=\'semi-bold italic\'>Data</span> changes what consumers expect, and therefore what business must deliver. <span class=\'semi-bold italic\'>Intelligent designs</span> proactively respond to consumer, associate, and management needs in near real-time.";
            var $itemText3 = "A closed-loop ecosystem emerges as strategies mature, providing the learning models necessary to translate insights into profits and unlock new market opportunities.";
            var $itemText4 = "Once we have the <span class=\'semi-bold italic\'>Consumer Value Chain unlocked</span>, we scale to provide new revenue streams and market value across your enterprise.";
        
                    
                    
                     -->
                        <div class="item-text">
                            <p>                 
                                '.get_field("method_01_caption").'
                            </p>
                        </div>
                        <div class="item-text">
                            <p>                 
                                '.get_field("method_02_caption").'
                            </p>
                        </div>
                        <div class="item-text">
                            <p>                 
                                '.get_field("method_03_caption").'
                            </p>
                        </div>
                        <div class="item-text">
                            <p>                 
                                '.get_field("method_04_caption").'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>';
    }
    return $ret;
}


add_shortcode('orig_slider','msdlab_add_orig_slider');