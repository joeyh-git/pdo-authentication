<?php 

    function registerAccount() {

    }

    function authenticateAccount() {

    }

    function disconnectAccount() {

    }

    // Checking whether a session is started or not.
    function is_session_started() {
        if (php_sapi_name() !== 'cli') {
            if (version_compare(phpversion(), '5.4.0', '>=')) {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }
    
?> 