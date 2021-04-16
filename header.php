<script langauge="JavaScript" type="text/javascript" src="js/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/messages.js" ></script>
<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>
<link rel="stylesheet" href="style.css">
  <div id="login_logo">
  <?php
  require_once 'Dao.php';
  //$dao = new Dao();
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : "nouser";
  $password = isset($_SESSION['password']) ? $_SESSION['password'] : "";
  $_SESSION['authenticated'] = isset($_SESSION['authenticated']) ? $_SESSION['authenticated'] : false;
  $_SESSION['last_page'] = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : "No page";
  #$_SESSION['authenticated'] = $dao->userExist($email,$password);
  if ($_SESSION['authenticated'] ) {
    echo "<div id=logout><span style=font-color: white>Welcome, $email</span>
    <form action=logout_handler.php method=get>
    <input type=submit id=logout_button action=logout_handler.php value=Logout>
    </form>
    </div>";
    
    if (strcmp($_SESSION['current_page'],'/aouc/account.php?') == 0 ){
      $page = $_SESSION['last_page'];
      echo "<div id=account>
           <form action=redirect_handler.php method=get>
           <input type=submit id=account action=redirect_handler.php value='Return to previous page'>
           </form>
        </div>";
  } else {
      echo "<div id=account>
      <form action=account.php method=get>
      <input type=submit id=account action=account.php value='My Account'>
      </form>
   </div>";
  }
    echo "<div id=message_wrapper>";
    if (isset($_SESSION['messages']) ){
    foreach ($_SESSION['messages'] as $messages)
      echo "<div class=success_messages>$messages</div>";  
    }
    unset($_SESSION['messages']);
    if (isset($_SESSION['comments']) ){
      foreach ($_SESSION['comments'] as $messages)
          echo "<div class=success_messages>$messages</div>";
     }
    unset($_SESSION['comments']);
    echo "</div>";
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
    echo "<div id=message_wrapper>";
    if (isset($_SESSION['messages']) ){
        foreach ($_SESSION['messages'] as $messages)
            echo "<div class=failure_messages>$messages</div>";
    }
    unset($_SESSION['messages']);
    if (isset($_SESSION['comments']) ){
        foreach ($_SESSION['comments'] as $messages)
            echo "<div class=success_messages>$messages</div>";
   }
    unset($_SESSION['comments']);
    echo "</div>";
  } 
  
  ?> 
      
    <a href="home.php"><img src="Images\aouc.png" alt="aouc logo" class="center"></a>
        
    </div>
    <div id="header_alphabet_letters">
         <ul id="ul_header_letters">
            <li><a href="a_letter.php">A</a></li>
            <li><a href="b_letter.php">B</a></li>
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
            <li><a href="z_letter.php">Z</a></li>
        </ul>
    </div>