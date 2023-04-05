@extends('layouts.admin.index')
@section('title', 'Clients')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('page_level_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/pages/users.css') }}">
@endsection
@section('custom_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <style>
        .fc-content{
            color: white;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-with-cover">
                                <div class="card-img-top img-fluid bg-cover height-300 bg-dark"
                                    style="background: url('https://wallpaperaccess.com/full/512711.jpg');background-repeat: no-repeat;background-position: center;">
                                </div>
                                <div class="media profil-cover-details w-100">
                                    <div class="media-left pl-2 pt-2">
                                        <a href="#" class="profile-image">
                                            <img src="{{ asset('storage/images/' . $client->avatar) }}"
                                                class="rounded-circle img-border height-100" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="media-body pt-3 px-2">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="text-light">Mr. {{ $client->name }}</h2>
                                            </div>
                                            <div class="col text-right">
                                                {{-- <button type="button" class="btn btn-primary d-"><i class="la la-plus"></i>
                                                    Follow</button> --}}
                                                <div class="btn-group d-none d-md-block float-right ml-2" role="group"
                                                    aria-label="Basic example">
                                                    {{-- <button type="button" class="btn btn-success"><i
                                                            class="la la-dashcube"></i> Message</button> --}}
                                                    <a href="{{ route('clients.edit', $client->username) }}" class="btn btn-success"><i
                                                            class="la la-cog"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="navbar navbar-light navbar-profile align-self-end">
                                    <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse"
                                        aria-expanded="false" aria-label="Toggle navigation"></button>
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-briefcase"></i>
                                                        Projects</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="content-body">
                                    {{-- <a class="btn btn-outline-primary mb-1" href="{{ route('project.create') }}">Add New Project</a> --}}
                                    <!-- DOM - jQuery events table -->
                                    <section>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Calendar</h4>
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
                                                    <div class="card-content collapse">
                                                        <div class="card-body card-dashboard">
                                                            <div id='full_calendar_events'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('vendor_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
@section('custom_js')
    <script>
        $(document).ready(function() {
                var SITEURL = "{{ url('/dashboard/') }}";
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var calendar = $('#full_calendar_events').fullCalendar({
                    editable: true,
                    events: @json($clientCalendar),
                    eventDataTransform: function(eventData) {
                        return {
                            id: eventData.id,
                            title: eventData.event_name,
                            start: eventData.event_start,
                            end: eventData.event_end
                        }
                    },
                    displayEventTime: true,
                    eventRender: function(event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function(event_start, event_end, allDay) {
                        var event_name = prompt('Event Name:');
                        if (event_name) {
                            var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                            var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                            $.ajax({
                                url: "{{ route('calendar.action', $client->id) }}",
                                type: "POST",
                                data: {
                                    event_name: event_name,
                                    event_start: event_start,
                                    event_end: event_end,
                                    type: 'create'
                                },
                                success: function(data) {
                                    displayMessage("Project created.");
                                    calendar.fullCalendar('renderEvent', {
                                        id: data.id,
                                        title: event_name,
                                        start: event_start,
                                        end: event_end,
                                        allDay: allDay
                                    }, true);
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function(event, delta) {
                        var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                        $.ajax({
                            url: "{{ route('calendar.action', $client->id) }}",
                            data: {
                                id: event.id,
                                title: event.event_name,
                                start: event_start,
                                end: event_end,
                                type: 'edit'
                            },
                            type: "POST",
                            success: function(response) {
                                displayMessage("Project updated");
                            }
                        });
                    },
                    eventClick: function(event) {
                        var eventDelete = confirm("Are you sure?");
                        if (eventDelete) {
                            $.ajax({
                                type: "POST",
                                url: "{{ route('calendar.action', $client->id) }}",
                                data: {
                                    id: event.id,
                                    type: 'delete'
                                },
                                success: function(response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Project removed");
                                }
                            });
                        }
                    }
                });
            });

            function displayMessage(message) {
                toastr.success(message);
            }
    </script>
@endsection
