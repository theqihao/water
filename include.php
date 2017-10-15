<?php
/* handle error */
function _user_error() {
    echo "<h1> username or password error!  </h1>";
    echo "<a href=\"login.html\"> please login again  </a>";
}

function admin_error() {
    echo "<h1> username or password error!  </h1>";
    //echo "<a href=\"http:\/\/119.29.249.11\/admin.html\"> please login again  </a>";
    echo "<a href=\"admin.html\"> please login again  </a>";
}

/* set_url */
function set_user() {
    echo "<script language=\"JavaScript\"> 
            self.location='user.php'; 
            </script> ";
}

function set_admin() {
    echo "<script language=\"JavaScript\"> 
            self.location='admin.php'; 
            </script> ";
}

/* handle sql operation */
function connect() {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '0';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    mysqli_query($conn, "set character set 'utf8'");//读库 
    mysqli_query($conn, "set names 'utf8'");//写库 
    if (!$conn) {
        echo "<h1> database connect failed! </h1>";
        die('Could not connect' . mysql_error());
        exit();
    }
    mysqli_select_db($conn, 'qihao');
    return $conn;
}

function query($conn, $sql) {
    //mysql_query("set names 'utf8'");
    $ret = mysqli_query($conn, $sql);
    if (!$ret) {
        echo "query error";
        echo "query error";
        echo mysql_error($conn);
        die('query data error' . mysql_error($conn));
        echo "query error";
        exit();
    }
    return $ret;
}
?>
