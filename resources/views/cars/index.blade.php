@extends ('layouts.app')

@section ('title', 'Car list')

@section ('content')
    <h1>Car list</h1>
    <ul>
        @foreach ($cars as $car)
        <li>
            <a href="{{ route('car', ['car' => $car->id]) }}"> {{ $car->title}} </a>
        </li>
        @endforeach
    </ul>
@endsection