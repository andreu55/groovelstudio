<?php

$servername = "bbdd.groovelstudio.com";
$username = "ddb62653";
$password = "F5WkfunJJs0Q";
$dbname = "ddb62653";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Connected successfully
  $social_sql = $conn->prepare("SELECT nombre, icon, url FROM social_links");
  $social_sql->execute();

  // (PDO::FETCH_ASSOC) set the resulting array to associative
  // (PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE) para convertir a objeto
  $social_sql->setFetchMode(PDO::FETCH_ASSOC);


  // Preparamos los Social links
  $social_links = $social_sql->fetchAll();

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
