@extends ('layouts.app')

@section ('title', 'Car info')

@section ('content')
    <h1>{{ $car->title }}</h1>
    <h3>
        ID: {{ $car->id }} <br>
        Producer: {{ $car->producer }} <br>
        Number of doors: {{ $car->number_of_doors }} <br>
    </h3>
@endsection