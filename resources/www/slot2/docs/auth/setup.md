---
layout: docs
---

* [설치](./setup)
* [화면구성](./view)

# 회원인증 설치
지니PHP는 라라벨의 기본회원 인증을 확장하여 다양 유형으로 회원을 처리할 수 있습니다.  

## 패키지 설치
컴포저를 통하여 `jiny/auth` 패키지를 설치합니다.

```bash
composer require jiny/auth
```
> 지니PHP에서는 auth 패키지가 기본적으로 설치되어 있습니다. composer.json 파일을 확인해 주시길 바랍니다.

## 관리자 등록
시스템 설치후 운영 관리를 하기 위해서는 최초의 회원이 필요로 합니다. 최초의 회원은 `super`회원으로 시스템을 조작할 수 있는 모든 권환을 가지고 있습니다.

* 일반회원
* Admin회원
* Super회원

### 콘솔명령
`super` 및 `admin`회원은 auth 패키지에서 제공되는 콘솔명령으로만 생성을 할 수 있습니다. 콘솔 명령은 시스템을 접속한 터미널로 작업을 해야 합니다.

#### 콘솔 회원 가입
```bash
php artisan user:create --name=이름 --email=이메일 --password=패스워드
```

#### 관리자 활성화
관리자 권환을 부여하기 위해서는 먼저 회원이 가입되어 있어야 합니다. 기존의 회원을 관리자 회원으로 등급을 변경합니다.

```bash
php artisan user:admin 이메일 --enable
```
> `user:admin` 명령을 사용하기 위해서는 별도의 admin 패키지를 설치해 주셔야 합니다.

#### 슈퍼 관리자 활성화
관리자 권환을 부여하기 위해서는 먼저 회원이 가입되어 있어야 합니다. 기존의 회원을 관리자 회원으로 등급을 변경합니다.

```bash
php artisan user:super 이메일 --enable
```
> `user:super` 명령을 사용하기 위해서는 별도의 admin 패키지를 설치해 주셔야 합니다.

## 수동 인증처리

### Verified
이메일을 통하여 회원가입시 유효성을 검사하기 위하여 이메일을 확인합니다. 관리자 콘솔을 통하여 수동으로 이메일 인증을 승인할 수 있습니다.

```bash
php artisan user:verified 이메일 --enable
```

