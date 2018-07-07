<!DOCTYPE html>
<html>
<head>
    <title>Projeto Visitar</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
   
    <meta name="description" content="Projeto Visitar">
    <meta name="keywords" content="Projeto,Visitar,Vitória,Centro,Histórico,Turismo">
    <meta name="author" content="Luiz Cláudio">
    <meta name="author" content="UCV">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://kenwheeler.github.io/slick/slick/slick.js"></script>

    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzGaBHvcWHLzxRcUJLKfRlRc5vH8LbRGE"></script>
    <style type="text/css">
        div#mapa{
            width: 800px;
            height: 800px;
        }
    </style>

</head>
<body>
    <div id="mapa"></div>
    <script type="text/javascript">
    var map;        
    $(document).ready(function(){

        var CENTER_DEFAULT = {lat: -20.320224, lng: -40.340440};
        var CENTER_CURRENT = {};
        var ZOOM_DEFAULT = 16;

        map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: ZOOM_DEFAULT,
            center: CENTER_DEFAULT,
            zoomControl: true,
            scaleControl: false,
            mapTypeControl: false,
            fullscreenControlOptions : {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            streetViewControlOptions : {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            }
        });


        $.ajax({
            url: 'http://visitar.com/api',
            method: 'GET',
            success: function(data){
                montarMapa(JSON.parse(data));
                 console.log(JSON.parse(data).length);
            }
        });


    });

    function montarMapa(p){
        console.log(p);
        for(var i = 0; i < p.length; i++){
            
            var m=new google.maps.Marker({
                position: {lat: parseFloat(p[i].x), lng: parseFloat(p[i].y)},
                map: map
            });
        }

        

    }
    </script>

</body>
</html>