<?php
/*
Template Name: Contact
*/
?>
<!DOCTYPE html>
<html>
<head>
		<title>Advia > <?php wp_title(''); ?></title>
	  	<?php
				include 'parts/html-head-import.html'; 
		?>	
		
		<style>
		</style>
		
		<script type="text/javascript">
		
			//ACCORDION TOGGLE FUNCTION
			$.fn.clicktoggle = function(a, b) {
			    return this.each(function() {
			        var clicked = false;
			        $(this).bind("click", function() {
			            if (clicked) {
			                clicked = false;
			                return b.apply(this, arguments);
			            }
			            clicked = true;
			            return a.apply(this, arguments);
			        });
			    });
			};
			//CLOSE THE ACCORDION
			function closeIt() {
			    //alert("closeIt");
				$(this).parent().children('.hidden').slideUp(400, function(){
					$(this).parent().children('.hidden').css("display", "none");
				});
				$(this).html($seeMore);
			}
			//OPEN THE ACCORDION
			function openIt() {
			   //alert("openIt");
				$(this).parent().children().slideDown(400);
				$(this).parent().children('.hidden').css("display", "block");
				$(this).html($seeLess);


			}
			
			$seeMore = 'More >';
			$seeLess = 'Less >';
			
			$(document).ready(function() {
				//accordion function toggle
				$(".more-button").clicktoggle(openIt, closeIt);
				
				// This example adds a duration to the tweens so they are synced to the scroll position
	
				var controller = $.superscrollorama();
				
				// amount of scrolling over which the tween takes place (in pixels)
				var scrollDuration = 200; 
				
				$('.advantage-arrow').hover(function(){
					TweenLite.to(this, 0.85, { opacity:1.0 , left:10, ease:Quint.easeOut, delay: 0.0});
					//alert('aaaaa');
				},function(){
					TweenLite.to(this, 0.85, { opacity:1.0 , left:00, ease:Quint.easeOut, delay: 0.0});
					//alert('aaaaa');
				});
				
				/*
				.form-container form .text-box
				*/
				$textfieldheight = $('.left-side-form').height();
				
				$('.text-box').css('height',$textfieldheight);
				
				$submitted = false;
				
				$('#submit-button').click(function(){
					if($submitted == false){
						TweenLite.to('.confirm', 0.85, { opacity: 1, top:0, ease:Quint.easeOut, delay: 0.0});
						$submitted = true;
						TweenLite.to('.confirm', 0.85, { opacity: 0, top:-20, ease:Quint.easeOut, delay: 5.0});
					}
				});
				
				var $windowHeight = $(window).height();
				//alert($windowHeight);
				
				
				
				function snapFooter(){
					$('footer').css({'position':'fixed','bottom':'0'});
					$('footer .logo-container').css({'marginTop':'0'});
				}
				
				function unsnapFooter(){
					$('footer').css({'position':'relative'});
					$('footer .logo-container').css({'marginTop':'20px'});
				}
				
				var $firstFormP = $('form p:nth-child(1)');
				
				//$('<div class="left-side-form">').insertBefore($('footer'));
				//$('</div>').insertAfter($('footer'));
				
				
				
				$('<div class="left-side-form">').prependTo($('form'));
				$('<div class="right-side-form">').insertAfter($('.left-side-form'));
				/*
				//$('.wpcf7-form p:nth-child(1)').prependTo('.left-side-form');
				$('.wpcf7-form p:nth-child(4)').prependTo('.left-side-form');
				$('.wpcf7-form p:nth-child(5)').appendTo('.left-side-form');
				$('.wpcf7-form p:nth-child(6)').appendTo('.right-side-form');				
				$('.wpcf7-form p:nth-child(7)').appendTo('.left-side-form');
				*/
				$('.wpcf7-form p').each(function(){
					$(this).appendTo('.left-side-form');
				});
				
				$('.wpcf7-form p #submitform').each(function(){
					var $newGuy2 = $(this).parent('p');
					//alert('message2');
					
					$($newGuy2).prependTo('.right-side-form');
				});
				
				$('.wpcf7-form p textarea').each(function(){
					var $newGuy = $(this).parent('span').parent('p');
					//alert('message');
					
					$($newGuy).prependTo('.right-side-form');
				});
				
				
				
				$(window).resize(function() {
				    if($(window).height() > 850)
				     {
				     	//alert(' greater than 850');
				     	snapFooter();
				     }
				     else{
				     	unsnapFooter();
				     }
				});
				
				if($windowHeight > 850){
					snapFooter();
				}
				else if($windowHeight <= 850){
					unsnapFooter();
				}
	
			});
		
		
		
		window.onload=function(){

			TweenLite.from('.advantage-arrow', 0.85, { opacity: 0, left:-20, ease:Quint.easeOut, delay: 0.5});
			
			
			
			<?php
				include 'parts/html-head-js.js'; 
			?>
		
		};
		</script>
		
</head>
<body class="contact-page">
	<header>
		<?php
			include 'parts/header.html'; 
		?>
	</header>
	<div class="footer-push-new">
	<section class="longer-width-container">
	
		<div class="advantage-arrow"></div>
		
		<div class="page-width-container">
			<h1 class="purple-color border-bottom-light-blue">
				<?php wp_title(''); ?>
			</h1>
			
			<h3>
				<?php the_field("contact_paragraph"); ?>
			</h3>
		</div>
		
	</section>	
	
	<section class="form-container">
		<div class="page-width-container">
			<?php echo do_shortcode( '[contact-form-7 id="43" title="Contact form 1"]' ) ?>
		</div>
	</section>
	<section class="confirm">
		<div class="page-width-container">
			<h4 class="orange-color">Thank you. Your message has been sent.</h4>
		</div>
	</section>
		<!-- <div class="push"></div> -->
		<section>
			
		</section>
	</div>
	
	
	<footer>
		<?php
			include 'parts/footer.html'; 
		?>	
	</footer>
	
</body>
</html>