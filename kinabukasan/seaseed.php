<?php require_once("../includes/header2.php"); ?>
<?php    
    $stmt = $conn->prepare("SELECT * FROM `counter` WHERE link = 'seaseed'");
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
                                        <!-- <div class="video-box fl-wrap">
                                            <img src="../images/all/sample.jpg" alt="">
                                            <a class="video-box-btn image-popup" href="https://www.youtube.com/watch?v=Aq_Hw_N4mYU"><i class="fa fa-play" aria-hidden="true"></i></a>
                                        </div> -->
                                        <div class="list-single-main-item fl-wrap" id="sec3">
                                            <div class="iframe-holder fl-wrap">
                                                <div class="resp-video">
                                                    <iframe src="seaseed/avp.mp4" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Sea Seed<span> Program</span></h3>
                                            <h4>Featured Projects of DOST-IX on Kinabukasan.</h4>
                                            <span class="section-separator fl-sec-sep"></span>
                                        </div>
                                        <p>Not yet Available.</p>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>


<?php require_once("../includes/footer3.php");?>