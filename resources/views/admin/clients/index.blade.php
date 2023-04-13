@extends('layouts.admin.index')
@section('title', 'Clients')
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
                <a class="btn btn-outline-primary mb-1" href="{{ route('clients.create') }}">Add New Client</a>
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
                                                    <th>Avatar</th>
                                                    <th>FullName</th>
                                                    <th>Username</th>
                                                    <th>Emial</th>
                                                    <th>Phone</th>
                                                    <th>Status</th>
                                                    <th>Project Type</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($clients)
                                                    @foreach ($clients as $client)
                                                        <tr>
                                                            <td>
                                                                <img style="width: 100px;" src="{{asset('storage/clients/avatars/' . $client->avatar)}}" alt="">
                                                            </td>
                                                            <td>{{ $client->name }}</td>
                                                            <td>{{ $client->username }}</td>
                                                            <td>{{ $client->email }}</td>
                                                            <td>{{ $client->phone }}</td>
                                                            <td>{{ $client->status }}</td>
                                                            <td>
                                                                @foreach ($client->project_type as $project)
                                                                    {{$project}}, 
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <a href="{{ route('clients.show', $client->username) }}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                        SHOW
                                                                    </a>
                                                                    <a href="{{ route('clients.edit', $client->username) }}" class="btn btn-outline-secondary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                        UPDATE
                                                                    </a>
                                                                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
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
                                                    <th>Avatar</th>
                                                    <th>FullName</th>
                                                    <th>Username</th>
                                                    <th>Emial</th>
                                                    <th>Phone</th>
                                                    <th>Status</th>
                                                    <th>Project Type</th>
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
