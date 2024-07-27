# Input Text 요소
HTML은 다양한 형식의 텍스트 값을 입력받을 수 있습니다. 또한 이러한 입력을 받기 위한 UI 클래스도 사용됩니다.
`지니UI`는 보다 직관적으로 입력요소를 분별하고 처리하기 위해서 데이터 유형별로 x-테그를 지원합니다.


## 텍스트

```html
<input type="text" class="form-control" placeholder="Input">
```

X테그
```html

```

## 크기지정
form-control-lg 또는 form-control-sm 클래스 속성을 추가합니다.


## 이메일
전형적인 input 텍스트는 다음과 같이 코드를 작성합니다. 또한, 부트스트랩 스타일의 모양을 지정하기 위해서 `form-control` 클래스도 매번 같이 선언을 해주어야 합니다.

이전코드
```html
<input type="email" class="form-control" placeholder="Email">
```

하지만 지니ui는 보다 직관적인 코드 가독성을 위하여 `<x-form-email>` 테그를 지원합니다.
다음과 같이 간략하게 사용을 할 수 있습니다.

```html
<x-form-email placeholder="Email"/>
```