<?php 
    session_start();
        if ($_SERVER['REQUEST_METHOD'] ==='POST')
        {
          if(isset($_SESSION['id_users']))
          {
            header('Location: formzaivka.php');
          }
          else
          {
            header('Location: ochibca.php');
          }
        }
        ?>