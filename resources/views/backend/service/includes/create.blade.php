<div class="modal" id="create__service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h4 class="modal-title" id="exampleModalLabel1">Create a new Service</h4>
                <br />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('backend.service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-left">

                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Icon</label>
                        <input type="text" class="form-control" placeholder="Select icon" data-fa-browser
                            placeholder="Enter your Icon" name="icon" />
                        @if ($errors->has('icon'))
                            <div class="error" style="color: red">{{ $errors->first('icon') }}</div>
                        @endif
                    </div>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Name</label>
                        <input class="form-control" id="message-text1" placeholder="Enter your name" name="name"
                            value="{{ old('name') }}" />
                    </div>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Description</label>
                        <textarea rows='7' class="form-control" id="message-text1" placeholder="Enter your Description" name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label ">Photo</label>
                        <input type="file" id="input-file-now-custom-3" name="photo" class="dropify"
                            data-height="150" data-default-file="" />
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
