<?php
// form for input texts
function form() {
    $html = '
    <form action="1.php" method="POST">
    <input type="text" name="a" placeholder="Write string a"><br>
    <input type="text" name="b" placeholder="Write string b"><br>
    <input type="submit" name="Send">
    </form>';
    die($html);
}
// function for compare 2 strings, and return the same words both input strings
function getCommonWords() {
    //$arr1 = str_split($_POST['a'], "string");
    //$arr2 = str_split($_POST['b'], "string");
    $arr1 = explode(" ", $_POST['a']);
    $arr2 = explode(" ", $_POST['b']);
    if(empty($_POST['a']) && empty($_POST['b'])) {
    echo "Strings <b>a</b> and <b>b</b> should be present";
    echo form();
} 
if(empty($_POST['a']) && isset($_POST['b'])) {
    echo $_POST['b'];
}
if(isset($_POST['a']) && empty($_POST['b'])) {
    echo $_POST['a'];
}
/// comparing strings 
$str = [];
foreach ($arr1 as $keyA => $valueA) {
    for ($i=0; $i < count($arr2) -1; $i++) {
        if ($arr2[$i] == $valueA) {
            $str[] = $arr2[$i];
            //unset($arr2[$i]);
            //unset($arr1[$keyA]);
        }
    }
    continue;
}
echo "<b>First string is:</b> " . $_POST['a'] . "<br>";
echo "<b>Second string is:</b> " . $_POST['b'] . "<br>";
echo "<b>Both strings contains the following words:</b>" . "<br>";
foreach ($str as $key => $value) {
    echo "$value" . "<br>";
}
print_r($str);
}
