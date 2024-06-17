@extends('products.layout')

@section('content')

    <!-- partial.back -->
    <div class="container-fluid">

        <div class="row">
            <div class="col px-5 pt-5 pb-1">
                <a href="{{ route('products.index') }}"><i class="bi bi-arrow-left-short text-secondary" style="font-size: 50px;"></i></a>
            </div>
        </div>

    </div>
    <!-- partial.back -->
    
    <div class="container bg-light bg-gradient">

        <h1>Edit Produk</h1>
        
        <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="mb-3">
              <label for="nama_produk" class="form-label">Nama Produk</label>
              <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" placeholder="Nama produk..." aria-describedby="namaProduk">
              @error('nama_produk')
                <div id="namaProduk" class="form-text text-danger"><i class="bi bi-x-lg"></i> {{ $message }}</div>
              @enderror 
            </div>
            <div class="mb-3">
              <label for="ket" class="form-label">Keterangan</label>
              <textarea name="keterangan" class="form-control" id="ket" placeholder="Isi keterangan..." aria-describedby="keterangan">{{ $product->keterangan }}</textarea>
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" name="harga" value="{{ $product->harga }}" class="form-control" id="harga" placeholder="Harga produk..." aria-describedby="hargaProduk">
            </div>
            <div class="mb-3">
              <label for="jumlah" class="form-label">Kuantitas</label>
              <input type="number" name="jumlah" value="{{ $product->jumlah }}" class="form-control" id="jumlah" placeholder="Jumlah produk..." aria-describedby="qtyProduk">
            </div>
            <button type="submit" class="btn btn-secondary btn-block px-5 py-3">Submit</button>
          </form>
    </div>
    
@endsection