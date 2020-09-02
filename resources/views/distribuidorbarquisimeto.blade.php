<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@DistribuidorBarquisimeto </title>
        <!-- scripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <script type="text/javascript" >

          $(document).ready(function() {
              $('#tableData').DataTable();
              $('#tableData2').DataTable();
          } );
        </script>
        <style type="text/css">
              .avatar {
              vertical-align: middle;
              width: 80px;
              height: 80px;
              border-radius: 50%;

            }
            .responsive {
            width: 100%;
            max-width: 800px;
            height: auto;
          }
          .titulo{
            font-family: Nunito, sans-serif, bold; height:80px;align-content: center;font-size: 40px;
          }
        </style> 
        <!-- styles -->
        <link href="hhttps://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
      {--   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> --}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">    
                  <a href="/">

                    <img src="/img/loguito.png"class="responsive"></a><p class="titulo">
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <div class="item active">
                <img src="/img/promo.png" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Pollo</h3>
                  <p>El mas fresco</p>
                </div>
              </div>

              <div class="item">
                <img src="/img/promo2.png" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Mortadela</h3>
                  <p>La mejor del mercado</p>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
               
                <box>
                  <body> <br>
                    <h2 style="font-family: 'Nunito', sans-serif, bold; height:80px;align-content: center;font-size: 30px; ">Sigue nuestras redes: </h2>
                    <div class="links">
                       <a href="https://twitter.com/MayoristaBqto_" style=""> 
                        <img src="/img/twitter.png" alt="Avatar" class="avatar" style=" padding: 20px;">
                       </a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2Fmessage%2FAZDGKXD6XOOVA1%3Ffbclid%3DIwAR0PAjK3cNxkT5ReeyJB_MwrWYOsrW9NxJo4sAopbrEeV-7yMft5pGk-K0o&h=AT30rP5CeixDPKi4ZrND_RN_XvJEJaoJjA6jvoq65ExWsmWOlwO3Q6baZVkj1IE0d4-AWO3geBSEvIThDkWeLzxPRQSSbXA_9PEn0AecJ9oBx-pVdNb2u22Q7crw&__tn__=-UK*F&c[0]=AT12uk5_r0B7zmPIrho84q5UOpNs8vlaWYm3cz-_yt4wCSx3WOhX3I1Ju6lbt6xSD3G8JIb6nIBfkSrRyIVgotoHPPLrgWgDU0CPVtta-Zng1EqI-UcS_5UfLqY0JDIOPVJf7UXFNNsmIhSi8IK8ZewcjvwhT7Z_RvfTxsJZOlDBr86dL6WoMBbh7Q" style="padding-left: 10px">
                            <img src="/img/whatsapp.png" alt="Avatar" class="avatar" style=" padding: 20px;">
                       </a><
                        <a href="http://facebook.com/DistribuidorBarquisimeto" style="padding-left: 20px"> 
                          <img src="/img/facebook.png" alt="Avatar" class="avatar" style=" padding: 20px;">
                        </a>
                          <a href="http://instagram.com/DistribuidorBarquisimeto" style="padding-left: 20px"> 
                          <img src="/img/insta.png" alt="Avatar" class="avatar" style=" padding: 20px;">
                        </a><br>

                    </div>
                  </body>
            </div>
        </div>
    </body>
</html>
