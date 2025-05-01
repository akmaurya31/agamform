<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Services - Print Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-section {
      max-width: 500px;
      margin: auto;
    }
  </style>
</head>
<body>

  <!-- Banner -->
  <div class="text-center py-4 bg-white shadow-sm">
    <img src="https://students.mdsvti.com/Fran/eformfol/logo.png" alt="Logo" class="img-fluid" style="max-height: 100px;">
    <h2 class="mt-3">Print Application Services</h2>
  </div>

  <!-- Print Number Form Section -->
  <div id="printForm" class="mt-5 form-section">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="card-title text-center mb-4">Enter Print Number</h4>
        <form action="print_admit.php" method="GET">
          <div class="mb-3">
            <label for="printNumber" class="form-label">Print Number</label>
            <input type="text" class="form-control" id="nextCid " name="nextCid" placeholder="Enter your Print Number" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-danger w-100">Print</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
