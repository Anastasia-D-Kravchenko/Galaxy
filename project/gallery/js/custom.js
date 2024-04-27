var counter = 0;
$(document).bind("mousewheel",function(event){
	if(event.originalEvent.wheelDelta >0){
		counter += 10
		console.log(counter)
		$(".gallery_box_outer").css({"transform":"perspective(1000px) rotateX(-8deg) rotateY("+counter+"deg)"});
	}else{
		counter -= 10
		console.log(counter)
		$(".gallery_box_outer").css({"transform":"perspective(1000px) rotateX(-8deg) rotateY("+counter+"deg)"});
	}
})

$(".gallery_box_in").click(function() {
	$(location).attr('href', '../buyer.html');
});