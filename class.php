<?php include 'includes/head.php' ?>

<body id="classes">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>

  <!-- NavBar-->
	<?php include 'includes/navbar.php' ?>
	<!-- BG HEADER -->
    <header class="bg-header">
      <div class="overlays">
      <div class="container">
        <div class="row">
					<div class="col-sm-12">
            <h2 class="text-center">Titre du cours</h2>
            <img src="http://placehold.it/150x150" alt="" class="avatar-header"/>
            <ul>
              <li>Par <a href="#">Chuck Norris</a></li>
              <span>|</span>
              <li><a href="#">Arithmétique</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </header>

    <section class="cours content-section-b ">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="player-tuto">
              <img src="http://placehold.it/720x480" alt="" class="youtube"/>
            </div>

            <div class="description-tuto">
              <h3>A propos du tuto</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>

            <div class="description-prof">
              <h3>A propos du prof</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              <p><a class="btn btn-embossed btn-primary wow fadeIn" href="#" role="button">Autres cours</a>
              <a class="btn btn-embossed btn-primary wow fadeIn" href="#" role="button">Contacter</a></p>
            </div>


            <div class="disqus-container">
              <div id="disqus_thread"></div>
            </div>



            <div class="others-classes">
              <h3>Autres cours qui pourraient vous intéresser</h3>
              <ul>
                <li><a href="#">Cours intéressant</a></li>
                <li><a href="#">Cours intéressant</a></li>
                <li><a href="#">Cours intéressant</a></li>
                <li><a href="#">Cours intéressant</a></li>
                <li><a href="#">Cours intéressant</a></li>
              </ul>
            </div>
          </div><!-- col-sm-8 -->


          <div class="col-sm-4">
            <div class="ascensor">
            <img src="http://placehold.it/300x500" alt="" class="ascensor-sub"/>
            </div>
          </div>
        </div>
      </div>
    </section>



<?php include 'includes/footer.php' ?>
