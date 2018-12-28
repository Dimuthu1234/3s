@extends('layouts.main')

@section('pageicon', 'fa fa-bars')
@section('pagenameheader', 'Factory Efficiency')
@section('pagenametitle', 'factory efficiency module')

{{-- breadcrumbs goes here --}}
@section('bc1', 'You are here')
@section('bc2', 'Module')
@section('bc3', 'Factory Efficiency')



@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-4">


            <!-- tile -->
            <section class="tile transparent">


                <!-- tile header -->
                <div class="tile-header transparent">
                    <h1><strong>Process</strong> Data</h1>
                    <div class="controls">
                        <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                        <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- /tile header -->


                <!-- tile widget -->
                <div class="tile-widget color transparent-black rounded-top-corners">
                    <div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div>
                    <div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div>
                </div>
                <!-- /tile widget -->
            </section>
            <!-- /tile -->


        </div>
        <div class="col-md-4">


            <!-- tile -->
            <section class="tile transparent">


                <!-- tile header -->
                <div class="tile-header transparent">
                    <h1><strong>Analytic</strong> Chart</h1>
                    <div class="controls">
                        <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                        <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- /tile header -->


                <!-- tile widget -->
                <div class="tile-widget color transparent-black rounded-top-corners">
                    <div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div>
                    <div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div>
                </div>
                <!-- /tile widget -->
            </section>
            <!-- /tile -->


        </div>
        <div class="col-md-4">


            <!-- tile -->
            <section class="tile transparent">


                <!-- tile header -->
                <div class="tile-header transparent">
                    <h1><strong>Master</strong> Data</h1>
                    <div class="controls">
                        <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                        <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- /tile header -->


                <!-- tile widget -->
                <div class="tile-widget color transparent-black rounded-top-corners">
                    <div class="module-list">
                        <a href="{{ route('line.index') }}">Lines</a><br>
                    <span>description about line.</span>
                    </div>
                    <div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div><div class="module-list">
                        <a>Lines</a><br>
                        <span>description about line.</span>
                    </div>
                </div>
                <!-- /tile widget -->
            </section>
            <!-- /tile -->


        </div>
    </div>
    <!-- /row -->



@endsection
