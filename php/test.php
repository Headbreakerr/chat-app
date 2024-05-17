<?php
$filename = 'test.txt';
$content = 'This is a test content.';

// Attempt to write content to the file
if (file_put_contents($filename, $content) !== false) {
    echo 'File write successful.';
} else {
    echo 'Failed to write to the file.';
}
