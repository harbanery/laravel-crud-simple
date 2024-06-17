@extends('products.layout')

@section('content')

    <!-- partial.back -->
    <div class="container-fluid">

        <div class="row">
            <div class="col px-5 pt-5 pb-1">
                <a href="{{ route('products.index') }}"><i class="bi bi-arrow-left-short text-primary" style="font-size: 50px;"></i></a>
            </div>
        </div>

    </div>
    <!-- partial.back -->
    
    <div class="container bg-light bg-gradient">

        @if ($errors->any())
            <!-- partial alerts -->
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-x-octagon-fill"></i> <strong>Ups!</strong> Sepertinya ada input atau koneksi internet yang error
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <!-- partial alerts -->
        @endif

        <h1>Buat Produk</h1>
        
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="nama_produk" class="form-label">Nama Produk</label>
              <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" placeholder="Nama produk..." aria-describedby="namaProduk">
              @error('nama_produk')
                <div id="namaProduk" class="form-text text-danger"><i class="bi bi-x-lg"></i> {{ $message }}</div>
              @enderror              
            </div>
            <div class="mb-3">
              <label for="ket" class="form-label">Keterangan</label>
              <textarea name="keterangan" class="form-control" id="ket" placeholder="Isi keterangan..." aria-describedby="keterangan">{{ old('keterangan') }}</textarea>
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" name="harga" value="{{ old('harga') }}" class="form-control" id="harga" placeholder="Harga produk..." aria-describedby="hargaProduk">
            </div>
            <div class="mb-3">
              <label for="jumlah" class="form-label">Kuantitas</label>
              <input type="number" name="jumlah" value="{{ old('jumlah') }}" class="form-control" id="jumlah" placeholder="Jumlah produk..." aria-describedby="qtyProduk">
            </div>
            <button type="submit" class="btn btn-primary btn-block px-5 py-3">Submit</button>
          </form>
    </div>
    
@endsection