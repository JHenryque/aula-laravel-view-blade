@extends('layouts.main_layout')
@section('content')

    <div class="display-6  text-center py-5">
        @if(session('username'))
            <h2>{{session('username')}}</h2>
        @endif


    </div>

@endsection
