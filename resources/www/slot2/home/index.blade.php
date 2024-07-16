<x-www-layout>
    <main class="content">

        <div class="container p-0">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profile Settings</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="container p-0">
            <!-- 로그인 회원정보 -->
            @includeIf('jiny-profile::home.status')
        </div>


        <div class="container p-0">

            <div class="row">
                <div class="col-md-4 col-xl-3">
                    @includeIf('jiny-profile::home.sidemenu')

                </div>

                <div class="col-md-8 col-xl-9">

                    {{-- <x-profile-form-address>

                    </x-profile-form-address> --}}




                    {{-- 회원 삭제 --}}
                    {{-- <x-profile-delete-user>
                        <div class="max-w-xl text-sm text-gray-600">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                        </div>
                        @livewire('profile.delete-user-form')
                    </x-profile-delete-user> --}}

                    {{-- <x-profile-update-infomation>
                        @livewire('profile.update-profile-information-form')
                    </x-profile-update-infomation> --}}

                    {{-- <x-profile-update-password>
                        @livewire('profile.update-password-form')
                    </x-profile-update-password> --}}


                </div>
            </div>

        </div>
    </main>
</x-www-layout>

