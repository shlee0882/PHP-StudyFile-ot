## 설정파일 변경

1. php.ini 파일을 찾아서 php기본 동작방법 변화 시킴.

2. php.ini 에서 기본적으로 에러발생시 에러출력되는것이 off되어있는데 on시키는 방법을 알아본다.

3. 기본적으로 에러가 off되어있는 이유는 빌미, 정보를 제공하므로 보안상 문제로 off되어있다. 

4. 개발상 off 되어있으면 문제찾기 어렵다. 그러므로 on시켜야한다.

5. 실서비스 시킬땐 off 시켜야 한다.

6. php.ini 파일을 지우고 개발시 php.ini -development 파일을 복사해 이름을 php.ini로 바꾸면 된다

<br>
php.ini<br>
php.ini - development 개발서버 권장됨.<br>
php.ini - production 실서버에서 권장되는 설정 담고있음.<br>

