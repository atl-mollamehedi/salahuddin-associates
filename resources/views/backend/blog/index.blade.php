@extends('layouts.backend_app')
@section('style')
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/assets/node_modules/dropify/dist/css/dropify.min.css">
    <link href="{{ asset('backend_asset') }}/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"
        rel="stylesheet" />
@endsection
@section('backend_content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">blogs</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal"
                    data-target="#create__blog" data-whatever="@mdo"><i class="fa fa-plus-circle"></i> Create New
                    blog</button>
                @include('backend.blog.includes.create')
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
        @foreach ($blogs as $blog)
            <div class="col-lg-3">
                <div class="card">
                    <div class="card pb-0">
                        
                        <div class="card-body pr-0 pl-0 pb-0">
                            <div class="row m-0">
                                <div class="col-lg-12">
                                    <div class="row m-0">
                                        <div class="col-lg-12">
                                            <div class="card p-0">

                                                <div class="card-body pb-0">
                                                    @if ($blog->type == 1)
                                                    <img class="mb-3 card-img-top img-responsive" src="{{ asset($blog->photo) }}"
                                                    alt="Card image cap">
                                                    @else
                                                    <iframe height="207px" src="{{ $blog->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    @endif
                                                    
                                                    <h3>{{ $blog->name }}</h3>
                                                    <p class="card-text">{{ $blog->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                            @include('backend.blog.includes.update')
                        </div>
                        <div class="card-footer bg-transparent pb-0 pt-0">
                            <h4 class="card-title m-0 justy__between"><span> </span> 
                                <span class="d-flex">
                                <button data-toggle="modal" data-target="#update__blog__{{ $blog->id }}" class="btn btn-success btn-sm" title="Edit Portfolio">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm ml-2" onclick="deleteBlog({{$blog->id}})">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form id="delete-blog-{{$blog->id}}" action="{{ route('backend.blog.destroy', $blog->id) }}" method="POST" style="display: none">
                                    @csrf
                                    @method('delete')
                                </form>
                            </span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('script')
    <script src="{{ asset('backend_asset') }}/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script src="{{ asset('backend_asset') }}/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js">
    </script>
    <script>
        $('.review__type').change(function(){
            $type  = $(this).val();
            if ($type == 1) {
                $('#review__text').slideUp();
                $('#review__screenshot').slideDown();
            console.log($type);
            } else {
                $('#review__text').slideDown();
                $('#review__screenshot').slideUp();
            }
            if ($type == 1) {
                $('.u_blog__text').slideUp();
                $('.u_blog__screenshot').slideDown();
            console.log($type);
            } else {
                $('.u_blog__text').slideDown();
                $('.u_blog__screenshot').slideUp();
            }
            
        })
    </script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-d??posez un fichier ici ou cliquez',
                    replace: 'Glissez-d??posez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'D??sol??, le fichier trop volumineux'
                }
            });


        });
    </script>
    <script>
        $(document).on('keypress', 'form input[type="text"]', function(e) {
            if (e.which == 13) {
                e.preventDefault();
                return false;
            }
        });
    </script>
    <script>
        function deleteBlog(id) {
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
                    document.getElementById('delete-blog-'+id).submit();
                }
            })
        }
    </script>
@endsection
