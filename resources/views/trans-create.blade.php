<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PRODUKCREATE</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TA SBD KEL 10</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelanggan-index') }}">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk-index') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('merk-index') }}">Merk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('trans-index') }}">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('trans-join') }}">Inner Join</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <!-- Form Transaksi -->
    <form method="POST" enctype="multipart/form-data" action="{{ route('trans-store') }}">
        @csrf
        <h2>Form Transaksi</h2>
        <div class="mb-3">
            <label for="id_transaction" class="form-label">ID Transaction</label>
            <input type="text" class="form-control" id="id_transaction" name="id_transaction">
        </div>
        <div class="mb-3">
            <label for="fk_id_item" class="form-label">ID Item</label>
            <input type="text" class="form-control" id="fk_id_item" name="fk_id_item">
        </div>
        <div class="mb-3">
            <label for="fk_id_pelanggan" class="form-label">ID Pelanggan</label>
            <input type="text" class="form-control" id="fk_id_pelanggan" name="fk_id_pelanggan">
        </div>
        <div class="mb-3">
            <label for="transaction_date" class="form-label">Transaction Date</label>
            <input type="date" class="form-control" id="transaction_date" name="transaction_date">
        </div>
        <div class="mb-3">
            <label for="item_amount" class="form-label">Item Amount</label>
            <input type="text" class="form-control" id="item_amount" name="item_amount">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Link to Bootstrap JavaScript (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
