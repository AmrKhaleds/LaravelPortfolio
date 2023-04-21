@extends('layouts.admin.index')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-4 col-12">
                        <a href="{{ route('client-projects.index') }}">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ICN-alt danger font-large-2" title="ICN"></i>
                                        </h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h2>Client Projects</h2>
                                            {{-- <h6 class="text-muted"></h6> --}}
                                        </div>
                                        <div class="col-5 text-right">
                                            <span class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\ClientProject::count()}}</span>
                                            {{-- <h4>{{App\Models\Project::count()}}</h4> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <a href="{{ route('users.index') }}">
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            {{-- <i class="la la-user"></i> --}}
                                            <h1><i class="la la-user blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>Users</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <span class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\User::count() }}</span>
                                            {{-- <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-4 col-12">
                        <a href="{{ route('clients.index') }}">
                            <div class="card crypto-card-3 pull-up">
                                <div class="card-content">
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-2">
                                                <h1><i class="la la-users blue-grey lighten-1 font-large-2"></i></h1>
                                            </div>
                                            <div class="col-5 pl-2">
                                                <h4>Clients</h4>
                                            </div>
                                            <div class="col-5 text-right">
                                                <span class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\Client::count() }}</span>
                                                {{-- <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <canvas id="xrp-chartjs" class="height-75"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
            <!-- Candlestick Multi Level Control Chart -->
        </div>
    </div>
</div>
@endsection