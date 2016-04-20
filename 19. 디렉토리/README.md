## 현재 디렉토리와 디렉토리의 변경

getcwd는 현재 디렉토리를 통해서 현재 디렉토리를 알 수 있고, chdir을 이용해서 디렉토리를 변경 할 수 있다.

<?php
echo getcwd();
chdir('../');
echo getcwd();
?>

## 디렉토리의 탐색

<?php
$dir    = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
 
print_r($files1);
print_r($files2);
?>

## 디렉토리의 생성

<?php
mkdir("1/2/3/4", 0700, true);
?>