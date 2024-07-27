---
layout: docs
---
# UI Widgets
`jinyPHP`는 UI 구현을 위하여 다양한 위젯을 제공합니다. 

## 패키지 설치
본 기능을 사용하기 위해서는 위젯 페키지를 설치해야 합니다. 컴포저를 통하여 라라벨 확장 페키지를 설치합니다.

```bash
composer require jiny/widget
```
> 지니PHP의 `ui-kit` 패키지를 설치하는 경우, 위젯 페키지는 의존성으로 같이 설치됩니다.


## 위젯이란?
> `위젯`이란 화면의 일부를 구성하면서 독릭적인 동작을 처리하는 확장된 컴포넌트 입니다.

지니PHP는 위젯 기술을 통하여 화면에서 직접 UI를 수정할 수 있는 `WYSIWYG` 기능을 제공합니다. 별도의 관리자 페이지에 접속하지 않아도 손쉽게 사이트를 유지관리 할 수 있습니다.


### 위젯의 종류
지니PHP에서 제공하는 위젯는 `WidgetComponent`를 기반으로 상속된 확장 페키지입니다. 위젯은 크게 2종류로 데이터를 화면에 표시하고, 수정하는 단순한 `View` 형태와 여러 데이터를 묽어 목록 형태로 보여수는 `List` 타입입니다.

* View 타입
* List 타입

## ViewFrom
위젯 컴포넌트는 `$widget` 변수를 인자로 받습니다. `$widget` 변수에는 위젯을 설정하기 위한 다양한 설정값을 담아 전달할 수 있는 파라미터 입니다. `$widget`변수는 연상배열 구조로 되어 있습니다.

`view` 키를 가지는 배열에는 위젯 화면을 처리할 수 있는 blade view를 설정합니다.

### List
`$widget['view']['list']` 는 위젯 데이터를 출력하는 기본화면 입니다.

### Item

### From

### Layout


## WidgetView
지정된 데이터를 중심으로 정의된 화면형태로 출력하는 UI위젯입니다. `WidgetView`는 단일형태로 자료를 표현할때 애우 유용합니다.

```php
@livewire('WidgetView', [
    'filename' => "설정파일명",
    'widget' =>[
       'view' =>[
           'list' => "화면위젯"
       ]
   ]
])
```
위젯은 2개의 인자를 전달받습니다. 첫번째 인자는 화면에 출력되는 데이터 파일의 경로 입니다. 데이터는 `/config` 폴더안에 저장이 됩니다.  
두번째 인자는 출력되는 화면정의 입니다. `view`는 크게 4개로 구분됩니다.
* layout : 위젯을 깜사는 외각 출력입니다.
* list : 위젯을 출력하는 blade 코드 입니다.
* form : 위젯에 데이터를 입력받는 양식입니다.
* item : 위젯 출력이 재귀적인 반복동작을 할때 사용되는 blade 화면 입니다.
  

#### 응용위젯: WidgetView-Card
`WidgetView`를 확장하여 card박스 형태로 출력하는 응용위젯 입니다.

#### WidgetView-Hero
Hero 페이지를 구현할 수 있는 데이터 위젯 입니다.


## WidgetList
여러개의 데이터를 가지고 있으며, 이를 화면에 목록 또는 테이블 형태로 나열합니다.

#### 응용위젯: WidgetList

#### 응용위젯: WidgetList-grid

#### 응용위젯: WidgetList-table
복수의 데이터를 이용하여 테이블 또는 그리드 형태로 데이터를 나열할 수 있는 위젯입니다.

### 응용위젯: WidgetList-ourteams
* WidgetList-ourteams

#### 응용위젯: WidgetCarousel
`Carousel`을 통하여 슬라이드를 구현할 수 있는 위젯입니다.



