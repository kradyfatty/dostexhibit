<?php require_once("includes/header.php"); ?>
<link type="text/css" rel="stylesheet" href="assets/css/offices/entrance.css">
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
                                        <img class="office" src="images/header/44.png" alt="bg" />

                                        <img id="k4k7" rel="floor" src="images/header/entrance/floor.png" alt="6" />
                                        
                                        <img id="k4k1" rel="floor" src="images/header/entrance/stage.png" alt="6" />
                                        <img id="k4k6" rel="floor" src="images/header/entrance/grass.png" alt="6" />
                                        <img id="k4k3" rel="sched" src="images/header/entrance/stand1.png" alt="6" />
                                        <img id="k4k2" rel="floor" src="images/header/entrance/man.png" alt="6" />
                                        <img id="k4k4" rel="floor" src="images/header/entrance/stand.png" alt="6" />
                                        <img id="k4k5" rel="floor" src="images/header/entrance/grass.png" alt="6" />
                                       
                                    </div>
                                </div>           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="floor">
                                <div class="color-bg-text">
                                    <h3>Welcome NSTW 2020</h3>
                                    <p>WELCOME TO THIS YEAR’S National Science and Technology Week Celebration in Zamboanga Peninsula focuses on the government’s whole-of-nation approach in addressing pressing issues and concerns amidst the CoViD-19 Pandemic. The activities center on the four (4) themes of the approach namely: Kalusugan, Kabuhayan, Kaayusan, and Kinabukasan.</p>
                                    <a href="#" class="color-bg-link modal-open">ENTRANCE</a>
                                </div>
                            </div>
                            <div id="sched" style="display:none;">
                                <div class="color-bg-text">
                                    <h3>Schedule for Today</h3>
                                    <div class="box-widget opening-hours">
                                        <div class="box-widget-content">
                                            <?php
                                            $date =  date('Y-m-d');

                                            if($date == '2020-11-23'){
                                                echo '<span class="current-status"> 23 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">NSTW 2020 Opening Program </span><span class="opening-hours-time">9:00 AM - 11:00 AM</span></li>
                                                    <li><span class="opening-hours-day">Launching : Innovation in Finance and Administrative Information Management System </span><span class="opening-hours-time">2:30 PM - 4:30 PM</span></li>
                                                </ul>';
                                            }else if($date == '2020-11-24'){
                                                echo '<span class="current-status"> 24 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">TekTok: Scientific Approaches in Fortifying Efficient and Nutrient-Rich (SAFER) Food Seminar (Day 1) </span><span class="opening-hours-time">9:00 AM - 4:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Invent School Program for College Students (Day 1)</span><span class="opening-hours-time">9:00 AM - 12:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Pinggang Pinoy: Healthy Food Plate for Filipinos </span><span class="opening-hours-time">1:30 PM - 3:30 PM</span></li>
                                                </ul>';
                                            }else if($date == '2020-11-25'){
                                                echo '<span class="current-status"> 25 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">TekTok: Scientific Approaches in Fortifying Efficient and Nutrient-Rich (SAFER) Food Seminar (Day 2) </span><span class="opening-hours-time">9:00 AM - 11:00 AM</span></li>
                                                    <li><span class="opening-hours-day">Invent School Program for College Students (Day 2)</span><span class="opening-hours-time">9:00 AM - 4:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Basic Research Methods Training (Day 1) </span><span class="opening-hours-time">9:00 AM - 5:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Technopreneurs Forum and Consultation</span><span class="opening-hours-time">1:00 PM - 4:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Launching: Rebranding of Dipolog City Boulevard Barbeque Vendors and Operators, the DOST way  </span><span class="opening-hours-time">2:00 PM - 4:00 PM</span></li>
                                                </ul>';
                                            }else if($date == '2020-11-26'){
                                                echo '<span class="current-status"> 26 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">Internet of Things (IoT) using Arduino</span><span class="opening-hours-time">9:00 AM - 11:30 AM</span></li>
                                                    <li><span class="opening-hours-day">Basic Research Methods Training (Day 2)</span><span class="opening-hours-time">9:00 AM - 5:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Innovations in Disaster Risk Reduction and Management  </span><span class="opening-hours-time">1:30 PM - 4:30 PM</span></li>
                                                </ul>';
                                            }else if($date == '2020-11-27'){
                                                echo '<span class="current-status"> 27 November 2020</span>
                                                <ul>
                                                    <li><span class="opening-hours-day">Basic Research Methods Training (Day 3)</span><span class="opening-hours-time">9:00 AM - 5:00 PM</span></li>
                                                    <li><span class="opening-hours-day">Smart Approaches to Reinvigorate Agriculture as an Industry (SARAI) Technologies</span><span class="opening-hours-time">1:30 PM - 4:00 PM</span></li>
                                                </ul>';
                                            }else{
                                                echo '<span class="current-status"> No Activity for today</span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bubble-bg"> </div>
            </section>

            <?php require_once("includes/footer2.php");?>