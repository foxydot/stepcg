jQuery(document).ready(function($) {	

    $('*:first-child').addClass('first-child');
    $('*:last-child').addClass('last-child');
    $('*:nth-child(even)').addClass('even');
    $('*:nth-child(odd)').addClass('odd');
	
	var numwidgets = $('#footer-widgets div.widget').length;
	$('#footer-widgets').addClass('cols-'+numwidgets);	
	
	$('.entry-header').each(function(){
       var title = $(this).find('.entry-title');
       var subtitle = $(this).find('.entry-subtitle');
       if(title.width() <= subtitle.width()){
           title.css('border-bottom','0').css('padding-bottom','0').css('margin-bottom','0');
       } else {
           subtitle.css('border-top','0').css('padding-top','0').css('margin-top','0');
       }
	});
	//approach
    var controller = $.superscrollorama();
    var scrollDuration = 200; 
    function do_icons(){
    controller.addTween('#icon-1', TweenMax.from( $('#icon-1'), .5, {css:{opacity: .0, top: 50}}), 75, 00);
    controller.addTween('#icon-2', TweenMax.from( $('#icon-2'), .5, {css:{opacity: .0, top: 50}}), 75, 100);
    controller.addTween('#icon-3', TweenMax.from( $('#icon-3'), .5, {css:{opacity: .0, top: 50}}), 75, 200);
    }
    do_icons();     
	//team
	$('.team-info .team-line').delay(2000).animate({width: 295,},1500);
	$('.team-info .more-button').click(function(){
	    var btn = $(this);
	    var more = btn.prev('p');
        more.slideToggle("slow",function(){
            console.log(btn.html());
            if(btn.html()==='More &gt;'){
                btn.html('Less &gt;');
            } else {
                btn.html('More &gt;');
            }
        });
	});
	
	//contact
    $('.gform_wrapper .left').wrapAll('<li class="col-md-4 col-sm-12"><ul></ul></li>');
    $('.gform_wrapper .right').wrapAll('<li class="col-md-8 col-sm-12"><ul></ul></li>');
    $('.gform_wrapper .gform_footer').addClass('col-md-8 col-md-offset-4 col-sm-12');
    
});
/*jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 880) {
        // apply effects and animations
        jQuery('.our-approach .widgets #icon-1').animate({opacity:1, top:-20,},2000);
    }    
    if (jQuery(this).scrollTop() > 920 && jQuery('.our-approach .widgets #icon-1').css('opacity')>0.5) {
        // apply effects and animations
        jQuery('.our-approach .widgets #icon-2').animate({opacity:1, top:-20,},2000);
    }
    if (jQuery(this).scrollTop() > 960 && jQuery('.our-approach .widgets #icon-2').css('opacity')>0.5) {
        // apply effects and animations
        jQuery('.our-approach .widgets #icon-3').animate({opacity:1, top:-20,},2000);
    }
});*/