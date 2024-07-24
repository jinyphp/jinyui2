<x-www-uidemo>
            <!-- start page title -->
            <x-row>
                <x-col-12>
                    <div class="page-title-box">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Component</a></li>
                            <li class="breadcrumb-item active">Nav</li>
                        </ol>

						<div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Invoice</h1>
                        </div>
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
                <div class="col-12">
                    <x-card>
                        <x-card-body class="m-sm-3 m-md-5">

                                <div class="mb-4">
                                    Hello <strong>Charles Hall</strong>,
                                    <br>
                                    This is the receipt for a payment of <strong>$268.00</strong> (USD) you made to UIKit Demo.
                                </div>

                                <x-row>
                                    <div class="col-md-6">
                                        <div class="text-muted">Payment No.</div>
                                        <strong>741037024</strong>
                                    </div>
                                    <div class="col-md-6 text-md-end">
                                        <div class="text-muted">Payment Date</div>
                                        <strong>October 2, 2018 - 03:45 pm</strong>
                                    </div>
                                </x-row>


                                <hr class="my-4">

                                <x-row class="mb-4">
                                    <div class="col-md-6">
                                        <div class="text-muted">Client</div>
                                        <strong>
                                            Jiny Lee
                                        </strong>
                                        <p>
                                            4183 Avenue <br>
                                            Seodaemungu Seoul <br>
                                            11001 <br>
                                            Korea <br>
                                            <a href="#">
                                                infohojin @gmail.com
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-md-end">
                                        <div class="text-muted">Payment To</div>
                                        <strong>
                                            JinyUIKit Demo
                                        </strong>
                                        <p>
                                            354 Roy Alley <br>
                                            Denver <br>
                                            80202 <br>
                                            Korea <br>
                                            <a href="#">
                                                info@jinyuikit.dev
                                            </a>
                                        </p>
                                    </div>
                                </x-row>


                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th class="text-end">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AdminKit Demo Theme Customization</td>
                                            <td>2</td>
                                            <td class="text-end">$150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Monthly Subscription </td>
                                            <td>3</td>
                                            <td class="text-end">$25.00</td>
                                        </tr>
                                        <tr>
                                            <td>Additional Service</td>
                                            <td>1</td>
                                            <td class="text-end">$100.00</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Subtotal </th>
                                            <th class="text-end">$275.00</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Shipping </th>
                                            <th class="text-end">$8.00</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Discount </th>
                                            <th class="text-end">5%</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Total </th>
                                            <th class="text-end">$268.85</th>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="text-center">
                                    <p class="text-sm">
                                        <strong>Extra note:</strong>
                                        Please send all items at the same time to the shipping address.
                                        Thanks in advance.
                                    </p>

                                    <a href="#" class="btn btn-primary">
                                        Print this receipt
                                    </a>
                                </div>

                        </x-card-body>
                    </x-card>

                </div>
            </x-row>

        </x-www-uidemo>
