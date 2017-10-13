<?php
/* handle error */
function _user_error() {
    echo "<h1> username or password error!  </h1>";
    echo "<a href=\"http://127.0.0.1/login.html\"> please login again  </a>";
}

function admin_error() {
    echo "<h1> username or password error!  </h1>";
    //echo "<a href=\"http:\/\/119.29.249.11\/admin.html\"> please login again  </a>";
    echo "<a href=\"http://127.0.0.1/admin.html\"> please login again  </a>";
}

/*  */
function set_user() {
    echo "<script language=\"JavaScript\"> 
            self.location='user.php'; 
            </script> ";
}


/* handle sql operation */
function connect() {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '0';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if (!$conn) {
        echo "<h1> database connect failed! </h1>";
        die('Could not connect' . mysql_error());
        exit();
    }
    mysqli_select_db($conn, 'qihao');
    return $conn;
}

function query($conn, $sql) {
    $ret = mysqli_query($conn, $sql);
    if (!$ret) {
        die('query data error' . mysql_error($conn));
        exit();
    }
    return $ret;
}
?>
