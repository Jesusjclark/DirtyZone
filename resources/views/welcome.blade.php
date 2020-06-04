<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@DirtyZone  Entretainmeint</title>
        <!-- scripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" >
          $(document).ready(function() {
              $('#tableData').DataTable();
              $('#tableData2').DataTable();
          } );
        </script>
        <style type="text/css">
              .avatar {
              vertical-align: middle;
              width: 150px;
              height: 150px;
              border-radius: 50%;
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
                    <img src="/img/dirtyi.jpg">
                  </a>
                </div>
                <br>
                <h1 style="font-family: 'Nunito', sans-serif, bold; height:100px;align-content: center;font-size: 70px;">Top Models: </h1>
                <box>
                  <body> 
                    <div class="links">
                     <a href="/models/liadelicius" style="padding-left: 50px"> 
                      <img src="/img/liadelicius.jpeg" alt="Avatar" class="avatar" style=" padding: 24px;">
                     </a>
                      <a href="/models/rojitaLatina" style="padding-left: 40px">
                          <img src="/img/rojita.jpeg" alt="Avatar" class="avatar" style=" padding: 20px;">
                     </a>

                     <br>
                      <a href="/models/liadelicius" style="padding-left: 50px">
                        Lia Delicius
                      </a>
                      <a href="/models/rojitaLatina" style="padding-left: 40px">  
                        RojitaLatinaHot
                      </a>
                      <br>
                      <br>

                    </div>
                    
                  </body>
                </body>
            </div>
        </div>
    </body>
    <footer>
      <h3 style="text-align: center;">
       
        @copyright DirtyZone Entertainment 2020 || All rigths reserved.
      </h3>
    </footer>
</html>
