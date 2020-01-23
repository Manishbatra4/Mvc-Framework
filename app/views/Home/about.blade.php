@extends('include.layout')

@section('title', 'About Page')

@include('include.header')

@section('content')

    <h1 style="text-align: center">{{ $title }}</h1>
    <hr>
    <div class="center">
        <img style="" src="{{ URLROOT.'/img/whatisblog.png' }}" alt="blog, about us">
    </div>
    <div style="text-align: justify-all;">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cum iure laborum magnam minus, obcaecati qui quos ullam vitae voluptate. Aut eligendi enim labore repellendus similique sit totam vel vitae.</p>
        <p>Eum, eveniet iste! Dicta dolorem dolorum error itaque magni maiores minima nulla perspiciatis recusandae veniam. Ab, asperiores assumenda deleniti eaque earum eligendi, in iste itaque laboriosam mollitia, odio quis vitae.</p>
        <p>Ab alias asperiores at blanditiis deleniti dolore ea eaque earum enim et eum fuga harum inventore ipsam iste itaque, laboriosam maiores nam, nulla praesentium quasi rem saepe sapiente tenetur voluptatum?</p>
        <p>Accusantium ad autem cumque deleniti deserunt eaque eligendi et ex hic illo, ipsum iste iusto laborum magni necessitatibus nisi non numquam odio officia placeat provident quisquam sed sequi totam voluptate.</p>
        <p>Adipisci amet atque culpa deleniti eius eligendi, est fuga hic incidunt, nam necessitatibus nesciunt non omnis pariatur, rerum sint tenetur veritatis! Ab accusantium amet deserunt fugit mollitia quas, repellendus reprehenderit.</p>
    </div>

@endsection