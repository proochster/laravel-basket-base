@extends('layouts.base')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="title is-4">Latest offers</h1>



@endsection
