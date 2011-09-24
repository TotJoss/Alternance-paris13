$(document).ready(function() {
    $("ul li:first-child").toggle(function() {
	 $(".id").addClass("hide");
	}, function() {
	 $(".id").removeClass('hide');
});

$("ul li:nth-child(2)").toggle(function() {
	 $(".civilité").addClass("hide");
	}, function() {
	 $(".civilité").removeClass('hide');
});

$("ul li:nth-child(3)").toggle(function() {
	 $(".prénom").addClass("hide");
	}, function() {
	 $(".prénom").removeClass('hide');
});

$("ul li:nth-child(4)").toggle(function() {
	 $(".nom").addClass("hide");
	}, function() {
	 $(".nom").removeClass('hide');
});

$("ul li:nth-child(5)").toggle(function() {
	 $(".date").addClass("hide");
	}, function() {
	 $(".date").removeClass('hide');
});

$("ul li:nth-child(6)").toggle(function() {
	 $(".entreprise").addClass("hide");
	}, function() {
	 $(".entreprise").removeClass('hide');
});

$("ul li:nth-child(7)").toggle(function() {
	 $(".divers").addClass("hide");
	}, function() {
	 $(".divers").removeClass('hide');
});

$("ul li:nth-child(8)").toggle(function() {
	 $(".nationalité").addClass("hide");
	}, function() {
	 $(".nationalité").removeClass('hide');
});

$("ul li:nth-child(9)").toggle(function() {
	 $(".rue").addClass("hide");
	}, function() {
	 $(".rue").removeClass('hide');
});

$("ul li:nth-child(10)").toggle(function() {
	 $(".ville").addClass("hide");
	}, function() {
	 $(".ville").removeClass('hide');
});

$("ul li:nth-child(11)").toggle(function() {
	 $(".code").addClass("hide");
	}, function() {
	 $(".code").removeClass('hide');
});

$("ul li:nth-child(12)").toggle(function() {
	 $(".téléphone").addClass("hide");
	}, function() {
	 $(".téléphone").removeClass('hide');
});

$("ul li:nth-child(13)").toggle(function() {
	 $(".mail").addClass("hide");
	}, function() {
	 $(".mail").removeClass('hide');
});

$("ul li:nth-child(14)").toggle(function() {
	 $(".statut").addClass("hide");
	}, function() {
	 $(".statut").removeClass('hide');
});


});

