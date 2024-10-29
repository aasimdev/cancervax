<?php
if (function_exists('opcache_reset')) {
    opcache_reset();
    echo "OPCache has been cleared.";
} else {
    echo "OPCache is not enabled on this server.";
}
