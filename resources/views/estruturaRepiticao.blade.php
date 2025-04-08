@extends('layouts.main_layout')
@section('content')
    <div class="display-6  text-center py-5">
     {{--  for --}}
        <p>---------- Condiçao FOR ----------------</p>
        @for($i = 0 ; $i < count($cities); $i++)
            <p>{{ $i }} - {{ $cities[$i] }}</p>
        @endfor
      {{-- foreach --}}
        <p>---------- Condiçao FOREACH ----------------</p>
        @foreach($cities as $city)
            <p>{{$city}}</p>
            <p>{{ $loop->index }}</p>

            @if($loop->first)
                <p>diferença de 250km</p>
            @endif

            @if($loop->last)
                <p>diferença de 350km</p>
            @endif

        @endforeach
       {{-- forelse --}}
        <p>---------- Condiçao FORELSE ----------------</p>
        @forelse($names as $name)
            <p>{{$name}}</p>
        @empty
            <p>Names está vazio</p>
        @endforelse
        {{-- while --}}
        <p>---------- Condiçao WHILE ----------------</p>
        @while($value <= 10)
            <p>{{$value++}}</p>
            @php
                $i = 0;
            @endphp
        @endwhile


    </div>
@endsection
