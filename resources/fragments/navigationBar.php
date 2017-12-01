<ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="calendar.php">CALENDAR</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">RECIPES</a>
            <div class="dropdown-content">
                <a href="meatballs.php">Meatballs</a>
                <a href="pancakes.php">Pancakes</a>
            </div>
        <li class = "login">
            <?php
                //require_once 'resources/fragments/init.php';
                use classes\Controller\Controller;
                $contr = Controller::getController();
                if(!empty($contr)) {
                    $nickname = $contr->getNickname();
                    if($nickname != '')
                    {
                        echo '
                            <li class="dropdownSESSION">
                                <a href="javascript:void(0)" class="dropbtn">Logged in as: '. $nickname .'</a>
                                <div class="dropdown-content">
                                    <a href="doLogin.php">Log out</a>
                                </div>
                            </li>
                        ';
                    }
                    
                    else
                        echo '<a href="doLogin.php">LOGIN</a>';
                }
                else
                    echo '<a href="doLogin.php">LOGIN</a>';
            ?>
        </li>  
</ul>