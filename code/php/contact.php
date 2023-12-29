<?php include('header.php');?>


<section id="page-titre" class="overlay">
    <h1>CONTACTEZ-NOUS</h1>
    <div class="vague">
    </div>
</section>

<section id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <h4>restons en contact</h4>
                <h3>obtenez plus d'informations</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, deserunt iste ut asperiores labore voluptatum accusamus eos explicabo quia deleniti, debitis tempore.</p>
            <form action="" method="POST">
                    <input type="text" placeholder="Votre Nom" name="nom" class="form-control mb-3" required>
                    <input type="email" placeholder="Votre mail" class="form-control mb-3"required name="email">
                    <textarea name="message" cols="30" rows="10" placeholder="Votre message"
                    class="form-control"required></textarea>
                    <input type="submit" value="Envoyer" class="btn btn-primary form-control">
            </form>  
            </div>
        
            <div class="col-md-4">
                <h5>Une question? N'hesitez pas à nous contacter !</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur illo maxime tempora quia. Nam est nisi velit voluptas, quisquam nihil? Id temporibus deleniti reiciendis perspiciatis itaque aperiam quibusdam eaque incidunt.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                <table>
                    <tr> 
                        <th rowspan="2"><i class="bi bi-signpost-2-fill"></i></th>
                        <th colspan="4">Coordonnées</th>
                    </tr> 
                    <tr>
                        <td>31 rue de la république
                        75000 Paris</td>
                    </tr>
                    <tr>
                        <th rowspan="2"><i class="bi bi-envelope-paper-fill"></i></th>
                    
                        <th colspan="3"><h6>Adresse mail</h6></th> 

                    </tr>
                    <tr>
                        <td colspan="3">contact@gmail.com</td>
                    </tr>
                    <tr>
                        <th rowspan="2"><i class="bi bi-telephone-outbound-fill"></i></th>
                        <td colspan="3"><h6>Téléphone</h6></td>
                    </tr>
                    <tr>
                        <td colspan="3">fixe:01 23 45 67 89 / mobile: 01 23 45 67 89</td>
                    </tr>
                    <!--<td><i class="bi bi-signpost-2-fill"></i></td>
                        <td>Coordonnées <br>
                        31 rue de la république
                        75000 Paris</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-envelope-paper-fill"></i></td>
                    
                        <td>
                        <b>adresse mail</b> <br>contact@gmail.com</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-telephone-outbound-fill"></i></td>
                        <td colspan="3">Téléphone</td> <br>fixe:01 23 45 67 89 / mobile: 01 23 45 67 89</td>
                    </tr>!-->
                </table>

                <div class="reseaux">
                    <h6>Suivez-Nous sur les reseaux sociaux</h6>
                    <ul class="d-flex">
                        <li><i class="bi bi-facebook"></i></li>
                        <li><i class="bi bi-twitter-x"></i></li>
                        <li><i class="bi bi-instagram"></i></li>
                        <li><i class="bi bi-linkedin"></i></li>    
                    </ul>
                    
                </div>

            </div>

        </div>
    </div>



</section>

<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.773224256968!2d1.370753076174565!3d43.611263171104184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebaa26015cb43%3A0xacdcee70b0cc51c3!2s15%20Chem.%20de%20la%20Crabe%2C%2031300%20Toulouse!5e0!3m2!1sen!2sfr!4v1698064329623!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section><!--fin section map-->

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

    <?php include('footer.php');?>
    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>