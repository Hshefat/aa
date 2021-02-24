@extends('frontend.main')
{{-- @extends('layouts.master') --}}

@section('title', 'Page Title')

@section('sidebar')
    @parent
        <div class="title m-b-md">
            Laravel Api Build & Test
        </div>

@endsection

@section('content')
    <h1>This is my body content.</h1>

    <section>
        <div class="">
        @include('frontend.pages.another')
        </div>
    </section>
    <section>
        <div>
            @include('frontend.pages.linkbar')
        </div>
    </section>
@stop

