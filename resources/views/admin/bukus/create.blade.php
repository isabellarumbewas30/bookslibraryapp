@extends('layouts.app')
@section('title', 'Isabel| Data Books')
@section('content')

<div class="title-top mb-5">
    <h2 class="fw-bold">Data Buku </h2>
</div>
<form method="post" action="{{route('bukus.store')}}" class="" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-floating mb-3 ml-3">
      <label for="inputname" >Title</label>
    <input type="text" class="form-control" id="inputname" placeholder="Enter title" name="judulbuku">
  </div>
  <div class="form-floating mb-3 ml-3">
      <label for="inputname" class="form-label">Year</label>
  <input type="number" class="form-control" id="inputterbit" placeholder="Enter year" name="th_terbit">
  </div>
  <div class="form-floating mb-3 ml-3">
      <label for="inputname" class="form-label">Author</label>
    <input type="text" class="form-control" id="inputpengarang" placeholder="Enter name" name="pengarang">
    </div>
    <div class="form-floating mb-3 ml-3">
        <label for="inputname" class="form-label">Publisher</label>
      <input type="text" class="form-control" id="inputpenerbit" placeholder="Enter name" name="penerbit">
      </div>
      <div class="form-group ml-3 mb-3">
        <label for="inputfile" class="form-label">Image</label>
        <input type="file" class="form-control"   accept=".png, .jpeg, .jpg" name="gambar" require id="inputfile">

        <!-- pesan error untuk gambar -->
       
       {{-- <div class="alert alert-danger mt-2">
             {{ $message }}
        </div> --}}
   
        </div>
  <button type="submit" class="btn btn-primary ml-3">Kirim</button>
</form>
@endsection