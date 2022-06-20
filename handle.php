<?php ob_start();

  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $page = isset($_GET["page"]);
  $StringExplo=explode("/",$_SERVER['REQUEST_URI']);
  $HeadToUpload=$StringExplo[0]."/upload.php";
  $HeadToIndex=$StringExplo[0]."/index.php";

  if($_SERVER['REQUEST_URI'] === "/"){header("Location: http://$host$uri/index.php");}
  
  if(isset($_GET["page"])){$page = $_GET["page"]; 
    if($page === "upload"){header("Location: ".$HeadToUpload);}
    elseif($page === "index"){header("Location: ".$HeadToIndex);}
  }

?>