<?php
/*
Template Name: Homepage_Content
*/
?>

<?php get_header(); ?>

    <div class="container">

      <div class="row">

        <!-- Main Tagline
        ================================================== -->
        <div class="span6" id="summary">
          <h1>Free, Open Source First Person Shooter</h1>
          <br />
          <p>Xonotic is a free and fast-paced first person shooter for Linux, Mac, and Windows. It combines addictive, arena-style gameplay with rapid movement and a wide array of weapons. Xonotic is available under the permissive GPLv2 license.</p>
          <br />
          <button class="btn btn-danger btn-large" href="http://www.google.com"><i class="icon-download icon-white"></i> Download Now!<br /> <i>For Mac, Linux, and Windows</i></button>
          <button class="btn btn-primary btn-large" href="#"><i class="icon-comment icon-white"></i> Live Chat<br /> <i>Via QuakeNet IRC</i></button>
        </div>

        <!-- Carousel
        ================================================== -->
        <div class="span6">
          <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
              <div class="item active">
              <img alt="" src="http://placehold.it/780x500">
                <div class="carousel-caption">
                  <h4>Maps, new and old!</h4>
                  <p>Choose from 18 official maps or dozens more made by the community. Legacy Nexuiz maps are also supported, including those converted from Quake!</p>
                </div>
              </div>
              <div class="item">
                <img alt="" src="http://placehold.it/780x500">
                <div class="carousel-caption">
                  <h4>Seamless Warpzones</h4>
                  <p>See-through, seamless warpzones create distinctive gameplay opportunities.</p>
                </div>
              </div>

              <div class="item">
                <img alt="" src="http://placehold.it/780x500">
                <div class="carousel-caption">
                  <h4>Fully Customizable HUD</h4>
                  <p>Stick with the defaults, or customize the Heads-up Display (HUD) to see exactly what you want. You are in complete control!</p>
                </div>
              </div>
              <div class="item">
                <img alt="" src="http://placehold.it/780x500">
                <div class="carousel-caption">
                  <h4>Newly Created Models</h4>
                  <p>Newly created player and weapon models.</p>
                </div>
              </div>
              <div class="item">
                <img alt="" src="http://placehold.it/780x500">
                <div class="carousel-caption">
                  <h4>Player Statistics History</h4>
                  <p>See your weapon accuracy, past scoreboards, and track your improvement with our integrated <a href="http://stats.xonotic.org">player statistics system</a>.</p>
                </div>
              </div>
            </div>
            <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
            <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Feature Blocks
    ================================================== -->
    <div class="container hero-unit">
      <div class="row">
        <div class="span4">
          <h2>News</h2>
          <p>Prepare yourself and your friends for the upcoming Nation's Cup! Teams are being organized now, and you have the unique opportunity to represent your nation in a TDM frag-fest. C'mon, show us what you've got! Find out more <a href="#">here</a>.</p>
        </div>
        <div class="span4">
          <h2>History</h2>
           <p>Xonotic is a direct successor of the Nexuiz project. It represents years of development from its humble beginnings as a Quake 1 engine modification, and now aims to be the best possible open source first person shooter available. It could be considered most similar to Unreal Tournament and Quake at its heart, especially regarding teamplay and game mechanics.</p>
       </div>
        <div class="span4">
          <h2>Something Cool</h2>
          <p>I don't really know what to put here at the moment, but I'm sure I'll think of something cool! Maybe the latest forum threads, or perhaps a twitter feed/reel. Either way, it must flow well and add to the content rather than take away.</p>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
