/**
 * @author Sam Baron
 */


$(document) .ready(function () {
	
	$(".cta-involvement").hide();
	
	$( window ).resize(function() {
		setSecOneHt();
	});
	
});	

// Move focus to email input after org type selected
var focusEmail = function () {
	$(".cta-answer[name='email']").focus().select();
};

// Show involvement div after email selected
var showInvolvement = function () {
	$(".cta-involvement").fadeIn("slow");
	setSecOneHt();
};

// Set section one height based on screen width and whether involvement question is shown
var setSecOneHt = function () {
	if ($(window).width() < 1100 && $(".cta-involvement").css("display") == "block") {
		$(".section-one").css("height","40em");
	} else {
		$(".section-one").css("height","25em");
	};
};
