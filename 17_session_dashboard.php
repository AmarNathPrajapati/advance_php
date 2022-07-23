<?php
   session_start() ;
   if(isset($_SESSION['username'])){
      echo $_SESSION['username'];
      echo '<br>';
      echo $_SESSION['favLang'];
  }else{
   echo "you have to login again.";
  }
?>