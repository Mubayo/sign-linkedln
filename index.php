<?php
require "init.php";
?>

<html>
    <head>
        <title> Linkedln Integral</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/mdb.css">
        <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="css/modules/">
        
    </head>
    
    <body>
            <div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Linkedln</h4>
      </div>
      <div class="modal-footer d-flex justify-content-center">
          <a href="<?php echo $linkedin->getAuthUrl() ?>" style="font-size: large;">Enter LinkedIn</a>
      </div>
    </div>
  </div>
</div>
        
    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>