<?php 

    function sanitize($string) {
        return htmlspecialchars(strip_tags($string, ENT_QUOTES, 'UTF-8'));
    }

?>