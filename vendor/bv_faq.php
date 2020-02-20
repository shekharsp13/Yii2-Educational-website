<!doctype html>
<html lang="en">
   <head>
      <title>Tables | Klorofil - Free Bootstrap Dashboard Template</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <!-- VENDOR CSS -->
      <link rel="stylesheet" href="assets/global/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/global/vendor/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/global/vendor/linearicons/style.css">
      <!-- MAIN CSS -->
      <link rel="stylesheet" href="assets/global/css/main.css">
      <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
      <link rel="stylesheet" href="assets/global/css/header.css">
      <!-- GOOGLE FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
      <!-- ICONS -->
      <link rel="apple-touch-icon" sizes="76x76" href="assets/global/img/apple-icon.png">
      <link rel="icon" type="image/png" sizes="96x96" href="assets/global/img/favicon.png">
      <style type="text/css">
         .panel-heading { cursor: pointer; }
      </style>
   </head>
   <body>
      <!-- WRAPPER -->
      <div id="wrapper">
         <!-- NAVBAR -->
         <?php include 'header.php';?>
         <!-- END NAVBAR -->
         <!-- LEFT SIDEBAR -->
         <?php include 'sidebar.php';?>
         <!-- END LEFT SIDEBAR -->
         <!-- MAIN -->
         <div class="main">
            <!-- MAIN CONTENT -->
            <?php include_once('assets/pages/faq/bv_faq_content.php');?>
            <!-- END MAIN CONTENT -->
         </div>
         <!-- END MAIN -->
         <div class="clearfix"></div>
         <footer>
            <div class="container-fluid">
               <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
            </div>
         </footer>
      </div>
      <!-- END WRAPPER -->
      <!-- Javascript -->
      <script src="assets/global/vendor/jquery/jquery.min.js"></script>
      <script src="assets/global/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/global/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/global/scripts/klorofil-common.js"></script>
   </body>
</html>