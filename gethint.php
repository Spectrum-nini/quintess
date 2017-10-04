<?php
// Array with names
$a[] = "Arlington";
$a[] = "Brookline";
$a[] = "Belmont";
$a[] = "Cambridge";
$a[] = "Chelsea";
$a[] = "Dedham";
$a[] = "Everett";
$a[] = "Revere";
$a[] = "Somerville";
$a[] = "Newton";
$a[] = "Watertown";
$a[] = "waltham";
$a[] = "Quincy";
$a[] = "Malden";
$a[] = "Medford";
$a[] = "Milton";
$a[] = "Ellen";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
