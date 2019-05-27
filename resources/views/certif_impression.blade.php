 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
     
  <div class="container">
  <div class="row">
    

    <div class="demo col s6 offset-s3 grid-example">
      <span class="flow-text">
        <h2 class="header" style="font-size:20px;text-align: center;">FEDERATION TOGOLAISE DE TENIS</h2>
    <div class="card horizontal">
      <div class="card-image">
        
        <img src="uploads\{{Session::get('number')->photo}}">
      </div>
      <div class="card-stacked">
        <div class="card-content"style="font-size:15px;">
         
          <p>Nom:  {{Session::get('number')->nom}} <br>
          <p>Prénom: {{Session::get('number')->prenom}} <br>
          <p>Sexe: {{Session::get('number')->sexe}} <br>
          <p>Tel: {{Session::get('number')->tel}}  <br>
          <p>Licence: {{Session::get('number')->licence}}  <br>
          <p>Date de validité: {{Session::get('number')->date_valide}}  <br>
          <p>Nom du club: {{Session::get('number')->club}}  <br>
          <p>Cartégorie sportive: {{Session::get('number')->categorie}} <br>
          <p>Visite médicale: {{Session::get('number')->medical}} <br>
          <p>Groupe sanguin: {{Session::get('number')->sang}} <br>
          <p>Société d'assurances: {{Session::get('number')->assurance}} <br>
          </div>
         
      </span>


   

  </div>

</div>
 <div style="font-size:15px;"> <p> Cette licence est indispensable, c’est votre carte d’identité sportive personnelle
  Elle vous permet:
d’être assuré(e) et donc protégé(e) au Togo
de jouer dans un club au label fédéral
de participer à des compétitions homologuées, individuelles et par équipes
de bénéficier d ’une priorité pour la réservation des places pour les compétitions nationales
de bénéficier de tarifs réduits sur les prix d’entrées des championnats
de bénéficier des offres du CLUB DES PARTENAIRES SPONSORS
 

          </p>
        
        </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
  </html>