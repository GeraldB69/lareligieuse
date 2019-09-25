<!DOCTYPE html>

<html lang="fr">

<head>
    <title>LaReligieuse.com</title>
    <meta charset="utf-8">
    <meta name="author" content="La Religieuse team">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="La Religieuse est une liqueur puissante et énergisante élaborée à l'aide des mantes religieuses.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900|Lato:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="nav.css"/>
</head>

<body>

    <?php
    include_once 'header.php';
    ?>

    <section id="home-story">
        <div class="container">
            <div class="home-bottle">
                <img src="https://image.noelshack.com/fichiers/2019/38/4/1568893116-reli.png"
                     alt="bouteille de la religieuse"/>
            </div>

            <div class="home-description">
                <div class="home-story-txt">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quam at assumenda rem saepe dolore,
                        sunt tempore fuga commodi labore voluptatibus nesciunt, cumque error quae quod ullam voluptate
                        itaque molestias.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quam at assumenda rem saepe dolore.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quam at assumenda rem saepe dolore,
                        sunt tempore fuga commodi labore voluptatibus nesciunt, cumque error quae quod ullam voluptate
                        itaque molestias.</p>
                </div>

                <div class="home-button">
                    <a href="histoire.html" title="Nous découvrir un peu plus">En savoir plus</a>
                </div>
            </div>

            <div class="return"></div>
        </div>
    </section>


    <section id="home-cocktails">
        <div class="container">
            <h3>Cocktail du moment</h3>

            <div class="home-cocktail-moment">
                <figure>
                    <img src="https://cdn.pixabay.com/photo/2017/05/29/13/08/lime-2353741_960_720.jpg"
                         alt="cocktail green fizz religieuse"/>
                    <figcaption>Le Green-Fizz</figcaption>
                </figure>

                <div class="home-cocktail-description">
                    <div class="home-cocktail-txt">
                        <p>Commencez par remplir votre verre de glaçons, y verser les glaçons, la Religieuse, le citron et
                            le sucre de canne. Shaker le tout vigoureusement et servir dans un tumbler. Rajoutez-y une
                            tranche de citron pour la déco, et dégustez !</p>
                    </div>

                    <div class="home_ingredient">
                        <ul>
                            <li>- 4cl de Religieuse</li>
                            <li>- 1/4 de citron</li>
                            <li>- 5 glaçons</li>
                            <li>- Eau gazeuse</li>
                            <li>- Sucre de canne</li>
                        </ul>
                    </div>
                    <div class="home-button">
                        <a href="cocktails.html" title="Voir tous nos cocktails">+ de cocktails</a>
                    </div>
                </div>
            </div>

            <div class="return"></div>
        </div>
    </section>

    <?php
    include_once 'footer.php';
    ?>

</body>

</html>