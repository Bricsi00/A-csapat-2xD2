<?php
session_start();
$kapcsolat = mysqli_connect( "localhost", "root","", "orai" );
if ( ! $kapcsolat )
die( "Nem lehet csatlakozni a MySQL kiszolgalohoz!" );

 ?>