$(document).ready(function(){

	//hash change
	$(window).hashchange( function(){
		
		//on retrouve le vrai lien
		var arg = window.location.hash.substring(3);
		var link = 'http://ajax.wuiwui.net/'+arg; //remplacer l'URL racine du site !!
		
		//requete ajax
		$.ajax({
			url: link,
			processData: true,
			dataType:'html',
			success: function(data){
				// callback
				data = innerShiv(data,false);
				var contenu = $(data).find("#contenu");
				var title = $(data).filter('title').text();
				document.title = title;
				$('#contenu').fadeOut('200',function(){
					$(this).html(contenu.html()).fadeIn('200');
				});
			}
		 });
	});
	
	//détection d'un hash onload
	if(window.location.hash.substring(3)!=''){
		$(window).trigger( 'hashchange' );
	}

});