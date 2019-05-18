<?php

/*
 * Place here any hosts for which we are to be a proxy -
 * e.g. the host on which the J2EE APIs we'll be proxying are running
 * httpbin.org
 * */
$SETTING_ALLOWED_HOSTS = array(
    'https://proxy-test-1.herokuapp.com','127.0.0.1', 'https://proxy-test-1.herokuapp.com' # change to restrict list to only domains you wish to allow clients to call via this proxy
);
