<?php
if (exec("uname -m") === "armv7l") {
  exec("gpio -g toggle 18");
  system("gpio -g read 18"); 
} else {
  echo rand(0, 1); // If server not pi, send random 0 or 1 for test
}
?>