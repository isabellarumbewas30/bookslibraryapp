@extends ('layouts.main')

@section ('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Data Buku </h2>
</div>
<form method="post" action="{{route('bukus.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Judul Buku" name="judulbuku">
    <label for="inputjudul" >Judul buku</label>
  </div>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="inputterbit" placeholder="Tahun terbit" name="th_terbit">
    <label for="inputemail" class="form-label">Tahun terbit</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputpengarang" placeholder="Pengarang" name="pengarang">
      <label for="inputemail" class="form-label">Pengarang</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="inputpenerbit" placeholder="Masukkan Penerbit" name="penerbit">
        <label for="inputemail" class="form-label">Penerbit</label>
      </div>

     <div class="form-group">
        <label for="inputfile">Gambar</label>
        <input type="file" name="gambar" required id="inputfile">
     </div>  
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection 