<?php
/**
 * HOME TASK ONE
 */
$strings = [
    "Hello!",
    "I'm function which can hadle array displaying on your screen",
    "Also I can tell you everything about your server",
    "Your php version is - " . PHP_VERSION,
    "Your're working in - " . __DIR__,
];

arrToParagraphs($strings);

echo '<br><br>';

/**
 * FUNCTIONS
 */
function arrToParagraphs($arr) {
    foreach($arr as $item) {
        echo '<p>' . htmlspecialchars((string)$item) . '</p>';
    }
}