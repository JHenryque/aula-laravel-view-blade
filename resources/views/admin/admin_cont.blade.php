    @extends('layouts.main_layout')
    @section('content')
        <div class="display-6  text-center py-5">
            <p>Nome: {{$name}}</p>
            <p>E-mail: {{$email}}</p>
        </div>
    @endsection
