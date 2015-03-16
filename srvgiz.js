/**
 * @author Sam Baron
 */

// Add Javascript and Jquery scripts to head element
	// <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	// <script type='text/javascript' src='srvgiz.js'></script>

// Edit body & add PHP script to input answers from php form
	// Remove: <div class="sg-header">
	// Edit Web-Organization Value: <?php echo $_SESSION['orgtype']; ?>
	// Edit Web-Email Value: <?php echo $_SESSION['email']; ?>
	// Edit Web-Involvement Value: <?php echo $_SESSION['involve']; session_destroy(); ?>
	// Remove: <div id="sgE-1778892-1-25-box" class="sg-question sg-type-instruction">
	// Remove: <div id="sgE-1778892-1-592-box" class="sg-question sg-type-radio sg-required"> "Why is organization and personal information management important to you?"
	
$(document) .ready(function () {
	
	// Clear survey title/intro text and adjust margin/padding so first question first in small iframe
	window.onload = function() {
		$(".sg-question").css("margin-bottom","0");
		$(".sg-content").css("padding","0");
		$(".sg-footer").css("padding","0");
	};

	// At click of "Next" button on first page of survey,
	$("#sg_NextButton").click(function () {
		// Hide confirmation message and expand survey window
		$(".conf-message", window.parent.document).fadeOut();
		$(".cts-container", window.parent.document).animate({top:"3em"},"slow");
		$("#sg_NextButton").off("click");
		
		// Send event to google analytics
		ga('send', 'event', 'button', 'click', 'Survey-Entry');

	});
	
});	
