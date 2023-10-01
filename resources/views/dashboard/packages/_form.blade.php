<div class="mb-3">
    <label for="employeeName" class="form-label">Project Title</label>
    <input type="text" class="form-control" id="employeeName"
        placeholder="Enter package title" name="title" value="{{ $package->title }}">
</div>

<div class="mb-3">
    <label for="employeeUrl" class="form-label">Project Description</label>
    <input type="text" class="form-control" id="description"
        placeholder="Enter package description" name="description" value="{{ $package->description }}">
</div>

<div class="mb-3">
    <label for="employeeName" class="form-label">Project Link</label>
    <input type="text" class="form-control" id="employeeName"
        placeholder="Enter package price" name="lonk" value="{{ $package->price }}">
</div>



@if($package->image != null)
<img src="{{ asset('uploads/packages/'.$package->image) }}" height="80px" width="80px" alt="">

@endif


<div class="mb-3">
    <label for="image_url" class="form-label">Select Image</label>
    <div class="input-group">
        <input type="file" class="form-control" id="image" name="image">
        <label class="input-group-text" for="image">Upload</label>
    </div>
</div>


