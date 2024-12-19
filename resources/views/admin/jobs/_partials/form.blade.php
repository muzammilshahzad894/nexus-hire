<div class="row">
    <div class="mb-3 col-md-6">
        <label class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') ? old('title') : @$job->title }}" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-6">
        <label class="form-label">Status <span class="text-danger">*</span></label>
        <select name="status" class="form-control" required>
            <option value="1" 
                {{ (isset($job) && $job->status == '1') || (!isset($job) && old('status') != '0') ? 'selected' : '' }}>
                Active
            </option>
            <option value="0" 
                {{ (isset($job) && $job->status == '0') || old('status') == '0' ? 'selected' : '' }}>
                Inactive
            </option>
        </select>
        @error('status')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-12">
        <label class="form-label">Description <span class="text-danger">*</span></label>
        <textarea name="description" class="form-control mceEditor" rows="13" placeholder="Introductory Message">{{ old('description') ? old('description') : @$job->description }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>