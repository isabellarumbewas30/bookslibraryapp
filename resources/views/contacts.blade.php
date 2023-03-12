@extends('layouts.main')

@section('container')

<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us </h2>
</div>

<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
    <label for="inputname" >Nama</label>
  </div>

  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
    <label for="inputemail" class="form-label">Email</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputemail" placeholder="Please leave your message" name="pesan" 
    style="height:100px">
      <label for="inputemail" class="form-label">Pesan</label>
    </div>

  {{-- <div class="form floating mb-3">
     {{-- <label for="floatingTextarea2" >Pesan</label> --}}
  {{-- <textarea class="form-control" id="floatingTextarea2" placeholder="Please leave your message" style="height: 100px"
  name="pesan"></textarea>
  </div> --}} 


  <button type="submit" class="btn btn-dark">Kirim</button>
</form>
@endsection 