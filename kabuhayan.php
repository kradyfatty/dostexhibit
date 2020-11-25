<?php require_once("includes/header.php"); ?>
<?php    
    $stmt = $conn->prepare("SELECT * FROM `counter` WHERE link = 'kabuhayan'");
    $stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];
    
    $sql = "UPDATE counter SET visitor = visitor + 1 WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindValue(":id", $id);
    $count = $statement->execute();

?>
<link type="text/css" rel="stylesheet" href="assets/css/offices/kabuhayan.css">
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
                                        <img class="office" src="images/header/22.png" alt="bg" />

                                        <img id="k2k11" rel="floor" src="images/header/kabuhayan/floor.png" alt="6" />
                                        <img id="k2k12" rel="chair" src="images/header/kabuhayan/1.png" alt="6" />
                                        <img id="k2k13" rel="chair" src="images/header/kabuhayan/2.png" alt="6" />
                                        <img id="k2k14" rel="chair" src="images/header/kabuhayan/3.png" alt="6" />
                                        <img id="k2k15" rel="chair" src="images/header/kabuhayan/4.png" alt="6" />
                                        <img id="k2k16" rel="chair" src="images/header/kabuhayan/5.png" alt="6" />
                                        <img id="k2k17" rel="chair" src="images/header/kabuhayan/6.png" alt="6" />
                                        <img id="k2k18" rel="chair" src="images/header/kabuhayan/7.png" alt="6" />
                                        <img id="k2k19" rel="chair" src="images/header/kabuhayan/8.png" alt="6" />
                                        <img id="k2k3" rel="chair" src="images/header/kabuhayan/chair.png" alt="6" />
                                        <img id="k2k4" rel="chair" src="images/header/kabuhayan/girl.png" alt="6" />
                                        <img id="k2k5" rel="table3" src="images/header/kabuhayan/table3.png" alt="6" />
                                        <img id="k2k6" rel="table2" src="images/header/kabuhayan/table2.png" alt="6" />
                                        <img id="k2k7" rel="table1" src="images/header/kabuhayan/table1.png" alt="6" />
                                        <img id="k2k8" rel="books" src="images/header/kabuhayan/books.png" alt="6" />
                                        <img id="k2k9" rel="smallstand1" src="images/header/kabuhayan/smallstand.png" alt="6" />
                                        <img id="k2k10" rel="smallstand2" src="images/header/kabuhayan/smallstand1.png" alt="6" />
                                    </div>
                                </div>           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="color-bg-text">
                                <h4>Featured Projects of DOST-IX on <span>Kabuhayan.</span></h4>
                                <div style="margin-bottom:15px; width: auto; overflow: auto; clear: both;">
                                <p>This section features projects that centers on how DOST IX provided S&T interventions to better the production capacity and over-all product quality of Small and Medium Enterprises through the DOST Small Enterprise Technology Upgrading Program and its Local Grants-In-Aid Program. Among those featured are the MK Business Ventures, Inc., Janelle’s Sand and Gravel, Kingland Hopia Factory, and HOPE in HEAT Project in Zamboanga City, Charles and Charlie Food Products in Zamboanga Sibugay. Yocundo Farm, Cacao and Coffee S&T Community Based Farm (STCBF) in Zamboanga del Sur, and VMD Rice Mill in Zamboanga del Norte. This section allows viewers to look at how the facilities produces their products through videos, photo gallery, and 360-degree view of the project site (selected firms). It also provides information on the project and S&T interventions provided to the enterprise.</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="yo" target="_blank" href="kabuhayan/yocundofarm.php"><h5><i class="fa fa-bullseye"></i> Yocundo Farm (ZDS)</h5></a>
                                        <a class="ca" target="_blank" href="kabuhayan/cacaoandcoffee.php"><h5><i class="fa fa-bullseye"></i> Cacao and Coffee (ZDS)</h5></a>
                                        <a class="ch" target="_blank" href="kabuhayan/charlesandcharlie.php"><h5><i class="fa fa-bullseye"></i> Charles and Charlie (ZSP)</h5></a>
                                        <a class="mk" target="_blank" href="kabuhayan/mkbizventures.php"><h5><i class="fa fa-bullseye"></i> MK Biz Ventures (ZC)</h5></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="ja" target="_blank" href="kabuhayan/janelles.php"><h5><i class="fa fa-bullseye"></i> Janelle's (ZC)</h5></a>
                                        <a class="ki" target="_blank" href="kabuhayan/kinglandhopia.php"><h5><i class="fa fa-bullseye"></i> Kingland Hopia (ZC)</h5></a>
                                        <a class="ho" target="_blank" href="kabuhayan/hopeinheat.php"><h5><i class="fa fa-bullseye"></i> HOPE in HEAT (ZC)</h5></a>
                                        <a class="vm" target="_blank" href="kabuhayan/vmdricemill.php"><h5><i class="fa fa-bullseye"></i> VMD Rice Mill (ZDN)</h5></a>
                                    </div>
                                </div>
                                        <!-- <a class="vm" target="_blank" href="kabuhayan/pangkabuhayan.php"><h5><i class="fa fa-bullseye"></i> Mabuting Pangkabuhayan Association</h5></a>
                                <a class="vm" target="_blank" href="kabuhayan/rhymae.php"><h5><i class="fa fa-bullseye"></i> Rhymae Abaca Trading</h5></a> -->
                              
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
                                            <p>Brochures</p></a>
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