<?php session_start(); ?>
  <div id="login_logo">
  <?php
  require_once 'Dao.php';
  //$dao = new Dao();
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : "nouser";
  $password = isset($_SESSION['password']) ? $_SESSION['password'] : "";
  $_SESSION['authenticated'] = isset($_SESSION['authenticated']) ? $_SESSION['authenticated'] : false;
  
  #$_SESSION['authenticated'] = $dao->userExist($email,$password);
  if ($_SESSION['authenticated'] ) {
    echo "<div id=logout>Welcome, $email
    <form action=logout_handler.php method=get>
    <input type=submit id=logout action=logout_handler.php value=logout>
    </form>
    </div>";
  }
  else {
    echo "<form id=login method=post action=login_handler.php>
        <label for=email>Email: </label>
        <input type=text id=email name=email>
        <label for=password>Password: </label>
        <input type=password id=password name=password>
        <input type=submit value=Login>
        <a href =signup.php><button type=button>Sign up</button></a>
    </form>";
  } ?> 
      
    <a href="home.php"><img src="Images\aouc.png" alt="aouc logo" class="center"></a>
        
    </div>
    <div id="header_alphabet_letters">
         <ul id="ul_header_letters">
            <li><a href="animal_letter/a_letter.php">A</a></li>
            <li><a href="animal_letter/b_letter.php">B</a></li>
            <li><a href="animal_letter/c_letter.php">C</a></li>
            <li><a href="animal_letter/d_letter.php">D</a></li>
            <li><a href="animal_letter/e_letter.php">E</a></li>
            <li><a href="animal_letter/f_letter.php">F</a></li>
            <li><a href="animal_letter/g_letter.php">G</a></li>
            <li><a href="animal_letter/h_letter.php">H</a></li>
            <li><a href="animal_letter/i_letter.php">I</a></li>
            <li><a href="animal_letter/j_letter.php">J</a></li>
            <li><a href="animal_letter/k_letter.php">K</a></li>
            <li><a href="animal_letter/l_letter.php">L</a></li>
            <li><a href="animal_letter/m_letter.php">M</a></li>
            <li><a href="animal_letter/n_letter.php">N</a></li>
            <li><a href="animal_letter/o_letter.php">O</a></li>
            <li><a href="animal_letter/p_letter.php">P</a></li>
            <li><a href="animal_letter/q_letter.php">Q</a></li>
            <li><a href="animal_letter/r_letter.php">R</a></li>
            <li><a href="animal_letter/s_letter.php">S</a></li>
            <li><a href="animal_letter/t_letter.php">T</a></li>
            <li><a href="animal_letter/u_letter.php">U</a></li>
            <li><a href="animal_letter/v_letter.php">V</a></li>
            <li><a href="animal_letter/w_letter.php">W</a></li>
            <li><a href="animal_letter/x_letter.php">X</a></li>
            <li><a href="animal_letter/y_letter.php">Y</a></li>
            <li><a href="animal_letter/z_letter.php">Z</a></li>
        </ul>
    </div>