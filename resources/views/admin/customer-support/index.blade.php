@extends('layouts.admin.index')
@section('title', 'Customer Support')
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
                <!-- DOM - jQuery events table -->
                <section id="file-export">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Client Messages</h4>
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
                                                    <th>Client Name</th>
                                                    <th>Client Email</th>
                                                    <th>Client Phone</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($messages)
                                                    @foreach ($messages as $message)
                                                        <tr>
                                                            <td>{{ $message->client_name }}</td>
                                                            <td>{{ $message->client_email }}</td>
                                                            <td>{{ $message->client_phone }}</td>
                                                            <td>{{ $message->subject }}</td>
                                                            <td>{{ Str::limit($message->msg, 150, '...') }}</td>
                                                            <td>
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <a href="{{ route('admin.customer-support.show', $message->id) }}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                        SHOW
                                                                    </a>
                                                                    <form action="{{ route('admin.customer-support.destroy', $message->id) }}" method="POST">
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
                                                    <th>Client Name</th>
                                                    <th>Client Email</th>
                                                    <th>Client Phone</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
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
