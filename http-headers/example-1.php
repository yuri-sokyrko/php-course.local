<?php

header('HTTP/1.1 307 Temporary Redirect');
// header('HTTP/1.1 301 Moved Permanently'); // Redirects user to link and remebers thas this page is not available. To cancel need to clear browser cache
header('Location: https://google.com');