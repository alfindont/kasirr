@extends('layouts._main')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Produk</h2>
                        @if (Auth::user()->role == 'petugas')
                            <form action="{{ route('produk-petugas') }}" method="GET">
                                <input type="text" name="search" placeholder="Search Products">
                                <button type="submit">Search</button>
                            </form>
                        @endif
                        {{-- <a href="{{ route('search.pdf', ['id'=>$value->id])}}" class="btn btn-success">ExportPdf</a> --}}
                            <input type="hidden" name="search" value="{{ request('search') }}">
                            <button class="btn btn-sm btn-danger" style="float: right">export PDF</button>
                        </form>
                        @if (Auth::user()->role == 'admin')
                            <a href="" class="btn btn-success mb-4" data-bs-toggle="modal"
                                data-bs-target="#modalCreate">Create</a>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga</th>
                                    @if (Auth::user()->role == 'admin')
                                        <th scope="col">Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                    <tr>
                                        <td scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->stock }}</td>
                                        <td>{{ format_rupiah($value->price) }}</td>
                                        @if (Auth::user()->role == 'admin')
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <button class="btn btn-success mx-4" data-bs-toggle="modal"
                                                        data-bs-target="#modalStock-{{ $value->id }}">
                                                        <i class='bx bx-plus'></i>Tambah Stock
                                                    </button>
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#modalEdit-{{ $value->id }}">
                                                        <i class='bx bxs-pencil'></i>
                                                    </button>
                                                    <form action="{{ route('deleteProduct', ['id' => $value->id]) }}"
                                                        class="px-4" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class='bx bx-trash'></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                    <!-- Modal Edit-->
                                    <div class="modal fade" id="modalEdit-{{ $value->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Content Modal Edit -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Stock-->
                                    <div class="modal fade" id="modalStock-{{ $value->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Content Modal Stock -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal Create-->
                    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Content Modal Create -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    
    function format_rupiah($angka)
    {
        $jadi = 'Rp ' . number_format($angka, 2, ',', '.');
        return $jadi;
    }
    ?>
@endsection
