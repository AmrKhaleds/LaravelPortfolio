@extends('layouts.client.index')
@section('title', 'Dashboard')
@section('page_level_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/pages/lobilist/lobilist.css') }}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-danger pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-rocket text-white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-white text-right">
                                            <h3 class="text-white">156</h3>
                                            <span>My Projects</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-danger pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-pie-chart text-white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-white text-right">
                                            <h3 class="text-white">64.89 %</h3>
                                            <span>Storage Usage</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card bg-gradient-directional-danger pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-speech text-white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-white text-right">
                                            <h3 class="text-white">156</h3>
                                            <span>Customer Support Tickets</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection