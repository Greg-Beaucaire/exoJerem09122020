<?php

//partie 1 et 2
$GAFAMTab = ['Google', 'Apple', 'Facebook', 'Amazon', 'Microsoft'];

$GTabLength = count($GAFAMTab);

for($i=0; $i < $GTabLength; $i++){
  echo("<p>".$GAFAMTab[$i]." fait parti des GAFAM, cette entreprise revend nos données personnelles et pratique l'évasion fiscale </p>");
}


//partie 3, 4 et 5
$dateCreationTab = ['04/09/1998', '01/04/1976', '04/02/2004', '05/06/1994', '26/11/1976'];

$dCTabLength = count($dateCreationTab);
for($i = 0; $i < $dCTabLength; $i++){
  echo("<p>".$dateCreationTab[$i]."</p>");
}

for($i = 0; $i < $dCTabLength; $i++){
  echo("<p>L'entreprise ".$GAFAMTab[$i]." a été fondée en ".$dateCreationTab[$i]."</p>");
}

//partie 6

$photosTab = ["https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Googleplex_HQ.jpg/120px-Googleplex_HQ.jpg", "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Aerial_view_of_Apple_Park_dllu.jpg/120px-Aerial_view_of_Apple_Park_dllu.jpg", "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Facebook_Campus%2C_Menlo_Park%2C_CA.jpg/120px-Facebook_Campus%2C_Menlo_Park%2C_CA.jpg", "https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Seattle_Spheres_on_May_10%2C_2018.jpg/120px-Seattle_Spheres_on_May_10%2C_2018.jpg", "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Aerial_Microsoft_West_Campus_August_2009.jpg/120px-Aerial_Microsoft_West_Campus_August_2009.jpg"];


//partie 7
$pTabLength = count($photosTab);

for($i = 0; $i < $pTabLength; $i++){
  echo("<title>".$GAFAMTab[$i]."</title><p>".$GAFAMTab[$i]." a été fondée le ".$dateCreationTab[$i]."<img src='".$photosTab[$i]."'>");
}

//partie 8, 9, 10

$estimationTab = [1000, 1981, 647, 1577, 1582];
$cac40valeur = 1800;

for($i = 0; $i < 5; $i++){
  if($estimationTab[$i] > $cac40valeur){
    echo("<p>".$GAFAMTab[$i]." pèse ".$estimationTab[$i]." milliards de dollars, OMG ce qui est plus que la totalité du CAC 40 </p>");
  }
  else {
    echo("<p>".$GAFAMTab[$i]." pèse ".$estimationTab[$i]." miliards de dollars</p>");
  }
}

?>