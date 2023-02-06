<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($ptitle); ?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="scss/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>


<main>

<!-- Header -->
<div id="headerWrapper">
<div id="header">
  <div id="nameLogo">
  <h1>Cabot <br> Cruises</h1>
  <picture class="logo">
    <source srcset="images/logo_1x.png" media="(min-width: 1200px)">
    <source srcset="images/logo_2x.png" media="(min-width: 800px)">
    <img src="images/logo_3x.png" alt="Cabot Cruises Logo">
    </picture>
</div>
<a href="tel:18005551234"><h2>1-800-555-1234</h2></a>
</div>
</div>
<!-- NAV -->

<div id="navHeader">
 
  <div id="navItems">
<nav>

  <button id="hamburgerBtn">
    <span class="smallNav"><i>&equiv;</i> View Pages</span>
    <span class="smallNav"><i>&chi;</i> CLOSE</span>
  </button>
  
    <ul id="primaryNav">
    <li><a href="index.php">Home</a></li>
    <li><a href="cruises.php">Cruises</a></li>
    <li class="parent" id="parent"><a href="#">Agents</a>
      <ul id="subList">
        <li><a href="agent1.php">Sub Option 1</a></li>
        <li><a href="agent2.php">Sub Option 2</a></li>
      </ul>
    </li>
    
    <li><a href="booking.php">Book</a></li>
    </ul>
  </nav>

  <form id="form" aria-label="search-form">
  <input class = "searchBar" type="search" placeholder="Search.." aria-label="search-input">
  <button class="searchButton" type="submit" aria-label="form-search"><i class="fa fa-search"></i></button>
</form>
</div>

</div>
