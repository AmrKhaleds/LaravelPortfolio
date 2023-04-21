@extends('layouts.admin.index')
@section('title', 'Client Projects')
@section('vendor_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> @yield('title') </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Main</a>
                                </li>
                                <li class="breadcrumb-item active"> @yield('title')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <a class="btn btn-outline-primary mb-1" href="{{ route('client-projects.create') }}">Add New Project</a>
                <!-- DOM - jQuery events table -->
                <section id="file-export">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Clients</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered file-export">
                                            <thead>
                                                <tr>
                                                    <th>Project Name</th>
                                                    <th>Client</th>
                                                    <th>Start At</th>
                                                    <th>End At</th>
                                                    <th>Progress</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($clientProjects)
                                                    @foreach ($clientProjects as $project)
                                                        <tr>
                                                            <td>{{ $project->project_name }}</td>
                                                            <td>MR. {{ $project->client->name }}</td>
                                                            <td>{{ $project->start_at }}</td>
                                                            <td>{{ $project->end_at }}</td>
                                                            <td>
                                                                @if($project->progress == 'complete')
                                                                <span class="badge badge badge-pill badge-success badge-glow  mr-2">{{$project->progress}}</span>
                                                            @elseif($project->progress == 'on progress')
                                                                <span class="badge badge badge-pill badge-info badge-glow mr-2">{{$project->progress}}</span>
                                                            @else
                                                                <span class="badge badge badge-pill badge-danger badge-glow mr-2">{{$project->progress}}</span>
                                                            @endif
                                                            </td>
                                                            <td>
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <a href="{{ route('client-projects.show', $project->id) }}" class="btn btn-primary btn-sm rounded-5 mr-1">
                                                                        <i class="la la-eye"></i>
                                                                    </a>
                                                                    <a href="" class="btn btn-secondary btn-sm rounded-5 mr-1">
                                                                        <i class="la la-edit"></i>
                                                                    </a>
                                                                    <form action="{{ route('client-projects.destroy', $project->id) }}" method="POST">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button type="submit"
                                                                        class="btn btn-danger btn-sm rounded-5 mr-1">
                                                                            <i class="la la-remove"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endisset
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Project Name</th>
                                                    <th>Client</th>
                                                    <th>Start At</th>
                                                    <th>End At</th>
                                                    <th>Progress</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
