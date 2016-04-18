<html>
<body>
<?php
$a = 100;
echo gettype($a);
settype($a, 'double'); // double은 실수
echo '<br />';
echo gettype($a);
// $a 라는 값이 누군가가 위에서 작성한 코드다.
// 미지의 데이터 형식이 안에 들어갈수 있는 것이다.

// $a+2 를 하려고 하는데 $a에는 반드시 숫자가 들어가 있어야한다.
// $a에는 숫자가 들어있는지 확신할수 없음.
// if(is_int($a)){
// 	$a+2;
// }

// $a = "30"

// $a+2


?>
</body>
</html>