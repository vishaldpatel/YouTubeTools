<!DOCTYPE html>
<html id="home" lang="en">
<head>
  <title>YouTubeTools</title>
<meta charset=utf-8 />
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="makeMeAPlayer" class="YouTubePlayer">
    <div id="ze_player" class="YouTubePlayerScreen"/></div>
    <div class="DefaultControls"/>
      <a href="javascript:void(0);" class="PlayButton"><img src="images/btnPlay.png" /></a>
      <a href="javascript:void(0);" class="PauseButton"><img src="images/btnPause.png" /></a>

      <a href="javascript:void(0);" class="FullScreenButton"><img src="images/btnFullScreen.png" /></a>
      <span class="TimePassed">00:00:00</span>
    </div>
    <div class="Progress">
      <span class="ProgressBar"><span class="ProgressSoFar"></span></span>
    </div>
  </div>


  <!-- load all the libraries first -->
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript" src="js/swfobject.js"></script>

  <script type="text/javascript" src="js/player.js"></script>
  <script type="text/javascript">
    (new YouTubeTool).makePlayer('makeMeAPlayer', 'ze_player', '<?php echo $_GET['v']; ?>', true);
  </script>
</body>
</html>