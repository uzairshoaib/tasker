<div class="form-group">
  <label class="col-sm-3 control-label">Title *</label>
  <div class="col-sm-9">
    <input type="text" name="title" value="{{ $group->title or old('title') }}" class="form-control">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-3 control-label">Description</label>
  <div class="col-sm-9">
    <textarea class="form-control" name="description">{{ $group->description or old('description') }}</textarea>
  </div>
</div>
<div class="form-group">
	<div class="col-xs-12 text-right">
		<button type="submit" class="btn btn-space btn-primary">Submit</button>
	</div>
</div>