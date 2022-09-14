<?php 
    $_SESSION['path'] = 'pages';   
    $_SESSION['page'] = 'productdesc'; 

    $productInfo = [];
    if($_GET["product"]){
        $product = $_GET["product"];

        $jsonData = file_get_contents("../product.json");
        $productData = json_decode($jsonData);

        for($i=0; $i < sizeof($productData->products); $i++){
            if($productData->products[$i]->param === $product){
                $productInfo = $productData->products[$i];
            }
        }
    }
?>

<?php include '../includes/header.php'; ?>
    <section class="product-indivdual-section">
        <div class="container">
            <?php if($productInfo):?>
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="text-center"><?= $productInfo->name?></h3>
                    <img src="<?= $productInfo->img?>" class=" " alt="image banner 2">
                </div>
                <div class="col-sm-8 specification">
                    <h4>Features: </h4>
                    <br>
                    <ul>
                        <?php for($a=0; $a < sizeof($productInfo->specification); $a++):?>
                            <li><?= $productInfo->specification[$a]?></li>
                        <?php endfor;?>
                    </ul>
                </div>
            </div>
            <?php endif;?>
        </div> 
    </section>
    <section class="product-relative-section">
        <?php include '../includes/proprietaries.php'; ?>
        <?php include '../includes/pagefooter.php'; ?>
    </section>

<?php include '../includes/footer.php'; ?>