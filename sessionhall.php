<?php require_once("includes/header.php"); ?>
<?php    
    $stmt = $conn->prepare("SELECT * FROM `counter` WHERE link = 'sessionhall'");
    $stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];
    
    $sql = "UPDATE counter SET visitor = visitor + 1 WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindValue(":id", $id);
    $count = $statement->execute();
    

?>
    <link type="text/css" rel="stylesheet" href="assets/css/offices/sessionhall.css">
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
                                        <img class="office" src="images/header/55.png" alt="bg" />

                                        <img id="k5k7" rel="grass" src="images/header/sessionhall/floor.png" alt="6" />
                                        <img id="k5k4" rel="grass" src="images/header/sessionhall/grass.png" alt="6" /> 
                                        <img id="k5k1" rel="stage" src="images/header/sessionhall/stage.png" alt="6" />
                                        
                                        <img id="k5k5" rel="light" src="images/header/sessionhall/light1.png" alt="6" />
                                        <img id="k5k6" rel="light" src="images/header/sessionhall/light2.png" alt="6" />
                                        <img id="k5k2" rel="wall" src="images/header/sessionhall/wall.png" alt="6" />
                                        <img id="k5k3" rel="humans" src="images/header/sessionhall/humans.png" alt="6" />
                                    </div>
                                </div>           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="color-bg-text">
                          
                            <h4>Welcome to  <span style="color: #263a57;">Session Hall.</span></h4>
                                <p>Welcome to the Session Hall. Links to the activities from 23-27 November are posted in this area. Click on the activity titles to view the program and other details of the activities for the day</p>
                                <a href=""><h5><i class="fa fa-bullseye"></i> NSTW Opening</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Tek Tok : SAFER Food Seminar</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Invent School Program</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Pinggang Pinoy</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Technopreneurs Forum and Consultation</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Basic Reaseach Methods Training</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Launching Faims</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Launching – Rebranding of Dipolog City Boulevard Barbeque</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> SARAI Technologies</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Internet of Things (IoT) using Arduino</h5></a>
                                <a href=""><h5><i class="fa fa-bullseye"></i> Innovations in DRRM</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bubble-bg"> </div>
            </section>

            <?php require_once("includes/footer2.php");?>