<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['admin-name'])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--this external file to the icon in page-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="CSS/page-of-accountant.css">
    <title>Hospital Information System</title>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="logo_image"> <img src="css/images/logo2.png" alt="HIS Logo" width="80" height="80"> </div>
        <a href="#" class="logo">Hospital Information System</a>
        <nav class="navigation">
            <a href="#map">The Map</a>
            <a href="#Patient-Search">Patient Search</a>
            <a href="#Staff-Search">Staff Search</a>
            <a href="#contact">Contact</a>
            <a href="Policies.html">Policies</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <!-- the main -->
    <section class="main">
        <div>
            <h2>Hello, Accountant: <strong><?php echo $_SESSION['admin-name']; ?><br><span>Hospital Information System</span></h2>
            <h3>This system was created to help hospitals manage their internal affairs and assist hospital staff</h3>
            <a href="#schedule" class="main-btn">Manage  my work</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>

    <!-- the map -->
    <div class="map">
        <h2 class="map_text" id="map">Hospital Map</h2>
        <img class="map_img" src="CSS/Images/hospital_map2.png" alt="Not Found" width="1300">
    </div>

    <!-- patient background -->
    <div class="patient-background" id="Patient-Search">

    <!-- search bar -->
        <div id="patient-search-bar">
            <form class="patient-search-bar">
                <label for="search">Patient search:</label>
                <input type="text" placeholder="Search by Room or ID">
                <button class="patient-button" type="submit">Search</button>
            </form>
        </div>

    <!-- patient information -->
    <section class="patient-information">
        <h2>Patient Information</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Age</th>
                    <th>Patient bill</th>
                    <th>More Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ahmed Ali</td>
                    <td>101</td>
                    <td>45</td>
                    <td>1.750</td>
                    <td><a href="patient-information.html">Click here</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mohamed Abdallah</td>
                    <td>102</td>
                    <td>30</td>
                    <td>10.000</td>
                    <td><a href="patient-information.html">Click here</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sara Ayman</td>
                    <td>103</td>
                    <td>50</td>
                    <td>3.000</td>
                    <td><a href="patient-information.html">Click here</a></td>
                </tr>
            </tbody>
        </table>
    </section>
</div>


    <!-- Add bills -->
    <section class="add-bills">
        <h2>Add Bills</h2>
        <form>
            <fieldset>
                <legend>Patient Information</legend>
                <label for="id">ID:</label>
                <input type="text" id="id" name="id">
            </fieldset>

            <fieldset>
                <legend>Bills Information</legend>
                <label for="bill-amount">Bill Amount:</label>
                <input type="number" id="bill-amount" name="bill-amount" required><br>

                <label for="bill-description">Bill Description:</label>
                <input type="text" id="bill-description" name="bill-description" required><br>

                <label for="bill-date">Bill Date:</label>
                <input type="date" id="bill-date" name="bill-date" required><br>
            </fieldset>

            <button type="submit">Add notes</button>
        </form>
    </section>

    <!-- staff section background -->
    <div class="staff-background" id="Staff-Search">
        <!-- staff search bar -->
        <div id="staff-search-bar">
            <form class="staff-search-bar">
                <label for="search">Staff search:</label>
                <input type="text" placeholder="Search by ID">
                <button type="submit">Search</button>
            </form>
        </div>
    <!-- staff information -->
        <section class="staff-information">
            <h2>Staff Information</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>The Department</th>
                        <th>Age</th>
                        <th>Salary</th>
                        <th>More Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmed Ali</td>
                        <td>Male</td>
                        <td>Doctor</td>
                        <td>45</td>
                        <td>25.000 $</td>
                        <td><a href="staff-information.html">Click here</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mohamed Abdallah</td>
                        <td>Male</td>
                        <td>Admin</td>
                        <td>30</td>
                        <td>10.000 $</td>
                        <td><a href="patient-information.html">Click here</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sara Ayman</td>
                        <td>Female</td>
                        <td>Nurse</td>
                        <td>50</td>
                        <td>15.000 $</td>
                        <td><a href="patient-information.html">Click here</a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <!-- The Contact -->
    <section class="cards contact" id="contact">
        <h2 class="title">Contact the Administration</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>0122222222</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>HIS@gmail.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p class="footer-title">Copyrights @ <span>HIS</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

</body>
</html>