			var $item1 = true;
			var $item2 = false;
			var $item3 = false;
			var $item4 = false;
			
					$('.circle:nth-child(1)').css('background','rgba(250,137,36,1.0)');
					$('.circle:nth-child(2)').css('background','rgba(46,26,71,1.0)');
					$('.circle:nth-child(3)').css('background','rgba(46,26,71,1.0)');
					$('.circle:nth-child(4)').css('background','rgba(46,26,71,1.0)');
					
					$('.item:nth-child(2)').css('opacity','0.0');
					$('.item:nth-child(3)').css('opacity','0.0');
					$('.item:nth-child(4)').css('opacity','0.0');
			
			// LEFT & RIGHT ARROW NAV
			$('.right-arrow-blue').click(function(){
				if($item1 == true){
					gotoItem2();
				}
				
				else if($item2 == true){
					gotoItem3();
				}
				
				else if($item3 == true){
					gotoItem4();
				}
				
				else if($item4 == true){
					gotoItem1();
				}
			});
			
			$('.left-arrow-blue').click(function(){
				if($item1 == true){
					gotoItem4();
				}
				
				else if($item2 == true){
					gotoItem1();
				}
				
				else if($item3 == true){
					gotoItem2();
				}
				
				else if($item4 == true){
					gotoItem3();
				}
			});
			
			// PAGINATION NAV
			$('.circle-1').click(function(){
				gotoItem1();

			});
			$('.circle-2').click(function(){
				gotoItem2();

			});
			$('.circle-3').click(function(){
				gotoItem3();

			});
			$('.circle-4').click(function(){
				gotoItem4();

			});
			
			/*
			function up( e ) {
			    //       ^-----------------------------------------------------+
			    if( !e ) e = window.event; // <---needed this --- and this ->--+
			
			    dragok = false;
			    document.onmousemove = null;
			    var x = e.target||e.srcElement; // <--- and these
			    document.getElementById(x.id).style.left= 200 + "px" ;
			    document.getElementById(x.id).style.top= 100 + "px" ;
			} 
			*/
			
			function gotoItem1(){
				//TweenLite.to($('.item-container'), 0.85, {left: 00, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item-text-container'), 0.85, {left: 00, ease:Quint.easeOut, delay: 0.0});
				
				$item1 = true;
				$item2 = false;
				$item3 = false;
				$item4 = false;
				
				$('.circle:nth-child(1)').css('background','rgba(250,137,36,1.0)');
				$('.circle:nth-child(2)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(3)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(4)').css('background','rgba(46,26,71,1.0)');
				
				TweenLite.to($('.item:nth-child(1)'), 0.85, {opacity: 1.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(2)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(3)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(4)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				
				putElements();
				swirl1Anim();
				
				TweenLite.to($('.swirl-1'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
				
				setTimeout(moveSecondThirdArrow,100);
			}
			
			function gotoItem2(){
				//TweenLite.to($('.item-container'), 0.85, {left: -900, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item-text-container'), 0.85, {left: -960, ease:Quint.easeOut, delay: 0.0});
				
				$item1 = false;
				$item2 = true;
				$item3 = false;
				$item4 = false;
				
				$('.circle:nth-child(1)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(2)').css('background','rgba(250,137,36,1.0)');
				$('.circle:nth-child(3)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(4)').css('background','rgba(46,26,71,1.0)');
				
				TweenLite.to($('.item:nth-child(1)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(2)'), 0.85, {opacity: 1.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(3)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(4)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				
				TweenLite.from($('#blue-arrow-4'), 0.85, {opacity: 0.0, left:-520, ease:Quint.easeOut, delay: 0.5});
				/*
				left: -520px;
				*/
				
				putElements();
				
				swirl2Anim();
				TweenLite.to($('.swirl-2'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
				
				
				putArrowsBack();
			}
			
			function gotoItem3(){
				//TweenLite.to($('.item-container'), 0.85, {left: -1800, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item-text-container'), 0.85, {left: -1920, ease:Quint.easeOut, delay: 0.0});
				
				$item1 = false;
				$item2 = false;
				$item3 = true;
				$item4 = false;
				
				$('.circle:nth-child(1)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(2)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(3)').css('background','rgba(250,137,36,1.0)');
				$('.circle:nth-child(4)').css('background','rgba(46,26,71,1.0)');
				
				TweenLite.to($('.item:nth-child(1)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(2)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(3)'), 0.85, {opacity: 1.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(4)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				
				TweenLite.from($('#blue-arrow-5'), 0.85, {opacity: 0.0, left:620, ease:Quint.easeOut, delay: 0.5});
				
				TweenLite.to($('.swirl-1'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
				
				putElements();
				swirl1Anim();
				
				
				putArrowsBack();
			}
			
			function gotoItem4(){
				//TweenLite.to($('.item-container'), 0.85, {left: -2700, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item-text-container'), 0.85, {left: -2880, ease:Quint.easeOut, delay: 0.0});
				
				$item1 = false;
				$item2 = false;
				$item3 = false;
				$item4 = true;
				
				$('.circle:nth-child(1)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(2)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(3)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(4)').css('background','rgba(250,137,36,1.0)');
				
				TweenLite.to($('.item:nth-child(1)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(2)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(3)'), 0.85, {opacity: 0.0, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item:nth-child(4)'), 0.85, {opacity: 1.0, ease:Quint.easeOut, delay: 0.0});
				
				endSwirling();
				
				deleteElements();
				$('.end-swirl').css('opacity','0.0');
				
				putArrowsBack();
				
				
			}




			function deleteElements(){
				TweenLite.to('#woman-1', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 0.0});
			
				TweenLite.to('#woman-2', 0.85, { opacity: 0, top:20, ease:Quint.easeOut, delay: 0.1});
				
				TweenLite.to('.left-title', 0.85, { opacity: 0, left:-20, ease:Quint.easeOut, delay: 0.05});
				
				TweenLite.to('.right-title', 0.85, { opacity: 0, left:920, ease:Quint.easeOut, delay: 0.15});
				
				TweenLite.from('#woman-3', 0.85, { opacity: 0, top:60, ease:Quint.easeOut, delay: 0.60});

				TweenLite.from('.last-circle', 0.85, { opacity: 0, top:60, ease:Quint.easeOut, delay: 0.50});

				TweenLite.from('.end-swirl', 0.85, { opacity: 0, top:60, ease:Quint.easeOut, delay: 0.50});
				
				TweenLite.from('.item:nth-child(4) .blue-arrow-container', 1.35, { opacity: 0, top:60, ease:Quint.easeOut, delay: 0.60});
			}
			
			function putElements(){
				TweenLite.to('#woman-1', 0.85, { opacity: 1.0, top:0, ease:Quint.easeOut, delay: 0.0});
			
				TweenLite.to('#woman-2', 0.85, { opacity: 1.0, top:0, ease:Quint.easeOut, delay: 0.35});
				
				TweenLite.to('.left-title', 0.85, { opacity: 1.0, left:0, ease:Quint.easeOut, delay: 0.2});
				
				TweenLite.to('.right-title', 0.85, { opacity: 1.0, left:818, ease:Quint.easeOut, delay: 0.5});
			}
			
			
			
			
			
			
			function swirl2Anim(){
					var swirl2AnimTime = new TimelineMax({delay:1.15, repeat:0, repeatDelay:0});
					//alert('aaaa');
					//swirl2AnimTime.clear();
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'opacity':'1.0','background-position-x':'532'}},0.00);
					TweenLite.to($('.swirl-2'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
					/*
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.1);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.15);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.2);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.25);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.3);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.35);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.4);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.45);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.5);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.55);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.6);
					
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.65);
					*/
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.116);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.174);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.232);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.290);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.348);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x':'-=532px'}},0.433);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.491);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.549);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.607);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.665);
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.723);
					
					swirl2AnimTime.to($(".swirl-2"),0.0,{css:{'background-position-x': '-=532px'}},0.781);
					
					swirl2AnimTime.to($(".swirl-2"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
		}
		
		function swirl1Anim(){
					var swirl1AnimTime = new TimelineMax({delay:1.15, repeat:0, repeatDelay:0});
					//alert('aaaa');
					//swirl1AnimTime.clear();
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'opacity':'1.0','background-position-x':'832'}},0.00);
					TweenLite.to($('.swirl-1'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
					/*
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.1);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.15);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.2);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.25);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.3);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.35);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.4);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.45);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.5);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.55);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.6);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.65);
					*/
					
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.116);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.174);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.232);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.290);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.348);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x':'-=832px'}},0.433);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.491);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.549);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.607);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.665);
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.723);
					
					swirl1AnimTime.to($(".swirl-1"),0.0,{css:{'background-position-x': '-=832px'}},0.781);
					
					
					
					
					
					swirl1AnimTime.to($(".swirl-1"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
		}
		
		
		
		
		setTimeout(function() {
		      // Do something after 5 seconds
		      swirl1Anim();
		}, 3000);
		
		
		function putArrowsBack(){
			$('#blue-arrow-2').css('left','-20px');
			$('#blue-arrow-3').css('left','0px');
		}
		
		
		
		
		function endSwirling(){
			var endSwirling = new TimelineMax({delay:1.15, repeat:0, repeatDelay:0});

			TweenLite.to($(".end-swirl"),0.0,{css:{'background-position-x':'0'}},0.00);

			TweenLite.to($('.end-swirl'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x':'0'}},0.05);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x':'-=406'}},0.1);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x':'-=406'}},0.15);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x':'-=406'}},0.2);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x':'-=406'}},0.25);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x':'-=406'}},0.3);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x':'-=406'}},0.35);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.4);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.45);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.5);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.55);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.6);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.65);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.7);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.75);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.8);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.85);
			endSwirling.to($(".end-swirl"),0.0,{css:{'background-position-x': '-=406'}},0.9);
			
			endSwirling.to($(".end-swirl"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
		}
		
		