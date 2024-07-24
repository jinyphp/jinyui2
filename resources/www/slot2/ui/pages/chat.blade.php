<x-www-uidemo>
            <!-- start page title -->
            <x-row>
                <x-col-12>
                    <div class="page-title-box">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Chat</li>
                        </ol>
                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Messages</h1>
                        </div>
						<p></p>
                    </div>
                </x-col-12>
            </x-row>
            <!-- end page title -->

            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

            <x-row>
                <x-col-12>
                    <x-card>
                        <x-row class="g-0">
                            <x-col class="col-12 col-lg-5 col-xl-3 border-end">
                                {{-- 검색--}}
                                <div class="px-4 d-none d-md-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <input type="text" class="form-control my-3" placeholder="Search...">
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $members = '[
                                        {"image":"/img/avatars/avatar-5.jpg","name":"Vanessa Tucker","status":"Online"}
                                    ]';
                                @endphp
                                @foreach (json_decode($members, true) as $item)
                                    <a href="#" class="list-group-item list-group-item-action border-0">
                                        <div class="badge bg-success float-end">5</div>
                                        <div class="d-flex align-items-start">
                                            <img src="{{$item['image']}}" class="rounded-circle me-1" alt="Vanessa Tucker" width="40" height="40">
                                            <div class="flex-grow-1 ms-3">
                                                {{$item['name']}}
                                                <div class="small"><span class="fas fa-circle chat-online"></span> {{$item['status']}}</div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach


                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="badge bg-success float-end">2</div>
                                    <div class="d-flex align-items-start">
                                        <img src="/img/avatars/avatar-2.jpg" class="rounded-circle me-1" alt="William Harris" width="40" height="40">
                                        <div class="flex-grow-1 ms-3">
                                            William Harris
                                            <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex align-items-start">
                                        <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="flex-grow-1 ms-3">
                                            Sharon Lessman
                                            <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex align-items-start">
                                        <img src="/img/avatars/avatar-4.jpg" class="rounded-circle me-1" alt="Christina Mason" width="40" height="40">
                                        <div class="flex-grow-1 ms-3">
                                            Christina Mason
                                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex align-items-start">
                                        <img src="/img/avatars/avatar-5.jpg" class="rounded-circle me-1" alt="Fiona Green" width="40" height="40">
                                        <div class="flex-grow-1 ms-3">
                                            Fiona Green
                                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex align-items-start">
                                        <img src="/img/avatars/avatar-2.jpg" class="rounded-circle me-1" alt="Doris Wilder" width="40" height="40">
                                        <div class="flex-grow-1 ms-3">
                                            Doris Wilder
                                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex align-items-start">
                                        <img src="/img/avatars/avatar-4.jpg" class="rounded-circle me-1" alt="Haley Kennedy" width="40" height="40">
                                        <div class="flex-grow-1 ms-3">
                                            Haley Kennedy
                                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex align-items-start">
                                        <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Jennifer Chang" width="40" height="40">
                                        <div class="flex-grow-1 ms-3">
                                            Jennifer Chang
                                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                        </div>
                                    </div>
                                </a>


                                <hr class="d-block d-lg-none mt-1 mb-0">
                            </x-col>

                            <x-col class="col-12 col-lg-7 col-xl-9">
                                <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                    <div class="d-flex align-items-center py-1">
                                        <div class="position-relative">
                                            <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                        </div>
                                        <div class="flex-grow-1 ps-3">
                                            <strong>Sharon Lessman</strong>
                                            <div class="text-muted small"><em>Typing...</em></div>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-lg me-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
                                            <button class="btn btn-info btn-lg me-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
                                            <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative">
                                    <div class="chat-messages p-4">

                                        {{-- 메시지 --}}
                                        <div class="chat-message-right pb-4">
                                            <div>
                                                <img src="/img/avatars/avatar.jpg" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                            </div>
                                        </div>


                                        <div class="chat-message-left pb-4">
                                            <div>
                                                <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="/img/avatars/avatar.jpg" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                Cum ea graeci tractatos.
                                            </div>
                                        </div>

                                        <div class="chat-message-left pb-4">
                                            <div>
                                                <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit.
                                                Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                            </div>
                                        </div>

                                        <div class="chat-message-left pb-4">
                                            <div>
                                                <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="/img/avatars/avatar.jpg" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                            </div>
                                        </div>

                                        <div class="chat-message-left pb-4">
                                            <div>
                                                <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:39 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="/img/avatars/avatar.jpg" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:40 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                Cum ea graeci tractatos.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="/img/avatars/avatar.jpg" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:41 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                Morbi finibus, lorem id placerat ullamcorper, nunc enim ultrices massa, id dignissim metus urna eget purus.
                                            </div>
                                        </div>

                                        <div class="chat-message-left pb-4">
                                            <div>
                                                <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:42 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit.
                                                Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                            </div>
                                        </div>

                                        <div class="chat-message-right mb-4">
                                            <div>
                                                <img src="/img/avatars/avatar.jpg" class="rounded-circle me-1" alt="Chris Wood" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                            </div>
                                        </div>

                                        <div class="chat-message-left pb-4">
                                            <div>
                                                <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Sharon Lessman" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="flex-grow-0 py-3 px-4 border-top">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type your message">
                                        <button class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </x-col>

                        </x-row>


                    </x-card>
                </x-col-12>
            </x-row>



		</x-container-fluid>
	</x-main-content>
</x-theme>
