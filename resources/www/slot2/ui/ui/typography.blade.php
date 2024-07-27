<x-www-uidemo>
            <!-- start page title -->
            <x-row >
                <x-col class="col-8">
                    <div class="page-title-box">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                            <li class="breadcrumb-item active">Typography</li>
                        </ol>

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Typography</h1>
                            <p></p>
                        </div>
                    </div>
                </x-col>
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
                <x-col-6>
                    <!-- -->
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Headings</h5>
                            <h6 class="card-subtitle text-muted">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are
                                available.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}

                                    <h1>This is a heading h1</h1>
                                    <p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                                        adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                        ante tincidunt tempus. Donec vitae sapien ut libero.</p>
                                    <h2>This is a heading h2</h2>
                                    <p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                                        adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
                                    <h3>This is a heading h3</h3>
                                    <p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus condimentum rhoncus, sem quam libero, sit amet adipiscing sem
                                        neque sed ipsum. Nam quam nunc, vel.</p>
                                    <h4>This is a heading h4</h4>
                                    <p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus condimentum rhoncus, sem quam libero, sit amet adipiscing sem
                                        neque sed ipsum. Nam quam nunc, vel.</p>
                                    <h5>This is a heading h5</h5>
                                    <p class="text-muted">Sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
                                    <h6>This is a heading h6</h6>
                                    <p class="text-muted">Sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                   ...
                                </x-navtab-item>
                            </x-navtab>
                        </x-card-body>
                    </x-card>

                    <!-- -->
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Coloured text</h5>
                            <h6 class="card-subtitle text-muted">Contextual text classes.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <p class="text-primary">This line of text contains the text-primary class.</p>
                                    <p class="text-secondary">This line of text contains the text-secondary class.</p>
                                    <p class="text-success">This line of text contains the text-success class.</p>
                                    <p class="text-danger">This line of text contains the text-danger class.</p>
                                    <p class="text-warning">This line of text contains the text-warning class.</p>
                                    <p class="text-info">This line of text contains the text-info class.</p>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>
                        </x-card-body>
                    </x-card>

                </x-col-6>
                <x-col-6>

                    <!-- -->
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Inline text</h5>
                            <h6 class="card-subtitle text-muted">Styling for common inline HTML5 elements.</h6>
                        </x-card-header>
                        <x-card-body>
                            <p>You can use the mark-tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text can be treated as deleted text.</del></p>
                            <p><ins>This line of text can be treated as an addition to the document.</ins></p>
                            <p><strong>Bold text using the strong-tag</strong></p>
                            <p><em>Italicized text using the em-tag</em></p>
                        </x-card-body>
                    </x-card>

                    <!-- -->
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Blockquotes</h5>
                            <h6 class="card-subtitle text-muted">For quoting blocks of content from another source within your document.</h6>
                        </x-card-header>
                        <x-card-body>
                            <blockquote>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.
                                </p>
                                <footer>
                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                </footer>
                            </blockquote>
                            <p class="text-muted m-b-15 m-t-20 font-13">
                                Add <code>.blockquote-reverse</code>
                                for a blockquote with right-aligned content.
                            </p>
                            <blockquote class="blockquote-reverse m-b-0">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.
                                </p>
                                <footer>
                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                </footer>
                            </blockquote>
                        </x-card-body>
                    </x-card>

                     <!-- -->
                     <x-card>
                        <x-card-header>
                            <h5 class="card-title">List unordered</h5>
                            <h6 class="card-subtitle text-muted">The unordered list items will are marked with bullets.</h6>
                        </x-card-header>
                        <x-card-body>
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                </li>
                                <li>
                                    Phasellus iaculis neque
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>
                        </x-card-body>
                    </x-card>

                    <!-- -->
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">List ordered</h5>
                            <h6 class="card-subtitle text-muted">The ordered list items will are marked with numbers.</h6>
                        </x-card-header>
                        <x-card-body>
                            <ol>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                </li>
                                <li>
                                    Phasellus iaculis neque
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ol>
                        </x-card-body>
                    </x-card>



                </x-col-6>
            </x-row>

        </x-www-uidemo>
