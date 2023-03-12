@extends('layouts.app')
@section('title', 'Isabella Rumbewas | Data Buku')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" >Data Books</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center ml-1">
                            <a href="{{ route('bukus.create')}}"><i class="btn btn-dark mb-3 mt-3 ml-3" > Tambah </i></a>
                         
                        <div class="col-auto">
                            <form action="{{route('bukus.index')}}" method="GET">
                            <input type="search" placeholder="search" id="inputsearch" name="search"class="form-control" aria-describedby="passwordHelpInline">
                            </form>
                        </div> 
                     
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">No</th>
                                                <th style="text-align:center;">Judul Buku</th>
                                                <th style="text-align:center;">Tahun terbit</th>
                                                <th style="text-align:center;">Pengarang</th>
                                                <th style="text-align:center;">Penerbit</th>
                                                <th style="text-align:center;">Aksi</th>
                                                <th style="text-align:center;">Gambar</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($bukus as $index => $buku )
                                        </div>
                                    </div>
                                            <tr>
                                                <td>{{ $index + 1}}</td>
                                                <td>{{ $buku->judulbuku}}</td>
                                                <td>{{ $buku->th_terbit}}</td>
                                                <td>{{ $buku->pengarang}}</td>
                                                <td>{{ $buku->penerbit}}</td>
                                                <td>
                                                    <a href="{{ route('bukus.edit', $buku->id)}}"><i class="far fa-edit"></i>
                                                    <a href="{{ route('bukus.destroy', $buku->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
                                                </a>
                                                </td>   
                                                <td>
                                                    <img src="{{asset('storage/'.$buku->gambar)}}" alt="" style="width:100px;">
                                                </td>
                                                
                                            </tr> 
                                            @endforeach
                                            
                                            
                                           
                                        </tbody>
                                        {{ $bukus->links() }}
                                    </table>
                                    
                        </div>
                        <a href="/exportpdf"><i class="btn btn-danger mb-3 mt-3 ml-3" > Export PDF </i></a>
                        <a href="/exportexcel"><i class="btn btn-success mb-3 mt-3 ml-3" > Export EXC </i></a> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection