<div class="modal" id="resume__updated_{{ $resume->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h4 class="modal-title" id="exampleModalLabel1">Update Your Banner</h4>
                <br />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('backend.resume.update', $resume->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body text-left">
                    <div class="form-group text-left">
                        <label for="message-text" class="control-label">Service Name</label>
                        <input class="form-control" placeholder="Enter Your Service Item" id="" value="{{ $resume->service_name }}"
                            name="service_name" />
                    </div>
                    
                    <select class="form-control custom-select" name="service_id" data-placeholder="Choose One"
                        tabindex="1">
                        @foreach ($services as $service) 
                        <option value="{{ $service->id }}" {{ $service->id == $resume->service_id ? 'selected': ''  }}>Education</option>
                        @endforeach
                   </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="sumit" class="btn btn-primary">Save and Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
