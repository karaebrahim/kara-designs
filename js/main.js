$(function(){
		
			$(".imgContainer").hover(function(){
				$(this).children("p.caption").stop().animate({"margin-top":"-65px"}, 500);
			}, function(){
				$(this).children("p.caption").stop().animate({"margin-top":"0px"}, 500);
				$(this).siblings(".imgContainer").fadeTo(500, 1);
				$(".desc").fadeOut(500);
			});
}); // End of Document Ready