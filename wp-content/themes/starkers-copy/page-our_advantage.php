<?php
/*
Template Name: Our Advantage
*/
?>
<!DOCTYPE html>
<html>
<head>
		<title><?php if (is_front_page()) { bloginfo('name'); } ?></title>
	  	<?php
				include 'parts/html-head-import.html'; 
		?>	
		
		<style>
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				
				
				// This example adds a duration to the tweens so they are synced to the scroll position
	
				var controller = $.superscrollorama();
				
				// amount of scrolling over which the tween takes place (in pixels)
				var scrollDuration = 200; 
	
				// individual element tween examples
				//controller.addTween('#pone', TweenMax.from( $('#pone'), .5, {css:{opacity: .0, top: 50}}), scrollDuration);
				//controller.addTween('.icon', TweenMax.from( $('.icon'), .5, {css:{opacity: .0, top: 50}}), scrollDuration);
				
				controller.addTween('#icon-1', TweenMax.from( $('#icon-1'), .5, {css:{opacity: .0, top: 50}}), scrollDuration, -300);
				controller.addTween('#icon-2', TweenMax.from( $('#icon-2'), .5, {css:{opacity: .0, top: 50}}), scrollDuration, -150);
				controller.addTween('#icon-3', TweenMax.from( $('#icon-3'), .5, {css:{opacity: .0, top: 50}}), scrollDuration, 00);
				
				$('.advantage-arrow').hover(function(){
					TweenLite.to(this, 0.85, { opacity:1.0 , left:10, ease:Quint.easeOut, delay: 0.0});
					//alert('aaaaa');
				},function(){
					TweenLite.to(this, 0.85, { opacity:1.0 , left:00, ease:Quint.easeOut, delay: 0.0});
					//alert('aaaaa');
				});
				
				var $doneOnce = false;
				$('#blue-arrow-1').hover(function(){
					TweenLite.to(this, 0.85, {left: 10, ease:Quint.easeOut, delay: 0.0});
					
					if($doneOnce == false){
						TweenLite.to('#blue-arrow-2', 0.85, {left: 182, ease:Quint.easeOut, delay: 0.1});
						$('#blue-arrow-2').delay( 1000 ).css('opacity','1.0');
						/*
						$( "#block" ).delay(500).animate({
						    opacity: 1.0
						  }, 500 );
						*/
						TweenLite.to('#blue-arrow-3', 0.85, {left: 386, ease:Quint.easeOut, delay: 0.55});
						$doneOnce = true;
					}
					else if ($doneOnce == true){
						//do nothing
					}
					
				},function(){
					TweenLite.to(this, 0.85, {left: 0, ease:Quint.easeOut, delay: 0.0});
				});
				
				$('#blue-arrow-2').hover(function(){
					TweenLite.to(this, 0.85, {left: 192, ease:Quint.easeOut, delay: 0.0});
				},function(){
					TweenLite.to(this, 0.85, {left: 182, ease:Quint.easeOut, delay: 0.0});
				});
	
				$('#blue-arrow-3').hover(function(){
					TweenLite.to(this, 0.85, {left: 396, ease:Quint.easeOut, delay: 0.0});
				},function(){
					TweenLite.to(this, 0.85, {left: 386, ease:Quint.easeOut, delay: 0.0});
				});
				
					moveFirstBlueArrow();
				
				setTimeout(function() {
				      moveFirstBlueArrow();
				}, 850);
				
				function moveFirstBlueArrow(){
					if($doneOnce == false){
						//alert('aaaaaaa');
						TweenLite.to(this, 0.85, {left: 10, ease:Quint.easeOut, delay: 0.0});
						TweenLite.to(this, 0.85, {left: 0, ease:Quint.easeOut, delay: 0.85});
					}
					else{
					
					}
				}
				
				<?php
					include 'parts/slider-home.js'; 
				?>	
				
				
			
			});
		
		
		
		window.onload=function(){
			//TweenLite.to('.yellow', 1.5, { height: 20, ease:Power2.easeOut, delay: 0.5});
			
			TweenLite.from('.advantage-arrow', 0.85, { opacity: 0, left:-20, ease:Quint.easeOut, delay: 0.5});
			
			TweenLite.to('.swirl-bkg', 0.95, { opacity: 1.0, ease:Quint.easeOut, delay: 0.20});
			
			TweenLite.from('#woman-1', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 0.5});
			
			TweenLite.from('#woman-2', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 1.0});
			
			TweenLite.from('.left-title', 0.85, { opacity: 0, left:-20, ease:Quint.easeOut, delay: 0.75});
			
			TweenLite.from('.right-title', 0.85, { opacity: 0, left:20, ease:Quint.easeOut, delay: 1.25});
			
			TweenLite.from('.blue-arrow-container', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 0.65});
			
			TweenLite.to('#blue-arrow-1', 0.85, {left: 10, ease:Quint.easeOut, delay: 1.5});
			
			TweenLite.to('#blue-arrow-1', 0.85, {left: 0, ease:Quint.easeOut, delay: 1.85});
			
			
			TweenLite.from('.white-line', 1.50, {width: 1, ease:Quint.easeOut, delay: 0.50});
			
			TweenLite.to('.white-line', 0.50, {opacity: 1, ease:Quint.easeOut, delay: 0.50});
			
			
			
			
			
			
			//
			
			
	
			//TweenLite.to('.gif', 0.5, {css:{'background-position-x': '-4035px'}, delay:1.0});
			
			//t1.pause(1.0,true);
			
			//t1.to($(".gif"),1.0,{css:{'background-position-x': '-=0px'}},1.05);
			
			//t1.addPause(1);
			

			
			//
			
			//alert('aaaaa');
			
			<?php
				include 'parts/html-head-js.js'; 
			?>
			
			$itemHeight = $('.lines-box-home .item').height();
				
				//$('.item').css('height',$itemHeight);
				$('.item-container').css('height',$itemHeight);
				
				$('.lines-box-home .swirl-container').css('height',$itemHeight);
				
				$('.left-arrow-blue, .right-arrow-blue').css('top',$itemHeight/2).css('top','-=25px');
		
		};
		
		
		
		</script>
		
</head>
<body class="our-advantage-page">
	<header>
		<?php
			include 'parts/header.html'; 
		?>
	</header>	
	<section class="main-home-container gradient">
		<div class="page-width-container">
					<div class="left-side-home">
						<h1>
							<?php the_field("opening_paragraph");?>
						</h1>
						<!--
						<div class="white-line"></div>
						<h2>
							<?php the_field("opening_sub_paragraph");?>
						</h2>
						-->
					</div>
					<div class="right-side-home">
							<div class="home-logo"></div>
						</div>
			</div>
			
	
	</section>
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
						
						<img src="<?= get_bloginfo("template_url"); ?>/images/home-slider/1-entertainment.jpg" class="photo-bkg"/>
					
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
						
						<img src="<?= get_bloginfo("template_url"); ?>/images/home-slider/2-medical.jpg" class="photo-bkg"/>
					
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
						
						<img src="<?= get_bloginfo("template_url"); ?>/images/home-slider/3-retail.jpg" class="photo-bkg"/>
					
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
<!-- SLIDER END -->	
	<section>
		<div class="callout gradient">
			<div class="page-width-container center-text">
				<p>
					<?php the_field("blue_gradient_line");?>
				</p>
			</div>
		</div>
	</section>
	<section>
		<div class="page-width-container">
			<!--
			<p class="bottom-statement blue-color">
				You, too, can connect unlock hidden potential and build lasting value by engaging Advia to Inspire, Create, and Scale an exciting new service model &#8212; the Consumer Value Chain model &#8212; for your organization. 
		
			</p>
			-->
			<div class="contact-footer">
				<?php
					include 'parts/contact-footer.html'; 
				?>	
			</div>
			
		</div>
	</section>
	
	
	
	<footer>
		<?php
			include 'parts/footer.html'; 
		?>	
	</footer>

</body>
</html>