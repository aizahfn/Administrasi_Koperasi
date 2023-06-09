@extends('bukuaizah.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Buku Aizah</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bukuaizah.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    
    <form action="{{ route('bukuaizah.update',$bukuaizah->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Buku:</strong>
                    <input type="integer" name="IDBuku" value="{{ $bukuaizah->IDBuku }}" class="form-control" placeholder="IDBuku">
                </div>
            </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="string" name="Judul" value="{{ $bukuaizah->Judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penulis:</strong>
                    <input type="string" name="Penulis" value="{{ $bukuaizah->Penulis }}" class="form-control" placeholder="Penerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit:</strong>
                    <input type="string" name="Penerbit" value="{{ $bukuaizah->penerbit }}" class="form-control" placeholder="Penerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Terbit:</strong>
                    <input type="integer" name="TahunTerbit" value="{{ $bukuaizah->penerbit }}" class="form-control" placeholder="TahunTerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Stok:</strong>
                    <input type="integer" name="JumlahStok" value="{{ $bukuaizah->JumlahStok }}" class="form-control" placeholder="JumlahStok">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>dendabuku:</strong>
                    <input type="integer" name="dendabuku" value="{{ $bukuaizah->dendabuku }}" class="form-control" placeholder="dendabuku">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <select name="namapeminjam" class="form-control">
                        <option value="">Pilih Peminjam</option>
                        @foreach ($peminjam as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection