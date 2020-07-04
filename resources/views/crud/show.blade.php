



@extends('layout.master')


@section('content')
<div class="card">
<div class="ml-3">
<h3>Detail pertanyaan</h3>

<p>Judul : {{$pertanyaan->judul}}</p>
<p>Isi : {{$pertanyaan->isi}}</p>


</div>
</div>


@endsection
