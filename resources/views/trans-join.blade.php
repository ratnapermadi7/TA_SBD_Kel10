<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Table</title>
    <!-- Include Bootstrap CSS (you can replace the CDN link with your local file if needed) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TA SBD KEL 10</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pelanggan-index')}}">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produk-index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('merk-index')}}">Merk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('trans-index')}}">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <div class="container mt-5">
        <form method="GET" action="{{ route('trans-search') }}" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="keyword"
                    value="{{ request('keyword') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <h2>Transaction Table</h2>
        <a type="button" class="btn btn-info" href="{{route('trans-create')}}">ADD TRANSAKSI</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Transaction</th>
                    <th>Transaction Date</th>
                    <th>Nama Barang</th>
                    <th>Nama Merk</th>
                    <th>Item Amount</th>
                    <th>Nama Pelanggan</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $row)
                <tr>
                    <th scope="row">{{$row->id_transaction}}</th>
                    <td>{{$row->transaction_date}}</td>
                    <td>{{$row->nama_barang}}</td>
                    <td>{{$row->nama_merk}}</td>
                    <td>{{$row->item_amount}}</td>
                    <td>{{$row->nama_pelanggan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS (you can replace the CDN link with your local file if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
