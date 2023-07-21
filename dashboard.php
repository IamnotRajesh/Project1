<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

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
                            <a href="home.html" class="active">
                                <span class="material-symbols-outlined full">
                                    dashboard
                                    </span>
                                    <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="project.html" class="active">
                                <span class="material-symbols-outlined full">
                                    check_box
                                    </span>
                                    <span class="title">Project</span>
                            </a>
                        </li>
                      
                        <li>
                            <a href="task.html" class="active">
                                <span class="material-symbols-outlined full">
                                    task
                                    </span>
                                    <span class="title">My Task</span>
                            </a>
                        </li>
                        <li>
                            <a href="message.html" class="active">
                                <span class="material-symbols-outlined full">
                                    chat_bubble
                                    </span>
                                    <span class="title">Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="biling.html" class="active">
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
                        <img src="default-avatar.png" alt="user">
                    </div>
                    <h2><span>Admminstrator</span></h2>
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
                    <!-- myTasks start -->
                <div class="myTasks">
                    <!-- tasksHead start -->
                    <div class="tasksHead">
                        <h2>My Tasks</h2>
                        <div class="tasksDots">
                            <span class="material-symbols-outlined">
                                more_horiz
                            </span>
                        </div>
                    </div>
                    <!-- tasksHead end -->
                    <!-- tasks start -->
                    <div class="tasks">
                        <ul>
                            <li>
                                <span class="tasksIconName">
                                    <span class="tasksIcon done">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </span>
                                    <span class="tasksName">
                                        My Task 1
                                    </span>
                                </span>
                                <span class="tasksStar full">
                                    <span class="material-symbols-outlined">
                                        star
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="tasksIconName">
                                    <span class="tasksIcon notDone"></span>
                                    <span class="tasksName">
                                        My Task 2
                                    </span>
                                </span>
                                <span class="tasksStar half">
                                    <span class="material-symbols-outlined">
                                        star
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="tasksIconName">
                                    <span class="tasksIcon notDone"></span>
                                    <span class="tasksName">
                                        My Task 3
                                    </span>
                                </span>
                                <span class="tasksStar half">
                                    <span class="material-symbols-outlined">
                                        star
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="tasksIconName">
                                    <span class="tasksIcon done">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </span>
                                    <span class="tasksName tasksLine">
                                        <underline>My Task 4</underline>
                                    </span>
                                </span>
                                <span class="tasksStar half">
                                    <span class="material-symbols-outlined">
                                        star
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="tasksIconName">
                                    <span class="tasksIcon done">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </span>
                                    <span class="tasksName tasksLine">
                                        My Task 5
                                    </span>
                                </span>
                                <span class="tasksStar full">
                                    <span class="material-symbols-outlined">
                                        star
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="tasksIconName">
                                    <span class="tasksIcon notDone"></span>
                                    <span class="tasksName">
                                        My Task 6
                                    </span>
                                </span>
                                <span class="tasksStar full">
                                    <span class="material-symbols-outlined">
                                        star
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span class="tasksIconName">
                                    <span class="tasksIcon notDone"></span>
                                    <span class="tasksName">
                                        My Task 7
                                    </span>
                                </span>
                                <span class="tasksStar half">
                                    <span class="material-symbols-outlined">
                                        star
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- tasks ens -->
                </div>
                <!-- myTasks end -->
                <div class="timeline">
                    <div class="timelineHead">
                        <h2>TimeLine</h2>
                        <div class="timelineDots">
                            <span class="material-symbols-outlined">
                                more_horiz
                            </span>
                        </div>
                    </div>
                    <div class="timelineVideos">
                        <ul>
                            <li>
                                <span class="videoText">
                                    <span class="material-symbols-outlined full">
                                        slideshow
                                    </span>
                                    <span class="text">Create wireframe</span>
                                </span>
                                <div class="timelineTime">32:54</div>
                            </li>
                            <li>
                                <span class="videoText">
                                    <span class="material-symbols-outlined full">
                                        slideshow
                                    </span>
                                    <span class="text">Logo Design</span>
                                </span>
                                <div class="timelineTime">30:00</div>
                            </li>
                            <li>
                                <span class="videoText">
                                    <span class="material-symbols-outlined full">
                                        slideshow
                                    </span>
                                    <span class="text">Dashboard Design</span>
                                </span>
                                <div class="timelineTime">30:00</div>
                            </li>
                            <li>
                                <span class="videoText">
                                    <span class="material-symbols-outlined full">
                                        slideshow
                                    </span>
                                    <span class="text">Landing Page</span>
                                </span>
                                <div class="timelineTime">30:00</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- calendar start -->
                <div class="calendar">
                    <!-- calendarHead start -->
                    <div class="calendarHead">
                        <h2>June 2023</h2>
                        <div class="calendarIcon">
                            <span class="material-symbols-outlined">
                                chevron_left
                            </span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                    </div>
                    <!-- calendarHead end -->
                    <!-- calendarData start -->
                    <div class="calendarData">
                        <ul class="weeks">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>
                        <ul class="days">
                           <!--<li class="inactive">25</li>-->
                            <!--<li class="inactive">26</li>-->
                            <li class="inactive">27</li>
                            <li class="inactive">28</li>
                            <li class="inactive">29</li>
                            <li class="inactive">30</li>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li class="active">13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <!--<li>31</li>-->
                            <li class="inactive">1</li>
                            <li class="inactive">2</li>
                            <li class="inactive">3</li>
                            <li class="inactive">4</li>
                            <li class="inactive">5</li>
                        </ul>
                    </div>
                    <!-- calendarData end -->
                </div>
                <!-- calendar end -->

                 <!-- messages start -->
                 <div class="messages">
                    <!-- messagesHead start -->
                    <div class="messagesHead">
                        <h2>Messages</h2>
                    </div>
                    <!-- messagesHead end -->
                    <!-- messagesUser start -->
                    <div class="messagesUser">
                        <div class="messagesUserImg">
                            <img src="./img1.jpg" alt="img1">
                        </div>
                        <h2>Lucifero Morningstar<br><span>Commodo volutpot noc</span></h2>
                    </div>
                    <!-- messagesUser end -->
                    <!-- messagesUser start -->
                    <div class="messagesUser">
                        <div class="messagesUserImg">
                            <img src="./img2.jpg" alt="img2">
                        </div>
                        <h2>Jagannath Khadka<br><span>Commodo volutpot noc</span></h2>
                    </div>
                    <!-- messagesUser end -->
                    <!-- messagesUser start -->
                    <div class="messagesUser">
                        <div class="messagesUserImg">
                            <img src="./img3.jpg" alt="img3">
                        </div>
                        <h2>Nishan Yonjan<br><span>Commodo volutpot noc</span></h2>
                    </div>
                    <!-- messagesUser end -->
                    <!-- messagesUser start -->
                    <div class="messagesUser">
                        <div class="messagesUserImg">
                            <img src="./img4.jpg" alt="img4">
                        </div>
                        <h2>Bibek Adhikari<br><span>Commodo volutpot noc</span></h2>
                    </div>
                    <!-- messagesUser end -->
                    <!-- messagesUser start -->
                    <div class="messagesUser">
                        <div class="messagesUserImg">
                            <img src="./img5.jpg" alt="img5">
                        </div>
                        <h2>Shilas Bisunkhe<br><span>Commodo volutpot noc</span></h2>
                    </div>
                    <!-- messagesUser end -->
                </div>
                <!-- messages end -->
            </main>
        </div>
    </div>
</body>
</html>
