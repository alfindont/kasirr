<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Penjualan</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
    <div id="receipt" style="box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.5); padding: 20px; margin: 30px auto 0 auto; width: 500px; background: #fff;">
        <center id="top">
            <h2 style="font-size: 18px; margin-top: 25px;">Pindz Kasi</h2>
        </center>
        <div id="mid">
            <div class="info" style="text-align: center; margin: 20px 0;">
                <p style="font-size: 14px; color: #666;">Name Customer : {{  $pahala->customers->name }}</p>
            </div>
        </div>
        <div id="bot">
            <div id="table">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="background: #eee;">
                        <td style="padding: 8px 20px; text-align: left;">
                            <h2 style="font-size: 14px;">Product Name</h2>
                        </td>
                        <td style="padding: 8px 20px; text-align: left;">
                            <h2 style="font-size: 14px;">Price</h2>
                        </td>
                        <td style="padding: 8px 20px; text-align: left;">
                            <h2 style="font-size: 14px;">Qty</h2>
                        </td>
                        <td style="padding: 8px 20px; text-align: right;">
                            <h2 style="font-size: 14px;">Sub Total</h2>
                        </td>
                    </tr>
                    @foreach($pahala->products as $item)
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 8px 20px; text-align: left;">
                                <p style="font-size: 12px;">{{$item->name }}</p>
                            </td>
                            <td style="padding: 8px 20px; text-align: left;">
                                <p style="font-size: 12px;">Rp {{ number_format($item->price, 2, ',', '.') }}</p>
                            </td>
                            <td style="padding: 8px 20px; text-align: left;">
                                <p style="font-size: 12px;">{{  $item->pivot->quantity }}</p>
                            </td>
                            <td style="padding: 8px 20px; text-align: right;">
                                <p style="font-size: 12px;">Rp {{ number_format($item->pivot->totalPrice, 2, ',', '.') }}</p>
                            </td>
                        </tr>
                    @endforeach
                    <tr style="background: #eee;">
                        <td></td>
                        <td></td>
                        <td>
                            <h2 style="font-size: 14px;">Total Price</h2>
                        </td>
                        <td style="text-align: right;">
                            <h2 style="font-size: 14px;">Rp {{ number_format($pahala->total_purchase, 2, ',', '.') }}</h2>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="legalcopy" style="margin-top: 15px; text-align: center;">
                <p>{{ date('d-m-Y') }}</p>
                <p style="font-size: 12px;"><strong>Terima kasih atas pembelian Anda!</strong></p>
            </div>
        </div>
    </div>
</body>
</html>



{{-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .total-row {
            font-weight: bold;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .p {
            text-align: start;
        }
        .tq{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Bukti Pembelian</h1>
    </div>
    <div>
            <p>Nama Pelanggan: {{ $pahala->customers->name }}</p>
            <p>Alamat: {{ $pahala->customers->address}}</p>
            <p>No. Telepon: {{ $pahala->customers->phone_number }}</p>
        <p>Tanggal: {{ date('d-m-Y') }}</p>
    </div>
    <table>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Price</th>
                </tr>
        <tbody>
            @foreach ($pahala->products as $item)
            <tr>
                <td>{{ $item->name}}</td>
                <td>{{ $item->pivot->quantity}}</td>
                <td>{{ $item->price}}</td>
                <td>{{ $item->pivot->totalPrice}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <p><b>Created By : {{ $pahala->users->name}}</b> </p>
    </div>
</body> --}}