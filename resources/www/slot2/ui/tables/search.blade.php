<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        	<li class="breadcrumb-item active">Search</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Column Search</h1>
                            <p>

                            </p>
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
                            <pre class="h6 text-danger mb-0">&lt;script src="js/datatables.js"&gt;&lt;/script&gt;</pre>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">DataTables with Column Search by Text Inputs</h5>
                            <h6 class="card-subtitle text-muted">The searching functionality provided by DataTables is useful for quickly search through
                                the information in the table. See official documentation <a href="https://datatables.net/examples/api/multi_filter.html" target="_blank" rel="noopener noreferrer nofollow">here</a>.</h6>
                        </div>
                        <div class="card-body">
                            <div id="datatables-column-search-text-inputs_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatables-column-search-text-inputs_length"><label>Show <select name="datatables-column-search-text-inputs_length" aria-controls="datatables-column-search-text-inputs" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatables-column-search-text-inputs_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatables-column-search-text-inputs"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatables-column-search-text-inputs" class="table table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="datatables-column-search-text-inputs_info">
                                <thead>
                                    <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 72px;">Name</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 75px;">Position</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 66px;">Office</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Age</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 76px;">Start date</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-text-inputs" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 76px;">Salary</th></tr>
                                </thead>
                                <tbody>

























































                                <tr class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Name"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Position"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Office"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Age"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Start date"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Salary"></th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatables-column-search-text-inputs_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatables-column-search-text-inputs_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatables-column-search-text-inputs_previous"><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatables-column-search-text-inputs_next"><a href="#" aria-controls="datatables-column-search-text-inputs" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">DataTables with Column Search by Select Inputs</h5>
                            <h6 class="card-subtitle text-muted">The searching functionality provided by DataTables is useful for quickly search through
                                the information in the table. See official documentation <a href="https://datatables.net/examples/api/multi_filter_select.html" target="_blank" rel="noopener noreferrer nofollow">here</a>.</h6>
                        </div>
                        <div class="card-body">
                            <div id="datatables-column-search-select-inputs_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatables-column-search-select-inputs_length"><label>Show <select name="datatables-column-search-select-inputs_length" aria-controls="datatables-column-search-select-inputs" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatables-column-search-select-inputs_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatables-column-search-select-inputs"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatables-column-search-select-inputs" class="table table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="datatables-column-search-select-inputs_info">
                                <thead>
                                    <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-column-search-select-inputs" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">Name</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-select-inputs" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 107px;">Position</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-select-inputs" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 66px;">Office</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-select-inputs" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 28px;">Age</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-select-inputs" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 69px;">Start date</th><th class="sorting" tabindex="0" aria-controls="datatables-column-search-select-inputs" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Salary</th></tr>
                                </thead>
                                <tbody>

























































                                <tr class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1"><select class="form-control"><option value=""></option><option value="Airi Satou">Airi Satou</option><option value="Angelica Ramos">Angelica Ramos</option><option value="Ashton Cox">Ashton Cox</option><option value="Bradley Greer">Bradley Greer</option><option value="Brenden Wagner">Brenden Wagner</option><option value="Brielle Williamson">Brielle Williamson</option><option value="Bruno Nash">Bruno Nash</option><option value="Caesar Vance">Caesar Vance</option><option value="Cara Stevens">Cara Stevens</option><option value="Cedric Kelly">Cedric Kelly</option><option value="Charde Marshall">Charde Marshall</option><option value="Colleen Hurst">Colleen Hurst</option><option value="Dai Rios">Dai Rios</option><option value="Donna Snider">Donna Snider</option><option value="Doris Wilder">Doris Wilder</option><option value="Finn Camacho">Finn Camacho</option><option value="Fiona Green">Fiona Green</option><option value="Garrett Winters">Garrett Winters</option><option value="Gavin Cortez">Gavin Cortez</option><option value="Gavin Joyce">Gavin Joyce</option><option value="Gloria Little">Gloria Little</option><option value="Haley Kennedy">Haley Kennedy</option><option value="Hermione Butler">Hermione Butler</option><option value="Herrod Chandler">Herrod Chandler</option><option value="Hope Fuentes">Hope Fuentes</option><option value="Howard Hatfield">Howard Hatfield</option><option value="Jackson Bradshaw">Jackson Bradshaw</option><option value="Jena Gaines">Jena Gaines</option><option value="Jenette Caldwell">Jenette Caldwell</option><option value="Jennifer Acosta">Jennifer Acosta</option><option value="Jennifer Chang">Jennifer Chang</option><option value="Jonas Alexander">Jonas Alexander</option><option value="Lael Greer">Lael Greer</option><option value="Martena Mccray">Martena Mccray</option><option value="Michael Bruce">Michael Bruce</option><option value="Michael Silva">Michael Silva</option><option value="Michelle House">Michelle House</option><option value="Olivia Liang">Olivia Liang</option><option value="Paul Byrd">Paul Byrd</option><option value="Prescott Bartlett">Prescott Bartlett</option><option value="Quinn Flynn">Quinn Flynn</option><option value="Rhona Davidson">Rhona Davidson</option><option value="Sakura Yamamoto">Sakura Yamamoto</option><option value="Serge Baldwin">Serge Baldwin</option><option value="Shad Decker">Shad Decker</option><option value="Shou Itou">Shou Itou</option><option value="Sonya Frost">Sonya Frost</option><option value="Suki Burks">Suki Burks</option><option value="Tatyana Fitzpatrick">Tatyana Fitzpatrick</option><option value="Thor Walton">Thor Walton</option><option value="Tiger Nixon">Tiger Nixon</option><option value="Timothy Mooney">Timothy Mooney</option><option value="Unity Butler">Unity Butler</option><option value="Vivian Harrell">Vivian Harrell</option><option value="Yuri Berry">Yuri Berry</option><option value="Zenaida Frank">Zenaida Frank</option><option value="Zorita Serrano">Zorita Serrano</option></select></th><th rowspan="1" colspan="1"><select class="form-control"><option value=""></option><option value="Accountant">Accountant</option><option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)</option><option value="Chief Financial Officer (CFO)">Chief Financial Officer (CFO)</option><option value="Chief Marketing Officer (CMO)">Chief Marketing Officer (CMO)</option><option value="Chief Operating Officer (COO)">Chief Operating Officer (COO)</option><option value="Customer Support">Customer Support</option><option value="Data Coordinator">Data Coordinator</option><option value="Developer">Developer</option><option value="Development Lead">Development Lead</option><option value="Director">Director</option><option value="Financial Controller">Financial Controller</option><option value="Integration Specialist">Integration Specialist</option><option value="Javascript Developer">Javascript Developer</option><option value="Junior Javascript Developer">Junior Javascript Developer</option><option value="Junior Technical Author">Junior Technical Author</option><option value="Marketing Designer">Marketing Designer</option><option value="Office Manager">Office Manager</option><option value="Personnel Lead">Personnel Lead</option><option value="Post-Sales support">Post-Sales support</option><option value="Pre-Sales Support">Pre-Sales Support</option><option value="Regional Director">Regional Director</option><option value="Regional Marketing">Regional Marketing</option><option value="Sales Assistant">Sales Assistant</option><option value="Secretary">Secretary</option><option value="Senior Javascript Developer">Senior Javascript Developer</option><option value="Senior Marketing Designer">Senior Marketing Designer</option><option value="Software Engineer">Software Engineer</option><option value="Support Engineer">Support Engineer</option><option value="Support Lead">Support Lead</option><option value="System Architect">System Architect</option><option value="Systems Administrator">Systems Administrator</option><option value="Team Leader">Team Leader</option><option value="Technical Author">Technical Author</option></select></th><th rowspan="1" colspan="1"><select class="form-control"><option value=""></option><option value="Edinburgh">Edinburgh</option><option value="London">London</option><option value="New York">New York</option><option value="San Francisco">San Francisco</option><option value="Sidney">Sidney</option><option value="Singapore">Singapore</option><option value="Tokyo">Tokyo</option></select></th><th rowspan="1" colspan="1"><select class="form-control"><option value=""></option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="33">33</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="51">51</option><option value="53">53</option><option value="55">55</option><option value="56">56</option><option value="59">59</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option></select></th><th rowspan="1" colspan="1"><select class="form-control"><option value=""></option><option value="2008/09/26">2008/09/26</option><option value="2008/10/16">2008/10/16</option><option value="2008/10/26">2008/10/26</option><option value="2008/11/13">2008/11/13</option><option value="2008/11/28">2008/11/28</option><option value="2008/12/11">2008/12/11</option><option value="2008/12/13">2008/12/13</option><option value="2008/12/16">2008/12/16</option><option value="2008/12/19">2008/12/19</option><option value="2009/01/12">2009/01/12</option><option value="2009/02/14">2009/02/14</option><option value="2009/02/27">2009/02/27</option><option value="2009/04/10">2009/04/10</option><option value="2009/06/25">2009/06/25</option><option value="2009/07/07">2009/07/07</option><option value="2009/08/19">2009/08/19</option><option value="2009/09/15">2009/09/15</option><option value="2009/10/09">2009/10/09</option><option value="2009/10/22">2009/10/22</option><option value="2009/12/09">2009/12/09</option><option value="2010/01/04">2010/01/04</option><option value="2010/02/12">2010/02/12</option><option value="2010/03/11">2010/03/11</option><option value="2010/03/17">2010/03/17</option><option value="2010/06/09">2010/06/09</option><option value="2010/07/14">2010/07/14</option><option value="2010/09/20">2010/09/20</option><option value="2010/10/14">2010/10/14</option><option value="2010/11/14">2010/11/14</option><option value="2010/12/22">2010/12/22</option><option value="2011/01/25">2011/01/25</option><option value="2011/02/03">2011/02/03</option><option value="2011/03/09">2011/03/09</option><option value="2011/03/21">2011/03/21</option><option value="2011/04/25">2011/04/25</option><option value="2011/05/03">2011/05/03</option><option value="2011/05/07">2011/05/07</option><option value="2011/06/02">2011/06/02</option><option value="2011/06/07">2011/06/07</option><option value="2011/06/27">2011/06/27</option><option value="2011/07/25">2011/07/25</option><option value="2011/08/14">2011/08/14</option><option value="2011/09/03">2011/09/03</option><option value="2011/12/06">2011/12/06</option><option value="2011/12/12">2011/12/12</option><option value="2012/03/29">2012/03/29</option><option value="2012/04/09">2012/04/09</option><option value="2012/06/01">2012/06/01</option><option value="2012/08/06">2012/08/06</option><option value="2012/09/26">2012/09/26</option><option value="2012/10/13">2012/10/13</option><option value="2012/11/27">2012/11/27</option><option value="2012/12/02">2012/12/02</option><option value="2012/12/18">2012/12/18</option><option value="2013/02/01">2013/02/01</option><option value="2013/03/03">2013/03/03</option><option value="2013/08/11">2013/08/11</option></select></th><th rowspan="1" colspan="1"><select class="form-control"><option value=""></option><option value="$1,200,000">$1,200,000</option><option value="$103,500">$103,500</option><option value="$103,600">$103,600</option><option value="$106,450">$106,450</option><option value="$109,850">$109,850</option><option value="$112,000">$112,000</option><option value="$114,500">$114,500</option><option value="$115,000">$115,000</option><option value="$125,250">$125,250</option><option value="$132,000">$132,000</option><option value="$136,200">$136,200</option><option value="$137,500">$137,500</option><option value="$138,575">$138,575</option><option value="$139,575">$139,575</option><option value="$145,000">$145,000</option><option value="$145,600">$145,600</option><option value="$162,700">$162,700</option><option value="$163,000">$163,000</option><option value="$163,500">$163,500</option><option value="$164,500">$164,500</option><option value="$170,750">$170,750</option><option value="$183,000">$183,000</option><option value="$198,500">$198,500</option><option value="$205,500">$205,500</option><option value="$206,850">$206,850</option><option value="$217,500">$217,500</option><option value="$234,500">$234,500</option><option value="$235,500">$235,500</option><option value="$237,500">$237,500</option><option value="$313,500">$313,500</option><option value="$320,800">$320,800</option><option value="$324,050">$324,050</option><option value="$327,900">$327,900</option><option value="$342,000">$342,000</option><option value="$345,000">$345,000</option><option value="$356,250">$356,250</option><option value="$357,650">$357,650</option><option value="$372,000">$372,000</option><option value="$385,750">$385,750</option><option value="$433,060">$433,060</option><option value="$452,500">$452,500</option><option value="$470,600">$470,600</option><option value="$645,750">$645,750</option><option value="$675,000">$675,000</option><option value="$725,000">$725,000</option><option value="$75,650">$75,650</option><option value="$85,600">$85,600</option><option value="$85,675">$85,675</option><option value="$850,000">$850,000</option><option value="$86,000">$86,000</option><option value="$86,500">$86,500</option><option value="$87,500">$87,500</option><option value="$90,560">$90,560</option><option value="$92,575">$92,575</option><option value="$95,400">$95,400</option><option value="$98,540">$98,540</option></select></th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatables-column-search-select-inputs_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatables-column-search-select-inputs_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatables-column-search-select-inputs_previous"><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatables-column-search-select-inputs_next"><a href="#" aria-controls="datatables-column-search-select-inputs" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>


        </x-www-uidemo>
