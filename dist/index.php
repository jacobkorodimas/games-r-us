    <?php 
        $page = 'home';
        include("inc/header.php");
    ?>

    <!-- SHOWCASE -->
    <div class="jumbotron jumbotron-fluid text-center text-light d-flex justify-content-center align-items-center">
        <div id="showcaseinner">
            <h1 class="display-4 mb-4">Get Great Games at Low Prices.</h1>
            <p class="lead mb-5">At Games R Us you can get all of the great, popular games you need!</p>
            <p><a href="games.php" class="btn btn-primary btn-lg">Shop Games</a></p>
        </div>

    </div>

    <!-- FEATURED GAMES -->
    <h2 class="text-center mb-5">Featured Games</h2>
    <div id="featured-games" class="container mb-2">
        <div class="row row-col-md-2">
            <!-- game 1 -->
            <div class="col">
                <div class="card text-center mb-4">
                    <img src="img/cranium.jpg" class="card-img-top align-self-center" alt="Cranium Game">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Cranium</a></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the cards content.</p>
                        <p>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-check"></i> 16+ </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-clock"></i> 30+ mins </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-friends"></i> 4+ </span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- game 2 -->
            <div class="col">
                <div class="card text-center mb-4">
                    <img src="img/splendor.jpg" class="card-img-top align-self-center" alt="Splendor Game">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Splendor</a></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the cards content.</p>
                        <p>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-check"></i> 10+ </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-clock"></i> 30 mins </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-friends"></i> 2-4 </span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- game 3 -->
            <div class="col d-none d-lg-block">
                <div class="card text-center mb-4">
                    <img src="img/blokus.jpg" class="card-img-top align-self-center" alt="Blokus Game">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Blokus</a></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the cards content.</p>
                        <p>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-check"></i> 7+ </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-clock"></i> 15+ mins </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-friends"></i> 2-4 </span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- game 4 -->
            <div class="col d-none d-lg-block">
                <div class="card text-center mb-4">
                    <img src="img/mancala.jpg" class="card-img-top align-self-center" alt="Mancala Game">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Mancala</a></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the cards content.</p>
                        <p>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-check"></i> 6+ </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-clock"></i> 15 mins </span>
                            <span class="badge badge-secondary mx-2"><i class="fas fa-user-friends"></i> 2 </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--TESTIMONIALS / BENEFITS -->
    <div id="testimonials" class="bg-white text-center">
        <div class="container">

            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h3>Great Quality!</h3>
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">I'm so happy with the games from Games-r-us!<br>
                                Great quality and hours of enjoyment with my kids!</p>
                            <footer class="blockquote-footer">George Foreman,<cite title="Source Title"> Happy
                                    Dad</cite></footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <h3>Loads of Fun!</h3>
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Playing games is so fun and I feel my stress decreasing!</p>
                            <footer class="blockquote-footer">Jane Foreman,<cite title="Source Title"> No stress
                                    Mom</cite></footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <h3>Best Store Ever!</h3>
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Great Customer Service! Very friendly staff!</p>
                            <footer class="blockquote-footer">Asmodon,<cite title="Source Title"> Eater of Worlds</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <a id="testimonial-previous" class="carousel-control-prev d-none d-lg-flex" href="#testimonial-carousel"
                    role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a id="testimonial-next" class="carousel-control-next d-none d-lg-flex" href="#testimonial-carousel"
                    role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>

    </div>

    <?php 
        include("inc/footer.php");
    ?>