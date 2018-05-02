@extends('admin.dashboard')

@section('dashboard-title', 'New Post')

@section('dashboard-content')
<form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <blockquote class="blockquote">
        <footer class="blockquote-footer">Required Field</footer>
    </blockquote>

    <div class="form-group row">
        <label for="title" class="col-sm-4 col-form-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="content" class="col-sm-4 col-form-label">Content</label>
        <div class="col-sm-8">
            <textarea type="text" class="form-control" name="content" required></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-sm-4 col-form-label">Image</label>
        <div class="col-sm-8">
            <input id="image" name="image[]" class="form-control-file" type="file" multiple="multiple"/>
        </div>
    </div>

    <div class="form-group row">
        <label for="attachment" class="col-sm-4 col-form-label">Attachment</label>
        <div class="col-sm-8">
            <input id="attachment" name="attachment[]" class="form-control-file" type="file" multiple="multiple"/>
        </div>
    </div>

    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
    <div class="text-center">
        <button class="btn btn-outline-light text-center" type="submit" style="margin-top: 30px;">Submit</button>
    </div>
</form>
@endsection
