
<?php 

$server = "localhost"  ; 
$username = "root"; 
$password = "" ; 
$dbname = "sb_admin_2" ; 


$dbconnect = new mysqli($server, $username, $password, $dbname) ;

if ($dbconnect)
    {
        // echo "Database connection successful" ; 
    }
else 
    {       
        die("Database connection failed: " . mysqli_connect_error()) ;
    }
        

    
