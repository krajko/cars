@extends ('layouts.app')

@section ('title', 'Car list')

@section ('content')
    <h1>Car list</h1>
    <ul>
        @foreach ($cars as $car)
        <li>ID: {{ $car->id }} Title: {{ $car->title }}, Producer: {{ $car->producer }}, Number of doors: {{ $car->number_of_doors }}</li>
        @endforeach
    </ul>