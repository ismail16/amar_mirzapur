<?php
/*
 * Project: Double-P Framework
 * Copyright: 2011-2012, Moin Uddin (pay2moin@gmail.com)
 * Version: 1.0
 * Author: Moin Uddin
 */
    $url = $_SERVER['REQUEST_URI'];
    //starting a secured session
    session_start();

    include ( "config/connection.php" );
    include ( "includes/functions.php" );
    // set_active_session_subdomain();
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    //breaking the url to many parts
    $break = explode ( "/", $url );
    //broken useful parts starts from the array position $start
    $start = START;

    /*Start routing*/
    $option = $break[ $start];
    if ( ( $option != "" ) && ( is_dir ( "modules/" . $option ) ) && file_exists( "modules/" . $option . "/" . $option . '.php' ) ) $module = "modules/" . $option;
    elseif( ( $option != "" ) && ( !is_dir ( "modules/" . $option ) ) ) {
        $option = "error_404";
        $module = "modules/" . $option;
    }
    else{
        $option = "dashboard";
        $module = "modules/" . $option;
    }
    
    include ( $module . "/" . $option . ".php" );
    /* if a class exists with the string of $option, create the object */
    if( class_exists ( $option ) ) {
        $option_obj = new $option();
        /* call method based on URL structure */
        for( $j = ( count( $break ) - START ); $j >= 0; $j-- ) {
            $break_point_method = '';
            for( $i = 1; $i < ( $j ); $i++ ) {
                $break_point_method .= ( $break_point_method != '' ? '_' : '' ) . $break[ START + $i ];
            }

            if( method_exists( $option_obj, $break_point_method ) ) {
                $option_obj->$break_point_method();
                break;
            }
        }

        if( ( $break_point_method == '' ) && ( method_exists( $option_obj, $option . '_method' ) ) ) {
            $break_point_method = $option . '_method';
            $option_obj->$break_point_method();
        }
    }
 ?>
