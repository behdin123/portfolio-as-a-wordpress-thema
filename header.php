<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="navbar" >
    <div class="logo">
      <router-link to="/">
        <img class="logo-img" src="<?php echo get_template_directory_uri() ?> /images/final-logo-light.png" width="90px" height="90px"/>
      </router-link>
    </div>
    <div class="justify">
      <div class="navbar-links">
        <a>Mit Koncept</a>
        <a>Video</a>
        <a>Art Works</a>
        <a>Om Mig</a>
      </div>
    </div>
    <div class="navbar-others">
        <label class="switch">
        <input v-on:click="changeTitle" type="checkbox" v-model="dMode" />
        <span class="slider round"></span>
      </label>
      <div class="nav-icons">
        <div class="line"></div>
          <a href="https://www.instagram.com/behdin_b/" target="_blank"><img class="icon" src=" <?php echo get_template_directory_uri() ?>/images/instagram(nav).svg" width="23px" height="23px"></a>
          <a href="https://www.facebook.com/behdin.bagheri/" target="_blank"><img  class="icon facebook" src=" <?php echo get_template_directory_uri() ?>/images/facebook(nav).svg" width="23px" height="23px"></a>
        <div class="line"></div>
      </div>
      <img class="icon" src=" <?php echo get_template_directory_uri() ?>/images/world.svg" width="23px" height="23px">
      <div class="toggel-btn">
      <img class="icon toggle-menu" src="../assets/toggel-menu.svg" width="23px" height="23px">
    </div>
    </div>
  </div>