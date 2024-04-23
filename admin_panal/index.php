<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="/admin_panal/admin_panal/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="/admin_panal/index.php">Attack<snap>Spectra</snap></a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin_panal/index.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/index.html" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Retour To Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#favoritegame" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-gamepad pe-2"></i> Add Link Attack
                        </a>
                    </li>
                    <ul id="favoritegame" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/admin_panal/add_attacklink.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin_panal/index.php#favoritegame" class="sidebar-link">Click Here To Show All Attack Link</a>
                        </li>
                    </ul>

                    <!-- <a href="#" class="sidebar-link collapsed" data-bs-target="#digitalcodes" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-digital-tachograph pe-2"></i> Add Digital Codes
                    </a>
                    <ul id="digitalcodes" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/admin_panal/add_degital.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin_panal/admin_panal/index.php#digitalcodes" class="sidebar-link">Click Here To Show All Digital Codes</a>
                        </li>
                    </ul> -->

                    <!-- <a href="#" class="sidebar-link collapsed" data-bs-target="#giftcode" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-gift pe-2"></i> Add Gift Cards
                    </a>
                    <ul id="giftcode" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/admin_panal/add_giftcard.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin_panal/admin_panal/index.php#giftcode" class="sidebar-link">Click Here To Show All Gift Codes</a>
                        </li>
                    </ul>
 -->
                    <!-- <a href="#" class="sidebar-link collapsed" data-bs-target="#subscriptions" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-stream pe-2"></i> Add Subscriptions
                    </a>
                    <ul id="subscriptions" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/admin_panal/add_subscription.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin_panal/admin_panal/index.php#subscriptions" class="sidebar-link">Click Here To Show All Subscriptions</a>
                        </li>
                    </ul> -->

                    <!-- <a href="#" class="sidebar-link collapsed" data-bs-target="#pcgame" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-laptop pe-2"></i> Add PC Game
                    </a>
                    <ul id="pcgame" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/admin_panal/add_pcgame.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin_panal/admin_panal/index.php#pcgame" class="sidebar-link">Click Here To Show All Pc Games</a>
                        </li>
                    </ul> -->

                    <!-- <a href="#" class="sidebar-link collapsed" data-bs-target="#xboxgame" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-xbox pe-2"></i> Add Xbox Game
                    </a>
                    <ul id="xboxgame" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/admin_panal/add_xboxgames.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin_panal/admin_panal/index.php#xboxgame" class="sidebar-link">Click Here To Show All Xbox Game</a>
                        </li>
                    </ul> -->

                    <!-- <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pcaccount" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-desktop-alt pe-2"></i> Add Pc Account
                        </a>
                        <ul id="pcaccount" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="/admin_panal/add_pcaccount.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin_panal/admin_panal/index.php#pcaccount" class="sidebar-link">Click Here To Show All Pc Accounts</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- <a href="#" class="sidebar-link collapsed" data-bs-target="#xboxaccount" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-gamepad pe-2"></i> Add Xbox Account
                    </a>
                    <ul id="xboxaccount" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/admin_panal/add_xboxaccount.php" target="_blank" class="sidebar-link">Click Here To Add</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin_panal/admin_panal/index.php#xboxaccount" class="sidebar-link">Click Here To Show All Xbox Accounts</a>
                        </li>
                    </ul> -->
                     
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
                            Auth
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="/index.html" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/index.html" class="sidebar-link">Register</a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- <li class="sidebar-header">
                        Multi Level Menu
                    </li>
                     -->
                    <!--                     
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-share-nodes pe-2"></i>
                            All Users
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                         
                        </ul>
                    </li> -->

                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                 <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="/index.html" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div> 
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back,</h4>
                                                <p class="mb-0">Admin Dashboard, Attack<snap>Spectra</snap>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                What You Find In This Page
                                            </h4>
                                            <p class="mb-2">
                                                You can see and add/delete modifications for:
                                            </p>
                                            <div class="mb-0">
                                                <a href="/admin_panal/index.php#favoritegame">
                                                    <span class="badge text-success me-2">
                                                        1
                                                    </span>
                                                    <span class="text-muted">
                                                        Attack Link
                                                    </span>
                                                </a>
                                            </div>
                                            <!--                                             
                                            <div class="mb-0">
                                                <a href="/admin_panal/admin_panal/index.php#digitalcodes">
                                                    <span class="badge text-success me-2">
                                                        2
                                                    </span>
                                                    <span class="text-muted">
                                                        Digital Codes
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="mb-0">
                                                <a href="/admin_panal/admin_panal/index.php#giftcode">
                                                    <span class="badge text-success me-2">
                                                        3
                                                    </span>
                                                    <span class="text-muted">
                                                        Gift Cards
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="mb-0">
                                                <a href="/admin_panal/admin_panal/index.php#subscriptions">
                                                    <span class="badge text-success me-2">
                                                        4
                                                    </span>
                                                    <span class="text-muted">
                                                        Subscriptions
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="mb-0">
                                                <a href="/admin_panal/admin_panal/index.php#pcgame">
                                                    <span class="badge text-success me-2">
                                                        5
                                                    </span>
                                                    <span class="text-muted">
                                                        PC Games
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="mb-0">
                                                <a href="/admin_panal/admin_panal/index.php#xboxgame">
                                                    <span class="badge text-success me-2">
                                                        6
                                                    </span>
                                                    <span class="text-muted">
                                                        Xbox Games
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="mb-0">
                                                <a href="/admin_panal/admin_panal/index.php#pcaccount">
                                                    <span class="badge text-success me-2">
                                                        7
                                                    </span>
                                                    <span class="text-muted">
                                                        PC Accounts
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="mb-0">
                                                <a href="/admin_panal/admin_panal/index.php#xboxaccount">
                                                    <span class="badge text-success me-2">
                                                        8
                                                    </span>
                                                    <span class="text-muted">
                                                        Xbox Accounts
                                                    </span>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Element: Favorite Games -->
                    <div class="card border-0" id="favoritegame">
                        <div class="card-header">
                            <h5 class="card-title">
                                Attack Link
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Here You See Info of The Attack Link
                            </h6>
                            <h6 class="card-subtitle text-muted">
                                User Use The Last Link
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Modifyte</th>
                                            <th scope="col">Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Establish database connection
                                        include("database.php");

                                        // Fetch europeanaddress data from the database
                                        $sql = "SELECT * FROM attack";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // Output data of each row for Attack Link
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $row["id"] . "</th>"; // Changed
                                                echo '<td><a href="' . $row["link"] . '">Show Link</a></td>';
                                                echo '<td><div style="width:auto; color:#f9f9f9;"><a href="/admin_panal/update_attacklink.php?id=' . $row["id"] . '" rel="noopener noreferrer" style="color:#f9f9f9; font-family:\'Georgia\', \'Times New Roman\', Times, serif; font-weight:bolder;" onclick="return confirm(\'Are You Sure To Modify This Attack Link\');">Modify This Attack Link</a></div></td>';
                                                echo '<td><div style="width:auto; color:#f9f9f9;"><a href="/admin_panal/delete_attacklink.php?id=' . $row["id"] . '" rel="noopener noreferrer" style="color:#f9f9f9; font-family:\'Georgia\', \'Times New Roman\', Times, serif; font-weight:bolder;" onclick="return confirm(\'Are You Sure To Delete This Attack Link\');">Delete This Attack Link </a></div></td>';
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'>No Attack Link found</td></tr>";
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>





            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>Attack<snap>Spectra</snap></strong>
                                </a>
                            </p>
                        </div>
                        <!-- <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Terms</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Booking</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>