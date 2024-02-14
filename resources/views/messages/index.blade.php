<!-- resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('messages.store') }}" method="post">
            @csrf
            <label for="name">留言：</label>
            <input type="text" name="name" id="name" required>
            <button type="submit">發表留言</button>
        </form>

        <ul>
            @foreach($messages as $message)
                <li>{{ $message->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
