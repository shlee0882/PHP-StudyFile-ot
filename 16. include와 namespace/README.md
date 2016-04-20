## include와 namespace

프로그램은 작고 단순 -> 크고 복잡해짐

함수가 없다면 굉장히 많은 함수가 중복됨.

코드의 재사용성, 재활용성을 높이는 역할이 함수의 핵심적인 역할

include라는 것은 필요에 따라 다른 PHP파일을 코드안으로 불러서 사용할수 있는 것.

<?php
function welcome(){
    return 'Hello world';
}
echo welcome();
?>

welcome() 함수 정의 , welcome() 함수 호출

welcome() 함수가 php파일 안에서만 사용됨.

welcome() 함수가 여러개의 php파일에서 사용된다면 문제생김

함수가 사용하는 이유가 중복적으로 사용되는 로직을 재사용하기 위해서 사용하는 것.

include를 사용해서 반복 중복 을 제거해보자.

greeting.php

<?php
function welcome(){
    return 'Hello world';
}
?>

2.php

<?php
include 'greeting.php'; -> funciton welcome(){}
echo welcome();
?>

include를 사용함으로써 모듈로 불러옴.

## 같은역할을 하는 4개 명령이 있다.

### include_once
### require_once
### include
### require

include와 require 차이점은 없다.

그러나
파일이 없거나 permission이 없을 때 include는 warning을 띄우게 되고 

반면에 require를 쓰면 파일이 없으면 fatal error(치명적 에러)라고 뜬다.

include_once
require_once
include
require

중복적으로 php를 include하는 경우가 발생해서 _once를 사용한다.

## namespace

파일의 이름이 중복되는 문제가 생김.
중복에 의한 충돌 막기위해 디렉토리 생김.

namespace는 2개의 다른 php 파일을 불러올 때 불러온 php 파일에 정의된 함수의 이름이 같을 때 어떤 함수를 써야할지 컴퓨터는 모른다. 같은 함수가 여기저기서 정의되어 있는데 어떤 함수를 불러와 써야하는지 모름.

이러한 문제를 해결하기 위해 namespace를 쓴다.
 
하나의 단일 파일 안에서 복수의 네임스페이스 존재할수 있다.

<?php
namespace language\en;
function welcome(){
    return 'Hello world';
}
namespace language\ko;
function welcome(){
    return '안녕세계';
}