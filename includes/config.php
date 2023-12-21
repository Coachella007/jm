<?php 

global $webeurl;
$webeurl = 'https://mute-recipe-6869.on.fleek.co/';
$servername = 'sql.freedb.tech';
$username = 'freedb_coachella@130.61.50.164';
$password = '';
$dbname = 'freedb_betterholding';
global $conn;
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}
function getPageDetail($pid){
    global $conn;
    $sql = "SELECT * FROM pages WHERE page_id = '$pid'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row;
        }
    } 
}
function getPageMetaByIDKeyGroup($id,$key,$grouup){
    global $conn;
    $sql = "SELECT * FROM `page_meta` WHERE field_name LIKE '$key' AND group_name LIKE '$grouup' AND page_id = '$id'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row['field_value'];
        }
    } 
}
function getSectionMetaByIDKeyGroup($id,$key,$grouup){
    global $conn;
    $sql = "SELECT * FROM `section_meta` WHERE field_name LIKE '$key' AND group_name LIKE '$grouup' AND section_id = '$id'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            return $row['field_value'];
        }
    } 
}
function get_packages(){
    global $conn;
    $sql = "SELECT * FROM package";
    $res = $conn->query($sql);
    return $res;
}
function get_faqs_by_cat($cat){
    global $conn;
    $sql = "SELECT * FROM faqs WHERE type LIKE '$cat'";
    $res = $conn->query($sql);
    return $res;
}
function insert_lead($f_name,$l_name,$email,$message){
    global $conn;
    $f_name = $conn->real_escape_string($f_name);
    $l_name = $conn->real_escape_string($l_name);
    $email = $conn->real_escape_string($email);
    $message = $conn->real_escape_string($message);
    $sql = "INSERT INTO `leads`(`f_name`, `l_name`, `email`, `message`) VALUES ('$f_name','$l_name','$email','$message')";
    $res = $conn->query($sql);
    return $res;
}

function getAllNewsFront(){
    global $conn;
    $sql = "SELECT * FROM news";
    $res = $conn->query($sql);
    return $res;
}

function getAllFundamentalAnalysisFront(){
    global $conn;
    $sql = "SELECT * FROM fundamental_analysis";
    $res = $conn->query($sql);
    return $res;
}

