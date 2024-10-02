# JinyUI Demo V2.0
지니UI 페키지와 기능을 확인할 수 있는 demo project 입니다.

## 설치
깃허브 저장소를 복제하여 프로젝트를 생성합니다.

```bash
# 저장소 복제
git clone https://github.com/jinyphp/jinyui2.git

## 페키지 설치 및 키 생성
composer install
php artisan key:generate

## 데이터베이스(SQLite) 생성
touch database/database.sqlite
php artisan migrate

## 관리자 회원생성 및 관리자 등급 변경
php artisan user:create --name=이름 --email=이메일 --password=패스워드
php artisan user:admin 이메일 --enable
php artisan user:super 이메일 --enable

## npm 설치 및 빌드
npm install
npm run build

## 서버실행
php artisan serve
```

