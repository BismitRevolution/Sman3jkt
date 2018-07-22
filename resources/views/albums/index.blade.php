@extends('admin.dashboard')

@section('dashboard-title', 'Manage Album')

@section('dashboard-content')
<table class="table table-hover table-striped table-responsive">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 0; ?>
        @foreach ($albums as $album)
        <?php $counter+=1; ?>
        <tr>
            <td scope="row" class="text-center">{{ $counter }}</td>
            <td>{{ $album->title }}</td>
            <td>{{ $album->description }}</td>
            <td>
                <div class="form-inline">
                    <form method="get" action="{{ route('admin.albums.edit', $album->album_id) }}">
                        {{ csrf_field() }}
                        <button type="submit"><span><i class="fas fa-cog"></i></span></button>
                    </form>
                    <form method="post" action="{{ route('admin.albums.destroy', $album->album_id) }}">
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
@if ($albums->isEmpty())
<h5 class="text-center"><span class="badge badge-secondary">Belum ada album</span></h5>
@endif
@endsection
