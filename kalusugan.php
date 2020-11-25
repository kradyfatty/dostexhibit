<?php require_once("includes/header.php"); ?>
<?php    
    $stmt = $conn->prepare("SELECT * FROM `counter` WHERE link = 'kalusugan'");
    $stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];
    
    $sql = "UPDATE counter SET visitor = visitor + 1 WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindValue(":id", $id);
    $count = $statement->execute();

?>
<link type="text/css" rel="stylesheet" href="assets/css/offices/kalusugan.css">
    <body>
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <div id="main">
            <?php require_once("includes/navigation.php");?>

            <section class="color-bg">
                <div class="shapes-bg-big"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row-fluid">     
                                <div class="span12">
                                    <div id="counter">
                                        <img class="office" src="images/header/11.png">
                                        
                                        <img id="k1k1" rel="floor" src="images/header/kalusugan/floor.png" alt="6" />
                                        <img id="k1k4" rel="floor" src="images/header/kalusugan/left.png" alt="6" />
                                        <img id="k1k3" rel="floor" src="images/header/kalusugan/right.png" alt="6" />  
                                        <img id="k1k2" rel="floor" src="images/header/kalusugan/big.png" alt="6" />  
                                        <img id="k1k5" rel="floor" src="images/header/kalusugan/persons.png" alt="6" />  
                                        <img id="k1k6" rel="floor" src="images/header/kalusugan/mens.png" alt="6" />   
                                        <img id="k1k7" rel="floor" src="images/header/kalusugan/stand.png" alt="6" />                                 
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="color-bg-text">
                                <h4>Featured Projects of DOST-IX on <span style="color: #263a57;">Kalusugan.</span></h4>
                                <p>This section features DOST IX projects that focus on the health and wellness of the Filipino people. Among those featured are the Zam’s Calamansi Delight in Zamboanga City, the LGU-Tungawan Complementary Food Production Facility in Zamboanga Sibugay, Paglinawan Organic Eco Farm in Zamboanga del Sur, and the Green Nature Herbal Products food supplement in Zamboanga del Norte. This section allows viewers to look at how the facilities produces their products through videos, photo gallery, and 360-degree view of the project site (selected firms). It also provides information on the project and S&T interventions provided to the enterprise.</p>
                                <br>
                                <a class="pag" target="_blank" href="kalusugan/paglinawan.php"><h5><i class="fa fa-bullseye"></i> Paglinawan Organic Eco Farm (ZDS)</h5></a>
                                <a class="lgu" target="_blank" href="kalusugan/lgu-tungawan.php"><h5><i class="fa fa-bullseye"></i> LGU-Tungawan Complementary Food Production Facility (ZSP)</h5></a>
                                <a class="zam" target="_blank" href="kalusugan/zamsdelight.php"><h5><i class="fa fa-bullseye"></i> Zam's Delight (ZC)</h5></a>
                                <a class="gre" target="_blank" href="kalusugan/greennature.php"><h5><i class="fa fa-bullseye"></i> Green Nature Herbal Products (ZDN)</h5></a>
                            </div>

                            <!-- <div class="box-widget-content box">
                                <div class="jr-insta-thumb">
                                    <ul>
                                        <li>
                                            <a href="#" class="overi"><img src="images/instagram/sample.jpg" alt="">
                                            <p>360°</p></a>
                                        </li>
                                        <li>
                                            <a href="#" class="overi"><img src="images/instagram/sample.jpg" alt="">
                                            <p>Products</p></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=Aq_Hw_N4mYU" class="image-popup overi"><img src="images/instagram/sample.jpg" alt="">
                                            <p>Video Presentation</p>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="bubble-bg"> </div>
            </section>

<?php require_once("includes/footer2.php");?>