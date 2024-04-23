<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Produk</title>
        <style>
            #back-wrap {
                margin: 30px auto 0 30px;
                width: 450px;
                display: flex;
                justify-content: flex-end;
            }
    
            .btn-back {
                width: fit-content;
                padding: 8px 15px;
                color: #fff;
                background: #666;
                border-radius: 5px;
                text-decoration: none;
            }
    
            #receipt {
                box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.5);
                padding: 20px;
                margin: 30px auto 0 auto;
                width: 500px;
                background: #fff;
            }
    
            h2 {
                font-size: .9rem;
            }
    
            p {
                font-size: .8rem;
                color: #666;
                line-height: 1.2rem;
            }
    
            #top {
                margin-top: 25px;
            }
    
            #top .info {
                text-align: center;
                margin: 20px 0;
            }
    
            table {
                width: 100%;
                border-collapse: collapse;
            }
    
            td {
                padding: 5px 0 5px 15px;
                border: 1px dolif #eee;
            }
    
            .tabletitle {
                font-size: .5rem;
                background: #eee;
            }
    
            .service {
                border-bottom: 1px solid #eee;
            }
    
            .itemtext {
                font-size: .7rem;
            }
    
            #legalcopy {
                margin-top: 15px;
            }
    
            .btn-print {
                float: right;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div id="back-wrap">
        </div>
        <div id="receipt">
            <center>
                <h3 class="legal"><strong>Produk</strong></h3>
            </center>
    <div id="bot">
        <div id="table">
            <table>
                <tr class="tabletitle">
                    <td class="item">
                        <h2>No</h2>
                    </td>
                    <td class="item">
                        <h2>Produk</h2>
                    </td>
                    <td class="item">
                        <h2>Harga</h2>
                    </td>
                    <td class="item">
                        <h2>Stok</h2>
                    </td>
                </tr>
                @php
                    $no = 1;
                @endphp
                @foreach ($product as $data)
                    <tr class="service">
                        <td class="tableitem">
                            <h2 class="">{{ $no++ }}</h2>
                        </td>
                        <td class="tableitem">
                            <h2 class="">{{ $data->nama_produk }}</h2>
                        </td>
                        <td class="tableitem">
                            <h2 class="">{{ $data->harga }}</h2>
                        </td>
                        <td class="tableitem">
                            <h2 class="">{{ $data->stok }}</h2>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
</body>
    {{-- <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10px" class="text-center">No</th>
                    <th style="width: 10px" class="text-center">Produk</th>
                    <th style="width: 10px" class="text-center">Harga</th>
                    <th style="width: 10px" class="text-center">Stok</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($results as $result)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $result->nama_produk }}</td>
                    <td class="text-right">{{ $result->harga }}</td>
                    <td class="text-center">{{ $result->stok }}</td>
                    <td class="text-center">
                        <!-- Tambahkan tombol aksi di sini sesuai kebutuhan -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</head> --}}