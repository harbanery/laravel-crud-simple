@extends('products.layout')

@section('content')
    <div class="container pt-5">

        @if ($message = Session::get('success'))
        <!-- partial alerts -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check2"></i>
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <!-- partial alerts -->
        @endif

        <h1>Website CRUD</h1>

          <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col-1">#</th>
                    <th scope="col-2">Nama</th>
                    <th scope="col-3">Keterangan</th>
                    <th scope="col-2">Harga</th>
                    <th scope="col-1">Jumlah</th>
                    <th scope="col-3">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <!-- sengaja taruh -->
                {{-- <tr>
                    <th scope="row">0</th>
                    <td>Lem</td>
                    <td>-</td>
                    <td>Rp. 15000,-</td>
                    <td>25</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i></button>
                        <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr> --}}
                <!--  -->

                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->keterangan }}</td>
                    <td>Rp. {{ $product->harga }},-</td>
                    <td>{{ $product->jumlah }}</td>
                    <td>
                        <a href="{{ route('products.show',$product->id) }}">
                            <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i></button>
                        </a>
                        <a href="{{ route('products.edit',$product->id) }}">
                            <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#product_{{ $product->id }}"><i class="bi bi-trash"></i></button>

                        <!-- partial modal -->
                        <div class="modal fade" id="product_{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-danger bg-gradient text-white">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data <strong>&lsquo;{{ $product->nama_produk }}&rsquo;</strong> akan dihapus?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">

                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Hapus</button>

                                </form>
                                
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- partial modal -->


                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>
          </div>

          <div class="row">
            <div class="col">
                <a href="{{ route('products.create') }}">
                    <button type="button" class="btn btn-primary btn-block px-5 py-3">Buat Data</button>
                </a>
            </div>
          </div>
    </div>

@endsection