<?php 
    $_SESSION['path'] = 'pages';   
    $_SESSION['page'] = 'projectdesc'; 

    $productInfo = [];
    if($_GET["project"]){
        $project = $_GET["project"];

        $jsonData = file_get_contents("../project.json");
        $projectData = json_decode($jsonData);
        $projectInfo = "";
        for($i=0; $i < sizeof($projectData->projects); $i++){
            if($projectData->projects[$i]->param === $project){
                $projectInfo = $projectData->projects[$i];
            }
        }
    }
?>

<?php include '../includes/header.php'; ?>
    <section class="project-indivdual-section">
        <div class="container">
            <?php if($projectInfo):?>
            <div class="row" style="margin-top:70px">
                <div class="col-sm-3 text-center">
                    <img src="<?= $projectInfo->img?>" class=" " alt="image banner 2">
                </div>
                <div class="col-sm-9 description">
                    <h4>
                        <?= $projectInfo->name?>
                    </h4>
                    <br>
                    <div>
                        <?= $projectInfo->description?>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div> 
    </section>
    <section class="project-relative-section">
        <?php include '../includes/pagefooter.php'; ?>
    </section>

<?php include '../includes/footer.php'; ?>