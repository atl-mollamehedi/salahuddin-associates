@extends('layouts.backend_app')
@section('style')
    <link
        href="{{ asset('backend_asset') }}/assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">
    <!-- Page plugins css -->
    <!-- Date picker plugins css -->
    <link href="{{ asset('backend_asset') }}/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css"
        rel="stylesheet" type="text/css" />
@endsection
@section('backend_content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Resume</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Resume</li>
                </ol>
                @include('backend.resume.includes.create')
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">MY RESUME</h4>
            <h6 class="card-subtitle"></h6>
            <button type="button" class="btn btn-info btn-rounded m-t-10 float-right" data-toggle="modal"
                data-target="#create__resume">Add New</button>
            @include('backend.resume.includes.create')
            <div class="table-responsive">
                <table id="demo-foo-addrow"
                    class="table table-bordered m-t-30 table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg"
                    data-paging="true" data-paging-size="7" style="">
                    <thead>
                        <tr class="footable-header">
                            <th class="footable-first-visible" style="display: table-cell;">No</th>
                            <th style="display: table-cell;">Start</th>
                            <th style="display: table-cell;">End</th>
                            <th style="display: table-cell;">Orgamization</th>
                            <th style="display: table-cell;">Exprerience or Skill</th>
                            <th style="display: table-cell;">Type</th>
                            <th style="display: table-cell;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resumes as $resume)
                            <tr>
                                <td style="display: table-cell;">{{ $loop->index + 1 }}</td>
                                <td style="display: table-cell;">{{ $resume->start_date }}</td>
                                <td style="display: table-cell;">{{ $resume->end_date }}</td>
                                <td style="display: table-cell;">{{ $resume->orgamization }}</td>
                                <td style="display: table-cell;">{{ $resume->experience }}</td>
                                <td style="display: table-cell;">{{ $resume->type == 1 ? 'Education' : 'Experience' }}</td>
                                <td class="footable-last-visible" style="display: table-cell;">

                                    <button data-toggle="modal" data-target="#resume__updated_{{ $resume->id }}"
                                        class="btn btn-success btn-sm" title="Edit Resume">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="deleteResume({{ $resume->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <form id="delete-review-{{ $resume->id }}"
                                        action="{{ route('backend.resume.destroy', $resume->id) }}" method="post"
                                        style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    @include('backend.resume.includes.update')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('backend_asset') }}/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js">
    </script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{ asset('backend_asset') }}/assets/node_modules/moment/moment.js"></script>
    <script
        src="{{ asset('backend_asset') }}/assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>

    <script>
        // MAterial Date picker    
        $('#mdate').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        $('#end_date').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        $('#start_date_update').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        $('#end_date_update').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
    </script>

    <script>
        function deleteResume(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    document.getElementById('delete-review-' + id).submit();
                }
            })
        }
    </script>
@endsection
