## 배열

$member1 = "sanghyun",
$member2 = "seoul"

여러개의 값 저장할수 있는 장점 있다.

$class = Array("sanghyun","seoul");
	   = ["sanghyun","seoul"];

php 5.4 이후 버전 부터는 
$class = ["sanghyun","seoul"]; 사용가능

$class[0]; -> sanghyun
$class[1]; -> seoul

특정한 위치 있는 값 가져오고 싶다면 번호 부여하면 됨.
이러한 번호를 인덱스(index)라고 함.

<?php
$member = ['egoing', 'k8805', 'sorialgi'];
echo $member[0];
echo $member[1];
echo $member[2];
?>

배열 정의하는 형식이 됨.
member라는 변수에 저장된 것.

<br>

<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}
 
var_dump(get_members());
 
?>

<br>

<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}
 
$tmp =  get_members();
echo $tmp[1];
 
?>

<br>

<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}
 
echo get_members()[1];
 
?>

<br>

## 배열 사용 배열+반복문

반복문이라고하는 요소와 배열이라는 요소가 어떻게 구체적으로 결합되는지 알아봐야함.

<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}
 
$members = get_members();
 
for($i = 0; $i < count($members); $i++){
    echo ucfirst($members[$i]);
}
 
?>

<br>

## 배열의 조작

제일 끝에다 값을 추가하는 것을 push
제일 끝에 있는 값을 꺼낼때는 pop
첫번째 있는 값 제거하는것이 shift
어떤 값을 첫번째에 추가하는 것이 unshift

## 배열 추가 하는 방법
제일 끝에다 배열 추가하는 방법 array_push
<?php
$li = ['a', 'b', 'c', 'd', 'e'];
array_push($li,'f');
var_dump($li);
?>

-> a,b,c,d,e,f

## 배열 시작점에 값 추가하는 방법 array_unshift
<?php
$li = ['a', 'b', 'c', 'd', 'e'];
array_unshift($li,'z');
var_dump($li);
?>

-> z,a,b,c,d,e

## 첫번째 값을 제거하는 방법 array_shift

<?php
$li = ['a', 'b', 'c', 'd', 'e'];
array_shift($li);
var_dump($li);
?>

-> b,c,d,e

## 마지막 요소 제거하는 방법 array_pop

<?php
$li = ['a', 'b', 'c', 'd', 'e'];
array_pop($li);
var_dump($li);
?>

-> a,b,c,d

## sort

<?php
$li = ['c', 'e', 'a', 'b', 'd'];
sort($li);
var_dump($li);
?>

-> a,b,c,d,e


## reverse sort rsort

<?php
$li = ['c', 'e', 'a', 'b', 'd'];
rsort($li);
var_dump($li);
?>

-> e,d,c,b,a

## 연관배열

a,b,c

각각의 값에 대한 식별자로 0,1,2로 숫자 이용했다.
숫자를 index라 한다.

연관배열에서는 문자를 사용한다.
첫번째에 대한 식별자로 'first'
두번째에 대한 식별자로 'sec'

<?php
$grades = array('egoing'=>10, 'k8805'=>6,'sorialgi'=>80);
echo $grades['sorialgi'];
?>

<?php
$grades = []; // array()
$grades['egoing'] = 10;
$grades['k8805'] = 60;
$grades['sorialgi'] = 80;
var_dump($grades);
?>

<?php
$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
foreach($grades as $key => $value){ // grades값이 꺼내질때 첫번째로 $key라는 값에 egoing이 담기고 value값에 10이라는 값이 담기고 
    echo "key: {$key} value:{$value}";
}
?>

key : sorialgi  value : 80
key : k8805     value : 6
key : egoing    value : 10