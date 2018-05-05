@extends('admin.dashboard')

@section('dashboard-title', 'New Post')

@section('dashboard-content')
<h5>Your post has been published!</h5>

<div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Title</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="title" name="title" required disabled placeholder="{{ $post->title }}">
    </div>
</div>

<div class="form-group row">
    <label for="content" class="col-sm-4 col-form-label">Content</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="content" required disabled placeholder="{{ $post->content }}">
    </div>
</div>

<div class="form-group row">
    <label for="image" class="col-sm-4 col-form-label">Image</label>
    <div class="col-sm-8">
        <img src="/{{ $post->image }}">
    </div>
</div>

<div class="form-group row">
    <label for="attachment" class="col-sm-4 col-form-label">Attachment</label>
    <div class="col-sm-8">
        <a href="/{{ $post->attachment }}" target="_blank">attachment</a>
    </div>
</div>

@endsection
