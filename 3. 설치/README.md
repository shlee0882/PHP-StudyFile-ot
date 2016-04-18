설치

php는 혼자 설치되지 않고
apache, mysql과 함께 설치된다.

php는 아파치를 통해서 브라우저로 정보 전송할수있고
mysql에 글의 내용을 저장하기 때문에

APM이라 부른다.
Apache PHP MySQL

윈도우의 APM 설치하는것이기 때문에
WAPM(window Apache PHP MySQL)

한번에 설치해주는게 있는데 Bitnami가 있다.
Bitnami는 installer이다.

Bitnami를 설치하면 여러 php 프레임워크를 설치하라고 한다. phpMyAdmin만 설치해준다.

디렉토리 및 설정

server   		client
	/phpinfo.php
apache <-  
아파치는 사용자가 요청한 내용을 phpinfo.php라는 파일을 아파치가 설치된 서버컴퓨터의 디렉토리에서 찾는다.
아파치에 설정이 되어있는데 클라이언트가 서버에 요청 보냈을때 어느 디렉토리를 시작디렉토리로해서 그파일을 찾는다라고 설정해놓는다.

디렉토리 위치는 C:\Bitnami\wampstack-5.6.20-0\apache2\conf httpd.conf 파일의 DocumentRoot 찾기 시 나온다.
기본 디렉토리 설정 위치는 C:\Bitnami\wampstack-5.6.20-0\apache2\htdocs 이다.

기본 디렉토리 위치에서 localhost를 주소에 쳤을때 index.html 파일이 기본적으로 불러오게 되고 localhost/phpinfo.php 를 치면 phpinfo.php파일을 찾게 된다.