<script type="application/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/bootstrap-v4.0.min.css') }}">

<link rel="stylesheet" href="{{ asset('css/testing.css') }}">

<div class="container">
    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3 base">
            <div class="">
                @if ($loop->0)
                <img class="shadow" src="{{ asset('img/photos/bukber/01.jpeg') }}" alt="">
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 row">
            <div class="col-md-12 block">
                <div class="">
                    <img class="shadow" src="{{ asset('img/photos/bukber/01.jpeg') }}" alt="">
                </div>
            </div>
            <div class="col-md-12 block">
                <div class="">
                    <img class="shadow" src="{{ asset('img/photos/bukber/01.jpeg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 block">
            <div class="">
                <img class="shadow" src="{{ asset('img/photos/bukber/01.jpeg') }}" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 block">
            <div class="">
                <img class="shadow" src="{{ asset('img/photos/bukber/01.jpeg') }}" alt="">
            </div>
        </div>
        @endforeach
    </div>

</div>

<script type="text/javascript" src="{{ asset('js/testing.js') }}"></script>
