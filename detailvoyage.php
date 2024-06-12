<?php include('code/php/header.php'); ?>

    <!--debut topbar-->
<section id="page-titre" class="overlay">
    <h1>DETAIL DU SEJOUR</h1>
    <div class="vague">
    </div>
</section>

<main class="container">
    <div class="row">
        <section class="col-lg-7 offset-lg-1" id="page-details">
            <h2>lorem itsum dolor</h2>
            <img src="img/img27.jpg" alt="" class="img-fluid">
            <div class="details">
                <ul class="d-flex justify-content-center">
                    <li><i class="bi bi-clock"></i>5J/4N|</li>
                    <li><i class="bi bi-people-fill"></i>nombre de personnes|</li>
                    <li><i class="bi bi-geo-alt-fill"></i>NORVEGE|</li>
                </ul>
            </div><!--fin div detail-->
            <div id="tabs"><!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">programme</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                  </li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">

                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sint deleniti eum doloremque dicta ad explicabo at, culpa pariatur laborum atque quasi distinctio beatae, earum, quos officiis commodi. Velit, quia?</p>
                    </div>

                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae doloremque qui eligendi corporis ab natus dolorum quaerat quidem exercitationem? Molestiae, et similique obcaecati a nostrum asperiores vel sapiente earum aut.</p>
                    </div>

                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0"><img src="img/gallery-5.jpg" alt="">
                    </div>

                    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.773224256968!2d1.370753076174565!3d43.611263171104184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebaa26015cb43%3A0xacdcee70b0cc51c3!2s15%20Chem.%20de%20la%20Crabe%2C%2031300%20Toulouse!5e0!3m2!1sen!2sfr!4v1698064329623!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                
            </div>
            <div id="galerie-details" class="row"> 
                <h3>galerie / photos</h3>

                <figure class="col">
                    <img src="img/img30.jpg" alt="" class="img-fluid rounded">
                </figure>
                <figure class="col">
                    <img src="img/img31.jpg" alt="" class="img-fluid rounded">
                </figure>

            </div><!--fin class galerie-->

        </section>
        <aside class="col-lg-3">
            <div class="nbr">
                <span>649€</b>/par personne</span>
            
                <div class="detailstars">
                    <i class="bi bi-star-fill orange"></i>
                    <i class="bi bi-star-fill orange"></i>
                    <i class="bi bi-star-fill orange"></i>
                    <i class="bi bi-star gris"></i>
                    <i class="bi bi-star gris"></i>
                </div>
            </div>
                <div class="reservation">
                    <form action="" method="POST" class="border border-bottom-secondary">
                        <div class="btn-secondary">
                            <h3>Réservation</h3>
                        </div>
                        <input type="text" name="Nom"
                        placeholder="Nom" class="form-control mb-3">
                        <input type="email" name="email" placeholder="e-mail" class="form-control mb-3">
                        <input type="number" name="number" placeholder="telephone"
                        class="form-control mb-3">
                        <input type="date">
                    
                        <fieldset>
                            <legend>Ajouter des options</legend>
                            <div class="form-check">
                                <input type="checkbox" id="guide touristique">
                                <label for="guide touristique">guide touristique</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="assurance">
                                <label for="assurance">assurance</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="diner">
                                <label for="repas">diner</label>
                            </div> 

                            <div class="form-check">
                                <input type="checkbox" id="location de velos">
                                <label for="location">location de velo</label>
                            </div>
                        </fieldset>
                        <input type="submit" value="Book now" class="btn btn-primary form-control mb-3">
                    </form>
                </div>
                        <div id="info-com">
                            <h4>titre</h4>
                            <h5>lorem ipsum dolor</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda sed eveniet praesentium, ea aspernatur vel. Tenetur nostrum dolor ad. Praesentium fugit sit non cumque error commodi vero perferendis ipsam id!</p>
                            <a href="#"class="btn btn-primary form-control mb-3">Contact</a>
                        </div>

                        <div id="autresvoyages" class="overlay">
                            <h4>Autres voyages</h4>
                            <h5>Lorem ipsm dolor</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus perspiciatis dolores dignissimos.</p>
                            <ul class="list-group-flush list-group">
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>Vacances</li>
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>Lune de Miel</li>
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>Nouvel an</li>
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>Week end</li>
                            </ul>
                        </div>
     
        </aside>
    </div>
</main>

<section id="newletter" class="overlay">
    <div class="d-flex flex-column justify-content-center text-white mx-auto news">
        <h4>offres speciales Pâques</h4>
        <h5 class="display-3">REMISE EXCEPTIONNELLE DE 25% !</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate nisi facere explicabo numquam eum harum quis.</p>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Entrez votre email">
                <input type="submit" class="btn btn-primary">
            </form>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur laudantium explicabo provident soluta optio cupiditate. Facilis quas, nemo perspiciatis recusandae accusamus saepe nesciunt reprehenderit placeat et cum sint excepturi eaque.</p>
    </div>
</section>


<section id="bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-1">
                <h4>a Propos de voyages</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam eum quis maiores sunt modi iusto ducimus ipsum unde. Minima laudantium quis eos veritatis voluptatibus deserunt obcaecati veniam soluta nisi minus.</p>
                <img src="img/logo6.png" alt="">
                <img src="img/logo2.png" alt="">
            </div>
            <div class="col-md-3">
                <h4>a Propos de voyages</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam eum quis maiores sunt modi iusto ducimus ipsum unde. Minima laudantium quis eos veritatis voluptatibus deserunt obcaecati veniam soluta nisi minus.</p>
                <ul>
                    <li><i class="bi bi-telephone-fill"></i>
                        123 456 789</li>
                    <li><i class="bi bi-envelope-fill"></i>
                        test@gmail.com</li>
                    <li><i class="bi bi-geo-alt-fill"></i>
                        adresse</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>a Propos de voyages</h4>
                <article>
                    <a href="#">
                        <h6>titre de l'aticle</h6>
                    </a>
                    <span>19 Octobre 2023|aucun commentaire</span>
                </article>
                <hr>
                <article>
                    <a href="#">
                        <h6>titre de l'aticle</h6>
                    </a>
                    <span>19 Octobre 2023|aucun commentaire</span>
                </article>
            </div>
            <div class="col-md-2">
                <h4>a Propos de voyages</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                <form action="" method="POST">
                    <input type="email" placeholder="Votre email" class="form-control mb-3" required>
                    <input type="submit" value="Rejoignez-nous !" class="btn btn-primary form-control">
                </form>
            </div>
        </div>
    </div>
</section>
<div class="up">
    <a href="#topbar"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </div>
    
<?php include('code/php/footer.php');?>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      
        </script>
</body>
</html>