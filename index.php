<?php
require_once __DIR__ . '/classes/Accessorise.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Species.php';
require_once __DIR__ . '/classes/Toys.php';
require_once __DIR__ . '/classes/Products.php';

$dog = new Species('Dog');
$cat = new Species('Cat');
$bird = new Species('Bird');
$fish = new Species('Fish');

$products = [
    new Food('Royal Canin Mini Adult', $dog, 29.80, "Chiken", 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg'),
    new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', $dog, 38.90,  "Chiken", 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg'),
    new Food('Almo Nature Cat Daily Lattina', $cat, 34.99, "Chiken", 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg'),
    new Food('Mangime per Pesci Guppy in Fiocchi', $fish, 3.95, "Chiken", 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg'),
    new Accessorise('Voliera Wilma in Legno', 190, $bird, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg'),
    new Accessorise('Cartucce Filtranti per Filtro EasyCrystal', 1.80, $fish, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg'),
    new Toys('Kong Classic', 15, $dog, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg'),
    new Toys('Topini di peluche Trixie', 9, $cat, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg'),
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <header class="d-flex justify-content-center bg-dark text-white">
        <h1>OOP Shop</h1>
    </header>
    <main>
        <section class="container d-flex justify-content-center flex-direction-row">
            <div class="row">
                <?php
                foreach ($products as $product) { ?>
                    <div class="col-4">
                        <div class="card m-5" style="width: 18rem; height: 35rem;">
                            <img src="<?php echo $product->getImgUrl() ?>" class="card-img-top p-5" alt="<?php echo $product->getName() ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getName() ?></h5>
                                <p class="card-text"> Price: <?php echo $product->getPrice() ?> &euro;</p>
                                <p class="card-text"><?php echo $product->getSpecies() ?></p>
                                
                            </div>
                            <a href="#" class="btn btn-primary w-3">Add to cart </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            </div>
        </section>
    </main>
    <footer class="d-flex justify-content-center bg-dark text-white">
        <p>Copyright &copy; 2024</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>