<?php
/**
 * File:  td6.php
 * Creation Date: 12/07/2016
 * description:
 *
 * @author: canals
 */

print $_SERVER ['REQUEST_METHOD'];
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_SERVER ['REQUEST_URI']);
print $_SERVER ['SERVER_PROTOCOL'];

//getallheaders()

var_dump($_SERVER);

http_response_code(201);

print $_SERVER ['SERVER_PROTOCOL'];
var_dump(getallheaders());
var_dump($_SERVER ['HTTP_HOST']);
var_dump($_SERVER ['HTTP_USER_AGENT']);


