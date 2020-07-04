



@extends('layout.master')


@section('content')
<div class="card">
<div class="ml-3">
@foreach{$jawaban as $key => $item}
    <h1>{{$item -> isi}}</h1><br>
</div>
</div>


@endsection
