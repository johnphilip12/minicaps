@extends('base')

@extends('navbar')

@section('title', 'Edit')

@section('content')
<div class="container m-5">
        <div class="col-sm-5 offset-sm-4">
            <div>
                <livewire:motors.edit :motorId="$id"/>
            </div>
        </div>
    </div>
</div>
@endsection
