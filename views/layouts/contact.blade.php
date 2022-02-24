@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS; background-position: center">Contact</h1>
            <table>
                <thead>
                <tr>
                    <td style="font-family: Comic Sans MS; font-size: 20pt">Store Address:</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="font-family: Comic Sans MS">Jl. Mertilang XI Blok KB 3 No. 3, Sektor 9, Bintaro Jaya</td>
                </tr>
                </tbody>
            </table>
            <br>
            <table>
                <thead>
                <tr>
                    <td style="font-family: Comic Sans MS; font-size: 20pt">Open Daily: </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="font-family: Comic Sans MS">9AM–5PM</td>
                </tr>
                </tbody>
            </table>
            <table>
                <thead>
                <tr>
                    <td style="font-family: Comic Sans MS; font-size: 20pt">Contact: </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="font-family: Comic Sans MS">Phone Number: 087871095885</td>
                    <td style="font-family: Comic Sans MS">Email: happybookstore@gmail.co.id</td>
                </tr>
                </tbody>
            </table>
            <br>
            <br>
    </div>
    <div class="col-md-4">
        <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS">Category</h1>
        <a href="/Fiction">Fiction<br></a>
        <a href="/NonFiction">Non-Fiction<br></a>
        <a href="/Language">Language<br></a>
        <a href="/Children">Children's Books<br></a>
        <a href="/Science">Science Books<br></a>
        <a href="/Computer">Computer Books<br></a>
        <a href="/Comics">Comics<br></a>
    </div>
</div>
@endsection