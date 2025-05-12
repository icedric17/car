@extends('layouts.app')

@section('title', 'Vehicles')
@section('page-title', 'Vehicle Management')

@section('content')
<div class="flex justify-end mb-4">
    <a href="{{ route('cars.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Vehicle</a>
</div>

<div class="bg-white p-4 rounded shadow">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Make</th>
                <th class="py-2 px-4 border-b">Model</th>
                <th class="py-2 px-4 border-b">Year</th>
                <th class="py-2 px-4 border-b">Status</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td class="py-2 px-4 border-b">{{ $car->id }}</td>
                <td class="py-2 px-4 border-b">{{ $car->make }}</td>
                <td class="py-2 px-4 border-b">{{ $car->model }}</td>
                <td class="py-2 px-4 border-b">{{ $car->year }}</td>
                <td class="py-2 px-4 border-b">{{ $car->status }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('cars.show', $car->id) }}" class="text-blue-500">View</a> |
                    <a href="{{ route('cars.edit', $car->id) }}" class="text-yellow-500">Edit</a> |
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
