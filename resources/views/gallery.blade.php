@extends('layouts.main')

@section('container')
<header class="bg-dark py-5">
  <div class="container px-4 px-lg-5 my-5">
    <div class="text-center text-white">
      <h1 class="display-4 fw-bolder">Isabel The Library's Gallery</h1>
      <p class="lead fw-normal text-white-50 mb-0">
        Books makes you bolder. 
      </p>
    </div>
  </div>
</header>
<div class="col-auto">
  <form action="{{route('searchbook')}}" method="GET">
  <input type="search" placeholder="Search anything" id="inputsearch" name="search"class="form-control mt-5" aria-describedby="passwordHelpInline">
  </form>
</div>  

<body>
<style>
  h5{
    font-size: 28px;
  }
  </style>


<div class="row mt-3">
      @foreach ($bukus as $buku)
  
          <div class="col-lg-3 mt-5">
        
  
              <div class="card h-2" style='width:300px'>
  
                  <img src="{{ asset('storage/' . $buku->gambar) }}" class="card-img-top" style='width: 100%; height:50%'
                      alt="perpustakaan">
  
                  <div class="card-body">
  
                      <h5 class="card-title">{{ $buku->judulbuku }}</h5>
  
                      <p class="card-text"><i>{{ $buku->th_terbit }}</i></p>
  
                      <a href="/detail/{{ $buku->id }}" class="btn btn-dark w-40" style="background-color: #191919">Detail Buku</a>
  
  
                  </div>
  
              </div>
  
          </div>

        </body>          
      @endforeach    
@endsection