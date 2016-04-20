## function 함수이름(){
	코드
}

함수이름();

-> 호출

ex)

<?php
function <strong>numbering</strong>(){
    $i = 0;
    while ($i < 10) {
        echo $i;
        $i += 1;
    }
}
numbering();
?>

<br>

## 입력과 출력

입력 -> 박스(함수) -> 출력

return (출력)

ex)

<?php
function get_arguments($arg1, $arg2){ // $arg1은 인자(argument)
    return $arg1 + $arg2;
}
echo get_arguments(10, 20);
?>

<br>

## 인자의 기본값

ex)

<?php
function get_arguments($arg1=100){
    return $arg1;
}
echo get_arguments(1);
echo ',';
echo get_arguments();
?>

1,1000

<br>

## 지역변수 전역변수

<?php
function get_arguments($arg){
	return $arg;
}
echo get_arguments(1);
echo $arg; // 아직 어떤값이 할당 되지 않았다.
?>