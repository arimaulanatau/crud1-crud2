



@extends('layout.master')


@section('content')
<div class="card">
<div class="ml-3">

<h1>Pertanyaan</h1>
foreach($pertanyaan as $key => $item)
<p>Judul: {{$pertanyaan->judul}}</p><br>
<p>isi: {{$pertanyaan->isi}}</p><br>
<p>tanggal dibuat: {{$pertanyaan->tanggal_dibuat}}</p><br>
<p>tanggal diupdate: {{$pertanyaan->tanggal_diperbarui}}</p>

<h1>Jawaban</h1>

<p>{{$jawaban->isi}} </p>
</div>
</div>


@endsection
