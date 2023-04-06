@extends('layouts.client.index')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-4 col-12">
                        <a href="{{ route('client.project') }}">
                            <div class="card crypto-card-3 pull-up">
                                <div class="card-content">
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-2">
                                                <h1><i class="cc ICN-alt danger font-large-2" title="ICN"></i>
                                                </h1>
                                            </div>
                                            <div class="col-6 pl-2">
                                                <h2>My Projects</h2>
                                                {{-- <h6 class="text-muted"></h6> --}}
                                            </div>
                                            <div class="col-4 text-right">
                                                <span class="badge badge badge-info badge-pill float-right mr-2">
                                                    @isset($clientProjects)
                                                        {{ count($clientProjects) }}
                                                    @endisset
                                                </span>
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
                </div>
            </div>
        </div>
    </div>
@endsection
