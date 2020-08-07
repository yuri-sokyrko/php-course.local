<?php

/**
 * Redirect to link after waiting some time
 */
header('Refresh: 10; url=https://www.google.com/search?q=cats&tbm=isch&ved=2ahUKEwjrxYCp6ojrAhWaEZoKHdFMD6UQ2-cCegQIABAA&oq=cats&gs_lcp=CgNpbWcQAzIECCMQJzIECAAQQzICCAAyAggAMgIIADICCAAyAggAMgQIABBDMgIIADICCABQgQZYgQZguQ9oAHAAeACAAWSIAWSSAQMwLjGYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=vSUtX6vzI5qj6ATRmb2oCg&bih=952&biw=971&rlz=1C1SQJL_ruUA854UA854');

echo <<<HERE
    <h1>We're going to see cats in 10 seconds...</h1>
HERE;