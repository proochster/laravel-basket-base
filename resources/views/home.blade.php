@extends('layouts.base')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1 class="title is-4">Home</h1>

<div id="app">
    <test-component>asdasd</test-component>
    <div class="columns">
        <div class="column is-half">

            

        </div>
    </div>
</div>
@endsection
