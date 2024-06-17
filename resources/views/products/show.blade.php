@extends('products.layout')
  
@section('content')
    <!-- partial.back -->
    <div class="container-fluid">

        <div class="row">
            <div class="col px-5 pt-5 pb-1">
                <a href="{{ route('products.index') }}"><i class="bi bi-arrow-left-short text-warning" style="font-size: 50px;"></i></a>
            </div>
        </div>

    </div>
    <!-- partial.back -->
    
    <div class="container bg-light bg-gradient">

        <h1 class="pb-5 text-capitalize">{{ $product->nama_produk }}</h1>
        
        <p class="p-1 fs-4 ">{{ $product->keterangan }}</p>

        <h2 class="py-2">Rp. {{ $product->harga }},-</h2>
        <h4 class="pt-2">Tersedia: {{ $product->jumlah }}</h4>
    </div>
@endsection