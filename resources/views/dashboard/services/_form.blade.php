<div class="mb-3">
    <label for="employeeName" class="form-label">Section Title</label>
    <input type="text" class="form-control" id="employeeName"
        placeholder="Enter service title" name="title" value="{{ $service->title }}">
</div>

<div class="mb-3">
    <label for="employeeUrl" class="form-label">Service Description</label>
    <input type="text" class="form-control" id="description"
        placeholder="Enter service description" name="description" value="{{ $service->description }}">
</div>



@if($service->image != null)
<img src="{{ asset('uploads/services/'.$service->image) }}" height="80px" width="80px" alt="">

@endif


<div class="mb-3">
    <label for="image_url" class="form-label">Select Image</label>
    <div class="input-group">
        <input type="file" class="form-control" id="image" name="image">
        <label class="input-group-text" for="image">Upload</label>
    </div>
</div>


