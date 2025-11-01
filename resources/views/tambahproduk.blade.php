<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel - Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body { background-color: #fff; margin: 0; padding: 0; }
        .navbar { 
            background-color: #f8f9fa; 
            padding: 10px 40px; 
            box-shadow: 0 1px 3px rgba(0,0,0,0.1); 
        }
        .navbar-text-custom { 
            font-weight: 600; 
            color: #000; 
            margin: 0;
            font-size: 1.20rem; 
        }
        .container { margin-top: 20px; padding: 0 70px; }
        
        .form-title { 
            font-size: 2.2rem; 
            font-weight: 600; 
            color: #000; 
            margin-bottom: 25px; 
        }
        
        .form-group label {
            font-weight: 600;
            color: #343a40;
            margin-bottom: 5px;
        }
        .form-control, .form-select {
            border-radius: 0.25rem; 
            border: 1px solid #ced4da;
            padding: 0.375rem 0.75rem; 
            height: calc(1.5em + 0.75rem + 1px); 
        }
        
        .btn-success-custom {
            background-color: #28a745; 
            border-color: #28a745;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            transition: background-color 0.15s ease-in-out;
        }
        .btn-success-custom:hover {
            background-color: #218838; 
            border-color: #1e7e34;
        }
        .row-gap-2 {
            gap: 1rem 0; 
        }

        .form-select option:hover {
            background-color: #d9e6ff !important; 
            color: #4db2e5 !important; 
        }

        .form-select option:checked {
            background-color: #b6cffb !important; 
            color: #000000 !important;
        }

        .form-select:focus option:hover {
            background-color: #6187cd !important;
        }
    </style>
</head>
<body>

    <nav class="navbar"> 
        <div class="container-fluid d-flex justify-content-between align-items-center px-0"> 
            <span class="navbar-text-custom">UTS Laravel</span> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="navbarContent"></div>
        </div>
    </nav>

    <div class="container">
        <h1 class="form-title">Form Tambah Produk</h1>
        
        <form>
            <div class="row row-gap-3 mb-3">
                <div class="col-md-4">
                    <label for="kodeProduk" class="form-label">Kode Produk</label>
                    <input type="text" class="form-control" id="kodeProduk" placeholder="Input Kode Produk">
                </div>
                <div class="col-md-4">
                    <label for="namaProduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" placeholder="Input Nama Produk">
                </div>
               <div class="col-md-4">
                 <label for="jenisProduk" class="form-label">Jenis Produk</label>

                 <select class="form-select" id="jenisProduk">
                     <option selected disabled>Pilih Produk</option> 

                      @for ($i = 0; $i < count($jenis_produk); $i++)
                          <option value="{{ $jenis_produk[$i] }}">{{ $jenis_produk[$i] }}</option>
                      @endfor
                    </select>
                </div>
            </div>

            <div class="row row-gap-3 mb-4">
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Input Harga">
                </div>
                <div class="col-md-6 d-flex align-items-end">
                    <button type="submit" class="btn btn-success-custom w-100">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>