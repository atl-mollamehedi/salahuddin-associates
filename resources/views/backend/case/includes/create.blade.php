<div class="modal" id="create__blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h4 class="modal-title" id="exampleModalLabel1">Create a new Case Study</h4>
                <br />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('backend.case_study.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-left">
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Name</label>
                        <input class="form-control" id="message-text1" placeholder="Enter your name" name="name"
                            value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">

                        <h4 class="card-title">Service</h4>
                        <br />
                        <select class="form-control custom-select review__type" name="service_id"
                            data-placeholder="Choose a Category" tabindex="1">
                            <option value="">Selece one</option>
                            @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{  $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Description</label>
                        <textarea class="form-control" rows='7' id="message-text1" placeholder="Enter your Description" name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label ">Photo</label>
                        <input type="file" id="input-file-now-custom-3" name="photo" class="dropify"
                            data-height="150" data-default-file="" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="sumit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
