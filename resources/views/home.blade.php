@extends('layouts.main_layout')
@section('content')
    <div class="display-6  text-center py-5">
     {{-- EMPTY a condiçao verifica se nao exister --}}
        @empty($value)
            <p>Não Exister</p>
        @else
            <p>Exister!!</p>
        @endempty

      {{-- isset a condiçao verifica se exister --}}
        @isset($value)
            <p>E Verdadeiro</p>
        @else
            <p>E Falso</p>
        @endisset
       {{-- UNLESS a condiçao verifica se e diferente ou ingual --}}
        @unless($value != false)
            <p>A Condiçao Verdadeira</p>
        @endunless


    </div>
@endsection
