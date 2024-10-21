<?php
class CacheControl {
    public static function preventCaching() {
        // Clear PHP's internal file status cache
        clearstatcache();
        
        // Start output buffering to ensure headers are sent before any content
        if (!headers_sent()) {
            // Set cache-control headers
            header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");

            // Optional: Clear-Site-Data header for browsers that support it
            if (self::supportsClearSiteData()) {
                header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
            }
        }
    }

    // Check if the browser supports Clear-Site-Data header
    private static function supportsClearSiteData() {
        // This could be enhanced to detect specific browsers if needed
        return true; // Assume support by default
    }
}
?>
