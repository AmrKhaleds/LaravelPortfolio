@extends('layouts.client.index')

@section('title', 'Calendar')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        .fc-scroller.fc-day-grid-container {
            height: 100% !important;
        }
    </style>
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
                                <div class="card-content collapse show">
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
@endsection

@section('vendor_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection

@section('custom_js')
    {{-- Scripts --}}
    <script>
        $(document).ready(function() {
                var SITEURL = "{{ url('/client/') }}";
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var calendar = $('#full_calendar_events').fullCalendar({
                    editable: false,
                    selectable: false,
                    selectHelper: false,
                    events: {
                        url: SITEURL + "/calendar", // your server-side endpoint URL that returns the events data
                        type: 'GET', // HTTP method to fetch the events data
                        error: function() {
                            alert('There was an error fetching events.');
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
                    
                    // select: function(event_start, event_end, allDay) {
                    //     var event_name = prompt('Event Name:');
                    //     if (event_name) {
                    //         var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                    //         var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                    //         $.ajax({
                    //             url: SITEURL + "/calendar/action",
                    //             data: {
                    //                 event_name: event_name,
                    //                 event_start: event_start,
                    //                 event_end: event_end,
                    //                 type: 'create'
                    //             },
                    //             type: "POST",
                    //             success: function(data) {
                    //                 displayMessage("Project created.");
                    //                 calendar.fullCalendar('renderEvent', {
                    //                     id: data.id,
                    //                     title: event_name,
                    //                     start: event_start,
                    //                     end: event_end,
                    //                     allDay: allDay
                    //                 }, true);
                    //                 calendar.fullCalendar('unselect');
                    //             }
                    //         });
                    //     }
                    // },
                    // eventDrop: function(event, delta) {
                    //     var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    //     var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                    //     $.ajax({
                    //         url: SITEURL + '/calendar/action',
                    //         data: {
                    //             title: event.event_name,
                    //             start: event_start,
                    //             end: event_end,
                    //             id: event.id,
                    //             type: 'edit'
                    //         },
                    //         type: "POST",
                    //         success: function(response) {
                    //             displayMessage("Project updated");
                    //         }
                    //     });
                    // },
                    // eventClick: function(event) {
                    //     var eventDelete = confirm("Are you sure?");
                    //     if (eventDelete) {
                    //         $.ajax({
                    //             type: "POST",
                    //             url: SITEURL + '/calendar/action',
                    //             data: {
                    //                 id: event.id,
                    //                 type: 'delete'
                    //             },
                    //             success: function(response) {
                    //                 calendar.fullCalendar('removeEvents', event.id);
                    //                 displayMessage("Project removed");
                    //             }
                    //         });
                    //     }
                    // }
                });
            });

            function displayMessage(message) {
                toastr.success(message);
            }
    </script>
@endsection