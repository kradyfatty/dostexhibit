<?php require_once("../includes/header2.php"); ?>
<?php    
    $stmt = $conn->prepare("SELECT * FROM `counter` WHERE link = 'mk'");
    $stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];
    
    $sql = "UPDATE counter SET visitor = visitor + 1 WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindValue(":id", $id);
    $count = $statement->execute();
    

?>
    <body>
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <div id="main">
            <?php require_once("../includes/navigation2.php");?>
            <div id="wrapper">
                <div class="content">

                    <section class="gray-section" style="height: 90vh;">
                        <div class="container">
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-box fl-wrap">
                                            <div class="list-single-main-item fl-wrap" id="sec3">
                                                <div class="iframe-holder fl-wrap">
                                                    <div class="resp-video">
                                                        <iframe src="mkbizventures/avp.mp4" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>MK Biz Ventures <span>(ZC)</span></h3>
                                            <h4>Featured Projects of DOST-IX on Kabuhayan.</h4>
                                        </div>
                                        <p>MK Business Ventures, Inc. is an SEC-registered poultry processing firm that serves as Toll Processor of Magnolia Chicken, and delivers the processed chickens to customers of San Miguel Foods Inc. (SMFI), such as fast food chains and wet markets.</p>
                                        <p>Already accredited as AA by the National Meat Inspection Service (NMIS), and certified for both GMP and HACCP, the firm continues to aim for an improved processing system thru the inclusion of a metal detector and lung gun in its processing facility; hence, this application for SETUP assistance.</p>
                                        <p>The firm received assistance from DOST through SETUP last June 2014 for the project entitled: “Upgrading the Meat Processing Facility of MK Business Ventures, Inc.” amounting to Php756,000. This request for assistance is now the second of the firm.</p>
                                        <div class="box-widget-content box">
                                            <div class="jr-insta-thumb">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="overi"><img src="mkbizventures/360/360-1.jpg" alt="">
                                                        <p>Project Site (360)</p></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="overi"><img src="mkbizventures/gallery/img-1.png" alt="">
                                                        <p>Gallery</p></a>
                                                    </li>
                                                    <!-- <li>
                                                        <a href="#" class="overi"><img src="mkbizventures/Mkbizventures_proj_brief.pdf" alt="">
                                                        <p>Project Brief</p></a>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>


<?php require_once("../includes/footer3.php");?>