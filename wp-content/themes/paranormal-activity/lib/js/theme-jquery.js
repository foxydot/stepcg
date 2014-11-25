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