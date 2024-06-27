<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons (optional) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .card-body {
      position: relative; /* Ensure relative positioning for absolute elements */
    }
    .vr {
      position: absolute; /* Position the icon absolutely within the card body */
      top: 10px; /* Adjust top position as needed */
      right: 10px; /* Adjust right position as needed */
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Example card for Total Users -->
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Users</h5>
          <p class="card-text">1000</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Example card for Total Polls -->
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Polls</h5>
          <p class="card-text">500</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
          </div>
        </div>
      </div>
    </div>


    <!--- Total Logs --> 
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Logs</h5>
          <p class="card-text">500</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
          </div>
        </div>
      </div>
    </div>

    <!---Total Admins --->
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Admins</h5>
          <p class="card-text">500</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
          </div>
        </div>
      </div>
    </div>


    <!--- Total Results --> 
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Results</h5>
          <p class="card-text">500</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
          </div>
        </div>
      </div>
    </div>

    <!---- Total Reports-->
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Total Reports</h5>
          <p class="card-text">500</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Add more cards as needed -->
  </div>
</div>

</body>
</html>
