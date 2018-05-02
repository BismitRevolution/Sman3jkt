@extends('admin.dashboard')

@section('dashboard-title', 'Manage Post')

@section('dashboard-content')
<table class="table table-hover table-striped table-responsive">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Images</th>
            <th scope="col">Attachment</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 0; ?>
        @foreach ($posts as $post)
        <?php $counter+=1; ?>
        <tr>
            <td scope="row" class="text-center">{{ $counter }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                @if ($post->image !== '')
                <a href="/{{ $post->image }}" target="_blank">image</a>
                @else
                <p>None</p>
                @endif
            </td>
            <td>
                @if ($post->attachment !== '')
                <a href="/{{ $post->attachment }}" target="_blank">attachment</a>
                @else
                <p>None</p>
                @endif
            </td>
            <td>
                <div class="form-inline">
                    <form method="get" action="{{ route('admin.posts.edit', $post->post_id) }}">
                        {{ csrf_field() }}
                        <button type="submit"><span><i class="fas fa-cog"></i></span></button>
                    </form>
                    <form method="post" action="{{ route('admin.posts.destroy', $post->post_id) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@if ($posts->isEmpty())
<h5 class="text-center"><span class="badge badge-secondary">Belum ada post</span></h5>
@endif
@endsection
