<?php

$PAGES = array();

$PAGES[] = array(
    "meta" => array(
      "title" => "Home",
      "description" => "Ich, Cyrill Gurtner, bin ein Softwareentwickler aus der Schweiz. Ich realisiere Webapplikationen mit modernsten Technologien und einer ansprechenden, agilen Projektmethodik."
    ),
    "url" => "home",
    "path" => "content/page/home.php",
    "breadcrumb" => "file/google/breadcrumb-home.json",
    "type" => "page",
    "display" => false,
    "disabled" => false
);

$PAGES[] = array(
    "meta" => array(
        "title" => "Werdegang",
        "description" => "Informatiker EFZ mit Fachrichtung Applikationsentwicklung mit anschliessender technischen Berufsmatur und Studium an der technischen Hochschule Rapperswil."
    ),
    "url" => "werdegang",
    "path" => "content/page/werdegang.php",
    "breadcrumb" => "file/google/breadcrumb-werdegang.json",
    "type" => "page",
    "display" => true,
    "disabled" => false
);

$PAGES[] = array(
    "meta" => array(
        "title" => "Galerie",
        "description" => "Meine Galerie umfasst einen Live-Feed von meinem Instagram Profil."
    ),
    "url" => "galerie",
    "path" => "content/page/galerie.php",
    "breadcrumb" => "file/google/breadcrumb-galerie.json",
    "type" => "page",
    "display" => false,
    "disabled" => true
);

$PAGES[] = array(
    "meta" => array(
        "title" => "Kontakt",
        "description" => "Webapplikationen, komplexe Softwarelösungen und Datenbankmodelle. Nehmen Sie mit mir Kontakt auf und besprechen Sie mit mir Ihre Ideen!"
    ),
    "url" => "kontakt",
    "path" => "content/page/kontakt.php",
    "breadcrumb" => "file/google/breadcrumb-kontakt.json",
    "type" => "page",
    "display" => true,
    "disabled" => false
);