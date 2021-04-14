
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="Images/aouc.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

  <div id="login_logo">
    <?php
        require_once 'Dao.php';
        $email = isset($_SESSION['email']) ? $_SESSION['email'] : "nouser";
        $password = isset($_SESSION['password']) ? $_SESSION['password'] : "";
        $_SESSION['authenticated'] = isset($_SESSION['authenticated']) ? $_SESSION['authenticated'] : false;
        
        if($_SESSION['authenticated']){
            echo "<div id=login>Welcome, $email
            <form action=logout_handler.php method=get>
            <input type=submit id=logout action=logout_handler.php value=logout>
            </form>
            </div>";
        }else {
            echo "<form id=login method=post action=login_handler.php>
            <label for=email>Email: </label>
            <input type=text id=email name=email>
            <label for=password>Password: </label>
            <input type=password id=password name=password>
            <input type=submit value=Login>
            <a href =signup.php><button type=button>Sign up</button></a>
        </form>
        ";
        
        if (isset($_SESSION['messages']) ){
            echo "<div id=invalid_login>Invalid login</div>";   
           }
           unset($_SESSION['messages']);
        }
        
        
        ?>

        <?php
        $alaphabet = range('a', 'z');
        $currentLetter = 'b';
        foreach ($alaphabet as $letter)
        if (strcmp($_SESSION['current_page'],"/aouc/".$letter ."_letter.php") == 0){
           $currentLetter = $letter;
        } 
        ?>   
        <a href=home.php><img src=Images\aouc.png onmouseover="this.src='Images\\aouc_<?php echo $currentLetter ?>.png'"  onmouseout="this.src='Images\\aouc.png'"alt=aouc logo class=center></a>
    </div>
    <div id="header_alphabet_letters">
         <ul id="ul_header_letters">
            <?php 
            $alaphabet = range('a', 'z');
            foreach ($alaphabet as $letter)
            if (strcmp($_SESSION['current_page'],"/aouc/".$letter ."_letter.php") == 0){
                echo "<li>
                        <a href=" . $letter . "_letter.php><span style=color:black><u>".strtoupper($letter)."</u></span></a>
                      </li>";
            }else {
                echo "<li><a href=" . $letter . "_letter.php>".strtoupper($letter)."</a></li>";
            }
            ?>
                
           <!-- <li><a href="b_letter.php">B</a></li>
            <li><a href="c_letter.php">C</a></li>
            <li><a href="d_letter.php">D</a></li>
            <li><a href="e_letter.php">E</a></li>
            <li><a href="f_letter.php">F</a></li>
            <li><a href="g_letter.php">G</a></li>
            <li><a href="h_letter.php">H</a></li>
            <li><a href="i_letter.php">I</a></li>
            <li><a href="j_letter.php">J</a></li>
            <li><a href="k_letter.php">K</a></li>
            <li><a href="l_letter.php">L</a></li>
            <li><a href="m_letter.php">M</a></li>
            <li><a href="n_letter.php">N</a></li>
            <li><a href="o_letter.php">O</a></li>
            <li><a href="p_letter.php">P</a></li>
            <li><a href="q_letter.php">Q</a></li>
            <li><a href="r_letter.php">R</a></li>
            <li><a href="s_letter.php">S</a></li>
            <li><a href="t_letter.php">T</a></li>
            <li><a href="u_letter.php">U</a></li>
            <li><a href="v_letter.php">V</a></li>
            <li><a href="w_letter.php">W</a></li>
            <li><a href="x_letter.php">X</a></li>
            <li><a href="y_letter.php">Y</a></li>
            <li><a href="z_letter.php">Z</a></li> -->
        </ul>
    </div>