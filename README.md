# JinyERP V2.1
`지니ERP`은 지니PHP를 기반으로 제작된 전사적 업무지원 서비스입니다.

## 설치
지니ERP는 라라벨을 기반으로 개발 되었습니다. 이를 사용하기 위해서는 PHP언어와 컴포저, nodejs, 그리고 Mysql과 같은 RDBMS가 필요로 합니다.

먼저 기본 골격의 지니ERP를 설치합니다. 

```bash
composer create-project jiny/jinyerp 프로젝트
```

### 패키지 및 모듈
지니ERP의 주요기능을 새로운 네임스페이스 `jiny`와 `modules`로 시작합니다. 이는, 프로젝트 루트폴더에 직접 확장기능을 설치하여 사용할 수 있습니다.


### 환경설정 및 DB 마이그레이션
데이터베이스 연동을 위하여 `.env`를 수정합니다. 지니PHP는 기본적으로 Mysql과 같은 RDBMS를 사용합니다.
> 라라벨 11버젼 부터는 기본 DB가 SQLight로 설정되어 있습니다. SQLight를 사용하기 위해서는 php.ini에서 pdo_sqlight 드라이버를 확장해 주어야 합니다.

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
> 데이터베이스 연결을 위해서 먼저, mysql 접속 터미널 에서 사용자와 스키마를 생성해 주어야 합니다. 또한, 테이블 생성 및 변경을 위한 권환도 같이 부여해 주셔야 합니다.  

초기 테이블을 생성합니다. 이를 위해서 라라벨의 `migrate`명령을 실행합니다.

```bash
php artisan migrate
```

### CSS 및 Asset 설치
front 화면을 처리하기 위한 css 및 assets 을 빌드합니다. 이를 위해서는 nodejs가 필요로 합니다.
```
npm install
npm run build
```

### 서버 실행
데이터베이스와 화면 assets 이 빌드가 완료가 되었으면, PHP 내장 웹서버를 통하여 프로젝트를 실행합니다.
```
php artisan serve
```

## 사이트 구축 및 디자인
지니PHP는 라라벨을 기반으로 손쉽게 웹사이트를 구축할 수 있는 기능들을 제공합니다. 지니PHP는 유연한 웹사이트 구축을 위하여 테마와 slot 개념을 가지고 있습니다. 

### 테마
프로젝트 루트에 위치한 `/theme`폴더 안에는 다양한 테마를 포함하고 있습니다. 테마는 모든 사이트를 래핑하며, 동일한 컨셉의 사이트를 생성하고 일관성을 유지할 수 있습니다.

### www-slot
`/resources/www` 폴더가 추가됩니다. 지니PHP는 정적페이지를 url과 동일하게 매핑하여 자동으로 페이지를 출력합니다. 또한, slot을 적용하시면 `/resources/www/slot1` 을 접근 endpoint로 변경하여 페이지를 출력하게 됩니다.

## 기술문서
