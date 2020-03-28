<?php
function koneksi()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "myquiz";    
return mysqli_connect($host, $user, $password, $db);
}
function save($data)
{
    $link = koneksi();
    $sql = "INSERT INTO log(ip,nim,mk) VALUES('".$data['ip']."','".$data['nim']."','".$data['mk']."')";
    return mysqli_query($link,$sql);
}
function attempt($data){
    $link = koneksi();
    $sql = "SELECT * FROM log WHERE nim='".$data['nim']."' and mk='".$data['mk']."'";
    $result = mysqli_query($link,$sql);
    return mysqli_num_rows($result);
}
function get()
{
    $link = koneksi();
    $sql = "SELECT * FROM log";
    return mysqli_query($link,$sql);
}function getIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
