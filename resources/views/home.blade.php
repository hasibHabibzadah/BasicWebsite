@extends("layouts.app")

@section("content")
    @include("inc.messages")
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime iure autem unde temporibus quia, explicabo tenetur neque officiis delectus dignissimos nulla ea commodi libero, numquam perferendis quis iste impedit.
    Molestias, voluptates, tempore fugit dolorem est ratione officiis ducimus fuga similique voluptate asperiores consequatur perspiciatis delectus! Harum id quos voluptatum dolorum suscipit cupiditate odio explicabo iure est possimus, non amet.
    Pariatur quas porro odit veniam atque laudantium, corrupti nostrum itaque amet totam placeat quasi dolores iusto facere quam obcaecati hic dolorum, quibusdam cumque quisquam ducimus, sed minus eligendi dolore. Incidunt.</p>
@endsection

@section("sidebar")
    @parent
    <p>This is appended to side bar</p>
@endsection