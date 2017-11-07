<?php
require_once 'vendor/autoload.php'; // Autoload files using Composer autoload
use Proxmox\Request;

$configure = [
    'hostname'  => '0.0.0.0',
    'username'  => 'root',
    'password'  => 'password',
    'realm'     => 'pam',
    'port'      => 8006
];
Request::Login($configure); // Login ..

# Quick Usage
// Request($path, array $params = null, $method="GET")
print_r( Request::Request('/nodes', null, 'GET') ); // List Nodes

?>
