@extends('layout.app')

@section('content')
    <div class="container">
        <h3>Confirmation</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
