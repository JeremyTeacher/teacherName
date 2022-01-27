<!--Header Template-->
<?php get_header(); ?>


SINGLE TEST


<div id="topnavbarcontainer" class="container-fluid">
    <nav id="topnavbar" class="nav topnav justify-content-end">
      <!-- <div class="menu-main-navigation-container">
        <ul id="menu-main-navigation" class="menu">
          <li class="navchild nav-link childclear"><a href="index.html">Home</a></li>
          <li class="navchild nav-link childclear"><a href="page.html">Portfolio</a></li>
          <li class="navchild nav-link childclear"><a href="page.html">Contact</a></li>
        </ul>
      </div> -->
      <?php
        $args = array(
          'theme_location' => 'primary'
        );
        wp_nav_menu($args);
       ?>
      <a class="nav-link icon" href="javascript:void(0);">
          <i class="fas fa-bars"></i>
      </a>
    </nav>
  </div>

  <!--main section-->
  <section class="container mainarea">
    <!-- <ul>
       <?php
        // $num = 1;
        //
        // while($num <= 6){
        //   echo '<li>List Item: #' . $num . '</li>';
        //   $num++;
        // }

       ?>
    </ul> -->

    <?php

      while(have_posts()){
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
      <?php  the_content();
      }

     ?>



  </section><!--mainarea section end-->





<!--Footer template file-->
<?php get_footer(); ?>
