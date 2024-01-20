@extends('layouts.app')

@section('content')
    <ul>
        <li><a href="{{ route('p3ke.index') }}" class="text-center my-4">Halaman P3KE</a></li>
        <li><a href="{{ route('program') }}" class="text-center my-4"> Halaman Master Program</a></li>
    </ul>
@endsection
