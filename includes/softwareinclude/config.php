<?php 
error_reporting(0);
session_start();
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
global $siteurl;
global $webeurl;
$siteurl = 'https://mute-recipe-6869.on.fleek.co/';
$webeurl = 'https://mute-recipe-6869.on.fleek.co/';

if($uriSegments[1]=='cpanel'){
	
	if(!isset($_SESSION['sessionuserid'])){
		header("Location:" .$siteurl."");
		
	}
}
$servername = 'sql.freedb.tech';
$username = 'freedb_coachella';
$password = 'RMvSDaBEGv4u';
$dbname = 'freedb_betterholding';
$demoAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
$liveAccountURL = $siteurl . "cpanel/open-live-account.php?tab=1";
global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}
