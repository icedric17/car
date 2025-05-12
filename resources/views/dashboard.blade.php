@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-4 gap-6">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-xl font-bold">Total Vehicles</h2>
        <p class="text-3xl">0</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-xl font-bold">Total Rentals</h2>
        <p class="text-3xl">0</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-xl font-bold">Total Payments</h2>
        <p class="text-3xl">0</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-xl font-bold">Total Reviews</h2>
        <p class="text-3xl">0</p>
    </div>
</div>
@endsection
