<?php

// header('Cache-Control: no-store; max-age=0'); //Removes cache on page
header('Cache-Control: max-age=3600'); //Add cache on page for 1 hour
echo date('d.m.Y H:i:s');