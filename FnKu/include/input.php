<?php 
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnB version:1.0.4
 * Author: HanFen
 **/
require("FnKu/Conf/SC.php");
class input
{
    public function post( $Message )
    {
        if ( $Message == '' ) {
            return false;
        }
        foreach ( $GLOBALS['SC'] as $SCV ) {
            if( $Message == $SCV ){
                return false;
            }
        }
            return true;
    }
}
