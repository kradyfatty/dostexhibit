<?php require_once("includes/header.php"); ?>
    <body>
        <!--embed src="/audio/mixkit-feeling-happy-5.mp3" loop="true" autostart="true" width="2" height="0"-->
        <audio autoplay loop>
          <source src="/audio/mixkit-feeling-happy-5.mp3" type="audio/mpeg">
          Your browser does not support the audio tag.
        </audio>
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <div id="main">
            <?php require_once("includes/navigation.php");?>
            
        
            <div class="content full-height fs-slider-wrap">
                <section class="hero-section no-dadding full-height"  id="sec1">
                    <div class="slider-container-wrap full-height fs-slider fl-wrap">
                        <div class="slider-container">
                            <div class="slider-item fl-wrap">
                                <div class="bg" id="bg" data-bg="images/bg/dost3.jpg"></div>
                                <div class="overlay"></div>
                                <div class="hero-section-wrap fl-wrap">
                                    
                                    <a href="https://nstw2020.dost9.ph/">
                                        <div id="container" >
                                            <img src="days/d7.png" alt="Eight days to go!" style="margin-top: -60px;" width="50%" height="50%">
                                            
                                        </div>
                                    </a>
                                </div> 
                            </div>
                            <div class="bubble-bg"> </div>
                        </div>
                    </div>
                </section>
            </div>
            
        <?php require_once("includes/footer.php"); ?>