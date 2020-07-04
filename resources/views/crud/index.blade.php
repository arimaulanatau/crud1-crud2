@extends('layout.master')


@section('content')
  <div class="card">
<table class="table table-bordered mt-2 ml-1">
  <thead class="text-center">                  
    <tr>
      <th style="width: 10px">No</th>
      <th style="width:80px">Judul</th>
      <th style="width:150px">Isi</th>
      <th style="width:150px">edit Pertanyaan</th>
      <th style="width:150px">Detail Jawaban</th>
      <th style="width:280px">Form Jawaban</th>
      <th style="width:150px">Detail Q&A</th>
    </tr>
  </thead>
  <tbody class="text-center">

  @foreach($pertanyaan as $key => $item)
  <tr>
        <td>{{$key +1 }}</td>
        <td>{{$item->judul}}</td>
        <td>{{$item->isi}}</td>
        <td>
            <a href="{{ url('/pertanyaan/'.$item->id.'/edit') }}">
              <button class="btn btn-success">Edit Pertanyaan</button>
            </a>
        </td>
        
        <td>
            <a href="{{ url('/jawaban/'.$item->id) }}">
              <button class="btn btn-success">Lihat Jawaban</button>
            </a>
        </td>
        <td>
        <form action="{{url ('/jawaban/'.$item->id) }}" method="POST">
        @csrf
          <input type="text" name="isi">
          <input hidden name="pertanyaan_id" value="{{ $item->id }}">
          <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
          <input hidden name="tanggal_diperbarui" value="{{\Carbon\Carbon::now()}}">
          <button class="btn btn-success">Jawab</button>
        </form>
        </td>
        <td>
            <a href="{{ url('/pertanyaan/'.$item->id) }}">
              <button class="btn btn-primary">Lihat Q&A</button>
            </a>

            <form action="{{ url('/pertanyaan/'.$item->id) }}" method="POST">
            @csrf
            {{method_field('delete')}}
            <button class="btn btn-danger mt-2" type="submit">Delete</button>            
            
            </form>

        </td>
      </tr>

 @endforeach
    
  </tbody>
</table>
<a href="{{url('/pertanyaan/create')}}">
      <button class="btn btn-primary ml-3 mb-3">buat pertanyaan</button>
        </a>
   
</div>
<div class="container">
</div>

@endsection