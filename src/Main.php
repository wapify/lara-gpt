<?php
namespace LaraGpt\App;

/**
 * Main Class
 *
 * @description This is the main class of the project
 * It has an example method that removes comments from a file
 */
class Main {

    /**
     * @param string $path
     * @return string
     * @Description: Gets the filename from a path and removes the comments.
     */
    public static function cleanComments($path) {
        // Open the file.
        $file = fopen($path, 'r+');

        // Read the content of the file.
        $content = fread($file, filesize($path));

        // Create a regular expression to find comments.
        $regex = '#/\*.*?\*/|//.*?\n#s';

        // Remove comments from the content.
        $content = preg_replace($regex, '', $content);

        // Close the file.
        fclose($file);

        // Write the content without comments back to the file.
        $file = fopen($path, 'w');
        fwrite($file, $content);
        fclose($file);
    }

}
