@extends('layouts.admin.index')
@section('title', 'Projects')
@section('vendor_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> Projects </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Main</a>
                            </li>
                            <li class="breadcrumb-item active"> Projects
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <a class="btn btn-outline-primary mb-1" href="{{ route('project.create') }}">Add New Project</a>
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
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Project Name</th>
                                                <th>About</th>
                                                <th>Client</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($getProjects)
                                                @foreach ($getProjects as $project)
                                                    <tr>
                                                        <td>
                                                            <img style="width: 100px;" src="{{asset('storage/images/' . $project->image)}}" alt="">
                                                        </td>
                                                        <td>{{ $project->name }}</td>
                                                        <td>{{ $project->short_description }}</td>
                                                        <td>{{ $project->client }}</td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="{{ route('project.show', $project->slug) }}" target="_blank" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    SHOW
                                                                </a>
                                                                <a href="{{ route('project.edit', $project->id) }}" class="btn btn-outline-secondary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    UPDATE
                                                                </a>
                                                                <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">DELETE</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Project Name</th>
                                                <th>About</th>
                                                <th>Client</th>
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