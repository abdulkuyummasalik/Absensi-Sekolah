@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <h1 class="text-2xl font-bold">Selamat datang, Admin!</h1>
    {{-- <ul class="mt-4">
        <li><a href="{{ route('users.index') }}" class="text-blue-600 hover:underline">Kelola Pengguna</a></li>
        <li><a href="{{ route('classes.index') }}" class="text-blue-600 hover:underline">Kelola Kelas</a></li>
        <li><a href="{{ route('schedule.index') }}" class="text-blue-600 hover:underline">Kelola Jadwal</a></li>
    </ul> --}}
@endsection
