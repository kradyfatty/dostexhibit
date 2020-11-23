            
            <?php
                $link = $_SERVER['PHP_SELF'];
                $link_array = explode('/',$link);
                $page = end($link_array);
            ?>

            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>

                    <a href="" class="add-list">DOST IX <span><i class="fa fa-plus"></i></span></a>
                   
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                <a <?php if($page == 'index.php'){
                                        echo 'class="act-link"';
                                    } ?> href="index.php">Home</a>
                                </li>
                                <!-- <li>
                                    <a href="#" class="act-link">Versions<i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="index.html">Version 1</a></li>
                                        <li><a href="index2.html">Version 2</a></li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a <?php if($page == 'schedule.php'){
                                        echo 'class="act-link"';
                                    } ?> href="schedule.php">Schedules </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

  
