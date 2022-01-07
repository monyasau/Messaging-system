<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    # bd sapp => Chatme@174btl
    $con = mysqli_connect("localhost","root","","chatMe");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>
