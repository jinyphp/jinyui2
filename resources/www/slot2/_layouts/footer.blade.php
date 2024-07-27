<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        {{ $slot }}

        {{-- <div class="row">
            <div class="col-12 col-lg-12 mx-auto">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="m-0 text-white">JinyPHP</div>

                        <div class="my-3">
                            <a class="text-white footer-icon" href="https://github.com/jinyphp" target="_blank"
                                rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" viewBox="0 0 24 24" class="ml-1 mr-2">
                                    <title>GitHub</title>
                                    <path
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12">
                                    </path>
                                </svg>
                            </a>

                            <a class="text-white footer-icon" href="#" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" viewBox="0 0 24 24" class="mr-2">
                                    <title>Twitter</title>
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z">
                                    </path>
                                </svg>
                            </a>

                            <a class="text-white footer-icon" href="https://dribbble.com/adminkit" target="_blank"
                                rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" viewBox="0 0 24 24" class="mr-2">
                                    <title>Dribbble</title>
                                    <path
                                        d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg offset-lg-1">
                        <h4 class="mb-md-3 mt-4 mt-md-0 h6 text-white">Product</h4>
                        <ul class="list-unstyled">
                            <li class="pb-1">
                                <a class="text-muted" href="#">
                                    Documentation
                                </a>
                            </li>
                            <li class="pb-1"><a class="text-muted" href="https://demo.adminkit.io/" target="_blank"
                                    rel="noopener">Live Preview</a></li>
                            <li class="pb-1"><a class="text-muted" href="/licenses/">Licenses</a></li>
                            <li class="pb-1"><a class="text-muted" href="/use-cases/">Use Cases</a></li>
                            <li class="pb-1"><a class="text-muted" href="/integrations/">Integrations</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <h4 class="mb-md-3 mt-4 mt-md-0 h6 text-white">About</h4>
                        <ul class="list-unstyled mb-0 mb-lg-3">
                            <li class="pb-1"><a class="text-muted" href="/pricing/">Pricing</a></li>
                            <li class="pb-1"><a class="text-muted" href="/support/">Support</a></li>
                            <li class="pb-1"><a class="text-muted" href="https://store.adminkit.io/affiliates"
                                    target="_blank">Affiliates<span
                                        class="badge bg-primary text-muted align-middle ml-1">Earn 50%</span></a></li>
                        </ul>
                        <h4 class="d-none d-lg-block mb-md-3 mt-4 mt-md-0 h6 text-muted">Resources</h4>
                        <ul class="list-unstyled">
                            <li class="pb-1"><a class="text-muted" href="/snippets/">Snippets</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <h4 class="mb-md-3 mt-4 mt-md-0 h6 text-white">Integrations</h4>
                        <ul class="list-unstyled">
                            <li class="pb-1"><a class="text-muted"
                                    href="/integrations/webpack-admin-template/">Webpack</a></li>
                            <li class="pb-1"><a class="text-muted" href="/integrations/sass-admin-template/">Sass</a>
                            </li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/integrations/babel-admin-template/">Babel</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/integrations/fullcalendar-admin-template/">FullCalendar</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/integrations/datatables-admin-template/">DataTables</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/integrations/chart-js-admin-template/">Chart.js</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/integrations/apexcharts-admin-template/">ApexCharts</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h4 class="mb-md-3 mt-4 mt-md-0 h6 text-white">Use cases</h4>
                        <ul class="list-unstyled">
                            <li class="pb-1"><a class="text-muted" href="/use-cases/saas-admin-template/">SaaS
                                    Admin Template</a></li>
                            <li class="pb-1"><a class="text-muted" href="/use-cases/crypto-admin-template/">Crypto
                                    Admin Template</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/use-cases/ecommerce-admin-template/">E-commerce Admin Template</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/use-cases/analytics-admin-template/">Analytics Admin Template</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/use-cases/vanilla-js-admin-template/">Vanilla JS Admin Template</a></li>
                            <li class="pb-1"><a class="text-muted"
                                    href="/use-cases/bootstrap-dark-admin-template/">Dark Mode Admin Template</a></li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <hr class="footer-divider"> --}}

                {{-- <div class="row">
                    <div class="col-12 col-sm-6">
                        <span class="d-block text-muted">© 2024 JinyPHP</span>
                    </div>
                    <div class="col-12 col-sm-6 text-md-right">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-3">
                                <a class="text-muted" href="/terms/">Terms &amp;
                                    Conditions</a>
                            </li>
                            <li class="list-inline-item mr-3">
                                <a class="text-muted" href="/privacy/">Privacy
                                    Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="/support/">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0 text-white">Copyright &copy; JinyPHP 2024</div>
                    </div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>


            </div>
        </div>





</footer>
