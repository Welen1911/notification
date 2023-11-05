@extends('layout.template')
@section('title', 'Login')

@section('header')
    @include('layout.header')
@endsection

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('user.store') }}" method="post">
                @csrf
                @include('layout.register')
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
