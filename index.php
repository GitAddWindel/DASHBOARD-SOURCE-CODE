<?php
$choices = array(
    'Dashboard' => 'dashboard.php',
    'Poll Management' => 'poll_management.php',
    'User Management' => 'user_management.php',
    'Results' => 'results.php',
    'Reports' => 'reports.php',
    'Logs' => 'logs.php',
    'Settings' => 'settings.php',
    'Account' => 'account.php'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <style>
    .container {
      margin-top: 20px;
    }
    .asidebar {
      float: left;
      width: 20%;
    }
    #content {
      float: left;
      width: 75%;
      margin-left: 5%;
    }
    .profile img {
      border-radius: 50%;
    }
  </style>
</head>
<body>

<div class="container">
  <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
      <span class="fs-4">Simple Voting System</span>
    </a>
    <div class="profile dropdown">
  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="/image" alt="profile" width="50" height="50" class="rounded-circle">
  </a>
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
    <li><a class="dropdown-item" href="#">Profile</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Logout</a></li>
  </ul>
</div>

  </header>

  <div class="asidebar">
    <ul class="nav nav-pills flex-column">
      <?php foreach ($choices as $name => $link) : ?>
        <li class="nav-item">
          <a class="nav-link" href="#" data-file="<?php echo $link; ?>"><?php echo $name; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div id="content">
    <!-- Content will be loaded here -->
  </div>
</div>

<script>
  $(document).ready(function() {
    $('a[data-file]').click(function(e) {
      e.preventDefault();
      var file = $(this).data('file');
      $('#content').load(file);
    });

    // Load the default content (Dashboard) on page load
    $('#content').load('dashboard.php');
  });
</script>

</body>
</html>
