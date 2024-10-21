<?php
class CacheControl {
    public static function preventCaching() {
        // Clear PHP's internal file status cache
        clearstatcache();

        if (!headers_sent()) {
            // Force immediate cache invalidation
            header("Expires: 0");
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");

            // Optional: Use Clear-Site-Data header to remove cached data
            header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
        }
    }
}
