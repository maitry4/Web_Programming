<?php
// **about**
if(isset($_REQUEST['about']))
{
    $about = $_REQUEST['about'];
}
else{
    $about = "<p>This is a sample content about yourself.</p>";
}
// **Title**
if(isset($_REQUEST['title']))
{
    $title = $_REQUEST['title'];
}
else{
    $title = "<p>Title</p>";
}
// **Skills**
if(isset($_REQUEST['skills']))
{
    $skills = $_REQUEST['skills'];
}
else{
    $skills = "<p>These are your skills and expertise.</p>";
}
// **Google Sites**
if(isset($_REQUEST['gsites']))
{
    $gsites = $_REQUEST['gsites'];
}
else{
    $gsites = "#";
}
// **LinkdIn**
if(isset($_REQUEST['linkedin']))
{
    $linkedin = $_REQUEST['linkedin'];
}
else{
    $linkedin = "#";
}
// **Blog**
if(isset($_REQUEST['blog']))
{
    $blog = $_REQUEST['blog'];
}
else{
    $blog = "#";
}
// **Github**
if(isset($_REQUEST['github']))
{
    $github = $_REQUEST['github'];
}
else{
    $github = "#";
}
// **Task 1**
if(isset($_REQUEST['task1']))
{
    $task1 = $_REQUEST['task1'];
}
else{
    $task1 = "#";
}
// **Task 2**
if(isset($_REQUEST['task2']))
{
    $task2 = $_REQUEST['task2'];
}
else{
    $task2 = "#";
}
// **Task 3**
if(isset($_REQUEST['task3']))
{
    $task3 = $_REQUEST['task3'];
}
else{
    $task3 = "#";
}
// **Task 4**
if(isset($_REQUEST['task4']))
{
    $task4 = $_REQUEST['task4'];
}
else{
    $task4 = "#";
}
// **Task 5**
if(isset($_REQUEST['task5']))
{
    $task5 = $_REQUEST['task5'];
}
else{
    $task5 = "#";
}
// **Minor Project Module**
if(isset($_REQUEST['minorm']))
{
    $minor = $_REQUEST['minorm'];
}
else{
    $minor = "#";
}
// **Database Module**
if(isset($_REQUEST['databasem']))
{
    $databasem = $_REQUEST['databasem'];
}
else{
    $databasem = "#";
}
// **Project**
if(isset($_REQUEST['watch']))
{
    $project = $_REQUEST['watch'];
}
else{
    $project = "#";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Designed by Dr. Ripal Ranpara for student Activity Project Assignment-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        #header {
            background: linear-gradient(135deg, #001f3f, #e3e3e3);
            color: #fff;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        #sidebar {
            background: #343a40;
            color: #fff;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        #sidebar li {
            margin-bottom: 10px;
        }
        #sidebar li a {
            color: #fff;
            text-decoration: none;
        }
        #sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #fff;
        }
        #sidebar .list-group-item:hover {
            background: #212529;
        }
        #main-content {
            padding: 20px;
        }
        .section-title {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        #footer {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
		
		* Button 1: Ocean Blue */
.ocean-blue-button {
    background: linear-gradient(135deg, #006a88, #0091ad);
    color: #fff;
}

/* Button 2: Sunset Orange */
.sunset-orange-button {
    background: linear-gradient(135deg, #ff8c42, #ffbc3b);
    color: #fff;
}

/* Button 3: Spring Green */
.spring-green-button {
    background: linear-gradient(135deg, #72b01d, #97cc11);
    color: #fff;
}

/* Button 4: Royal Purple */
.royal-purple-button {
    background: linear-gradient(135deg, #7c53c3, #a44bc5);
    color: #fff;
}

/* Button 5: Ruby Red */
.ruby-red-button {
    background: linear-gradient(135deg, #cb1e52, #de6b4b);
    color: #fff;
}

/* Button 6: Goldenrod Yellow */
.goldenrod-yellow-button {
    background: linear-gradient(135deg, #ffbf3f, #ffb344);
    color: #fff;
}

/* Button 7: Sky Blue */
.sky-blue-button {
    background: linear-gradient(135deg, #31a7ff, #3abeff);
    color: #fff;
}

/* Common Button Styles */
.gradient-button {
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Menu 1</a></li>
                    <li class="list-group-item"><a href="#">Menu 2</a></li>
                    <li class="list-group-item"><a href="#">Menu 3</a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo $gsites; ?>" target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="<?php echo $linkedin; ?>" target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="<?php echo $blog; ?>" target="_blank">Blog</a></li>
                    <li class="list-group-item"><a href="<?php echo $github; ?>" target="_blank">GitHub</a></li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1><?php
                            echo $title;
                        ?></h1>
                            </div>
                            <div class="col-md-6">
                                <img src="mylogo.png" alt="Logo" width="100" class="float-right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                        </div>
                        <?php
                            echo $about;
                        ?>
                        
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                        <?php
                            echo $skills;
                        ?>
                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">
                            <button class="ocean-blue-button gradient-button"><a style="color:black;" href="<?php echo $task1;?>">Task 1</a></button>
<button class="sunset-orange-button gradient-button"><a style="color:white;" href="<?php echo $task2;?>">Task 2</a></button>
<button class="spring-green-button gradient-button"><a style="color:white;" href="<?php echo $task3;?>">Task 3</a></button>
<button class="royal-purple-button gradient-button"><a style="color:white;" href="<?php echo $task4;?>">Task 4</a></button>
<button class="ruby-red-button gradient-button"><a style="color:white;" href="<?php echo $task5;?>">Task 5</a></button>
<button class="goldenrod-yellow-button gradient-button"><a style="color:white;" href="<?php echo $minor;?>">Minor Project Module</a></button><br>

<button class="spring-green-button gradient-button"><a style="color:white;" href="<?php echo $databasem;?>">Database  Module</a></button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                        You can view the project here: <br>
                        <button class="goldenrod-yellow-button gradient-button"><a style="color:white;" href="<?php echo $project;?>">Project Details</a></button>
                        <!-- <?php
                           echo $project;
                        ?> -->
                        
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <h3>Footer Title</h3>
        <img src="mylogo.png" alt="Footer Logo" width="100">
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>