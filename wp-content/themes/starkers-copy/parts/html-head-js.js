<?php
			$host = $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'];
			
			if (is_front_page()) {
?>



				$('header ul li:nth-child(1) span').addClass('selected-header');
				
				$('footer ul li:nth-child(1) span').addClass('selected-footer');




<?php			    //echo 'advantage';
			}
			if (strpos($host,'approach') !== false) {
?>




				$('header ul li:nth-child(2) span').addClass('selected-header');
				
				$('footer ul li:nth-child(2) span').addClass('selected-footer');




<?php
			}
			else if (strpos($host,'team') !== false) {
?>



				$('header ul li:nth-child(3) span').addClass('selected-header');
				
				$('footer ul li:nth-child(3) span').addClass('selected-footer');



<?php
			}
			else if (strpos($host,'contact') !== false) {
?>


				$('header ul li:nth-child(4) span').addClass('selected-header');
				
				$('footer ul li:nth-child(4) span').addClass('selected-footer');




<?php			    
			}
?>

function detectBrowser(){
  var val = navigator.userAgent.toLowerCase();
  if(val.indexOf("firefox") > -1)
  {
  
  	//alert("This is Firefox. Write Firefox specific code here.")
  	$('.gif-1-ent-1').css('background-image','url(\' <?= get_bloginfo("template_url"); ?>/images/home-slider/png/1-ent-1/1-ent-1_0016_17.png\')');
  	$('.gif').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/home-slider/png/1-ent-2/1-ent-2_0018_19.png\')');
  	
  	$('.gif-2-med-1').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/home-slider/png/2-med-1/2-med-1_0013_14.png\')');
  	$('.gif-2-med-2').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/home-slider/png/2-med-2/2-med-2_0012_13.png\')');
  	
  	$('.gif-3-ret-1').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/home-slider/png/3-ret-1/3-ret-1_0015_16.png\')');
  	$('.gif-3-ret-2').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/home-slider/png/3-ret-2/3-ret-2_0015_16.png\')');
  	
  	//$('.swirl-1').css('background-position-x','5852px');
  	//$('.swirl-2').css('background-position-x','9152px');
  	$('.swirl-1').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/home-slider/png/swirl-1/swirl-1_00012.png\')');
  	$('.swirl-2').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/home-slider/png/swirl-2/swirl-2_00012.png\')');
  	$('.end-swirl').css('background-image','url(\'<?= get_bloginfo("template_url"); ?>/images/end-Swirl__00018.png	\')');
  }
  else if(val.indexOf("chrome") > -1)
  {
  //alert("This is Google Chrome. Write Google Chrome specific code here.")
  }
  else if(val.indexOf("opera") > -1)
  {
  //alert("This is Opera. Write Opera specific code here.")
  }
  else if(val.indexOf("msie") > -1)
  {
  //alert("This is Internet Explorer. Write Internet Explorer specific code here.")
  }
  else if(val.indexOf("safari") > -1)
  {
  //alert("This is Safari. Write Safari specific code here.")
  }
};
window.onload=detectBrowser();
