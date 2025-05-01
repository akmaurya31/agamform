<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body style="background-color: #f8f9fa;">

  <div class="container py-5">
    <div class="text-center mb-4">
      <img src="https://students.mdsvti.com/Fran/eformfol/logo.png" alt="Logo" class="img-fluid" style="max-height: 100px;">
      <h2 class="mt-3">Student Services</h2>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Registration Card -->
      <div class="col">
        <div class="card h-100 shadow text-center">
          <div class="card-body">
            <h5 class="card-title">Registration</h5>
            <p class="card-text">Apply for a new registration.</p>
            <a href="registration.php" class="btn btn-primary">Register Now</a>
          </div>
        </div>
      </div>

      <!-- View Application Card -->
      <div class="col">
        <div class="card h-100 shadow text-center">
          <div class="card-body">
            <h5 class="card-title">View Application</h5>
            <p class="card-text">Check your application details.</p>
            <a href="view_application.php" class="btn btn-success">View Application</a>
          </div>
        </div>
      </div>

      <!-- Print Admit Card -->
      <div class="col">
        <div class="card h-100 shadow text-center">
          <div class="card-body">
            <h5 class="card-title">Print Admit Card</h5>
            <p class="card-text">Download your admit card.</p>
            <a href="print_form.php" class="btn btn-danger">Print Admit Card</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  
  </div>

  <script>
    function showViewForm() {
      document.getElementById('viewApplicationForm').style.display = 'block';
      window.scrollTo({
        top: document.getElementById('viewApplicationForm').offsetTop - 20,
        behavior: 'smooth'
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

 