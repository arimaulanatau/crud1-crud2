@extends('layout.master')


@section('content')
  <div class="card">
<div class="ml-3 mt-3">
<form action="{{url('/pertanyaan/'.$id)}}" method="POST">
{{method_field('put')}}
    @csrf
    
    <div class="card card-primary">
      <div class="card-header">
        <div class="form-gorup">
          <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
      </div>
    </div>
  <div class="form-group">
  <input hidden name="id" value="{{ $id }}">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}">
  </div>
  <div class="form-group">
    <label for="isi">Isi:</label>
    <input type="text" class="form-control" name="isi" value="{{$pertanyaan->isi}}">
    <input hidden type="text" class="form-control" name="tanggal_dibuat" value="{{$pertanyaan->tanggal_dibuat}}">
    <input hidden type="text" class="form-control" name="tanggal_diperbarui" value="{{\Carbon\Carbon::now()}}">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection