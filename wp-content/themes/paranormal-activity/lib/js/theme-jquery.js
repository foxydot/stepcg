jQuery(document).ready(function($) {	

    $('*:first-child').addClass('first-child');
    $('*:last-child').addClass('last-child');
    $('*:nth-child(even)').addClass('even');
    $('*:nth-child(odd)').addClass('odd');
	
	var numwidgets = $('#footer-widgets div.widget').length;
	$('#footer-widgets').addClass('cols-'+numwidgets);	
	
	//team
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