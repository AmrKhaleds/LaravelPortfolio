@extends('layouts.admin.index')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ICN-alt danger font-large-2" title="ICN"></i>
                                    </h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h2>Projects</h2>
                                        {{-- <h6 class="text-muted"></h6> --}}
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Project::count()}}</span>
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
                </div>
                {{-- <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>ETH</h4>
                                        <h6 class="text-muted">Ethereum</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$944</h4>
                                        <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6>
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
                </div>
                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>XRP</h4>
                                        <h6 class="text-muted">Balance</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$1.2</h4>
                                        <h6 class="danger">20% <i class="la la-arrow-down"></i></h6>
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
                </div> --}}
            </div>
            <!-- Candlestick Multi Level Control Chart -->
        </div>
    </div>
</div>
@endsection