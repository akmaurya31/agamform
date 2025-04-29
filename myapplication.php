<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirect to Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-4">
                        <h3 class="card-title text-center mb-4 text-primary">Enter Application Registration Number : </h3>

                        <form action="printeform_open1.php" method="GET">
                            <div class="mb-3">
                                <label for="nextCid" class="form-label">Registration Number</label>
                                <input type="text" class="form-control" id="nextCid" name="nextCid" placeholder="Enter  e.g. 901340023" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Go to Print Application Form</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap JS (optional, if you use dropdowns or modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
