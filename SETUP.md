# 수동설치 방법안내
지니Shop을 압축 또는 git 저장소를 통하여 클론합니다.

```bash
git clone https://github.com/jinyphp/jinyshop
```



## 환경설정 복사 및 키 생성
라라벨의 `.env` 파일을 생성합니다.

```
cp .env.sample .env
```

필요한 환경설정 파일을 변경합니다.


## 패키지 설치
> 환경설정과 의존파일이 자동으로 설치되지 않습니다.
라라벨 및 지니 페키지를 설치합니다.

```
composer install
```

키 생성
```
php artisan key:generate
```

## 데이터베이스 설정

> sqlight 설정
```
touch database/database.sqlite
```

데이터 마이그레이션
```
php artisan migrate
```

## Assets 설치
css 및 javascript 를 빌드합니다.
```
npm install
npm run build
```

## 로컬서버 실행
PHP 자체 내장 서버를 통하여 프로젝트를 실행이 가능합니다.

```
php artisan serve
```

`localhost:8000`로 접속을 합니다.
