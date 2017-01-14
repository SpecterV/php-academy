<?php
// form for insert text
function guestForm() {
    $html = '
    <form action="8.php" method="POST">
    <input type = "text" name = "comment" placeholder="leave you comment">
    <input type = "submit" name = "send">
    </form>
    ';
    return $html;
}
// function for checking inputed word on swearing
function guestBook($comments) {
        $swears = ["fuck","Fuck","suck","Suck","дибил","Дибил","дурак","Дурак","придурок","Придурок","bitch","Bitch",
        "урод","Урод","Сука","сука","бля","Бля","блять","Блять"];
        foreach ($comments as $key => $value) {
            foreach ($swears as $Skey => $Svalue) {
                if ($value === $Svalue) {
                    return 0;
                } 
            }
   
        }
            return 1;
}