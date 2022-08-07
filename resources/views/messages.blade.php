@extends("layouts.app")

@section("content")
    @include("inc.messages")
    <h1>Masseges</h1>
    @if (count($messages) > 0)
        @foreach ($messages as $message)
            <ul class="list-group mt-4 mb-2">
                <li class="list-group-item">Name: {{$message->name}}</li>
                <li class="list-group-item">email: {{$message->email}}</li>
                <li class="list-group-item">Message: {{$message->message}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section("sidebar")
    @parent
    <p>This is appended to side bar</p>
@endsection