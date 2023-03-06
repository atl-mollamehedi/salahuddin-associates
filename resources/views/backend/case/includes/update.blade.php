<div class="modal" id="update__blog__{{ $case_study->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h4 class="modal-title" id="exampleModalLabel1">Update Your blog</h4>
                <br />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('backend.case_study.update', $case_study->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body text-left">
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Name</label>
                        <input class="form-control" id="message-text1" placeholder="Enter your name" name="name"
                            value="{{ $case_study->name }}" />
                    </div>
                    <div class="form-group">

                        <label for="message-text" class="control-label">Service</label>
                        <br />
                        <select class="form-control custom-select review__type" name="service_id"
                            data-placeholder="Choose a Category" tabindex="1">
                            @foreach ($services as $service)
                            <option {{ $service->id ==  $case_study->service_id? 'selected':''}} value="{{ $service->id }}">{{  $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Description</label>
                        <textarea class="form-control" rows='7' id="message-text1" placeholder="Enter your Description" name="description">{{ $case_study->description }}</textarea>
                    </div>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label ">Photo</label>
                        <input type="file" id="input-file-now-custom-3" name="photo" class="dropify" value="{{ asset($case_study->photo) }}"
                            data-height="150" data-default-file="{{ asset($case_study->photo) }}" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="sumit" class="btn btn-primary">Save and Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
