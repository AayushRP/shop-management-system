@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <a href="{{ route('admin.home') }}" class="btn btn-primary">Visitor login</a>
            </div>
            <div class="col">
                <a href="{{ route('admin.home') }}" class="btn btn-primary">Staff login</a>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
@parent

@endsection