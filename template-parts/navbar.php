<?php
// Check if the 'page' parameter is set in the URL, otherwise default to 'home'
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<nav class="navbar navbar-expand-lg bg-secondary bg-gradient sticky-top" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo/logo.png" class="img-fluid border border-warning"></a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse justify-content-end navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ps-lg-4 pe-lg-4">
          <a class="nav-link text-white <?php echo ($current_page == 'home') ? 'active' : '';?>" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item ps-lg-4 pe-lg-4">
          <a class="nav-link text-white <?php echo ($current_page == 'about') ? 'active' : '';?>" href="?page=about">About Us</a>
        </li>
        <li class="nav-item ps-lg-4 pe-lg-4">
          <a class="nav-link text-white <?php echo ($current_page == 'mission_vision') ? 'active' : '';?>" href="?page=mission_vision">Mission / Vision</a>
        </li>
        <li class="nav-item ps-lg-4 pe-lg-4">
          <a href="?page=gallery" class="nav-link text-light <?php echo ($current_page == 'gallery') ? 'active' : '';?>">Gallery</a>
        </li>
        <li class="nav-item ps-lg-4 pe-lg-4">
          <a class="nav-link text-white <?php echo ($current_page == 'contact') ? 'active' : '';?>" href="?page=contact">Contact</a>
        </li>
        <li class="nav-item ps-lg-4 pe-lg-4 dropdown">
          <a href="#" class="text-light nav-link dropdown-toggle
           <?php echo (
            $current_page == 'sec' ||
            $current_page == 'quality_policy' ||
            $current_page == 'projects'
           ) ? 'active' : '';?>
          " role="button" type="button" data-bs-toggle="dropdown">Profile</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item <?php echo ($current_page == 'sec') ? 'active' : '';?>" href="?page=sec">Security & Safety</a></li>
            <li><a class="dropdown-item <?php echo ($current_page == 'quality_policy') ? 'active' : '';?>" href="?page=quality_policy">Quality Policy</a></li>
            <li><a class="dropdown-item <?php echo ($current_page == 'projects') ? 'active' : '';?>" href="?page=projects">Projects</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <li>
            <button href="#" type="button" id="nightMode" class="nav-link text-light"><i class="fa-regular fa-moon"></i></button>
            <button href="#" type="button" id="brightMode" class="nav-link text-light"><i class="fa-solid fa-sun"></i></button>
          </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
