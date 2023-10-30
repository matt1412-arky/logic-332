<?php
<?php
function twoStrings($s1, $s2) {
    for ($i = 0; $i < strlen($s1); $i++) {
        $char = $s1[$i];
        if (strpos($s2, $char) !== false) {
            return "YES";
        }
    }
    return "NO";
}
?>