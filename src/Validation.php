<?php
namespace Hamedmoody\Irvalidation;

class Validation{

    public static function is_valid_national_code( $code ){

        $code = trim( $code );

        if( strlen( $code ) != 10 ){
            return false;
        }

        if( ! ctype_digit( $code ) ){
            return false;
        }

        $digits = str_split( $code );
        $total  = 0;
        $c      = $code[9];
        foreach( $digits as $index => $digit ){
            if( $index < 9 ){
                $rate = 10 - $index;
                $total+= $digit * $rate;
            }
        }

        $mode = $total % 11;

        if( $mode < 2 ){
            return $mode == $c;
        }else{
            return ( 11 - $mode ) == $c;
        }

    }

}