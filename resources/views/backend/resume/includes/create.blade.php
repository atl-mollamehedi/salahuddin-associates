<div class="modal" id="create__resume" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h4 class="modal-title" id="exampleModalLabel1">Create a new partner</h4>
                <br />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('backend.resume.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-left">
                    <select class="form-control custom-select" name="service_id" data-placeholder="Choose One"
                    tabindex="1">
                    @foreach ($services as $service)
                        
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Service Item Name</label>
                        <input class="form-control" id="message-text1" placeholder="Enter your Experience"
                            name="service_name" />
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
