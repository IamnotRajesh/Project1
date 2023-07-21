<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Task Dashboard</title>
    <link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <!-- left start -->
        <div class="left">
            <!-- header start -->
            <header>
                <!-- logo start -->
                <div class="logo">
                    <h2>My Task</h2>
                    <div class="close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="home.html">
                                <span class="material-symbols-outlined full">
                                    dashboard
                                    </span>
                                    <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="project.html">
                                <span class="material-symbols-outlined full">
                                    check_box
                                    </span>
                                    <span class="title">Project</span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="task.html">
                                <span class="material-symbols-outlined full">
                                    task
                                    </span>
                                    <span class="title">My Task</span>
                            </a>
                        </li>
                        <li>
                            <a href="message.html">
                                <span class="material-symbols-outlined full">
                                    chat_bubble
                                    </span>
                                    <span class="title">Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="biling.html">
                                <span class="material-symbols-outlined full">
                                    account_balance_wallet
                                    </span>
                                    <span class="title">My Billing</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
             <div class= "logout">
                        <a href = "home.php" class="active">
                        <span class="material-symbols-outlined full">
                                   Logout
                                    </span>
                                    <span class="title">Logout</span>
                        </a>
            </div>
        </div>
        <div class="right">
            <!-- top start -->
            <div class="top">
                <!-- searchBox start -->
                <div class="searchBox">
                    <h2>Dashboard</h2>
                    <div class="inputBox">
                        <span class="material-symbols-outlined searchOpen">
                            search
                        </span>
                        <input type="text" placeholder="Search...">
                        <span class="material-symbols-outlined searchClose">
                            close
                        </span>
                    </div>
                </div>
                <!-- searchBox end -->
                <!-- user start -->
                <div class="user">
                    <span class="material-symbols-outlined">
                        notifications
                    </span>
                    <div class="userImg">
                        <img src="./user.jpg" alt="user">
                    </div>
                    <h2>Rajesh<br><span>LOGIN</span></h2>
                    <div class="arrow">
                        <span class="material-symbols-outlined">
                            expand_more
                        </span>
                    </div>
                    <div class="toggle">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </div>
                </div>
                <!-- user end -->
            </div>
            <!-- top end -->
            <!--main start-->
            <main>
                <div class="projectCard">
                    <div class="projectTop">
                        <h2>Project Name<br><span>Company Name</span></h2>
                        <div class="projectsDots">
                            <span class="material-symbols-outlined">
                               more_horiz
                            </span>   
                        </div>
                    </div>
                    <div class="projectProgress">
                        <div class="proces">
                            <h2>In Progress</h2>
                        </div>
                        <div class="priority">
                            <h2>High Priority</h2>
                        </div>
                    </div>
                    <div class="groupImg">
                        <a href="#">
                            <img src="./img1.jpg" alt="img1"> 
                        </a>
                        <a href="#" style="--left: -10px;">
                            <img src="./img2.jpg" alt="img2"> 
                        </a>
                        <a href="#" style="--left: -20px;">
                            <img src="./img3.jpg" alt="img3">
                        </a>
                        <a href="#" style="--left: -30px;">
                             <img src="./img4.jpg" alt="img4">
                        </a>
                        <a href="#" style="--left: -40px;">
                             <img src="./img5.jpg" alt="img5"> 
                        </a>
                        <a href="#" style="--left: -50px;">
                            <span class="number">+3</span>
                        </a>
                    </div>
                    <div class="task">
                        <h2>Task Done: <bold>35</bold> / 50</h2>
                        <span class="line"></span>
                    </div>
                    <div class="due">
                        <h2>Due Date: 04 November</h2>
                    </div>
                </div>
                  <!-- projectCard2 start -->
                  <div class="projectCard projectCard2">
                    <div class="projectTop">
                        <h2>Project Name<br><span>Company Name</span></h2>
                        <div class="projectDots">
                            <span class="material-symbols-outlined">
                                more_horiz
                            </span>
                        </div>
                    </div>
                    <div class="projectProgress">
                        <div class="process">
                            <h2>In Progress</h2>
                        </div>
                        <div class="priority">
                            <h2>High Priority</h2>
                        </div>
                    </div>
                    <div class="groupImg">
                        <a href="#">
                             <img src="./img1.jpg" alt="img1"> 
                           </a>
                           <a href="#" style="--left: -10px;">
                            <img src="./img2.jpg" alt="img2"> 
                           </a>
                           <a href="#" style="--left: -20px;">
                             <img src="./img3.jpg" alt="img3"> 
                           </a>
                           <a href="#" style="--left: -30px;">
                              <img src="./img4.jpg" alt="img4">
                           </a>
                           <a href="#" style="--left: -40px;">
                             <img src="./img5.jpg" alt="img5"> 
                           </a>
                           <a href="#" style="--left: -50px;">
                               <span class="number">+3</span>
                           </a>
                    </div>
                    <div class="task">
                        <h2>Task Done: <bold>35</bold> / 50</h2>
                        <span class="line"></span>
                    </div>
                    <div class="due">
                        <h2>Due Date: 25 August</h2>
                    </div>
                </div>
                <!-- projectCard2 end -->

            </main>
        </div>
    </div>
</body>
</html>
