<!DOCTYPE html>
<html>
    <head>
        <title>Giving is the greatest act of grace</title>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <link href='https://fonts.googleapis.com/css?family=Salsa' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Song Myung' rel='stylesheet'>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
      <link href="style.css" rel="stylesheet">
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://js.instamojo.com/v1/checkout.js"></script>
        
       <script>
                Instamojo.open("https://test.instamojo.com/@suchitasharma1327"); 
        </script>
        <?php
        include 'connection.php';
            $api_key = 'test_5ba04dd54bb8959d4a86ee5a710';
            $api_secret = 'test_e361cb9d323fb08463835099feb';
            $api_salt = 'aef0b74f56c447fea9b09ff8b132156d';
            $webhook_url = 'https://YOUR_WEBSITE_URL/webhook.php';
            $redirect_url = 'https://YOUR_WEBSITE_URL/index.php';
            $mode = "test"; 
            if($mode == 'live'){
                    $mode = 'www';
            }else{
                    $mode = 'test';
            }

        ?>
        
    </head>
    <body style="background-color:#ccc;">
        <div id="header">
      <div id="logo">
        <h1>DONATE US</h1>
      </div>
            <div id="menu">
         <ul>
        <li> <a href="index.php">HOME</a></li>
        <li> <a href="about.php">ABOUT</a></li>
        <li> <a href="mission.php">MISSION</a></li>
              <li> <a href="#">MY ACCOUNT</a></li>
              <li><a href="register.php"> <button type="button">REGISTER</button></a></li>
         </ul>
           </div>
  </div>
        <div class="jumbotron text-center">
            <h1 class="display-3">Thank You!</h1>
            <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
            <hr>
            <p class="lead" style="font-family:Sofia;font-size:20px;margin-top:40px;">
                <button type="submit" style="background-color:white;boder-radius:4px;font-size:50px;"><a href="index.php" role="button">Continue to homepage</a></button>
            </p>
        </div>
       <footer class="f">
      <p style="margin-bottom:20px;font-family: Sofia;">2020| MADE BY SUCHITA SHARMA</p>
    </footer>  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
