<?php 
    
    $linkTrans = ($page === 'transportation' ? "#" : $linkpage."pages/transportation.php");
    $classTrans = ($page === 'transportation' ? "class='active'" : ""); 
    $linkBusiness = ($page === 'business' ? "#" : $linkpage."pages/business.php");
    $classBusiness = ($page === 'business' ? "class='active'" : ""); 
    $linkSecurity = ($page === 'security' ? "#" : $linkpage."pages/security.php");
    $classSecurity = ($page === 'security' ? "class='active'" : ""); 
    $linkProduct = ($page === 'product' ? "#" : $linkpage."pages/product.php");
    $classProduct = ($page === 'product' ? "active" : "");  
    $linkProductDesc = $linkpage."pages/productdesc.php";
    $classProductDesc = ($page === 'productdesc' ? "active" : "");
    $linkProjectDesc = $linkpage."pages/projectdesc.php";
    $classProjectDesc = ($page === 'projectdesc' ? "active" : "");    
    $classHome = ($page === 'index' ? "active" : ""); 
    $comingSoon = $linkpage."pages/comingsoon.php";
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-no-padding">
        <a class="navbar-brand" href="#"><img src=<?= $link."img/logo.png" ?> class="logo" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-size" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link highlight border-line-bottom nav-hover <?= $classHome ?>" href="<?= $linkpage ?>" data-hover="ITCD" data-link="itcdSec">ITCD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link highlight border-line-bottom nav-hover" href=<?= $linkpage."#webPortal" ?> data-hover="Web Portal" data-link="webportalSec">Web Portal</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="http://webapp.itcdtracking.com" target="_blank" data-hover="North Luzon Tracking Portal">
                                North Luzon Tracking Portal
                            </a>
                        </li>
                        <li>
                            <a href="http://webapp.itcdtracking.com" target="_blank" data-hover="South Luzon Tracking Portal">
                                South Luzon Tracking Portal
                            </a>
                        </li>
                        <li>
                            <a href="http://webapp.itcdtracking.com" target="_blank" data-hover="Visayas Tracking Portal">
                                Visayas Tracking Portal
                            </a>
                        </li>
                        <li>
                            <a href="<?= $linkpage."pages/comingsoon.php" ?>" data-hover="Davao Tracking Portal">
                                Davao Tracking Portal
                            </a>
                        </li>
                        <li>
                            <a href="http://webapp.itcdtracking.com" target="_blank" data-hover="Grab Tracking Portal">
                                Grab Tracking Portal
                            </a>
                        </li>
                        <li>
                            <a href="http://202.124.147.83/" target="_blank" data-hover="NCR Tracking Portal">
                                NCR Tracking Portal
                            </a>
                        </li>                      
                    </ul>
                </li>

                <li class="nav-item active">
                    <a class="nav-link highlight border-line-bottom nav-hover <?= $classProduct ?>" href=<?= $linkpage."#productSec" ?> data-hover="Products" data-link="productSec">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link highlight border-line-bottom nav-hover" href=<?= $linkpage."#solutionSec" ?> data-hover="Solutions" data-link="solutionSec">Solutions</a>
                    <ul class="sub-menu">
                        <li>
                            <a <?= $classTrans ?> href=<?= $linkTrans ?> data-hover="Transportation Solutions">
                                Transportation Solutions
                            </a>
                        </li>
                        <li>
                            <a <?= $classBusiness ?> href=<?= $linkBusiness ?> data-hover="Business Solutions">
                                Business Solutions
                            </a>
                        </li>
                        <li>
                            <a <?= $classSecurity ?> href=<?= $linkSecurity ?> data-hover="Security Solutions">
                                Security Solutions
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link highlight border-line-bottom nav-hover" href=<?= $linkpage."#projectSec" ?> data-hover="Projects" data-link="projectSec">Projects</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= $linkProjectDesc ?>?project=sm-stsi">
                                SM - STSI
                            </a>
                        </li>
                        <li>
                            <a href="<?= $linkProjectDesc ?>?project=dotr-ltfrb">
                                DOTr - LTFRB
                            </a>
                        </li>
                       
                        <li>
                            <a href="<?= $linkProjectDesc ?>?project=mmda">
                                MMDA
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?= $linkProjectDesc ?>?project=hpg">
                                HPG
                            </a>
                        </li>   

                        <li>
                            <a href="<?= $linkProjectDesc ?>?project=pnp">
                                PNP
                            </a>
                        </li>              
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link highlight border-line-bottom nav-hover" href=<?= $linkpage."#aboutUs" ?> data-hover="About Us" data-link="aboutusSec">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link highlight border-line-bottom nav-hover" href=<?= $linkpage."#contactUs" ?> data-hover="Contact Us" data-link="contactusSec">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
