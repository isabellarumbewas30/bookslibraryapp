@extends('layouts.app')
@section('title', 'Isabella Rumbewas | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Data Buku
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('bukus.update', $buku->id)}}" method="post" class="" enctype="multipart/form-data"> {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul Buku</label>
                                                <input type="text" name="judulbuku" class="form-control" value="{{ $buku->judulbuku}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Tahun terbit</label>
                                                <input type="text" name="th_terbit"  class="form-control" value="{{ $buku->th_terbit}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Pengarang</label>
                                                <input type="text" name="pengarang"  class="form-control" value="{{ $buku->pengarang}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Penerbit</label>
                                                <input type="text" name="penerbit"  class="form-control" value="{{ $buku->penerbit}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Gambar</label>
                                                <input type="file" name="gambar"  accept=".png, .jpeg, .jpg" class="form-control" >
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Edit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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