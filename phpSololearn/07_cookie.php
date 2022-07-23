<?php
    // setcookie(name, value, expire, path ,domain, secure, httponly)
    // if server path is '/' the cookie will available within the entire domain.
    /**
     *  If set to "/php/", the cookie will only be available within the php directory and all sub-directories of php.
     * 
     * The name parameter is the only one that's required. All of the other parameters are optional.
     * 
     * We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set
     * 
     * The setcookie() function must appear BEFORE the <html> tag.
     * 
     * NEVER store sensitive information in cookies.
     */
    $name = "Chandan";
    setcookie("user",$name, time()+60,'/');
    if(isset($_COOKIE['user'])){
        echo "name is ". $_COOKIE['user'];
    }
?>