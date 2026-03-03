<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>CMIMS | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../assets/CMIMS_logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-900 to-green-700 min-h-screen flex items-center justify-center">
    <h1 class="text-3xl font-bold text-white">Dashboard</h1>
    <h1>Welcome, <?php echo $_SESSION['User_ID']; ?></h1>
</body>
</html>