<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<!DOCTYPE html>
<html>
<head>
		<title>Advia - Our Advantage</title>
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
<div class="footer-push">	
	<section class="main-home-container gradient">
		<div class="page-width-container">
					<div class="left-side-home">
						<h1>
							We are <span class="semi-bold">Advia Interactive</span> &#8212; a boutique consulting practice passionate about amplifying the customer/business value equation to unlock hidden revenue. Our methodology delivers results by addressing current service gaps across consumer, associate, and management interactions. The resulting strategies leverage a mix of personalized interactions built on cross-company data.
						</h1>
						<div class="white-line"></div>
						<h2>
							The ultimate end result is we create a continuously evolving <span class="italic">learning model</span> to optimize your customer/business value equation.
						</h2>
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
							Entertainment
						</h4>
						
						<div class="white-h5-container">
							<h5>Beyond reacting to guest requests...</h5>
							<h6>...to personalized experiences that anticipate their unmet needs.</h6>
						</div>
						<div class="gif"></div>
						<div class="gif-1-ent-1"></div>
						
						<img src="images/home-slider/1-entertainment.jpg" class="photo-bkg"/>
					
					</div>
					<!-- end above this line ^ -->
					<!--  item 2 -->
					<div class="item">
						<h4 class="blue-color">
							Medical
						</h4>
						
						<div class="white-h5-container">
							<h5>Beyond hiring great employees...</h5>
							<h6>...to empowering great employees to deliver coordinated care.</h6>
						</div>
						
						<div class="gif-2-med-1"></div>
						<div class="gif-2-med-2"></div>
						
						<img src="images/home-slider/2-medical.jpg" class="photo-bkg"/>
					
					</div>
					<!-- end above this line ^ -->
					<!--  item 3 -->
					<div class="item">
						<h4 class="pink-color">
							Retail
						</h4>
						
						
						<div class="white-h5-container">
							<h5>Beyond function specific tools and analytics...</h5>
							<h6>...to integrated tools that optimize service delivery.</h6>
						</div>
						
						<div class="gif-3-ret-1"></div>
						<div class="gif-3-ret-2"></div>
						
						<img src="images/home-slider/3-retail.jpg" class="photo-bkg"/>
					
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
						<div class="item-text">
							<p>					
								Are you at risk of loosing customers to competitors who are delivering increasingly personalized services?
							</p>
						</div>
						<div class="item-text">
							<p>					
								Do your employees feel empowered to provide the quality of service your customers demand?
							</p>
						</div>
						<div class="item-text">
							<p>					
								Are your managers supported with action oriented insights and the tools necessary to drive bottom line performance?
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
			<div class="page-width-container">
				<p>
					If you are interested in exploring new revenue strategies, it's time to contact our team of senior, cross-functional strategists.
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
			<p class="before-cta-p">
				Learn more about amplifying the <span class="semi-bold">customer/business value equation</span>
			</p>
			<div class="center-align">
					<a href="our_approach.php" class="round-button orange-bkg">
						Our Approach
					</a>
			</div>
			
		</div>
	</section>
			<div class="push"></div>
	
	
	</div>
	
	<footer>
		<?php
			include 'parts/footer.html'; 
		?>	
	</footer>

</body>
</html>