@extends('layouts.student')

@section('content')
    <div style="max-width: 750px; padding:20px; margin:20px; background: white">
        <table class="striped grey" style="border-collapse: collapse">
            <thead class="green">
                <tr>
                    <td>Book Id</td>
                    <td>Title</td>
                    <td>Author</td>
                    <td>Issue Date</td>
                    <td>Return Date</td>
                    <td>status</td>
                </tr>
            </thead>
            <tbody>
                @foreach (Auth::user()->student->books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->book_title}}</td>
                        <td>{{$book->book->author}}</td>
                        <td>{{$book->issue_date}}</td>
                        <td>{{$book->return_date}}</td>
                        <td>{{$book->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection