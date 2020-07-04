@extends('layout.master')


@section('content')
  <div class="card">
<div class="ml-3 mt-3">
<form action="/pertanyaan" method="POST">
    @csrf
    
    <div class="card card-primary">
      <div class="card-header">
        <div class="form-gorup">
          <h3 class="card-title">New Pertanyaan</h3>
        </div>
      </div>
    </div>
  <div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Enter judul" name="judul" id="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi:</label>
   <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
   <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
   <input hidden name="tanggal_diperbarui" value="{{\Carbon\Carbon::now()}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection