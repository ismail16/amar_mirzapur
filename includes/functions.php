<?php
function heading()
{    
    module_include("header");
}

function footing()
{
    $base=BASE;
    module_include("footer");
}

function set_flash_message($message, $flag)
{
    $_SESSION['flash']['message']=$message;
    $_SESSION['flash']['type']=$flag;
}

function get_flash_message()
{
    if(isset($_SESSION['flash']))
    {
        $message=array('message'=>$_SESSION['flash']['message'], 'type'=>$_SESSION['flash']['type']);
        unset($_SESSION['flash']);
        return $message;
    }
    else return 0;
}

function logged_in()
{
    if(isset($_SESSION['auth_user']))
    {
        return 1;
    }
    else return 0;
}

//following function returns the id of current user
function current_user_info($parameter)
{
    if(isset($_SESSION['auth_user'][$parameter])) return $_SESSION['auth_user'][$parameter];
    else return false;
}

function db_connect()
{
    $link=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('<h1>Could not connect to database</h1>');
    mysqli_select_db($link, DB_NAME) or die('<h1>Could not connect to database</h1>');
    return $link;
}


function module_include($module){
    global $option, $mysqli;
	if(file_exists("modules/".$module."/".$module.".php")) include("modules/".$module."/".$module.".php");
}

function form_processor()
{
	if(isset($_REQUEST['process']))
	{
		$func="process_".$_REQUEST['process'];
		$func();
		die();
	}
}

function display_html( $path, $data = array() ) {
    if( file_exists ( 'htmls/' . $path . '.php' ) ) {
        include ( 'htmls/' . $path . '.php' );
    }
}
