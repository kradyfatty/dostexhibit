<?php require_once("../includes/header2.php"); ?>
<?php    
    $stmt = $conn->prepare("SELECT * FROM `counter` WHERE link = 'zams'");
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
                                        <div class="list-single-main-item fl-wrap" id="sec3">
                                            <div class="iframe-holder fl-wrap">
                                                <div class="resp-video">
                                                    <iframe src="zams/avp.mp4" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Zam's Delight <span>(ZC)</span></h3>
                                            <h4>Featured Projects of DOST-IX on Kabuhayan.</h4>
                                            <span class="section-separator fl-sec-sep"></span>
                                        </div>
                                        <p>Zam’s Delight Foods is a local producer of bottled Calamansi juice in Zamboanga City. Their main product, Calamansi Delight Juice Drink, is mainly sold to consolidators in Cebu, Cagayan de Oro, and Manila. The products are also on display in local grocery stores in the city. Aside from Calamansi juice processing, the couple is also engaged in the installation of water refilling station.</p>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>


<?php require_once("../includes/footer3.php");?>