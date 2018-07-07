$(document).ready(function(){


	$.ajax({
        url: 'http://visitar.com/api',
        method: 'GET',
        success: function(data){
            montarMapa($.parseJSON(data));
        }
    });



});

function montarMapa(p){

	console.log(p);

}