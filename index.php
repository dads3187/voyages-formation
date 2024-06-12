<?php include('code/php/header.php'); ?>

<!-- slider -->
<?php 
$server = "localhost";
$user = "root";
$password = "root";
$db = "voyage";
$connexion = mysqli_connect($server, $user, $password, $db);

if (!$connexion) {
    die("Echec de la connexion:" 
    . mysqli_connect_error());
}
?>
<div class="d-none display-mobile image-slider">
    <h1>Voyages sur mesure</h1>
</div>
    <section id="slider" class="hidden">

        <div id="carouselExampleCaptions" class="carousel slide">            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/slider-banner-1.jpg" class="d-block w-100" alt="mots clés">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-white">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        <a href="#" class="btn btn-primary mt-5">Détails du voyage</a>
                    </div>
                </div>
                    <div class="carousel-item">
                        <img src="img/slider-banner-2.jpg" class="d-block w-100" alt="mots cles">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="display-1 text-white">Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                            <a href="#" class="btn btn-primary mt-5">Détails du voyage</a>
                        </div>
                    </div>

            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
        </div>


    </section>

<!-- top destinations-->
<section id="populaires">
    <div class="container">
<!-- Formulaire recherche : destination, nombre de personnes, date debut, date fin + bouton valider-->

        <form action=""method="GET">
            <div class="row">
                <div class="col-md-2 offset-md-1">
                    <label for="destination" class="form-label">Rechercher Destination</label>
                    <input type="search" class="form-control" id="destination" name="destination"
                    placeholder="Mot clés" required>
                </div>
            
                <div class="col-md-2">
                    <label for="nombre-de-personne" class="form-label">Nombre de personne(s)</label>
                    <input type="number" class="form-control" id="nombre-de-personne" name="nombre-personne"
                    placeholder="Indiquer un nombre" required>
                </div>

                <div class="col-md-2">
                    <label for="date-arrivee" class="form-label">Date d'arrivée</label>
                    <input type="date" class="form-control" id="date-arrivee" name="date-arrivee"
                    placeholder="JJ/MM/AA" required>
                </div>

                <div class="col-md-2">
                    <label for="date-depart" class="form-label">Date de Départ</label>
                    <input type="date" class="form-control" id="date-depart" name="date-depart"
                    placeholder="JJ/MM/AA" required>
                </div>

                <div class="col-md-2">
                    <input type="submit" class="btn btn-primary form-control" value="Rechercher">
                </div>
                
            </div>

        </form>
        <!--destinations populaire -->

        <div class="row my-5 pt-3">
            <div class="col-md-5 offset-md-1">
                <h4>Destination populaires</h4>
                <h3>Top 10 Destinations</h3>
            </div>
        
            <div class="col-md-6 pt-3">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae quis ipsa eum necessitatibus facilis, quaerat iste sunt sint non, nihil consequuntur ipsum officiis aliquam atque voluptas adipisci distinctio illo deserunt.</p>
            </div>
        </div>
        <div class="row">
            
            <!--3 colonnes 1 + 3 + 3 + 3 + 1-->
            <div class="col-md-3 offset-md-1 destinations">
                <figure class="overlay">
                    <img src="img/img1.jpg" alt="mot-clés">
                </figure>
                <div class="cat1">
                <a href="#" class="btn btn-secondary">THAILANDE</a>
                </div>
                <div class="city">
                <h5>Disney Land</h5>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="col-md-3 destinations">
                <figure class="overlay">
                    <img src="img/img2.jpg" alt="mot-clés">
                </figure>
                <div class="cat1">
                <a href="#" class="btn btn-secondary">NORVEGE</a>
                </div>
                <div class="city">
                <h5>Oslo</h5>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destinations">

                    <figure class="overlay">
                        <img src="img/img3.jpg" alt="">
                    </figure>
                    <div class="cat">
                    <a href="#" class="btn btn-secondary">NOUVELLE-ZELANDE</a>
                    </div>
                    <div class="city1">
                    <h5>Wellington</h5>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    </div>
                </div>

                <div class="destinations">
                    <figure class="overlay">
                        <img src="img/img4.jpg" alt="">
                    </figure>
                    <div class="cat ">
                        <a href="#" class="btn btn-secondary">SINGAPOUR</a>
                    </div>
                    <div class="city1">
                        <h5>Singapour</h5>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
            </div>
        </div>   
        <div class="text-center mt-5 mb-5">
            <a href="#" class="btn btn-primary btn-lg">Plus de Destinations</a>
        </div>
    </div>
</section>

<section id="lieu">
    <div class="container">
    
        <div class="row">
            <div class="text-center">
                <h4>Explorer des lieux inoubliables</h4>
                <h3>lieux les plus visités</h3>
                <p class="visite">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae quis ipsa eum necessitatibus facilis, quaerat iste sunt sint non, nihil consequuntur ipsum officiis aliquam atque voluptas adipisci distinctio illo deserunt.</p>
            </div>   
        </div>
        <div class="row">

            <article class="col offset-md-1 ">
                <div class="card">
                    <img src="img/img28.jpg" class="card-img-top" alt="...">
                    <div class="prix">
                        <button class="btn btn-primary">
                            <strong>1900€</strong>/personne
                        </button>
                    </div>

                    <div class="details">
                        <ul>
                            <li><i class="bi bi-clock"></i>7J/6N</li>
                            <li><i class="bi bi-people-fill"></i>Nombre de personnes :5</li>
                            <li><i class="bi bi-geo-alt-fill"></i>Malaysia</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">La beauté de la Malaysie</h5>
                            <div class="note">
                                <span>(25 notes)</span>
                                <div class="stars">
                                    <i class="bi bi-star-fill orange"></i>
                                    <i class="bi bi-star-fill orange"></i>
                                    <i class="bi bi-star-fill orange"></i>
                                    <i class="bi bi-star gris"></i>
                                    <i class="bi bi-star gris"></i>
                                </div>
                            </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body d-flex justify-content-around links">
                        <a href="#">Réservation<i class="bi bi-heart"></i></a>
                        <a href="#">Whist list<i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </article>

            <article class="col">  
                <div class="card">
                    <img src="img/img27.jpg" class="card-img-top" alt="...">
                    <div class="prix">
                        <button class="btn btn-primary">
                            <strong>1230€</strong>/personne
                        </button>
                    </div>

                    <div class="details">
                        <ul>
                            <li><i class="bi bi-clock"></i>5J/4N</li>
                            <li><i class="bi bi-people-fill"></i>Nombre de personnes :8</li>
                            <li><i class="bi bi-geo-alt-fill"></i>Canada</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Une virée au Canada</h5>
                        <div class="note">
                            <span>(17 notes)</span>
                            <div class="stars">
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                            </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body d-flex justify-content-around links">
                        <a href="#">Réservation<i class="bi bi-heart"></i></a>
                        <a href="#">Whist list<i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </article>

            <article class="col">
                <div class="card">
                    <img src="img/img29.jpg" class="card-img-top" alt="...">
                    <div class="prix">
                        <button class="btn btn-primary">
                            <strong>2000€</strong>/personne
                        </button>
                    </div>

                    <div class="details">
                        <ul>
                            <li><i class="bi bi-clock"></i>6J/5N</li>
                            <li><i class="bi bi-people-fill"></i>Nombre de personnes :6</li>
                            <li><i class="bi bi-geo-alt-fill"></i>Portugal</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Séjour au Portugal</h5>
                        <div class="note">
                            <span>(22 notes)</span>
                            <div class="stars">
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star gris"></i>
                            </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body d-flex justify-content-around links">
                        <a href="#">Réservation<i class="bi bi-heart"></i></a>
                        <a href="#">Whist list<i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </article>
        </div>
        <div class="text-center mt-5 mb-5">
            <a href="#" class="btn btn-primary btn-lg">PLUS DE VOYAGES</a>
        </div>
    </div>

</section>

<section id="chiffres" class="hidden">
    <div class="container-fluid">
        <div class="row">
                
            <div class="col-md-8 offset-md-4 col-sm- bleu ">
                <div class="presentation text-center">
                    <h4>lorem ipsum dolor</h4>
                    <h3>lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus asperiores fugiat, quod nobis sapiente impedit fugit atque illo.</p>

                    <table>
                        <tr class="first">
                            <td class="icone">
                                <i class="bi bi-people-fill"></i>
                            </td>
                            <td class="nombre">
                                <span>500K+</span> 
                                <br>clients satisfaits
                            </td>
                            <td class="icone">
                                <i class="bi bi-person-fill-add"></i>
                            </td>
                            <td class="nombre">
                                <span>250K+</span>
                                <br>clients satisfaits
                            </td>
                        </tr>
                        <tr>
                            <td class="icone">
                                <i class="bi bi-gem"></i>
                            </td>
                            <td class="nombre">
                                <span>500K+</span> 
                                <br>clients satisfaits
                            </td>
                            <td class="icone">
                                <i class="bi bi-map"></i>
                            </td>
                            <td class="nombre">
                                <span>250K+</span> 
                                <br>clients satisfaits
                            </td>
                        </tr>
                    </table>
                </div>

                <img src="img/img8.jpg" alt="">

                <div class="tel d-flex justify-content-center">
                    <div class="icon">
                        <i class="bi bi-phone-vibrate"></i>
                    </div>
                    <div>
                        <p>lorem ipsim dolor</p>
                        <h6>Tel:123 456 789</h6>
                    </div>
                    
                </div>
            </div>
        </div>    
    </div>
</section>

<section id="aventure">
    <div class="container">
        <div class="row" style="margin-top: 10%;">
            <div class="text-center">
                <h4>Voyage par activité</h4>
                <h3>Aventure et Activité</h3>
                <p class="activite">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae quis ipsa eum necessitatibus facilis, quaerat iste sunt sint non, nihil consequuntur ipsum officiis aliquam atque voluptas adipisci distinctio illo deserunt.</p>
            </div>
        </div>
        <div class="row">

            <article class="col">
                <div class="card" >
                    <img src="img/icon6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5>Aventure</h5>
                        <p class="card-text">15 destinations</p>
                        </div>
                </div>
            </article>  
             
            <article class="col">
                <div class="card">
                    <img src="img/icon10.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Trekking</h5>
                            <p class="card-text">12 destinations</p>
                        </div>
                </div>
            </article>

            <article class="col">
                <div class="card">
                    <img src="img/icon9.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Feu de camp</h5>
                            <p class="card-text">7 Destinations</p>
                        </div>
                </div>
            </article>

            <article class="col">
                <div class="card">
                    <img src="img/icon8.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Sur les routes</h5>
                            <p class="card-text">15 Destinations</p>
                        </div>
                </div>
            </article>

            <article class="col">
                <div class="card">
                    <img src="img/icon7.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Camping</h5>
                            <p class="card-text">13 Destinations</p>
                        </div>
                </div>
            </article>

            <article class="col">
            <div class="card">
                <img src="img/icon11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Explorer</h5>
                        <p class="card-text">25 Destinations</p>
                    </div>
            </div>
            </article>


        </div>



    </div>
</section>

<section id="galerie">
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-md-4 offset-md-1 d-flex flex-column justify-content-around">
                <h4>galerie de voyages</h4>
                <h3>lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quam explicabo sapiente ipsam nostrum.</p>                   
                <img src="img/img12.jpg" class="img-fluid">  
            </div>
            <div class="col-md-6">
                    <div class="row">
                        <figure class="col-6">
                            <img src="img/img13.jpg">
                        </figure>
                        <figure class="col-6">
                            <img src="img/img14.jpg">
                        </figure>
                        <figure class="col-md-12">
                            <img src="img/img15.jpg" alt="" >
                        </figure>
                    </div>
            </div>
        </div>
    </div>
    
</section>

<section id="canoe" class="overlay">
    <div class="container">
        <div class="row hidden">
            <div class="col-md-10 offset-md-1 marque d-flex justify-content-around py-5">
                <img src="img/logo1.png" alt="">
                <img src="img/logo2.png" alt="">
                <img src="img/logo3.png">
                <img src="img/logo4.png" alt="">
                <img src="img/logo5.png" alt="">
            </div>   
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-1 p-3">
                <h4>Galerie de voyage</h4>
                <h3>Lorem ipsum odlor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ducimus cumque animi in. Assumenda explicabo in nisi reprehenderit eligendi, adipisci officia provident. Sapiente assumenda pariatur consequuntur illo nulla ullam iure?</p>

                <form action="" method="POST" class="d-flex justify-content-between my-3">
                    <input type="email" name="email"
                placeholder="Entrez votre email" class="form-control">
                <input type="submit" value="Je m'abonne !" class="btn btn-primary">
                </form>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dignissimos consectetur explicabo? Asperiores tempora minus nisi officiis repellendus ipsam eaque quos distinctio eveniet aliquid sit nesciunt laudantium, optio hic. Porro!</p>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-1">
                <img src="img/img24.jpg" alt="" class="img-fluid">
                <!-- mettre class= img-fluid pour mettre l'image a la taille de la collonne-->
            </div>
            <div class="col-7 py-5">
                <div class="row">
                    <div class="col">
                        <i class="bi bi-envelope-paper-heart"></i>
                        <ul class="mt-3">
                        <li>lorem itsum</li>
                        <li>lorem itsum</li>
                        <li>lorem itsum</li>
                        </ul>
                    </div>
                
                    <div class="col">
                        <i class="bi bi-telephone"></i>
                        <ul class="mt-3">
                            <li>lorem itsum</li>
                            <li>lorem itsum</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul>
                    </div>
                    <div class="col">
                        <i  class="bi bi-map">

                        </i>
                        <ul class="mt-3">
                            <li>lorem itsum</li>
                            <li>lorem itsum</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    
                        </ul>
                    </div>   
                </div>
                    <div class="d-flex justify-content-around my-3 contact-action">
                        <h4>Rejoignez nous pour rester informé!!</h4>
                        <div>
                        <a href="#" class="btn btn-primary">Valider</a>
                    </div>
                    </div>
            </div>

        </div>
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
</body>
</html>