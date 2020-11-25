<?php require_once("includes/header.php"); ?>
<?php    
    $stmt = $conn->prepare("SELECT * FROM `counter` WHERE link = 'schedules'");
    $stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];
    
    $sql = "UPDATE counter SET visitor = visitor + 1 WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindValue(":id", $id);
    $count = $statement->execute();
    

?>
    <body>
        <iframe src="audio/mixkit-feeling-happy-5.mp3" allow="autoplay" style="display:none" id="iframeAudio"></iframe> 
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <div id="main">
            <?php require_once("includes/navigation.php");?>
            
            <div class="content fs-slider-wrap">
                <section class="color-bg">
                    <img src="images/banners/left.png" style="top: 0; left: 0; position: absolute; width: auto; height: 30%;">
                    <img src="images/banners/right.png" style="bottom: 0; right: 0; position: absolute; width: auto; height: 30%;">
                    <div class="shapes-bg-big"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="box-widget-wrap">
                                    <!--box-widget-item -->
                                    <div class=" fl-wrap">
                                        <div class="box-widget-item-header">
                                            <h3 style="color: white;">Schedule of Activities : </h3>
                                        </div>
                                      
                                        <div class="box-widget opening-hours">
                                            <div class="box-widget-content">
                                                <span class="current-status"> 23 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">NSTW 2020 Opening Program </span><span class="opening-hours-time">9:00 AM - 11:00 AM</span></li>
                                                    <li><span class="opening-hours-day">Launching : Innovation in Finance and Administrative Information Management System </span><span class="opening-hours-time">2:30 PM - 4:30 PM</span></li>
                                                </ul>
                                                <span class="current-status"> 24 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">TekTok: Scientific Approaches in Fortifying Efficient and Nutrient-Rich (SAFER) Food Seminar (Day 1) </span><span class="opening-hours-time">9:00 AM - 4:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Invent School Program for College Students (Day 1)</span><span class="opening-hours-time">9:00 AM - 12:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Pinggang Pinoy: Healthy Food Plate for Filipinos </span><span class="opening-hours-time">1:30 PM - 3:30 PM</span></li>
                                                </ul>
                                                <span class="current-status"> 25 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">TekTok: Scientific Approaches in Fortifying Efficient and Nutrient-Rich (SAFER) Food Seminar (Day 2) </span><span class="opening-hours-time">9:00 AM - 11:00 AM</span></li>
                                                    <li><span class="opening-hours-day">Invent School Program for College Students (Day 2)</span><span class="opening-hours-time">9:00 AM - 4:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Basic Research Methods Training (Day 1) </span><span class="opening-hours-time">9:00 AM - 5:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Technopreneurs Forum and Consultation</span><span class="opening-hours-time">1:00 PM - 4:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Launching: Rebranding of Dipolog City Boulevard Barbeque Vendors and Operators, the DOST way  </span><span class="opening-hours-time">2:00 PM - 4:00 PM</span></li>
                                                </ul>
                                                <span class="current-status"> 26 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">Internet of Things (IoT) using Arduino</span><span class="opening-hours-time">9:00 AM - 11:30 AM</span></li>
                                                    <li><span class="opening-hours-day">Basic Research Methods Training (Day 2)</span><span class="opening-hours-time">9:00 AM - 5:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Innovations in Disaster Risk Reduction and Management  </span><span class="opening-hours-time">1:30 PM - 4:30 PM</span></li>
                                                </ul>
                                                <span class="current-status"> 27 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">Basic Research Methods Training (Day 3)</span><span class="opening-hours-time">9:00 AM - 5:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Smart Approaches to Reinvigorate Agriculture as an Industry (SARAI) Technologies</span><span class="opening-hours-time">1:30 PM - 4:00 PM</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="bubble-bg"> </div>
                    <!-- <div class="header-sec-link">
                        <div class="container"><a href="" class="custom-scroll-link">Let's Start</a></div>
                    </div> -->
                </section>
            </div>
            
        <?php require_once("includes/footer.php"); ?>