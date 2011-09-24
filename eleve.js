$(document).ready(function() {
    $("li").toggle(function() {
	 $(".id").addClass("hide");
	}, function() {
	 $(".id").removeClass('hide');
});
});

