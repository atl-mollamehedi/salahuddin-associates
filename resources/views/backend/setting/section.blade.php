@extends('layouts.backend_app')
@section('title')
    Portfolio
@endsection
@section('style')
    <link href="{{ asset('backend_asset') }}/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"
        rel="stylesheet" />
@endsection
@section('backend_content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Section Enable or Disable</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                    <li class="breadcrumb-item active">Section</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Frontend Sections</h4>
                    <h6 class="card-subtitle"></h6>
                    <!-- Add Contact Popup Model -->
                    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">

                        <!-- /.modal-dialog -->
                    </div>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow"
                            class="table table-bordered m-t-30 table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg"
                            data-paging="true" data-paging-size="7" style="">
                            <thead>
                                <tr class="footable-header">
                                    <th style="display: table-cell;">Section Name</th>
                                    <th style="display: table-cell;">Status</th>
                                    <th style="display: table-cell;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                    <tr>
                                        <td>{{ $section->name }}</td>
                                        <td style="display: table-cell;">
                                            @if ($section->status == 1)
                                                <a class="text-success" title="Edit Review">
                                                    Active
                                                </a>
                                            @else
                                                <a class="text-warning pl-2">
                                                    Unactive
                                                    </button>
                                            @endif
                                        </td>
                                        <td style="display: table-cell;">
                                            @if ($section->status == 2)
                                                <a href="{{ route('backend.section.update', $section->id) }}"
                                                    class="btn btn-success btn-sm" title="Edit Review">
                                                    Enabale
                                                </a>
                                            @else
                                                <a href="{{ route('backend.section.update', $section->id) }}" class="btn btn-danger btn-sm pl-2">
                                                    Disabled
                                                    </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
