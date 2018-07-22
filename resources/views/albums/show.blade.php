@extends('admin.dashboard')

@section('dashboard-title', 'New Album')

@section('dashboard-content')
<h5>Your album has been published!</h5>

<div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Title</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="title" name="title" required disabled placeholder="{{ $album->title }}">
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Description</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="description" required disabled placeholder="{{ $album->description }}">
    </div>
</div>

@foreach ($photos as $photo)
<div class="form-group row">
    <div class="col-sm-8">
        <img src="/{{ $photo->photo_path }}">
    </div>
</div>
@endforeach

@endsection
