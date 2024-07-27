<div>
    {{-- 목록화면 --}}
    @includeIf($viewList)


    <!-- 팝업 데이터 수정창 -->
    @if ($popupForm)
    <x-wire-dialog-modal wire:model="popupForm" maxWidth="3xl">
        <x-slot name="title">
            @if ($edit_id)
            <x-flex-between>
                <div>{{ __('수정') }}</div>
                <div>
                    <button type="button" class="btn btn-primary btn-sm"
                        wire:click="submenu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                        <span>
                            하위메뉴
                        </span>
                    </button>
                </div>
            </x-flex-between>

            @else
                @if($setup)
                위젯설정
                @else
                {{ __('신규 입력') }}
                @endif
            @endif
        </x-slot>

        <x-slot name="content">
            @if($setup)
                @includeIf("jiny-widgets::widgets.form")
            @else
                @includeIf($viewForm)
            @endif
        </x-slot>

        <x-slot name="footer">
            @if ($edit_id)
            {{-- 수정폼--}}
            <x-flex-between>
                <div> {{-- 2단계 삭제 --}}
                    @if($popupDelete)
                    <span class="text-red-600">정말로 삭제를 진행할까요?</span>
                    <button type="button" class="btn btn-danger" wire:click="deleteConfirm">삭제</button>
                    @else
                    <button type="button" class="btn btn-warning" wire:click="delete">삭제</button>
                    @endif
                </div>
                <div> {{-- right --}}
                    <button type="button" class="btn btn-secondary"
                        wire:click="cancel">취소</button>
                    <button type="button" class="btn btn-info"
                        wire:click="update">수정</button>
                </div>
            </x-flex-between>

            @else
            {{-- 생성폼 --}}
            <div class="flex justify-between">
                <div></div>
                <div class="text-right">
                    <button type="button" class="btn btn-secondary"
                        wire:click="cancel">취소</button>
                    <button type="button" class="btn btn-primary"
                        wire:click="store">저장</button>
                </div>
            </div>
            @endif
        </x-slot>
    </x-wire-dialog-modal>
    @endif

</div>
