<?php
// THIS IS AUTOGENERATED BY builtins_php.ml
function gethostname() { }
function gethostbyaddr($ip_address) { }
function gethostbyname($hostname) { }
function gethostbynamel($hostname) { }
function getprotobyname($name) { }
function getprotobynumber($number) { }
function getservbyname($service, $protocol) { }
function getservbyport($port, $protocol) { }
function inet_ntop($in_addr) { }
function inet_pton($address) { }
function ip2long($ip_address) { }
function long2ip($proper_address) { }
function dns_check_record($host, $type = null_string) { }
function checkdnsrr($host, $type = null_string) { }
function dns_get_record($hostname, $type = -1, &$authns = null, &$addtl = null) { }
function dns_get_mx($hostname, &$mxhosts, &$weights = null) { }
function getmxrr($hostname, &$mxhosts, &$weight = null) { }
function fsockopen($hostname, $port = -1, &$errnum = null, &$errstr = null, $timeout = 0.0) { }
function pfsockopen($hostname, $port = -1, &$errnum = null, &$errstr = null, $timeout = 0.0) { }
function socket_get_status($stream) { }
function socket_set_blocking($stream, $mode) { }
function socket_set_timeout($stream, $seconds, $microseconds = 0) { }
function header($str, $replace = true, $http_response_code = 0) { }
function headers_list() { }
function get_http_request_size() { }
function headers_sent(&$file = null, &$line = null) { }
function header_register_callback($callback) { }
function header_remove($name = null_string) { }
function setcookie($name, $value = null_string, $expire = 0, $path = null_string, $domain = null_string, $secure = false, $httponly = false) { }
function setrawcookie($name, $value = null_string, $expire = 0, $path = null_string, $domain = null_string, $secure = false, $httponly = false) { }
function define_syslog_variables() { }
function openlog($ident, $option, $facility) { }
function closelog() { }
function syslog($priority, $message) { }
