$(document).ready(function(){
	init();
	emailjs.init("user_1TSq1V04SOOCAV0sjQG2A");
});

function init(){
	var enviar = $("#btn");
	$( "#myform" ).submit(function() {
		emailjs.sendForm('default_service', 'template_OjfD0M9z', this); return false;
	});
}