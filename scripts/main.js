$(document).ready(function(){
	init();
	emailjs.init("user_ex60ZIUungJ9Tv8UrqcQK");
});

function init(){
	var enviar = $("#btn");
	$("#myform").submit(function(){
		var gmail = "gmail";
		var template = "template_4ZEVKftJ";
		emailjs.sendForm(gmail, template, this); return false;
	});

	enviar.on('click',function(){
		setTimeout(function(){ 
			location.reload();
		 },5000);
	})
}