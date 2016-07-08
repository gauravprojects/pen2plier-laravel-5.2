@extends('layouts.master')

@section('title','Contact Response')


@section('content')


        <!-- Start message box -->
<div class="container">
    <div class="row">

        <div style="font-family:times; font-size:x-large;
                text-align: center;
                margin-top: 23%;
                margin-bottom: 23%;
                ">
                Thank you
                <span style="color: #01bafd">{{$data['author']}} </span> for reaching us regarding
            <span style="color: #01bafd">{{$data['subject']}} </span>!
                <br>
                You are very important to us and aur co-ordinators will reach you as soon as possible

        </div>

    </div>

</div>

<!-- End message box -->



@endsection