<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>What's My IP</title>
      <script src="./assets/js/bootstrap.min.js"></script>
      <script src="./assets/js/jquery.min.js"></script>
      <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="./assets/css/font-awesome.min.css" rel="stylesheet">
      <link href="./assets/css/style.css" rel="stylesheet">
      <?php require_once './assets/api/Mobile_Detect.php'; ?>
      <?php require_once './assets/api/detect.php'; ?>
   </head>
   <body>
      <div class="container">
      </div>
      <div class="container" style="padding-top:25px;">
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="navbar-header">
                  <a class="navbar-brand" href="./">My <b>IP</b> Information</a>
               </div>
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                     <li><a href="https://github.com/OblivionSan" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a></li>
                     <li><a href="https://twitter.com/OblivionSan" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                     <li><a href="https://discord.oblivionsan.tk" target="_blank"><i class="fa fa-comments" aria-hidden="true"></i> Discord</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <div class="container">
         <h2>Home - <small>Welcome to My <b>IP</b> Information</small></h2>
         <hr>
         <div class="panel panel-default">
            <div class="panel-body">
               <b>IP</b>: <?php echo Detect::ip();?>
               <br><b>Hostname</b>: <?php echo Detect::ipHostname();?>
               <br><b>Organisation</b>: <?php echo Detect::ipOrg();?>
               <br><b>Country</b>: <?php echo Detect::ipCountry();?>
               <br><b>OS</b>: <?php echo Detect::os();?>
               <br><b>Browser</b>: <?php echo Detect::browser();?>
               <br><b>Brand</b>: <?php echo Detect::brand();?>
               <br><b>Device Type</b>: <?php echo Detect::deviceType();?>
               <br><br>
               <small>Keep in mind this website is still a <a href="https://en.wikipedia.org/wiki/Work_in_process" target="_blank"><b>W.I.P</b></a></small> 
            </div>
         </div>
      </div>
      <div class="container text-center" style="padding-bottom:50px;">
         <hr>
         <small class="text-muted">Website developed by <a href="https://oblivionsan.tk" target="_blank"><b>Oblivion さん</b></a></small>
         <br>
      </div>
   </body>
</html>