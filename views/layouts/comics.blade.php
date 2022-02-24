@extends('layouts.master')

@section('title', 'Comics')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS; background-position: center">Comics</h1>
            <table class="table">
                <thead>
                <tr>
                    <td style="font-family: Comic Sans MS">Title</td>
                    <td style="padding-left: 34%" style="font-family: Comic Sans MS">Author</td>
                </tr>
                </thead>
                <tbody>
                @forelse($book as $bookdata)
                    <tr>
                        <td><a href="/BookDetails/{{ $bookdata->title }}" style="font-family: Comic Sans MS">{{ $bookdata->title }}</a></td>
                        @foreach($detail as $bookdetail)
                        <td style="font-family: Comic Sans MS">
                            {{ $bookdetail->author }}
                        </td>
                        @endforeach
                    </tr>
                    @empty
                    <tr>
                        <td style="background-color: #00B0FF; color: white; font-family: Comic Sans MS">No Data...</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-md-4" style="background-color: #00B0FF; color: white; font-family: Comic Sans MS">
            <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS">Category</h1>
            <a href="/Fiction" style="font-family: Comic Sans MS">Fiction<br></a>
            <a href="/NonFiction" style="font-family: Comic Sans MS">Non-Fiction<br></a>
            <a href="/Language" style="font-family: Comic Sans MS">Language<br></a>
            <a href="/Children" style="font-family: Comic Sans MS">Children's Books<br></a>
            <a href="/Science" style="font-family: Comic Sans MS">Science Books<br></a>
            <a href="/Computer" style="font-family: Comic Sans MS">Computer Books<br></a>
            <a href="/Comics" style="font-family: Comic Sans MS">Comics<br></a>
        </div> 
    </div>
</div>
@endsection