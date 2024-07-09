<?php
if (!function_exists('limit_text')) {
    function limit_text($str, $end) {
        return substr($str, 0, $end);
    }
}

error_log('Helpers file loaded');


?>