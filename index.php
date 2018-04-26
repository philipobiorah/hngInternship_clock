<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel NG</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Jura|Marvel|Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Astloch|Iceland|Wallpoet" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <?php
date_default_timezone_set('UTC');
?>
<script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  mins = (mins < 10 ? "0" : "") + mins;
  secs = (secs < 10 ? "0" : "") + secs;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
  document.getElementById("clock").firstChild.nodeValue = ctime;
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>


</head>
<body>
    
<div class="heading">Hotels.ng</div>
<div class="sub_head">Internship</div>
  <div><p>&lt;letsCode/&gt;</p></div>
<div id="clock" class="time">Time</div>



             
</body>
</html>