<?php
    require_once '../controllers/UserController.php';

    $user = new UserController;
    $users = $user->all();
?>
<!DOCTYPE html>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Football News | Dashboard</title>
    <link rel = "stylesheet" href="../css/dashboard_style.css">
</head>

<body>


    <div class="sidebar">
        <div class="sidebar-brand">
        <div class="logo">
                <a href="index.php"><h3>Football News</h3></a>
            </div>
        </div>
    
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" class="active"><span class="la-dashboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="dashboard_create.php"><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="dashboard_menu.php"><span class="menu"></span>
                    <span>Menu</span></a>
                </li> 
                <li>
                    <a href="dashboard_news.php"><span class="news"></span>
                    <span>News</span></a>
                </li> 
                <li>
                    <a href="dashboard_contact.php"><span class="feedback"></span>
                    <span>Feedback</span></a>
                </li>
            </ul>
        </div>
    </div>

        <div class="main-content">
            <header>
                <h2>
                    <label for="">
                        <span class="las-la-bars"></span>
                    </label>
                      Dashboard
                </h2>

                <div class="user-wrapper">
                    <img src="../images/wall.jpg" width="40px" height="30px" alt=""> 
                <div>
                    <h4> <a href="dashboard_create.php"><?php echo $_SESSION['name']; ?> </h4>
                    <small><a href=Account.php>Log out</a></small>
                </div>
                </div>
            </header>

            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>5400</h1>
                            <span>Readers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>20</h1>
                            <span>Projects</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>74</h1>
                            <span>Orders</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>600k</h1>
                            <span>Fans</span>
                        </div>
                        <div>
                            <span class="las la-google-wallet"></span>
                        </div>
                    </div>
                </div>

                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Projects</h3>
                                <button><a href="dashboard_news.php" style="color: white">See all the latest news</button></a>
                            </div>
                
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thread>
                                            <tr>
                                                <td>Project Title</td>
                                                <td>Department</td>
                                                <td>Status</td>
                                            </tr>
                                        </thread>
                                        <tbody>
                                            <tr>
                                                <td>UI/UX Design</td>
                                                <td>Our Team</td>
                                                <td>
                                                    <span class="status purple"></span>
                                                    review
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web development</td>
                                               <td> Fronted</td>
                                               <td>
                                                   <span class="status pink"></span>
                                                    in progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ushop app</td>
                                                <td>Mobile Team</td>
                                                <td>
                                                    <span class="status orange"></span>
                                                    pending
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                        <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>Our Team</h3>
                                <button><a href="dashboard_create.php" style="color: white">See all users</button></a>
                            </div>

                            
                            
                            
                            <div class="card-body">
                                    <div class="customer">
                                        <div class="info">
                                            <img src="../images/wall.jpg" width="40px" height="40px" alt="">
                                            <div>
                                                <h4>Bashkim Saqipi</h4>
                                                <small>Ceo</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="customer">
                                        <div class="info">
                                            <img src="../images/wall.jpg" width="40px" height="40px" alt="">
                                            <div>
                                                <h4>Dita Ibrahimi</h4>
                                                <small>Co-Partner</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="customer">
                                        <div class="info">
                                            <img src="../images/wall.jpg" width="40px" height="40px" alt="">
                                            <div>
                                                <h4>Qendrim Jashanica</h4>
                                                <small>Co-Partner</small>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </main>
</body>
 </html>