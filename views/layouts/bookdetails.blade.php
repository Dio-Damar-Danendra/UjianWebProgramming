@extends('layouts.master')
<?php ?>
@section('title', 'Book Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS; background-position: center">Book Detail</h1>
            <p style="font-family: Comic Sans MS">Title: (Title)</p><br>
            <p style="font-family: Comic Sans MS">Author: (Name of Author)</p><br>
            <p style="font-family: Comic Sans MS">Publisher: ABC Books</p><br>
            <p style="font-family: Comic Sans MS">Year: 2021</p><br>
            <p style="font-family: Comic Sans MS">Description: <br>(Insert Description) slkjfdslfjldll</p><br>
        </div>
        <div class="col-md-4">
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