<x-theme theme="admin.sidebar">
    <x-theme-layout>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        	<li class="breadcrumb-item active">Buttons</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Table with Buttons</h1>
                            <p>

                            </p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->

			<div class="relative">
                <div class="absolute right-0 bottom-4">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

			<div class="row">
				<div class="col-12">
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
						<div class="alert-message">
							<h4 class="alert-heading">jQuery required</h4>
							<p>
								Unlike all other components included in this template, DataTables requires jQuery as a dependency. If you want to use
								DataTables in your application, add the following script element to your HTML code. The file includes both jQuery and
								DataTables.
							</p>
							<pre class="mb-0 h6 text-danger">&lt;script src="js/datatables.js"&gt;&lt;/script&gt;</pre>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">DataTables Buttons</h5>
							<h6 class="card-subtitle text-muted">This extension provides a framework with common options that can be used with
								DataTables. See official documentation <a href="https://datatables.net/extensions/buttons/" target="_blank" rel="noopener noreferrer nofollow">here</a>.</h6>
						</div>
						<div class="card-body">
							<div id="datatables-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="flex-wrap dt-buttons btn-group"> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatables-buttons" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="datatables-buttons" type="button"><span>Print</span></button> </div></div><div class="col-sm-12 col-md-6"><div id="datatables-buttons_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatables-buttons"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatables-buttons" class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatables-buttons_info">
								<thead>
									<tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-buttons" rowspan="1" colspan="1" style="width: 84px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="datatables-buttons" rowspan="1" colspan="1" style="width: 121px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="datatables-buttons" rowspan="1" colspan="1" style="width: 62px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="datatables-buttons" rowspan="1" colspan="1" style="width: 27px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="datatables-buttons" rowspan="1" colspan="1" style="width: 63px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="datatables-buttons" rowspan="1" colspan="1" style="width: 57px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
								</thead>
								<tbody>

























































								<tr class="odd">
										<td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
									</tr><tr class="even">
										<td class="sorting_1 dtr-control">Angelica Ramos</td>
										<td>Chief Executive Officer (CEO)</td>
										<td>London</td>
										<td>47</td>
										<td>2009/10/09</td>
										<td>$1,200,000</td>
									</tr><tr class="odd">
										<td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>66</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
									</tr><tr class="even">
										<td class="sorting_1 dtr-control">Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>41</td>
										<td>2012/10/13</td>
										<td>$132,000</td>
									</tr><tr class="odd">
										<td class="sorting_1 dtr-control">Brenden Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>28</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
									</tr><tr class="even">
										<td class="dtr-control sorting_1" tabindex="0">Brielle Williamson</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
									</tr><tr class="odd">
										<td class="sorting_1 dtr-control">Bruno Nash</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>38</td>
										<td>2011/05/03</td>
										<td>$163,500</td>
									</tr><tr class="even">
										<td class="sorting_1 dtr-control">Caesar Vance</td>
										<td>Pre-Sales Support</td>
										<td>New York</td>
										<td>21</td>
										<td>2011/12/12</td>
										<td>$106,450</td>
									</tr><tr class="odd">
										<td class="sorting_1 dtr-control">Cara Stevens</td>
										<td>Sales Assistant</td>
										<td>New York</td>
										<td>46</td>
										<td>2011/12/06</td>
										<td>$145,600</td>
									</tr><tr class="even">
										<td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
									</tr></tbody>
							</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatables-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatables-buttons_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatables-buttons_previous"><a href="#" aria-controls="datatables-buttons" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatables-buttons" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-buttons" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-buttons" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-buttons" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-buttons" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-buttons" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatables-buttons_next"><a href="#" aria-controls="datatables-buttons" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
						</div>
					</div>
				</div>
			</div>

    </x-theme-layout>
</x-theme>
