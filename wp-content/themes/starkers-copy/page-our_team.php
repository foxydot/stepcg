<?php
/*
Template Name: Our Team
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
				
				//ul.our-team-list li 
				
				/*
				var $listItemsA = $('.team-line');
				
				$listItemsA.each(function(){
					//alert('111');
					//controller.addTween(this, TweenMax.from( this, .5, {css:{opacity: .0, top: 50}}), scrollDuration, -300);
				});
				*/
				
				
				//$teamLine.each(function(){
				//	controller.addTween($teamLine, TweenMax.from( $teamLine, .5, {css:{opacity: 1.0, width: 00}}),100,300);
				//});
				//controller.addTween('ul.our-team-list li:nth-child(2) .team-line', TweenMax.from( $('#line-2'), .5, {css:{opacity: 1.0, width: 00}}),100,150);
				//controller.addTween('ul.our-team-list li:nth-child(3) .team-line', TweenMax.from( $('#line-3'), .5, {css:{opacity: 1.0, width: 00}}),100,0);
				//controller.addTween('#line-4', TweenMax.from( $('#line-4'), .5, {css:{opacity: 1.0, width: 00}}),100,-100);
				
				
				
	
			});
		
		
		
		window.onload=function(){
			
			TweenLite.from('.advantage-arrow', 0.85, { opacity: 0, left:-20, ease:Quint.easeOut, delay: 0.5});
			
			TweenLite.from('.team-line', 0.85, { opacity: 0, width:0, ease:Quint.easeOut, delay: 1.0});
			
			<?php
				include 'parts/html-head-js.js'; 
			?>
			
			$teamList = $('ul.our-team-list li');
			
			$teamInfo = $('ul.our-team-list li .team-info');
				
				$teamPhoto = $('ul.our-team-list li .team-photo');
				
				$teamPhotoWidth = $teamPhoto.width();
				
				var $x = parseInt($teamPhotoWidth,10); // you want to use radix
    			// of 10 so you get a decimal number even with a leading 0
    			
    			//var select_first = parseInt($teamPhotoWidth.val(), 10);
				
				$width100 = 100% - $teamPhotoWidth;
				
				//alert($width100);
				$teamLine = $('.team-line');
				
				$teamList.each(function(){
					
					//alert($x);
					//alert();
					//$teamInfo.css('width',(100% - ($teamPhotoWidth));
					$teamInfo.css('width', '100%').css('width','-=' + $x + 'px');
					controller.addTween($teamLine.children('.team-line'), TweenMax.from( $teamLine, .5, {css:{opacity: 1.0, width: 00}}),100,300);
				});
		
		};
		</script>
		
</head>
<body class="our-team-page">
	<header>
		<?php
			include 'parts/header.html'; 
		?>
	</header>
	<section class="longer-width-container">
	
		<div class="advantage-arrow"></div>
		
		<div class="page-width-container">
			<h1 class="purple-color border-bottom-light-blue">
				<?php wp_title(''); ?>
			</h1>
			
			<h3>
			<?php the_field("main_paragraph");?>
			</h3>
		</div>
		
	</section>	
	<section>
			<ul class="our-team-list">
				<!--
				
				
				-->
				<?php $loop = new WP_Query( array( 'post_type' => 'teammember', 'posts_per_page' => -1, 'sort' => 'post_title', 'order' => 'asc' ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<!-- -->
						<li>
							<div class="page-width-container">
								<div class="team-photo">
									<img src="<?= the_field("bio_photo"); ?>" alt="<?php the_field("person");?>"/>
								</div>
								<div class="team-info">
									<h2>
										<?php the_field("person");?>
									</h2>
									<h3>
										<?php the_field("title");?>
									</h3>
									<div class="team-line orange-bkg"></div>
									<p class="shown">
										<?php the_field("biosnippet");?>
									</p>
									<p class="hidden">
										<?php the_field("bioexpand");?>
									</p>
									<div class="more-button">More ></div>
								</div>
								</div>
							</li>
					<!-- -->
					<?php endwhile; wp_reset_query(); ?>
			</ul>
		
	</section>
	
	<section>
		<?php
 
		$trainer_email_address = types_render_field("team-member-name", array("raw"=>"true","separator"=>";"));
		 
		//Output the trainer email
		 
		echo $trainer_email_address;
		?>
	</section>
	
	
	<section>
	</section>
	
	<section>
		<div class="page-width-container">
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