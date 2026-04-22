<x-app-layout>
    @foreach($cars as $car)
        <p>{{ $car->print()}}</p>
    @endforeach
</x-app-layout>