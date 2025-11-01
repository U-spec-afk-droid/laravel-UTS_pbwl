<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel - Halaman Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        
        body { background-color: #fff; margin: 0; padding: 0; }
        .navbar { 
            background-color: #f8f9fa; 
            padding: 12px 30px; 
            box-shadow: 0 1px 3px rgba(0,0,0,0.1); 
        }
        
        .navbar-text-custom { 
            font-weight: 600; 
            color: #000; 
            margin: 0;
            font-size: 1.20rem; 
        }

        .container { margin-top: 10px; padding: 0 70px; }
        
        .halaman-judul { 
            font-size: 2.1rem; 
            font-weight: 700; 
            color: #000; 
            margin-bottom: 0px; 
        }
        
        .btn-primary { background-color: #0d6efd; border: none; }
        .btn-primary:hover { background-color: #0b5ed7; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 5px; }

        .table-solid { width: 100%; border-collapse: collapse; border: 1px solid #dee2e6; }
        .table-solid th, .table-solid td { padding: 8px; text-align: center; border: 1px solid #dee2e6; }
        .table-solid thead { background-color: #4a90e2; color: white; font-weight: bold; }
        .table-solid tbody tr:nth-child(odd) { background-color: #d9e6ff; }
        .table-solid tbody tr:nth-child(even) { background-color: #b6cffb; }
        .table-solid tbody tr:hover { background-color: #8cbbff !important; cursor: pointer; }

    </style>
</head>
<body>

    <nav class="navbar"> 
        <div class="container-fluid d-flex justify-content-between align-items-center px-0"> 
            
            <span class="navbar-text-custom">UTS Laravel</span> 
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> 
            </button>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                </div>
        </div>
    </nav>

    <div class="container">
        <div class="top-bar">
            <span class="halaman-judul">Halaman Produk</span> 
            <a href="{{ url('/produk/tambah') }}" class="btn btn-primary">Tambah Produk</a>
        </div>

        <table class="table-solid">
            <thead>
                <tr>
                    <th style="width: 20%;">Kode Produk</th>
                    <th style="width: 30%;">Nama Produk</th>
                    <th style="width: 25%;">Jenis Produk</th>
                    <th style="width: 25%;">Harga</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($produk); $i++)
                    <tr>
                        <td>{{ $produk[$i]['kode'] }}</td>
                        <td>{{ $produk[$i]['nama'] }}</td>
                        <td>{{ $produk[$i]['jenis'] }}</td>
                        <td>{{ number_format($produk[$i]['harga'], 0, ',', '.') }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>