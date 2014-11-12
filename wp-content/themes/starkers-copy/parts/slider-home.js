			var $item1 = true;
			var $item2 = false;
			var $item3 = false;

			var lastCalledTwice = 0;
			
			// LEFT & RIGHT ARROW NAV
			$('.right-arrow-blue').click(function(){
				counter = 31;
				lastCalledTwice = 3;
				if($item1 == true){
					gotoItem2();
					bringin2fromR();
					
				}
				
				else if($item2 == true){
					gotoItem3();
					bringin3fromR();
				}
				
				else if($item3 == true){
					gotoItem1();
					bringin1fromL();
				}
			});
			
			$('.left-arrow-blue').click(function(){
				counter = 31;
				lastCalledTwice = 3;
				if($item1 == true){
					gotoItem3();
					bringin3fromR();
				}
				
				else if($item2 == true){
					gotoItem1();
					bringin1fromL();
				}
				
				else if($item3 == true){
					gotoItem2();
					bringin2fromL();
				}

			});
			
			/*
			$(".item").on("swipeleft",function(){
			  //$(this).hide();
			  alert('swipe-left');
			});
			*/
			
			$(".swirl-container").mouseover(function(){
				counter = 42;
			});
			$(".swirl-container").mouseout(function(){
				counter = 7;
			});

			function gotoItem1(){
				TweenLite.to($('.item-container'), 0.85, {left: 00, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item-text-container'), 0.85, {left: 00, ease:Quint.easeOut, delay: 0.0});
				
				
				//margin-left: 70px;
				
				$item1 = true;
				$item2 = false;
				$item3 = false;
				
				$('.circle:nth-child(1)').css('background','rgba(250,137,36,1.0)');
				$('.circle:nth-child(2)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(3)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(4)').css('background','rgba(46,26,71,1.0)');
				//entTwo();
				
				
				//$('.gif').delay(400).css('opacity','0.0');
				//$('.gif-1-ent-1').delay(400).css('opacity','0.0');
				$('.gif-2-med-1').delay(400).css('opacity','0.0');
				$('.gif-2-med-2').delay(400).css('opacity','0.0');
				$('.gif-3-ret-1').delay(400).css('opacity','0.0');
				$('.gif-3-ret-2').delay(400).css('opacity','0.0');
				
					entOne();
					entTwo();
			}
			
			function gotoItem2(){
				TweenLite.to($('.item-container'), 0.85, {left: -960, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item-text-container'), 0.85, {left: -960, ease:Quint.easeOut, delay: 0.0});
				
				
				$item1 = false;
				$item2 = true;
				$item3 = false;
				
				$('.circle:nth-child(1)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(2)').css('background','rgba(250,137,36,1.0)');
				$('.circle:nth-child(3)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(4)').css('background','rgba(46,26,71,1.0)');
				
				$('.gif').delay(400).css('opacity','0.0');
				$('.gif-1-ent-1').delay(400).css('opacity','0.0');
				//$('.gif-2-med-1').delay(400).css('opacity','0.0');
				//$('.gif-2-med-2').delay(400).css('opacity','0.0');
				$('.gif-3-ret-1').delay(400).css('opacity','0.0');
				$('.gif-3-ret-2').delay(400).css('opacity','0.0');
					medOne();
					medTwo();
			}
			
			function gotoItem3(){
				TweenLite.to($('.item-container'), 0.85, {left: -1920, ease:Quint.easeOut, delay: 0.0});
				TweenLite.to($('.item-text-container'), 0.85, {left: -1920, ease:Quint.easeOut, delay: 0.0});
				
				
				
				$item1 = false;
				$item2 = false;
				$item3 = true;
				
				$('.circle:nth-child(1)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(2)').css('background','rgba(46,26,71,1.0)');
				$('.circle:nth-child(3)').css('background','rgba(250,137,36,1.0)');
				$('.circle:nth-child(4)').css('background','rgba(46,26,71,1.0)');
				
				
				$('.gif').delay(400).css('opacity','0.0');
				$('.gif-1-ent-1').delay(400).css('opacity','0.0');
				$('.gif-2-med-1').delay(400).css('opacity','0.0');
				$('.gif-2-med-2').delay(400).css('opacity','0.0');
				
				retOne();
				retTwo();
				lastCalledTwice++;
				
			}
			
			
			
			var counter = 0;
			var interval = setInterval(function() {
				
				counter++;
				
				if(counter == 10){
					//function
					//alert('5');
					if($item1 == true){
						gotoItem2();
						bringin2fromR();
					}
					
					else if($item2 == true){
						gotoItem3();
						bringin3fromR();
					}
					
					else if($item3 == true){
						gotoItem1();
						bringin1fromL();
					}
					
					
					
				}
				
				else if(counter == 20){
					//function
					//alert('10');
					if($item1 == true){
						gotoItem2();
						bringin2fromR();
					}
					
					else if($item2 == true){
						gotoItem3();
						bringin3fromR();
					}
					
					else if($item3 == true){
						gotoItem1();
						bringin1fromL();
					}
					
					
					
				}
				
				else if(counter == 30){
					//function
					//alert('20');
					counter = 0;
					if($item1 == true){
						gotoItem2();
						bringin2fromR();
					}
					
					else if($item2 == true){
						gotoItem3();
						bringin3fromR();
					}
					
					else if($item3 == true){
						gotoItem1();
						bringin1fromL();
					}
					counter = 0;
					
				}
				
				else if(counter == 41){
					counter = 0;
				}
				if(lastCalledTwice >= 2){
					counter = 100;
				}
				
			},1000);


gotoItem1();
					



function entOne(){
			var t1 = new TimelineMax({delay:0.75, repeat:0, repeatDelay:0});
			
			//t1.clear();
			//t1.to($(".gif-1-ent-1"),0.0,{css:{'opacity':'1.0'}},0.00);
			TweenLite.to($('.gif-1-ent-1'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 0.85});
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x':'0'}},0.05);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x':'-=186px'}},0.1);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x':'-=186px'}},0.15);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x':'-=186px'}},0.2);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x':'-=186px'}},0.25);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x':'-=186px'}},0.3);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x':'-=186px'}},0.35);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.4);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.45);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.5);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.55);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.6);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.65);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.7);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.75);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.8);
			t1.to($(".gif-1-ent-1"),0.0,{css:{'background-position-x': '-=186px'}},0.85);
			t1.to($(".gif-1-ent-1"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
}



function entTwo(){
			var t2 = new TimelineMax({delay:1.15, repeat:0, repeatDelay:0});
			
			//$('.gif').delay(400).css('opacity','1.0');
			//t2.clear();
			//t2.to($(".gif"),0.0,{css:{'opacity':'1.0'}},0.00);
			TweenLite.to($('.gif'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
			t2.to($(".gif"),0.0,{css:{'background-position-x':'0'}},0.05);
			t2.to($(".gif"),0.0,{css:{'background-position-x':'-=265px'}},0.1);
			t2.to($(".gif"),0.0,{css:{'background-position-x':'-=265px'}},0.15);
			t2.to($(".gif"),0.0,{css:{'background-position-x':'-=265px'}},0.2);
			t2.to($(".gif"),0.0,{css:{'background-position-x':'-=265px'}},0.25);
			t2.to($(".gif"),0.0,{css:{'background-position-x':'-=265px'}},0.3);
			t2.to($(".gif"),0.0,{css:{'background-position-x':'-=265px'}},0.35);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.4);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.45);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.5);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.55);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.6);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.65);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.7);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.75);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.8);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.85);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.9);
			t2.to($(".gif"),0.0,{css:{'background-position-x': '-=265px'}},0.95);
			t2.to($(".gif"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
}


function medOne(){
			var timeMed1 = new TimelineMax({delay:0.75, repeat:0, repeatDelay:0});
			
			//timeMed1.clear();
			//timeMed1.to($(".gif-2-med-1"),0.0,{css:{'opacity':'1.0'}},0.00);
			TweenLite.to($('.gif-2-med-1'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 0.85});
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x':'0'}},0.05);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x':'-=175px'}},0.1);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x':'-=175px'}},0.15);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x':'-=175px'}},0.2);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x':'-=175px'}},0.25);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x':'-=175px'}},0.3);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x':'-=175px'}},0.35);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x': '-=175px'}},0.4);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x': '-=175px'}},0.45);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x': '-=175px'}},0.5);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x': '-=175px'}},0.55);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x': '-=175px'}},0.6);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x': '-=175px'}},0.65);
			timeMed1.to($(".gif-2-med-1"),0.0,{css:{'background-position-x': '-=175px'}},0.7);
			
			timeMed1.to($(".gif-2-med-1"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
}

function medTwo(){
			var timeMed2 = new TimelineMax({delay:1.15, repeat:0, repeatDelay:0});
			
			//timeMed2.clear();
			//timeMed2.to($(".gif-2-med-2"),0.0,{css:{'opacity':'1.0'}},0.00);
			TweenLite.to($('.gif-2-med-2'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x':'0'}},0.05);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x':'-=204px'}},0.1);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x':'-=204px'}},0.15);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x':'-=204px'}},0.2);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x':'-=204px'}},0.25);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x':'-=204px'}},0.3);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x':'-=204px'}},0.35);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x': '-=204px'}},0.4);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x': '-=204px'}},0.45);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x': '-=204px'}},0.5);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x': '-=204px'}},0.55);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x': '-=204px'}},0.6);
			timeMed2.to($(".gif-2-med-2"),0.0,{css:{'background-position-x': '-=204px'}},0.65);
			
			timeMed2.to($(".gif-2-med-2"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
}

function retOne(){
			var timeRet1 = new TimelineMax({delay:0.75, repeat:0, repeatDelay:0});
			
			//timeRet1.clear();
			//timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'opacity':'1.0'}},0.00);
			TweenLite.to($('.gif-3-ret-1'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 0.85});
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x':'0'}},0.05);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x':'-=301px'}},0.1);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x':'-=301px'}},0.15);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x':'-=301px'}},0.2);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x':'-=301px'}},0.25);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x':'-=301px'}},0.3);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x':'-=301px'}},0.35);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.4);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.45);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.5);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.55);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.6);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.65);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.7);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.75);
			timeRet1.to($(".gif-3-ret-1"),0.0,{css:{'background-position-x': '-=301px'}},0.8);
			
			timeRet1.to($(".gif-3-ret-1"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
}

function retTwo(){
			var timeRet2 = new TimelineMax({delay:1.15, repeat:0, repeatDelay:0});
			
			//timeRet2.clear();
			//timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'opacity':'1.0'}},0.00);
			TweenLite.to($('.gif-3-ret-2'), 0.85, {opacity:1, ease:Quint.easeOut, delay: 1.25});
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x':'0'}},0.05);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x':'-=310px'}},0.1);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x':'-=310px'}},0.15);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x':'-=310px'}},0.2);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x':'-=310px'}},0.25);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x':'-=310px'}},0.3);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x':'-=310px'}},0.35);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.4);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.45);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.5);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.55);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.6);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.65);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.7);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.75);
			timeRet2.to($(".gif-3-ret-2"),0.0,{css:{'background-position-x': '-=310px'}},0.8);
			
			timeRet2.to($(".gif-3-ret-2"),10.0,{css:{'background-position-x': '-=0px'}},1.0);
}

function bringin3fromR(){
			//===
			//bring in 3
			TweenLite.from($('.item:nth-child(3) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(3) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.35});
			//push out 2
			TweenLite.from($('.item:nth-child(2) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(2) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.075});
			//push out 1
			TweenLite.from($('.item:nth-child(1) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(1) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.075});
			//===
}

function bringin2fromR(){
			//===
			//push out 1
			TweenLite.from($('.item:nth-child(1) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(1) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.075});
			//push out 3
			TweenLite.from($('.item:nth-child(3) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(3) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.075});
			//bring in 2
			TweenLite.from($('.item:nth-child(2) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(2) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.35});
			//===
}

function bringin1fromR(){
			//===
			//bring in 1
			TweenLite.from($('.item:nth-child(1) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(1) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.35});
			//push out 2
			TweenLite.from($('.item:nth-child(3) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(3) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.35});
			//push out 3
			TweenLite.from($('.item:nth-child(2) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(2) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.35});
			//===
}

//left

function bringin3fromL(){
			//===
			//bring in 3
			TweenLite.from($('.item:nth-child(3) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(3) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.35});
			//push out 2
			TweenLite.from($('.item:nth-child(2) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(2) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.075});
			//push out 1
			TweenLite.from($('.item:nth-child(1) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(1) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.075});
			//===
}

function bringin2fromL(){
			//===
			//push out 1
			TweenLite.from($('.item:nth-child(1) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(1) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.075});
			//push out 3
			TweenLite.from($('.item:nth-child(3) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.00});
			TweenLite.from($('.item:nth-child(3) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.075});
			//bring in 2
			TweenLite.from($('.item:nth-child(2) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(2) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.35});
			//===
}

function bringin1fromL(){
			//===
			//bring in 1
			TweenLite.from($('.item:nth-child(1) h5'), 0.85, {marginLeft: -25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(1) h6'), 0.85, {marginRight: 25, ease:Quint.easeOut, delay: 0.35});
			//push out 2
			TweenLite.from($('.item:nth-child(3) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(3) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.35});
			//push out 3
			TweenLite.from($('.item:nth-child(2) h5'), 0.85, {marginLeft: 25, ease:Quint.easeOut, delay: 0.25});
			TweenLite.from($('.item:nth-child(2) h6'), 0.85, {marginRight: -25, ease:Quint.easeOut, delay: 0.35});
			//===
}

