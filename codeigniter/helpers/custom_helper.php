<?php


//테스트를 위해서 생성한 사용자 함수
function custom_str_replace(string $target_string):string
{

    $return_string = str_replace("지워야됨","",$target_string);

    return $return_string;
}