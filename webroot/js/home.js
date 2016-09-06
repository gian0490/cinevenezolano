// /app/webroot/js/page_specific/blogs.js
$(function(){
	// ID de cada blog (debe coincidir con las ID de la vista y las del controlador)
	var blogs = ['underave','zeta','psico','raco'];
	$.each(blogs, function(i, blog){
		// Obtenemos JSON para cada blog
		$.getJSON(webroot+'rss/'+blog,function(data){
			// Ocultamos el texto "Cargando..."
			$('#'+blog).fadeOut('normal',function(){
				// Eliminamos el texto "Cargando..."
				$(this).html('');
				// Añadimos un ítem a la lista por cada enlace recibido
				$.each(data, function(i, item){
					$('<li><a href="'+item.link+'" target="_top">'+item.title.substr(0,1).toUpperCase() + item.title.substr(1,item.title.length).toLowerCase()+'</a></li>').appendTo("#"+blog);
				});
				// Lo mostramos todo
				$(this).fadeIn('normal');
			});
		});
	});
});
