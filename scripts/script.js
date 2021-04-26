function counting()
	{
		var time = new Date();
		var day = time.getDate();
		var month = time.getMonth()+1;
		var year = time.getFullYear();
		var hour = time.getHours();
		var minutes = time.getMinutes();
		var seconds = time.getSeconds();
		document.getElementById("clock").innerHTML = 
		 day+"."+month+"."+year+" | "+hour+":"+minutes+":"+seconds;
		 setTimeout("counting()",1000);
	}




	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '.splide' ).mount();
	} );




	