<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Services - Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .banner {
      background: url('https://students.mdsvti.com/Fran/eformfol/logo.png') no-repeat center center;
      background-size: contain;
      height: 150px;
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
    <h2 class="mt-3">Registration Student Services</h2>
  </div>

  <!-- View Application Form Section -->
  <div id="viewApplicationForm" class="mt-5 form-section">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="card-title text-center mb-4">Enter Registration Number</h4>
        <form action="printeform_open1.php" method="GET">
          <div class="mb-3">
            <label for="regNumber" class="form-label">Registration Number</label>
            <input type="text" class="form-control" id="nextCid" name="nextCid" placeholder="Enter your Registration Number" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success w-100">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional Script for Auto-scroll (if needed later) -->
  <script>
    function showViewForm() {
      document.getElementById('viewApplicationForm').style.display = 'block';
      window.scrollTo({
        top: document.getElementById('viewApplicationForm').offsetTop - 20,
        behavior: 'smooth'
      });
    }
  </script>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
