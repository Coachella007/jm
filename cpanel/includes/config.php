<?php 
error_reporting(0);
session_start();

global $siteurl;
global $webeurl;
$siteurl = 'https://mute-recipe-6869.on.fleek.co/';
$webeurl = 'https://mute-recipe-6869.on.fleek.co/';
$servername = 'sql.freedb.tech';
$username = 'freedb_coachella';
$password = 'RMvSDaBEGv4u';
$dbname = 'freedb_betterholding';
global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}
