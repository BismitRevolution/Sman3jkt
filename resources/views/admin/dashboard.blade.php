@extends('admin.layout.master')

@section('title') Dashboard @endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@yield('dashboard-css')
@endsection

@section('content')
<div id="main">
    <div class="container-fluid">
        <div class="row">
            <div id="panel" class="col-4">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" disabled>
                        Dashboard Menu
                    </button>
                    <form method="get" action="{{ route('admin.posts.create') }}">
                        <button type="submit" class="list-group-item list-group-item-action">Create Post</button>
                    </form>
                    <form method="get" action="{{ route('admin.posts.index') }}">
                        <button type="submit" class="list-group-item list-group-item-action">View Posts</button>
                    </form>

                    <form method="get" action="{{ route('admin.albums.create') }}">
                        <button type="submit" class="list-group-item list-group-item-action">Create Album</button>
                    </form>
                    <form method="get" action="{{ route('admin.albums.index') }}">
                        <button type="submit" class="list-group-item list-group-item-action">View Albums</button>
                    </form>

                </div>
            </div>
            <div id="content" class="col-8">
                <div class="jumbotron">
                    <h1 class="title"><span class="badge badge-danger">@yield('dashboard-title')</span></h1>
                    @yield('dashboard-content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/admin-dashboard.js') }}"></script> -->
@yield('dashboard-js')
@endsection
