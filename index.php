<?php

use Hamedmoody\Irvalidation\Validation;

require 'vendor/autoload.php';

$is_valid = Validation::is_valid_national_code('032659865');
var_dump( $is_valid );