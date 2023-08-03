<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/homePage.css">
</head>
<body>
    <!-- Main-page -->
    <div class="Home-container">
        <div class="navigation active">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-no-smoking"></ion-icon></span>
                        <span class="title">Brand Name</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../Pages/student.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">Student</span>
                    </a>
                </li>
                <li>
                    <a href="../Pages/Message.php">
                        <span class="icon"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                <a href="../database/return_database.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="../Pages/password.php">
                        <span class="icon"><ion-icon name="shield-outline"></ion-icon></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="../session/logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">SignOut</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Toogle-section -->
        <div class="HomeMain active">
            <div class="topbar">
                <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <!-- Search-section -->
            <div class="search">
                <label>
                    <input type="text" placeholder="Seach Here">
                <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <!-- user -->
            <div class="user">
                <img src="../icons/user-icon.png" alt="User">
            </div>
            </div>
            
            <!-- homepage top-card-section -->
            <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Testing-1</div>
                </div>
                <div class="iconBox">
                <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">90</div>
                    <div class="cardName">Testing-2</div>
                </div>
                <div class="iconBox">
                <ion-icon name="help-circle-outline"></ion-icon>               
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">100</div>
                    <div class="cardName">Testing-3</div>
                </div>
                <div class="iconBox">
                <ion-icon name="help-outline"></ion-icon>               
            </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">15</div>
                    <div class="cardName">Testing-4</div>
                </div>
                <div class="iconBox">
                <ion-icon name="alert-outline"></ion-icon>            
            </div>
            </div>
            </div>
            <!-- homepage Middle-details-section -->
            <!-- change this section/ table -->
            <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Entry</h2>
                    <div class="Entry-option">
                    <a href="../database/student_database.php" class="view-link">View All</a>
                    <a href="../Pages/Add_student.php" class="add-link">Add Student</a>
                    </div>
                </div>

            <table>
                    <thead>
                        <tr>
                            <th>Head-one</th>
                            <th>Head-two</th>
                            <th>Head-Three</th>
                            <th>Head-Four</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Value-One</td>
                            <td>Value-Two</td>
                            <td>Value-Three</td>
                            <td>Value-Four</td>
                            <td><span class="status Studying">Studying</span></td>
                        </tr>

                        <tr>
                            <td>Value-One</td>
                            <td>Value-Two</td>
                            <td>Value-Three</td>
                            <td>Value-Four</td>
                            <td><span class="status Studying">Studying</span></td>
                        </tr>
                        <tr>
                            <td>Value-One</td>
                            <td>Value-Two</td>
                            <td>Value-Three</td>
                            <td>Value-Four</td>
                            <td><span class="status Studying">Studying</span></td>
                        </tr>
                        <tr>
                            <td>Value-One</td>
                            <td>Value-Two</td>
                            <td>Value-Three</td>
                            <td>Value-Four</td>
                            <td><span class="status Studying">Studying</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../javascript/homePage.js"></script>
</body>
</html>
