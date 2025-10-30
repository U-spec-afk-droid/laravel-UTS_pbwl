<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Laravel - Halaman Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #fff;
      overflow-x: hidden;
    }

    .container-fluid {
      display: flex;
      flex-direction: row;
      width: 100%;
      height: 100vh;
    }

    
    .gray-box {
      background-color: #b0b6bc; 
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      padding-left: 40px; 
      padding-top: 20px;  
    }

    .gray-box h5 {
      font-size: 22px;
      font-weight: 500;
      margin-bottom: 15px;
      color: #000;
    }

    .gray-box h1 {
      font-size: 50px;
      font-weight: 700;
      color: #000;
      margin: 0;
      margin-left: 120px; 
    }

    
    .sidebar {
      width: 260px;
      background-color: #fff;
      padding: 20px 25px;
      display: flex;
      flex-direction: column;
      justify-content: start;
      margin: 0;
      border-left: none; 
    }

    .gray-box,
    .sidebar {
      margin: 0;
      border: none;
    }

    .sidebar h5 {
      font-weight: bold;
      margin-bottom: 25px;
    }

    .nav-link {
      color: #000;
      padding: 0;
      margin-bottom: 10px;
    }

    .btn-outline-success {
      padding: 4px 10px;
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <!-- Kotak abu -->
    <div class="gray-box">
      <h5>UTS Laravel</h5>
      <h1>Halaman Home</h1>
    </div>

    <!-- Sidebar kanan -->
    <div class="sidebar">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h5>UTS Laravel</h5>
        <button class="btn-close"></button>
      </div>

      <ul class="nav flex-column mb-4">
        <li class="nav-item">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Produk</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</body>
</html>
