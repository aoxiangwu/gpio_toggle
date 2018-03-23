<!--
Video Demo:  https://www.youtube.com/watch?v=9nIBJWFT9x0&list=PLuveY5JSb24hCafYg7YmmwTTFO7vSfkKG&t=0s&index=1 
Code Source: https://github.com/aoxiangwu/gpio_toggle/
-->
<?php
// If the server is raspberrypi, setup gpio mode
if (exec("uname -m") === "armv7l") {
  exec("gpio -g mode 18 out"); 
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>RaspberryPi</title>  
</head>
<body style="display: flex">
  <div style="width:40%">
  </div>
  <div>
    <div style="height:35%">
    </div>
    <img src="off.png" style="cursor:pointer">
  </div>
<script src="jquery-3.3.1.min.js"></script>
<script>
(function() {
  $('img')[0].onclick = function() { 
    $.ajax({url: 'gpio_toggle_ajax.php'})
      .done(function(state) {
        $('img')[0].src = (state==1 ? "on.png" : "off.png");
    })
  };
})();
</script>
</body>
</html>