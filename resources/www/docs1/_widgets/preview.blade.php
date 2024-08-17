@php
    $uid = uniqid(mt_rand(), true);
    // 소수점(.)을 빈 문자열로 대체하여 제거
    $uid = str_replace('.', '', $uid);
@endphp
<div class="mx-4 my-4 md:mx-48">

    {{-- 설명 파트 --}}
    <div>
        @if(isset($rows['title']))
            <h3 class="text-3xl font-bold mb-4">
                {!! $rows['title'] !!}
            </h3>
        @endif
        @if(isset($rows['description']))
            <p style="white-space: pre-line;" class="text-lg">{!! $rows['description'] !!}</p>
        @endif
    </div>

    {{-- preview --}}
    <div class="card-body position-relative z-2">
        <x-flex-between>
            <div>

            </div>
            <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active"
                        data-bs-toggle="tab" data-bs-target="#preview-1-{{$uid}}"
                        role="tab" aria-controls="preview-1-{{$uid}}" aria-selected="true">
                        <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                        Preview
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link"
                        data-bs-toggle="tab" data-bs-target="#html-1-{{$uid}}"
                        role="tab" aria-controls="html-1-{{$uid}}"
                        aria-selected="false" tabindex="-1">
                        <i class="ci-code opacity-75 ms-n1 me-2"></i>
                        HTML
                    </button>
                </li>
            </ul>
        </x-flex-between>

        <div class="tab-content">
            <div id="preview-1-{{$uid}}"
                class="tab-pane pt-4 pb-2 mt-2 fade show active"
                role="tabpanel">
                {{-- preview --}}
                @if(isset($rows['code']))
                {!! $rows['code'] !!}
                @endif

            </div>
            <div id="html-1-{{$uid}}"
                class="tab-pane pt-4 fade"
                role="tabpanel">
                {{-- code --}}
                <div class="position-relative">
                @if(isset($rows['code']))
                    <pre>
                        <code>
                            {!! code_view($rows['code']) !!}
                        </code>
                    </pre>
                @endif
                </div>
            </div>
        </div>
    </div>


</div>
