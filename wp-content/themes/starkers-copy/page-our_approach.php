<?php
/*
Template Name: Our Approach
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
			$(document).ready(function() {
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

			//var $doneOnce = false;
			$('#blue-arrow-1').hover(function(){
				TweenLite.to(this, 0.85, {left: 10, ease:Quint.easeOut, delay: 0.0});
				
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
			
			$('#blue-arrow-4').hover(function(){
				TweenLite.to(this, 0.85, {left: 25, ease:Quint.easeOut, delay: 0.0});
				
			},function(){
				TweenLite.to(this, 0.85, {left: 15, ease:Quint.easeOut, delay: 0.0});
			});
			
			$('#blue-arrow-5').hover(function(){
				TweenLite.to(this, 0.85, {left: 10, ease:Quint.easeOut, delay: 0.0});
				
			},function(){
				TweenLite.to(this, 0.85, {left: 20, ease:Quint.easeOut, delay: 0.0});
			});
			
			$('#blue-arrow-6').hover(function(){
				TweenLite.to(this, 0.85, {top: -5, ease:Quint.easeOut, delay: 0.0});
				
			},function(){
				TweenLite.to(this, 0.85, {top: 0, ease:Quint.easeOut, delay: 0.0});
			});
			
			function doSomething() {
			    //console.log("10 seconds");
			    //alert('this is a timeout');
			    moveFirstBlueArrow();
				
			    setTimeout(doSomething, 3400);
			    
			}
			
			setTimeout(doSomething, 3400);
			
			function moveFirstBlueArrow(){
				if($doneOnce == false){
					//alert('aaaaaaa');
					TweenLite.to('#blue-arrow-1', 0.85, {left: 10, ease:Quint.easeOut, delay: 0.0});
					TweenLite.to('#blue-arrow-1', 0.85, {left: 0, ease:Quint.easeOut, delay: 0.55});
					//alert('false');
				}
				else{
					//do nothing
				}
			}
			
			function moveSecondThirdArrow(){
					TweenLite.to('#blue-arrow-2', 0.85, {left: 182, ease:Quint.easeOut, delay: 0.1});
					$('#blue-arrow-2').delay( 1000 ).css('opacity','1.0');
					
					TweenLite.to('#blue-arrow-3', 0.85, {left: 386, ease:Quint.easeOut, delay: 0.55});
					
					//alert('did it');
			}
			
			setTimeout(moveSecondThirdArrow,2000);
			
			<?php
				include 'parts/slider.js'; 
			?>	
			
			$('.blue-box p').each(function(){
				//alert('aaaa');
				$blueboxPHeight = $(this).height();
				if($blueboxPHeight > 60){
					//alert(' over 80 ');
					$(this).css({'marginTop':'16px'});
				}
			});
			
			//convert string to number
			String.prototype.toNum = function(){
			    return parseInt(this, 10);
			}	
			
			$linesboxPageContainerHeight = $('.lines-box .page-width-container').height();
			
			$linesboxPageContainerPaddingTop = $('.lines-box .page-width-container').css('padding-top').replace(/[^-\d\.]/g, '').toNum();
			
			$linesboxPageTotalHeight = $linesboxPageContainerPaddingTop + $linesboxPageContainerHeight;
			//alert($linesboxPageTotalHeight);
			
			//alert($lbPT);
			
				var $windowHeight = $(window).height();
				//alert($windowHeight);
				
				
				function removeTweens(){
						controller.removeTween('#icon-1');
						controller.removeTween('#icon-2');
						controller.removeTween('#icon-3');
				}
				
				function shortHeight(){
						
						controller.addTween('#icon-1', TweenMax.from( $('#icon-1'), .5, {css:{opacity: .0, top: 50}}), 75, 00);
						controller.addTween('#icon-2', TweenMax.from( $('#icon-2'), .5, {css:{opacity: .0, top: 50}}), 75, 100);
						controller.addTween('#icon-3', TweenMax.from( $('#icon-3'), .5, {css:{opacity: .0, top: 50}}), 75, 200);
				}
				
				function longHeight(){
						
						controller.addTween('#icon-1', TweenMax.from( $('#icon-1'), .5, {css:{opacity: .0, top: 50}}), 75, -300);
						controller.addTween('#icon-2', TweenMax.from( $('#icon-2'), .5, {css:{opacity: .0, top: 50}}), 75, -150);
						controller.addTween('#icon-3', TweenMax.from( $('#icon-3'), .5, {css:{opacity: .0, top: 50}}), 75, 00);
				}
				
				
				/*
$(window).resize(function() {
					controller.triggerCheckAnim();
				    if($(window).height() > 850)
				     {
				     	//alert(' greater than 850');
				     	//snapFooter();
				     	removeTweens();
				     	longHeight();
				     	
				     }
				     else{
				     	//unsnapFooter();
				     	removeTweens();
				     	shortHeight();
				     }
				});
				
				if($windowHeight > 850){
					//snapFooter();
					longHeight();
				}
				else if($windowHeight <= 850){
					//unsnapFooter();
					shortHeight();
				}
*/
				shortHeight();
		});
		
		
		
		window.onload=function(){
			//TweenLite.to('.yellow', 1.5, { height: 20, ease:Power2.easeOut, delay: 0.5});
			
			TweenLite.from('.advantage-arrow', 0.85, { opacity: 0, left:-20, ease:Quint.easeOut, delay: 0.5});
			
			TweenLite.to('.swirl-bkg', 0.95, { opacity: 1.0, ease:Quint.easeOut, delay: 0.20});
			
			TweenLite.from('#woman-1', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 0.5});
			
			TweenLite.from('#woman-2', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 1.0});
			
			TweenLite.from('.left-title', 0.85, { opacity: 0, left:-20, ease:Quint.easeOut, delay: 0.75});
			
			TweenLite.from('.right-title', 0.85, { opacity: 0, left:920, ease:Quint.easeOut, delay: 2.75});
			
			TweenLite.from('.blue-arrow-container', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 0.65});
			
			TweenLite.to('#blue-arrow-1', 0.85, {left: 10, ease:Quint.easeOut, delay: 0.0});
			
			TweenLite.to('#blue-arrow-1', 0.85, {left: 0, ease:Quint.easeOut, delay: 0.55});
			
			
			
			
			<?php
				include 'parts/html-head-js.js'; 
			?>
			
			//alert('aaaaa');

		
		};
		</script>
		
</head>
<body class="our-approach-page">
	<header>
		<?php
			include 'parts/header.html'; 
		?>
	</header>
	<section class="longer-width-container">
	
		<div class="advantage-arrow"></div>
		
		<div class="page-width-container">
			<h1 class="purple-color">
				<?php wp_title(''); ?>
			</h1>
			<h2 class="blue-color border-top-light-blue">
				<?php the_field("sub_title");?>
			</h2>
			
			<h3>
			<?php the_field("method_intro");?>
			</h3>
		</div>
		
	</section>	
	<section>
	
		<div class="lines-box">
			<div class="page-width-container">
				<p class="purple-heading">
					<?php the_field("method_title");?>
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
									<?php the_field("method_01_arrow_a"); ?>
							</div>
							<div class="blue-arrow" id="blue-arrow-2">
									<?php the_field("method_01_arrow_b"); ?>
							</div>
							<div class="blue-arrow" id="blue-arrow-3">
								<?php the_field("method_01_arrow_c"); ?>
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
								<?php the_field("method_02_arrow"); ?>
							</div>			
						</div>
						
						<div class="swirl-2"></div>
						
					</div>
					<!-- end above this line ^ -->
					<!--  item 3 -->
					<div class="item">
							
						<div class="blue-arrow-container">
							<div class="blue-arrow" id="blue-arrow-5">
								<?php the_field("method_03_arrow"); ?>
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
								<?php the_field("method_04_arrow"); ?>
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
					
					"To remain competitive, organizational leadership must break down functional silos with new methodologies that enable the success of <span class='semi-bold italic'>cross-functional, customer-centric strategies</span>.";
			var $itemText2 = "<span class='semi-bold italic'>Data</span> changes what consumers expect, and therefore what business must deliver. <span class='semi-bold italic'>Intelligent designs</span> proactively respond to consumer, associate, and management needs in near real-time.";
			var $itemText3 = "A closed-loop ecosystem emerges as strategies mature, providing the learning models necessary to translate insights into profits and unlock new market opportunities.";
			var $itemText4 = "Once we have the <span class='semi-bold italic'>Consumer Value Chain unlocked</span>, we scale to provide new revenue streams and market value across your enterprise.";
		
					
					
					 -->
						<div class="item-text">
							<p>					
								<?php the_field("method_01_caption");?>
							</p>
						</div>
						<div class="item-text">
							<p>					
								<?php the_field("method_02_caption");?>
							</p>
						</div>
						<div class="item-text">
							<p>					
								<?php the_field("method_03_caption");?>
							</p>
						</div>
						<div class="item-text">
							<p>					
								<?php the_field("method_04_caption");?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<div class="page-width-container bullet-section">
		<h4 class="orange-color">
			<?php the_field("orange_headline");?>
		</h4>
		<?php the_field("list_of_benefits");?>
	</div>
	<section class="light-grey">
		<div class="page-width-container">
			<h3 class="light-blue-color">
				<?php the_field("light_blue_headline");?>
			</h3>
			<ul>
				<li>
					<div class="icon" id="icon-1"></div>
					<h4 class="orange-color">
						<?php the_field("icon_01_title");?>
					</h4>
					<div class="line blue-bkg"></div>
					<p class="purple-color">
						<?php the_field("icon_01_paragraph");?>
					</p>
				</li>
				<li>
					<div class="icon" id="icon-2"></div>
					<h4 class="orange-color">
						<?php the_field("icon_02_title");?>
					</h4>
					<div class="line blue-bkg"></div>
					<p class="purple-color">
						<?php the_field("icon_02_paragraph");?>
					</p>
				</li>
				<li>
					<div class="icon" id="icon-3"></div>
					<h4 class="orange-color">
						<?php the_field("icon_03_title");?>
					</h4>
					<div class="line blue-bkg"></div>
					<p class="purple-color">
						<?php the_field("icon_03_paragraph");?>
					</p>
				</li>
			</ul>
		</div>
	</section>
	<section>
		<div class="page-width-container">
			
			<!-- 
			<p class="bottom-statement blue-color">
				You, too, can unlock potential hidden value. If your interest is piqued, please give us a call to discuss how ADVIA Interactive can help your team <span class="bold">Inspire</span>, <span class="bold">Create</span>, and <span class="bold">Scale</span> to amplify your consumer/business value equation.
		
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