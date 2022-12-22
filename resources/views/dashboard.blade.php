@extends('base')

@include('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
        <h1>Dashboard</h1>
        <div class="card col-sm-7 offset-sm-3 border border-light mt-5">
            <div class="card-header">
                <h1 class="text-center">Motor</h1>
            </div>
            <div class="card-body shadow">
            <img class="offset-sm-1" src="images/zx.jpg" alt="cover">
            </div>
        </div>
    </div>

@endsection

<style>
    img {
        width: 85%;
    }
</style>
