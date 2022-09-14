<?php 
    $_SESSION['path'] = 'pages';   
    $_SESSION['page'] = 'productdesc'; 


    $jsonData = file_get_contents("../product.json");
    $productData = json_decode($jsonData);

    for($i=0; $i < sizeof($productData->products); $i++){
    }
?>

<?php include '../includes/header.php'; ?>
    <section class="sub-banner-section sub-banner-product" id="itcd">
        <h1 class="wow animated fadeInUp slow text-center">PRODUCTS</h1>
        
    </section>
    <section class="product-list-section">
        <h3 class="text-center">OUR LATEST PRODUCTS</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="row">
                        <?php for($i=0; $i < sizeof($productData->products); $i++):?>
                            <div class="col-sm-6 col-md-4">
                                <div class="list-prod-container text-center">
                                    <a href="<?= $linkProductDesc ?>?product=<?= $productData->products[$i]->param?>">
                                        <img src="<?= $productData->products[$i]->img?>" class=" " alt="image banner 2">
                                        <h4><?= $productData->products[$i]->name?></h4>
                                    
                                        <br>
                                        <p><?= $productData->products[$i]->description?></p>
                                    </a>
                                </div>
                            </div>
                        <?php endfor;?>
                    </div>
                    
                <div>  
            </div> 
        </div> 
    </section>
<?php include '../includes/proprietaries.php'; ?>

<?php include '../includes/pagefooter.php'; ?>
<?php include '../includes/footer.php'; ?>