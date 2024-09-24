<x-www-app>
    <x-www-layout2>
        <main class="bd-main order-1">
            <div class="bd-intro pt-2 ps-lg-2">
                <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0 d-flex text-nowrap">
                        <div class="btn-group btn-group-sm rounded-2"><a class="btn btn-bd-light"
                                href="https://getbootstrap.com/docs/5.3/customize/color/" title="영어 원문 보기"
                                target="_blank" rel="noopener">
                                원문 보기
                            </a><a class="btn btn-bd-light"
                                href="https://github.com/arumduri/bootstrap/tree/main/site/content/docs/5.3/customize/color.md"
                                title="GitHub에서 한국어로 번역된 문서 확인 및 수정하기" target="_blank" rel="noopener">
                                GitHub에서 보기
                            </a>
                        </div>
                    </div>
                    <h1 class="bd-title mb-0" id="content">색상</h1>
                </div>
                <h6 class="text-muted" id="enContent">// Color</h6>
                <p class="bd-lead">Bootstrap은 우리의 스타일과 컴포넌트를 테마로 한 광범위한 컬러 시스템을 지원합니다. 어떤 프로젝트라도 보다 포괄적으로 재정의 및 확장이
                    가능합니다.</p>
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2578669051257137"
                    data-ad-slot="4892808451" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

            </div>


            <div class="bd-toc mt-3 mb-5 my-lg-0 mb-lg-5 px-sm-1 text-body-secondary">
                <button class="btn btn-link p-md-0 mb-2 mb-md-0 text-decoration-none bd-toc-toggle d-md-none"
                    type="button" data-bs-toggle="collapse" data-bs-target="#tocContents" aria-expanded="false"
                    aria-controls="tocContents">
                    목차
                    <svg class="bi d-md-none ms-2" aria-hidden="true">
                        <use xlink:href="#chevron-expand"></use>
                    </svg>
                </button>
                <strong class="d-none d-md-block h6 my-2 ms-3">목차</strong>
                <hr class="d-none d-md-block my-2 ms-3">
                <div class="collapse bd-toc-collapse" id="tocContents">
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#색상" class="active">색상</a>
                                <ul>
                                    <li><a href="#새로운-색상-사용" class="">새로운 색상 사용</a></li>
                                    <li><a href="#테마-색상" class="">테마 색상</a></li>
                                </ul>
                            </li>
                            <li><a href="#모든-색상">모든 색상</a>
                                <ul>
                                    <li><a href="#sass-참고-사항">Sass 참고 사항</a></li>
                                </ul>
                            </li>
                            <li><a href="#색상-sass-맵">색상 Sass 맵</a>
                                <ul>
                                    <li><a href="#예시">예시</a></li>
                                </ul>
                            </li>
                            <li><a href="#유틸리티-생성하기">유틸리티 생성하기</a></li>
                        </ul>
                    </nav>
                </div>
            </div>


            <div class="bd-content ps-lg-2">


                <h2 id="색상">색상 <a class="anchor-link" href="#%ec%83%89%ec%83%81"
                        aria-label="Link to this section: 색상"></a></h2>
                <small
                    class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">v5.3.0에서
                    추가됨</small>

                <p>Bootstrap의 색상 팔레트는 v5.3.0에서 계속 확장되고 더욱 세세해졌습니다. <code>secondary</code> 및 <code>tertiary</code> 텍스트 및
                    배경색에 대한 새로운 변수와 테마 색상에 대한 <code>{color}-bg-subtle</code>, <code>{color}-border-subtle</code> 및
                    <code>{color}-text-emphasis</code>가 추가되었습니다. 이러한 새로운 색상은 밝고 어두운 등 다양한 색상 모드에서 더 쉽게 사용자 정의할 수 있도록 하기
                    위해 Sass 및 CSS 변수(색상 맵이나 유틸리티 클래스 제외)를 통해 사용할 수 있습니다. 이 새로운 변수는 <code>:root</code>에 전역적으로 설정되며, 원래 테마
                    색상은 변경되지 않은 채 새로운 어두운 색상 모드에 맞게 조정됩니다.
                </p>
                <p><code>-rgb</code>로 끝나는 색상은 <code>rgb()</code> 및 <code>rgba()</code> 색상 모드에서 사용할 <code>red</code>,
                    <code>green</code>, <code>blue</code> 값을 제공합니다. (예:
                    <code>rgba(var(--bs-secondary-bg-rgb), .5)</code>)
                </p>
                <div class="bd-callout bd-callout-warning">
                    <strong>주의!</strong> 새로운 보조 및 보조 색상과 기존 보조 테마 색상, 밝은 테마 색상과 어두운 테마 색상이 혼동될 가능성이 있습니다. 이 문제는 v6에서 해결될
                    것으로 예상됩니다.
                </div>

                <div class="table-responsive">
                    <table class="table table-swatches">
                        <thead>
                            <tr>
                                <th style="width: 340px;">설명</th>
                                <th style="width: 200px;" class="ps-0">예시</th>
                                <th>변수</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">
                                    <strong>Body —</strong> 컴포넌트를 포함한 기본 전경(색상) 및 배경입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-body-color);">&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-body-color</code><br><code>--bs-body-color-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2 border" style="background-color: var(--bs-body-bg);">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-body-bg</code><br><code>--bs-body-bg-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2">
                                    <strong>Secondary —</strong> 더 밝은 텍스트를 원하면 <code>color</code> 옵션을, 구분선 및 비활성화된 컴포넌트
                                    상태를 표시하려면 <code>bg</code> 옵션을 사용하세요.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-secondary-color);">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-secondary-color</code><br><code>--bs-secondary-color-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2 border" style="background-color: var(--bs-secondary-bg);">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-secondary-bg</code><br><code>--bs-secondary-bg-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2">
                                    <strong>Tertiary —</strong> 더 밝은 색상의 텍스트를 원하시면 <code>color</code> 옵션을 사용하세요.
                                    <code>bg</code> 옵션을 사용하여 호버 상태, 액센트 및 우물의 배경 스타일을 지정하세요.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-tertiary-color);">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-tertiary-color</code><br><code>--bs-tertiary-color-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2 border" style="background-color: var(--bs-tertiary-bg);">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-tertiary-bg</code><br><code>--bs-tertiary-bg-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Emphasis —</strong> 대비가 높은 텍스트의 경우에 사용됩니다. 배경에는 적용되지 않습니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-emphasis-color);">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-emphasis-color</code><br><code>--bs-emphasis-color-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Border —</strong> 컴포넌트 테두리, 디바이더 및 규칙의 경우에 사용됩니다. 배경과 <code>-rgba()</code>
                                    값을 가진 배경과 혼합하려면 <code>--bs-border-color-transparent</code>를 사용하세요.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-border-color);">&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-border-color</code><br><code>--bs-border-color-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4">
                                    <strong>Primary —</strong> 하이퍼링크, 포커스 스타일, 컴포넌트 및 양식 활성 상태에 사용되는 기본 테마 색상입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2 bg-primary">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-primary</code><br><code>--bs-primary-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-primary-bg-subtle)">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-primary-bg-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2"
                                        style="border: 5px var(--bs-primary-border-subtle) solid">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-primary-border-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="py-3 fw-bold h5" style="color: var(--bs-primary-text-emphasis)">Text
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-primary-text-emphasis</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4">
                                    <strong>Success —</strong> 긍정적이거나 성공적인 작업 및 정보에 사용되는 테마 색상입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2 bg-success">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-success</code><br><code>--bs-success-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-success-bg-subtle)">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-success-bg-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2"
                                        style="border: 5px var(--bs-success-border-subtle) solid">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-success-border-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="py-3 fw-bold h5" style="color: var(--bs-success-text-emphasis)">Text
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-success-text-emphasis</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4">
                                    <strong>Danger —</strong> 오류 및 위험한 행동에 사용되는 테마 색상입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2 bg-danger">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-danger</code><br><code>--bs-danger-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-danger-bg-subtle)">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-danger-bg-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="border: 5px var(--bs-danger-border-subtle) solid">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-danger-border-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="py-3 fw-bold h5" style="color: var(--bs-danger-text-emphasis)">Text
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-danger-text-emphasis</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4">
                                    <strong>Warning —</strong> 덜 위험한 경고 메시지에 사용되는 테마 색상입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2 bg-warning">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-warning</code><br><code>--bs-warning-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-warning-bg-subtle)">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-warning-bg-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2"
                                        style="border: 5px var(--bs-warning-border-subtle) solid">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-warning-border-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="py-3 fw-bold h5" style="color: var(--bs-warning-text-emphasis)">Text
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-warning-text-emphasis</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4">
                                    <strong>Info —</strong> 중립적이거나 정보성 콘텐츠에 사용되는 테마 색상입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2 bg-info">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-info</code><br><code>--bs-info-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-info-bg-subtle)">&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-info-bg-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="border: 5px var(--bs-info-border-subtle) solid">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-info-border-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="py-3 fw-bold h5" style="color: var(--bs-info-text-emphasis)">Text</div>
                                </td>
                                <td>
                                    <code>--bs-info-text-emphasis</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4">
                                    <strong>Light —</strong> 대비가 적은 색상을 위한 추가 테마 옵션입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2 bg-light">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-light</code><br><code>--bs-light-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-light-bg-subtle)">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-light-bg-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="border: 5px var(--bs-light-border-subtle) solid">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-light-border-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="py-3 fw-bold h5" style="color: var(--bs-light-text-emphasis)">Text</div>
                                </td>
                                <td>
                                    <code>--bs-light-text-emphasis</code>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4">
                                    <strong>Dark —</strong> 대비가 높은 색상을 위한 추가 테마 옵션입니다.
                                </td>
                                <td class="ps-0">
                                    <div class="p-3 rounded-2 bg-dark">&nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-dark</code><br><code>--bs-dark-rgb</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="background-color: var(--bs-dark-bg-subtle)">&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <code>--bs-dark-bg-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-3 rounded-2" style="border: 5px var(--bs-dark-border-subtle) solid">
                                        &nbsp;</div>
                                </td>
                                <td>
                                    <code>--bs-dark-border-subtle</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="py-3 fw-bold h5" style="color: var(--bs-dark-text-emphasis)">Text</div>
                                </td>
                                <td>
                                    <code>--bs-dark-text-emphasis</code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3 id="새로운-색상-사용">새로운 색상 사용 <a class="anchor-link"
                        href="#%ec%83%88%eb%a1%9c%ec%9a%b4-%ec%83%89%ec%83%81-%ec%82%ac%ec%9a%a9"
                        aria-label="Link to this section: 새로운 색상 사용"></a></h3>
                <p>이러한 새로운 색상은 CSS 변수와 유틸리티 클래스(예: <code>--bs-primary-bg-subtle</code> 및
                    <code>.bg-primary-subtle</code>)를 통해 액세스할 수 있으므로 변수를 사용하여 자신만의 CSS 규칙을 작성하거나 클래스를 통해 스타일을 빠르게 적용할 수
                    있습니다. 이 유틸리티는 색상과 관련된 CSS 변수를 사용하여 구축되며, 다크 모드에 맞게 사용자 정의되므로 기본적으로 색상 모드에 맞게 조정됩니다.
                </p>
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example m-0 border-0">

                        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                            Example element with utilities
                        </div>

                    </div>
                    <div
                        class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-top border-bottom">
                        <small class="font-monospace text-body-secondary text-uppercase">html</small>
                        <div class="d-flex ms-auto">
                            <button type="button" class="btn-edit text-nowrap" aria-label="Try it on StackBlitz"
                                data-bs-original-title="Try it on StackBlitz">
                                <svg class="bi" aria-hidden="true">
                                    <use xlink:href="#lightning-charge-fill"></use>
                                </svg>
                            </button>
                            <button type="button" class="btn-clipboard mt-0 me-0" aria-label="클립보드에 복사"
                                data-bs-original-title="클립보드에 복사">
                                <svg class="bi" aria-hidden="true">
                                    <use xlink:href="#clipboard"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="highlight">
                        <pre tabindex="0"
                            class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  Example element with utilities
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></span></span></code></pre>
                    </div>
                </div>

                <h3 id="테마-색상">테마 색상 <a class="anchor-link" href="#%ed%85%8c%eb%a7%88-%ec%83%89%ec%83%81"
                        aria-label="Link to this section: 테마 색상"></a></h3>
                <p>모든 색상의 자식 집합을 사용하여 색 구성표를 만들기 위한 더 작은 색상 팔레트를 만들며, Sass 변수와 Bootstrap의
                    <code>scss/_variables.scss</code> 파일의 Sass 맵으로도 사용할 수 있습니다.
                </p>
                <div class="row">

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-primary rounded-3">Primary</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-secondary rounded-3">Secondary</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-success rounded-3">Success</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-danger rounded-3">Danger</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-warning rounded-3">Warning</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-info rounded-3">Info</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-light rounded-3">Light</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 text-bg-dark rounded-3">Dark</div>
                    </div>

                </div>
                <p>이 색상들은 모두 Sass 맵인 <code>$theme-colors</code>로 이용할 수 있습니다.</p>
                <div class="bd-example-snippet bd-code-snippet bd-file-ref">
                    <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-bottom">
                        <a class="font-monospace link-secondary link-underline-secondary link-underline-opacity-0 link-underline-opacity-100-hover small"
                            href="https://github.com/twbs/bootstrap/blob/v5.3.3/scss/_variables.scss">scss/_variables.scss</a>
                        <div class="d-flex ms-auto">
                            <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard"
                                data-bs-original-title="Copy to clipboard">
                                <svg class="bi" aria-hidden="true">
                                    <use xlink:href="#clipboard"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="highlight">
                        <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="nv">$theme-colors</span><span class="o">:</span> <span class="p">(</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"primary"</span><span class="o">:</span>    <span class="nv">$primary</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"secondary"</span><span class="o">:</span>  <span class="nv">$secondary</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"success"</span><span class="o">:</span>    <span class="nv">$success</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"info"</span><span class="o">:</span>       <span class="nv">$info</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"warning"</span><span class="o">:</span>    <span class="nv">$warning</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"danger"</span><span class="o">:</span>     <span class="nv">$danger</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"light"</span><span class="o">:</span>      <span class="nv">$light</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"dark"</span><span class="o">:</span>       <span class="nv">$dark</span>
</span></span><span class="line"><span class="cl"><span class="p">);</span>
</span></span></code></pre>
                    </div>
                </div>
                <p>이 색상을 변경하는 방법은 <a href="/docs/5.3/customize/sass/#maps-and-loops">Sass 맵과 반복 문서</a>를 확인해 주세요.</p>
                <h2 id="모든-색상">모든 색상 <a class="anchor-link" href="#%eb%aa%a8%eb%93%a0-%ec%83%89%ec%83%81"
                        aria-label="Link to this section: 모든 색상"></a></h2>
                <p>모든 Bootstrap 색상은 <code>scss/_variables.scss</code> 파일의 Sass 변수와 Sass 맵으로 이용할 수 있습니다. 파일 크기 증가를 막기 위해서
                    이런 변수마다 텍스트나 배경색 클래스를 만들지 않습니다. 그 대신에, 이런 색의 자식 집합을 <a
                        href="#%ED%85%8C%EB%A7%88-%EC%83%89%EC%83%81">테마 팔레트</a>로 선택하고 있습니다.</p>
                <p>색을 재정의할 때는 색상 대비에 주의해 주세요. 아래 표시된 것처럼 메인 색상에 현재 색상에 대해, 흰색에 대해, 검은색에 대해서 각각 세 가지 대비 비율을 추가했습니다.</p>
                <div class="row font-monospace">

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-blue">
                            <strong class="d-block">$blue</strong>
                            #0d6efd
                        </div>

                        <div class="p-3 bd-blue-100">$blue-100</div>

                        <div class="p-3 bd-blue-200">$blue-200</div>

                        <div class="p-3 bd-blue-300">$blue-300</div>

                        <div class="p-3 bd-blue-400">$blue-400</div>

                        <div class="p-3 bd-blue-500">$blue-500</div>

                        <div class="p-3 bd-blue-600">$blue-600</div>

                        <div class="p-3 bd-blue-700">$blue-700</div>

                        <div class="p-3 bd-blue-800">$blue-800</div>

                        <div class="p-3 bd-blue-900">$blue-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-indigo">
                            <strong class="d-block">$indigo</strong>
                            #6610f2
                        </div>

                        <div class="p-3 bd-indigo-100">$indigo-100</div>

                        <div class="p-3 bd-indigo-200">$indigo-200</div>

                        <div class="p-3 bd-indigo-300">$indigo-300</div>

                        <div class="p-3 bd-indigo-400">$indigo-400</div>

                        <div class="p-3 bd-indigo-500">$indigo-500</div>

                        <div class="p-3 bd-indigo-600">$indigo-600</div>

                        <div class="p-3 bd-indigo-700">$indigo-700</div>

                        <div class="p-3 bd-indigo-800">$indigo-800</div>

                        <div class="p-3 bd-indigo-900">$indigo-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-purple">
                            <strong class="d-block">$purple</strong>
                            #6f42c1
                        </div>

                        <div class="p-3 bd-purple-100">$purple-100</div>

                        <div class="p-3 bd-purple-200">$purple-200</div>

                        <div class="p-3 bd-purple-300">$purple-300</div>

                        <div class="p-3 bd-purple-400">$purple-400</div>

                        <div class="p-3 bd-purple-500">$purple-500</div>

                        <div class="p-3 bd-purple-600">$purple-600</div>

                        <div class="p-3 bd-purple-700">$purple-700</div>

                        <div class="p-3 bd-purple-800">$purple-800</div>

                        <div class="p-3 bd-purple-900">$purple-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-pink">
                            <strong class="d-block">$pink</strong>
                            #d63384
                        </div>

                        <div class="p-3 bd-pink-100">$pink-100</div>

                        <div class="p-3 bd-pink-200">$pink-200</div>

                        <div class="p-3 bd-pink-300">$pink-300</div>

                        <div class="p-3 bd-pink-400">$pink-400</div>

                        <div class="p-3 bd-pink-500">$pink-500</div>

                        <div class="p-3 bd-pink-600">$pink-600</div>

                        <div class="p-3 bd-pink-700">$pink-700</div>

                        <div class="p-3 bd-pink-800">$pink-800</div>

                        <div class="p-3 bd-pink-900">$pink-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-red">
                            <strong class="d-block">$red</strong>
                            #dc3545
                        </div>

                        <div class="p-3 bd-red-100">$red-100</div>

                        <div class="p-3 bd-red-200">$red-200</div>

                        <div class="p-3 bd-red-300">$red-300</div>

                        <div class="p-3 bd-red-400">$red-400</div>

                        <div class="p-3 bd-red-500">$red-500</div>

                        <div class="p-3 bd-red-600">$red-600</div>

                        <div class="p-3 bd-red-700">$red-700</div>

                        <div class="p-3 bd-red-800">$red-800</div>

                        <div class="p-3 bd-red-900">$red-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-orange">
                            <strong class="d-block">$orange</strong>
                            #fd7e14
                        </div>

                        <div class="p-3 bd-orange-100">$orange-100</div>

                        <div class="p-3 bd-orange-200">$orange-200</div>

                        <div class="p-3 bd-orange-300">$orange-300</div>

                        <div class="p-3 bd-orange-400">$orange-400</div>

                        <div class="p-3 bd-orange-500">$orange-500</div>

                        <div class="p-3 bd-orange-600">$orange-600</div>

                        <div class="p-3 bd-orange-700">$orange-700</div>

                        <div class="p-3 bd-orange-800">$orange-800</div>

                        <div class="p-3 bd-orange-900">$orange-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-yellow">
                            <strong class="d-block">$yellow</strong>
                            #ffc107
                        </div>

                        <div class="p-3 bd-yellow-100">$yellow-100</div>

                        <div class="p-3 bd-yellow-200">$yellow-200</div>

                        <div class="p-3 bd-yellow-300">$yellow-300</div>

                        <div class="p-3 bd-yellow-400">$yellow-400</div>

                        <div class="p-3 bd-yellow-500">$yellow-500</div>

                        <div class="p-3 bd-yellow-600">$yellow-600</div>

                        <div class="p-3 bd-yellow-700">$yellow-700</div>

                        <div class="p-3 bd-yellow-800">$yellow-800</div>

                        <div class="p-3 bd-yellow-900">$yellow-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-green">
                            <strong class="d-block">$green</strong>
                            #198754
                        </div>

                        <div class="p-3 bd-green-100">$green-100</div>

                        <div class="p-3 bd-green-200">$green-200</div>

                        <div class="p-3 bd-green-300">$green-300</div>

                        <div class="p-3 bd-green-400">$green-400</div>

                        <div class="p-3 bd-green-500">$green-500</div>

                        <div class="p-3 bd-green-600">$green-600</div>

                        <div class="p-3 bd-green-700">$green-700</div>

                        <div class="p-3 bd-green-800">$green-800</div>

                        <div class="p-3 bd-green-900">$green-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-teal">
                            <strong class="d-block">$teal</strong>
                            #20c997
                        </div>

                        <div class="p-3 bd-teal-100">$teal-100</div>

                        <div class="p-3 bd-teal-200">$teal-200</div>

                        <div class="p-3 bd-teal-300">$teal-300</div>

                        <div class="p-3 bd-teal-400">$teal-400</div>

                        <div class="p-3 bd-teal-500">$teal-500</div>

                        <div class="p-3 bd-teal-600">$teal-600</div>

                        <div class="p-3 bd-teal-700">$teal-700</div>

                        <div class="p-3 bd-teal-800">$teal-800</div>

                        <div class="p-3 bd-teal-900">$teal-900</div>

                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-cyan">
                            <strong class="d-block">$cyan</strong>
                            #0dcaf0
                        </div>

                        <div class="p-3 bd-cyan-100">$cyan-100</div>

                        <div class="p-3 bd-cyan-200">$cyan-200</div>

                        <div class="p-3 bd-cyan-300">$cyan-300</div>

                        <div class="p-3 bd-cyan-400">$cyan-400</div>

                        <div class="p-3 bd-cyan-500">$cyan-500</div>

                        <div class="p-3 bd-cyan-600">$cyan-600</div>

                        <div class="p-3 bd-cyan-700">$cyan-700</div>

                        <div class="p-3 bd-cyan-800">$cyan-800</div>

                        <div class="p-3 bd-cyan-900">$cyan-900</div>

                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 position-relative swatch-gray-500">
                            <strong class="d-block">$gray-500</strong>
                            #adb5bd
                        </div>
                        <div class="p-3 bd-gray-100">$gray-100</div>

                        <div class="p-3 bd-gray-200">$gray-200</div>

                        <div class="p-3 bd-gray-300">$gray-300</div>

                        <div class="p-3 bd-gray-400">$gray-400</div>

                        <div class="p-3 bd-gray-500">$gray-500</div>

                        <div class="p-3 bd-gray-600">$gray-600</div>

                        <div class="p-3 bd-gray-700">$gray-700</div>

                        <div class="p-3 bd-gray-800">$gray-800</div>

                        <div class="p-3 bd-gray-900">$gray-900</div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 mb-2 bd-black text-white">
                            <strong class="d-block">$black</strong>
                            #000
                        </div>
                        <div class="p-3 mb-2 bd-white border">
                            <strong class="d-block">$white</strong>
                            #fff
                        </div>
                    </div>
                </div>
                <h3 id="sass-참고-사항">Sass 참고 사항 <a class="anchor-link" href="#sass-%ec%b0%b8%ea%b3%a0-%ec%82%ac%ed%95%ad"
                        aria-label="Link to this section: Sass 참고 사항"></a></h3>
                <p>Sass는 프로그램적으로 변수를 만들 수 없어서 모든 색상을 위한 변수를 수동으로 만듭니다. 중간 값을 지정하고 (예를 들어, <code>$blue-500</code>), Sass의
                    <code>mix()</code> 색상 함수로 색조(밝게) 혹은 음영(어둡게)의 사용자 정의 색상 함수를 사용하고 있습니다.
                </p>
                <p><code>mix()</code>의 사용은 <code>lighten()</code>과 <code>darken()</code>간에 조금 다릅니다. 전자는 지정한 색상을 흰색과
                    검은색으로 섞지만, 후자는 각 색의 밝기 값을 조정하기만 하면 됩니다. 그 결과, <a
                        href="https://codepen.io/emdeoh/pen/zYOQOPB">CodePen 데모</a>에서 보이는 것처럼 더 완전한 색을 얻을 수 있습니다.</p>
                <p><code>tint-color()</code>와 <code>shade-color()</code> 함수에서는 <code>mix()</code>를
                    <code>$theme-color-interval</code> 변수와 함께 사용합니다. 전체 소스 코드는 <code>scss/_functions.scss</code>와
                    <code>scss/_variables.scss</code> 파일을 참조해 주세요.
                </p>
                <h2 id="색상-sass-맵">색상 Sass 맵 <a class="anchor-link" href="#%ec%83%89%ec%83%81-sass-%eb%a7%b5"
                        aria-label="Link to this section: 색상 Sass 맵"></a></h2>
                <p>Bootstrap의 소스 Sass 파일에는 색상과 그 16진수 값의 목록을 빠르고 쉽게 반복하기 위한 세가지 맵이 포함되어 있습니다.</p>
                <ul>
                    <li><code>$colors</code>는 이용 가능한 기본(<code>500</code>) 색상을 나열합니다.</li>
                    <li><code>$theme-colors</code>는 의미 있는 이름을 가진 테마 색상을 나열합니다.(아래 그림 참조)</li>
                    <li><code>$grays</code>는 모든 회색의 색조와 음영을 나열합니다.</li>
                </ul>
                <p><code>scss/_variables.scss</code> 안에는, Bootstrap의 색상 변수와 Sass 맵이 있습니다. 다음은 <code>$colors</code> Sass
                    맵의 예시입니다:</p>
                <div class="bd-example-snippet bd-code-snippet bd-file-ref">
                    <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-bottom">
                        <a class="font-monospace link-secondary link-underline-secondary link-underline-opacity-0 link-underline-opacity-100-hover small"
                            href="https://github.com/twbs/bootstrap/blob/v5.3.3/scss/_variables.scss">scss/_variables.scss</a>
                        <div class="d-flex ms-auto">
                            <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard"
                                data-bs-original-title="Copy to clipboard">
                                <svg class="bi" aria-hidden="true">
                                    <use xlink:href="#clipboard"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="highlight">
                        <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="nv">$colors</span><span class="o">:</span> <span class="p">(</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"blue"</span><span class="o">:</span>       <span class="nv">$blue</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"indigo"</span><span class="o">:</span>     <span class="nv">$indigo</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"purple"</span><span class="o">:</span>     <span class="nv">$purple</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"pink"</span><span class="o">:</span>       <span class="nv">$pink</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"red"</span><span class="o">:</span>        <span class="nv">$red</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"orange"</span><span class="o">:</span>     <span class="nv">$orange</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"yellow"</span><span class="o">:</span>     <span class="nv">$yellow</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"green"</span><span class="o">:</span>      <span class="nv">$green</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"teal"</span><span class="o">:</span>       <span class="nv">$teal</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"cyan"</span><span class="o">:</span>       <span class="nv">$cyan</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"black"</span><span class="o">:</span>      <span class="nv">$black</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"white"</span><span class="o">:</span>      <span class="nv">$white</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"gray"</span><span class="o">:</span>       <span class="nv">$gray-600</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"gray-dark"</span><span class="o">:</span>  <span class="nv">$gray-800</span>
</span></span><span class="line"><span class="cl"><span class="p">);</span>
</span></span></code></pre>
                    </div>
                </div>
                <p>맵에서 값을 추가, 삭제, 수정하여 다른 많은 컴포넌트에서의 값을 사용하는 방법을 업데이트합니다. 안타깝게도 현시점에서는 <em>모든</em> 컴포넌트가 이 Sass 맵을 이용하고
                    있는 것은 아닙니다. 추후 업데이트 시, 이 점을 개선하도록 노력하겠습니다. 그때까지는 Sass 맵과 <code>${color}</code> 변수를 이용해 주세요.</p>
                <h3 id="예시">예시 <a class="anchor-link" href="#%ec%98%88%ec%8b%9c"
                        aria-label="Link to this section: 예시"></a></h3>
                <p>Sass에서 이를 사용하는 방법입니다:</p>
                <div class="bd-code-snippet">
                    <div class="bd-clipboard"> <button type="button" class="btn-clipboard"> <svg class="bi" role="img"
                                aria-label="Copy">
                                <use xlink:href="#clipboard"></use>
                            </svg> </button> </div>
                    <div class="highlight">
                        <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="nc">.alpha</span> <span class="p">{</span> <span class="na">color</span><span class="o">:</span> <span class="nv">$purple</span><span class="p">;</span> <span class="p">}</span>
</span></span><span class="line"><span class="cl"><span class="nc">.beta</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">  <span class="na">color</span><span class="o">:</span> <span class="nv">$yellow-300</span><span class="p">;</span>
</span></span><span class="line"><span class="cl">  <span class="na">background-color</span><span class="o">:</span> <span class="nv">$indigo-900</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="p">}</span>
</span></span></code></pre>
                    </div>
                </div>
                <p><a href="/docs/5.3/utilities/colors/">색상</a> 및 <a href="/docs/5.3/utilities/background/">배경</a> 유틸리티
                    클래스는 <code>500</code> 색상 값을 사용하여 <code>color</code> 및 <code>background-color</code>를 설정하는 데 사용할 수도
                    있습니다.</p>
                <h2 id="유틸리티-생성하기">유틸리티 생성하기 <a class="anchor-link"
                        href="#%ec%9c%a0%ed%8b%b8%eb%a6%ac%ed%8b%b0-%ec%83%9d%ec%84%b1%ed%95%98%ea%b8%b0"
                        aria-label="Link to this section: 유틸리티 생성하기"></a></h2>
                <small
                    class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">v5.1.0에서
                    추가됨</small>

                <p>Bootstrap에는 모든 색상 변수에 대한 <code>color</code> 및 <code>background-color</code> 유틸리티가 포함되어 있지 않지만 <a
                        href="/docs/5.3/utilities/api/">유틸리티 API</a> 및 확장된 v5.1.0에 Sass 맵이 추가되어 있습니다.</p>
                <ol>
                    <li>시작하려면 함수, 변수, 믹스인, 유틸리티를 가져왔는지 확인하세요.</li>
                    <li><code>map-merge-multiple()</code> 함수를 사용하여 여러 Sass 맵을 새 맵에서 빠르게 병합하세요.</li>
                    <li>이 새로운 결합 맵을 병합하여 <code>{color}-{level}</code> 클래스 이름을 가진 유틸리티를 확장하세요.</li>
                </ol>
                <p>다음은 위의 단계를 사용하여 텍스트 색상 유틸리티 (예: <code>.text-purple-500</code>)를 생성하는 예입니다.</p>
                <div class="bd-code-snippet">
                    <div class="bd-clipboard"> <button type="button" class="btn-clipboard"> <svg class="bi" role="img"
                                aria-label="Copy">
                                <use xlink:href="#clipboard"></use>
                            </svg> </button> </div>
                    <div class="highlight">
                        <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/functions"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/variables"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/variables-dark"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/maps"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/mixins"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/utilities"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="nv">$all-colors</span><span class="o">:</span> <span class="nf">map-merge-multiple</span><span class="p">(</span><span class="nv">$blues</span><span class="o">,</span> <span class="nv">$indigos</span><span class="o">,</span> <span class="nv">$purples</span><span class="o">,</span> <span class="nv">$pinks</span><span class="o">,</span> <span class="nv">$reds</span><span class="o">,</span> <span class="nv">$oranges</span><span class="o">,</span> <span class="nv">$yellows</span><span class="o">,</span> <span class="nv">$greens</span><span class="o">,</span> <span class="nv">$teals</span><span class="o">,</span> <span class="nv">$cyans</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="nv">$utilities</span><span class="o">:</span> <span class="nf">map-merge</span><span class="p">(</span>
</span></span><span class="line"><span class="cl">  <span class="nv">$utilities</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="p">(</span>
</span></span><span class="line"><span class="cl">    <span class="s2">"color"</span><span class="o">:</span> <span class="nf">map-merge</span><span class="p">(</span>
</span></span><span class="line"><span class="cl">      <span class="nf">map-get</span><span class="p">(</span><span class="nv">$utilities</span><span class="o">,</span> <span class="s2">"color"</span><span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">      <span class="p">(</span>
</span></span><span class="line"><span class="cl">        <span class="na">values</span><span class="o">:</span> <span class="nf">map-merge</span><span class="p">(</span>
</span></span><span class="line"><span class="cl">          <span class="nf">map-get</span><span class="p">(</span><span class="nf">map-get</span><span class="p">(</span><span class="nv">$utilities</span><span class="o">,</span> <span class="s2">"color"</span><span class="p">)</span><span class="o">,</span> <span class="s2">"values"</span><span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">          <span class="p">(</span>
</span></span><span class="line"><span class="cl">            <span class="nv">$all-colors</span>
</span></span><span class="line"><span class="cl">          <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">        <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">      <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">    <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="p">)</span>
</span></span><span class="line"><span class="cl"><span class="p">);</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/utilities/api"</span><span class="p">;</span>
</span></span></code></pre>
                    </div>
                </div>
                <p>이렇게 하면 모든 색상과 레벨에 대해 새로운 <code>.text-{color}-{level}</code> 유틸리티가 생성됩니다. 다른 유틸리티 및 속성에 대해서도 동일한 작업을
                    수행할 수 있습니다.</p>

            </div>
        </main>
    </x-www-layout2>
</x-www-app>