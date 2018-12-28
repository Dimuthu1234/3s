@extends('layouts.main')

@section('pageicon', 'fa fa-bars')
@section('pagenameheader', 'Lines')
@section('pagenametitle', 'this is line index page')

{{-- breadcrumbs goes here --}}
@section('bc1', 'You are here')
@section('bc2', 'Line')
@section('bc3', 'Index')



@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <section class="tile transparent">


                <!-- tile header -->
                <div class="tile-header transparent">
                    <h1><strong>Lines</strong> Table </h1>
                    <span class="note">including: <span class="italic">all lines data here</span></span>
                    <div class="pull-right add-btn"><a href="{{ route('line.create') }}">Add Line</a></div>
                    <div class="controls">
                        <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                        <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- /tile header -->

                <!-- tile body -->
                <div class="tile-body color transparent-black rounded-corners">

                    <div class="table-responsive">
                        <div id="basicDataTable_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="basicDataTable_length" class="dataTables_length"><label><select size="1"
                                                                                                             name="basicDataTable_length"
                                                                                                             aria-controls="basicDataTable"
                                                                                                             class="form-control"
                                                                                                             style="display: none;">
                                                <option value="10" selected="selected">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <div
                                                class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                                style="width: 75px;" title=""><a class="chosen-single"
                                                                                 tabindex="-1"><span>10</span>
                                                    <div><b></b></div>
                                                </a>
                                                <div class="chosen-drop">
                                                    <div class="chosen-search"><input type="text" autocomplete="off"
                                                                                      readonly=""></div>
                                                    <ul class="chosen-results"></ul>
                                                </div>
                                            </div>
                                            records per page</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="dataTables_filter" id="basicDataTable_filter"><label><input type="text"
                                                                                                            aria-controls="basicDataTable"
                                                                                                            placeholder="Search"
                                                                                                            class="form-control"></label>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-datatable table-custom dataTable" id="basicDataTable"
                                   aria-describedby="basicDataTable_info">
                                <thead>
                                <tr role="row">
                                    <th class="sort-alpha sorting_asc" role="columnheader" tabindex="0"
                                        aria-controls="basicDataTable" rowspan="1" colspan="1"
                                        style="width: 254px; cursor: pointer;" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">Rendering
                                        engine
                                    </th>
                                    <th class="sort-alpha sorting" role="columnheader" tabindex="0"
                                        aria-controls="basicDataTable" rowspan="1" colspan="1"
                                        style="width: 290px; cursor: pointer;"
                                        aria-label="Browser: activate to sort column ascending">Browser
                                    </th>
                                    <th class="sort-amount sorting" role="columnheader" tabindex="0"
                                        aria-controls="basicDataTable" rowspan="1" colspan="1"
                                        style="width: 266px; cursor: pointer;"
                                        aria-label="Platform(s): activate to sort column ascending">Platform(s)
                                    </th>
                                    <th class="sort-numeric sorting" role="columnheader" tabindex="0"
                                        aria-controls="basicDataTable" rowspan="1" colspan="1"
                                        style="width: 221px; cursor: pointer;"
                                        aria-label="Engine version: activate to sort column ascending">Engine version
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="basicDataTable"
                                        rowspan="1" colspan="1" style="width: 154px;"
                                        aria-label="CSS grade: activate to sort column ascending">CSS grade
                                    </th>
                                </tr>
                                </thead>

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.0</td>
                                    <td class="">Win 95+ / OSX.1+</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA even">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.1</td>
                                    <td class="">Win 95+ / OSX.1+</td>
                                    <td class="text-center">1.1</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.2</td>
                                    <td class="">Win 95+ / OSX.1+</td>
                                    <td class="text-center">1.2</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA even">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.3</td>
                                    <td class="">Win 95+ / OSX.1+</td>
                                    <td class="text-center">1.3</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.4</td>
                                    <td class="">Win 95+ / OSX.1+</td>
                                    <td class="text-center">1.4</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA even">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.5</td>
                                    <td class="">Win 95+ / OSX.1+</td>
                                    <td class="text-center">1.5</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.6</td>
                                    <td class="">Win 95+ / OSX.1+</td>
                                    <td class="text-center">1.6</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA even">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Netscape 7.2</td>
                                    <td class="">Win 95+ / Mac OS 8.6-9.2</td>
                                    <td class="text-center">1.7</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Mozilla 1.7</td>
                                    <td class="">Win 98+ / OSX.1+</td>
                                    <td class="text-center">1.7</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                <tr class="gradeA even">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class="">Firefox 1.0</td>
                                    <td class="">Win 98+ / OSX.2+</td>
                                    <td class="text-center">1.7</td>
                                    <td class="text-center ">A</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-4 sm-center">
                                    <div class="dataTables_info" id="basicDataTable_info">Showing 1 to 10 of 57
                                        entries
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-right sm-center">
                                    <div class="dataTables_paginate paging_bootstrap paging_custombootstrap">
                                        <ul class="pagination">
                                            <li class="prev disabled"><a href="#">Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="#" id="deleteRow" class="btn btn-red btn-xs delete-row">Delete selected row</a>
                        </div>
                    </div>

                </div>
                <!-- /tile body -->


            </section>

        </div>

    </div>
    <!-- /row -->



@endsection
