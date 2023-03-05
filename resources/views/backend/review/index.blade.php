@extends('layouts.backend_app')
@section('title')
    Client View
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/assets/node_modules/dropify/dist/css/dropify.min.css">
@endsection
@section('backend_content')
@section('backend_content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Review</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Review</li>
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
                data-target="#create__review">Add New</button>
            @include('backend.review.includes.create')
            <div class="table-responsive">
                <table id="demo-foo-addrow"
                    class="table table-bordered m-t-30 table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg"
                    data-paging="true" data-paging-size="7" style="">
                    <thead>
                        <tr class="footable-header">
                            <th class="footable-first-visible" style="display: table-cell;">No</th>
                            <th style="display: table-cell;">client</th>
                            <th style="display: table-cell;">Title</th>
                            <th style="display: table-cell;">review</th>
                            <th style="display: table-cell;" class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $review)
                            <tr>
                                <td style="display: table-cell;">{{ $loop->index + 1 }}</td>
                                <td style="display: table-cell;"><img src="{{ asset($review->photo) }}" alt="user"
                                        width="40" class="img-circle mr-2 "><span
                                        class="pl-3">{{ $review->name }}</span>
                                </td>
                                <td style="display: table-cell;">{{ $review->title }}</td>
                                @if ($review->type == 1)
                                    <td style="display: table-cell;"><img src="{{ asset($review->review_photo) }}"
                                            alt="user" class="img-fluid mr-2 "></td>
                                @else
                                    <td style="display: table-cell;">{{ $review->review_text }}</td>
                                @endif

                                <td class="footable-last-visible text-right" style="display: table-cell;">

                                    <button data-toggle="modal" data-target="#update__review_{{ $review->id }}"
                                        class="btn btn-success btn-sm" title="Edit Review">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm pl-2"
                                        onclick="deleteReview({{ $review->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <form id="delete-review-{{ $review->id }}"
                                        action="{{ route('backend.review.destroy', $review->id) }}" method="post"
                                        style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @include('backend.review.includes.update')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('backend_asset') }}/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script>
        $('.review__type').change(function() {
            $type = $(this).val();
            if ($type == 1) {
                $('#review__text').slideUp();
                $('#review__screenshot').slideDown();
                console.log($type);
            } else {
                $('#review__text').slideDown();
                $('#review__screenshot').slideUp();
            }
            if ($type == 1) {
                $('.u_review__text').slideUp();
                $('.u_review__screenshot').slideDown();
                console.log($type);
            } else {
                $('.u_review__text').slideDown();
                $('.u_review__screenshot').slideUp();
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
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
    <script>
        function deleteReview(id) {
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
