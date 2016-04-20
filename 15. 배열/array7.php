<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}
 
$members = get_members();
 
for($i = 0; $i < count($members); $i++){ // count는 갯수 세는 함수

    echo ucfirst($members[$i]).'<br />'; // 첫번째 글자 대문자로 바꿔줌.
}
 
?>