<div class="mb-3">
    <label for="employeeName" class="form-label">Project Title</label>
    <input type="text" class="form-control" id="employeeName"
        placeholder="Enter project title" name="title" value="{{ $project->title }}">
</div>

<div class="mb-3">
    <label for="employeeUrl" class="form-label">Project Description</label>
    <input type="text" class="form-control" id="description"
        placeholder="Enter project description" name="description" value="{{ $project->description }}">
</div>

<div class="mb-3">
    <label for="employeeName" class="form-label">Project Link</label>
    <input type="text" class="form-control" id="employeeName"
        placeholder="Enter project price" name="link" value="{{ $project->link }}">
</div>



@if($project->image != null)
<img src="{{ asset('uploads/projects/'.$project->image) }}" height="80px" width="80px" alt="">

@endif


<div class="mb-3">
    <label for="image_url" class="form-label">Select Image</label>
    <div class="input-group">
        <input type="file" class="form-control" id="image" name="image">
        <label class="input-group-text" for="image">Upload</label>
    </div>
</div>





<div class="mb-3">
    <label for="projectTitle" class="form-label">Project Title</label>
    <select class="form-select" id="projectTitle" name="technologies_id">

        @foreach ($technologes as  $item)
        <option value="{{ $item->id }}">{{ $item->title }}</option>

        @endforeach

    </select>
</div>
