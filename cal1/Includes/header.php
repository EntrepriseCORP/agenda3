<!Doctype html>
<html>
<head>
      <meta charset="UTF-8">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

      <!-- un peu de bootstrap twitter pour l'instant en attandant le css final-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!--import jquery-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

      <link rel="stylesheet" href=".\css\calendar.css">
</head>


<body>

     <nav class="navbar navbar-dark bg-info secondary-color mb-3">
          <a href=".\index.php" class="navbar-brand">Calendrier</a>
          <form class="nav-item">
              <button id="btnnotif" type="button" class="btn btn-warning">Test notification</button>
          </form>
          <form class="nav_item" method="post" action="../src/Remplir.php" id="remplir">
               <button class="btn btn-dark" type="submit" form="remplir" >Temporaire : Remplir la bdd</button>
          </form>
          <form method="post" action="../src/Vider.php" id="vider">
              <button class="btn btn-success" type="submit" form="vider" >Temporaire : Vider la bdd</button>
          </form>
      </nav>


<!-- script temportaire pour tester les notifications -->


      <script>
      <!-- nombre random -->
          function entierAleatoire(min, max)
            {
             return Math.floor(Math.random() * (max - min + 1)) + min;
            }



            <!-- Onclick ->  nombre aléatoire -> affichage de differente notifiction -->
          document.getElementById('btnnotif').addEventListener('click', function(){

            var entier = entierAleatoire(1, 4);

            switch (entier){
              case 1:
                      toastr.success('Nouvelle réunion',"le 23/12/18 à 15h", {
                                "extendedTimeOut": "15000",
                                "closeButton": true,
                                "progressBar": true
                       });
                       break;
              case 2:
                       toastr.error('Réunion supprimé',"le 23/12/18 à 15h", {
                                 "extendedTimeOut": "15000",
                                 "closeButton": true,
                                 "progressBar": true,
                                 "fadeIn": 100

                       }).css({"width" : "550px", "height" : "90px"});
                      break;
              case 3:
                      toastr.info('Votre réunion va commencer',"le 23/12/18 à 15h", {
                                 "extendedTimeOut": "15000",
                                 "closeButton": true,
                                 "progressBar": true
                      }).css("height","100px");
                      break;
               case 4:
                      toastr.warning('Réunion supprimé',"le 23/12/18 à 15h", {
                                 "extendedTimeOut": "15000",
                                 "closeButton": true,
                                 "progressBar": true
                      }).css("width","500px");
                      break;
            }
          })

      </script>



      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
