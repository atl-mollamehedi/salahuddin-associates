@extends('layouts.backend_app')
@section('backend_content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                @isset($record)
                @endisset

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
        <!-- Column -->
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">{{ total_blog() }}</h3>
                            <h5 class="text-muted m-b-0">Total Blog</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">{{ total_users() }}</h3>
                            <h5 class="text-muted m-b-0">Total Users</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">{{ total_portfolio() }}</h3>
                            <h5 class="text-muted m-b-0">Total Portfolios</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                        <div class="m-l-10 align-self-center">
                            <a href="{{ route('backend.section.index') }}">
                            <h3 class="m-b-0">Setting</h3>
                            <h5 class="text-muted m-b-0">Section Disable/Enable</h5></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Latest 5 Blogs</h4>
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
                                    <th style="display: table-cell;">#ID</th>
                                    <th style="display: table-cell;">Photo</th>
                                    <th style="display: table-cell;">Title</th>
                                    <th style="display: table-cell;">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td class="footable-first-visible" style="display: table-cell;">{{ $loop->index + 1 }}</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="{{ asset( $blog->photo) }}" alt="{{ $blog->image }}"
                                                width="50" ></a>
                                    </td>
                                    <td style="display: table-cell;">{{ $blog->name }}</td>
                                    <td style="display: table-cell;">{{ Str::limit($blog->description, 50) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Latest 5 Portfolio</h4>
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
                                    <th style="display: table-cell;">#ID</th>
                                    <th style="display: table-cell;">Photo</th>
                                    <th style="display: table-cell;">Category</th>
                                    <th style="display: table-cell;">Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $portfolio)
                                <tr>
                                    <td class="footable-first-visible" style="display: table-cell;">{{ $loop->index + 1 }}</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->image }}" alt="{{ $portfolio->image }}"
                                                width="50" ></a>
                                    </td>
                                    <td style="display: table-cell;">{{ $portfolio->category->name }}</td>
                                    <td style="display: table-cell;">{{ $portfolio->title }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Users</h4>
                    <h6 class="card-subtitle"></h6>
                    <a type="button" class="btn btn-info btn-rounded m-t-10 float-right" href="{{ url('register') }}">Add New User</a>
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
                                    <th style="display: table-cell;">#ID</th>
                                    <th style="display: table-cell;">Photo</th>
                                    <th style="display: table-cell;">Name</th>
                                    <th style="display: table-cell;">Email</th>
                                    <th style="display: table-cell;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="footable-first-visible" style="display: table-cell;">{{ $loop->index + 1 }}</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="{{ asset('uploads/home/admin') }}/{{ $user->photo }}" alt="user"
                                                width="40" class="img-circle"></a>
                                    </td>
                                    <td style="display: table-cell;">{{ $user->name }}</td>
                                    <td style="display: table-cell;">{{ $user->email }}</td>
                                    <td style="display: table-cell;">
                                        <a class="btn btn-danger btn-sm" href="{{ route('dashboard.user.delete',$user->id) }}">Delete</a>
                                            </div> 
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
