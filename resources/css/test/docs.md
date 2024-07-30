# SCSS 유틸리티
breakpoint와 pseuo-class를 지원하는 css를 작성할 수 있는 class 세트를 제공


## 소개
이 SCSS 유틸리티는 여러 요소에 적용되는 css를 breakpoint와 다양한 pseuo-class 상태를 통해 디자인의 유연성을 추가로 제공한다.

## 설명
### Import
<pre>
<code>
@import "breakpointtest";
@import "pseudo";
</code>
</pre>
- breakpointtest : 반응형 breakpoint를 처리하는 데 관련된 믹스인을 포함
- pseudo : 스타일링에 사용되는 pseudo class를 처리하는 데 관련된 믹스인을 포함


### resources/css/test/breakpointtest.scss
<pre>
<coe>
// 브레이크포인트 변수 정의
$breakpoints: (
    "sm": 640px,
    "md": 768px,
    "lg": 1024px,
    "xl": 1280px,
);

// 미디어 쿼리 믹스인
@mixin breakpoint($size) {
    @if map-has-key($breakpoints, $size) {
        @media (max-width: map-get($breakpoints, $size)) {
            @content;
        }
    }
}

</coe>
</pre>


### resources/css/test/pseudo.scss
<pre>
<coe>
// 스타일링에 사용 가능한 pseudo-class를 정의
$pseudos: (
    hover : hover,
    focus : focus,
    active : active
);

// 믹스인
@mixin pseudo($pseudoClass, $class) {
    @if map-has-key($pseudos, $pseudoClass) {
        $pseudo: map-get($pseudos, $pseudoClass);
        .#{$pseudo}\:#{$class}:#{$pseudo} {
            @content;
        }
    }
}
</coe>
</pre>

## 사용예시

### padding 관련 class명 추가 코드예시
<pre>
  <code>
    // padding.scss
@import "breakpointtest";
@import "pseudo";

$paddings: (
    0: 0px,
    1: 0.25rem,
    2: 0.5rem,
    3: 0.75rem,
    4: 1rem,
    5: 1.25rem,
    6: 1.5rem,
    7: 1.75rem,
    8: 2rem,
    9: 2.25rem,
);

@each $key, $value in $paddings {
    .p-#{$key} {
        padding: $value;
    }

    @each $pseudo in map-keys($pseudos){
        @include pseudo($pseudo, "p-#{$key}") {
            padding: $value;
        }
    }
    

    @each $breakpoint in map-keys($breakpoints) {
        @include breakpoint($breakpoint) {
            .#{$breakpoint}\:p-#{$key} {
                padding: $value;
            }
        }
    }

}
  </code>
</pre>

### 코드 실행 후 결과물 
<pre>
<code>
  .p-0 {
  padding: 0px;
}

.p-1 {
  padding: 0.25rem;
}

.p-2 {
  padding: 0.5rem;
}

  ...
  
.p-9 {
  padding: 2.25rem;
}


  
  /* 가상 클래스 스타일 */
.hover\:p-0:hover {
  padding: 0px;
}

.focus\:p-0:focus {
  padding: 0px;
}

.active\:p-0:active {
  padding: 0px;
}

  ...


.hover\:p-9:hover {
  padding: 2.25rem;
}

.focus\:p-9:focus {
  padding: 2.25rem;
}

.active\:p-9:active {
  padding: 2.25rem;
}


  
  /* 브레이크포인트 스타일 (예시) */
@media (min-width: 640px) {
  .sm\:p-0 {
    padding: 0px;
  }

  ...
  
  .sm\:p-9 {
    padding: 2.25rem;
  }
}

@media (min-width: 768px) {
  .md\:p-0 {
    padding: 0px;
  }

  ...
  
  .md\:p-9 {
    padding: 2.25rem;
  }
}

@media (min-width: 1024px) {
  .lg\:p-0 {
    padding: 0px;
  }

  ...
  
  .lg\:p-9 {
    padding: 2.25rem;
  }
}

@media (min-width: 1280px) {
  .xl\:p-0 {
    padding: 0px;
  }

  ...
  
  .xl\:p-9 {
    padding: 2.25rem;
  }
}

</code>
</pre>
