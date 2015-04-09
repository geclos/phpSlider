$(document).ready(function() {
	
	// Calls Bootstrap's carousel
	$(".carousel").carousel({
		interval: 5000,
		pause: "hover"
	});


	//Set rel value to image related links. Required by lightBox.

	$('section#lampades div a img').each(function() {
		setRelValues($(this));
	});

	$('section#lampades div a img').click(function() {
		applyLightBox($(this));
	});
});

function applyLightBox(x) {

		//Select image name
		var n1 = x.attr("src").lastIndexOf('/');
		var n2 = x.attr("src").lastIndexOf('.');
		var src = x.attr("src").substring(n1 + 1,n2);

		//Apply lightBox to any element matching that name
		$('a[rel=' + src + ']').lightBox();
}

function setRelValues(x) {

		var n1 = x.attr("src").lastIndexOf('/');
		var n2 = x.attr("src").lastIndexOf('.');
		var src = x.attr("src").substring(n1 + 1,n2);

		//Set rel value to any a tag within the same div
		x.parents("div.span4").children("a").attr("rel",src);
}