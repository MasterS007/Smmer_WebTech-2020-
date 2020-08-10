<?php

    if(isset($_COOKIE['status']))
    {
        ?> 
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="classdesign.css"> <link rel>
    <title>Class</title>
</head>
<body>
    <header>
         <nav>
             <select class="comboBox">
                 <option value="Course" selected disabled hidden>Cources</option>
                 <optgroup label="Science">
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Biology">Biology</option>
                        <option value="Mathematics">Mathematics</option>
                    
                 </optgroup>
                 <optgroup label="Computer Science">
                     <option value="Algorithm">Algorithm</option>
                     <option value="Data Structure">Data Structure</option>
                     <option value="Computer Fundamentals">Computer Fundamentals</option>
                     <option value="Introdouction to Programing Language">Introdouction to Programing Language</option>
                     <option value="Introduction to Database">Introduction to Database</option>

                 </optgroup>
                 <optgroup label="Programming Language">
                     <option value="C/C++">C/C++</option>
                     <option value="JAVA">JAVA</option>
                     <option value="PHYTHON">PHYTHON</option>
                     <option value="C#">C#</option>
                     <option value="PHP">PHP</option>

                 </optgroup>
             </select>
             <ul class="navigation">
                 <li class="searchBox"><input type="text" name="search" placeholder="Search.."></li>
                 <li class="logo"><a href="dashboard.php">MNP Academy</a></li>
             </ul>
         </nav>
    </header>

        <div class="verticleLine"></div>

    <main>
       
        <h4 class="section-heading"><a href="dashboard.php"><?php echo $_COOKIE['name'];?></a></h4>
            <div class="accountStuff">
                <ul class="stuff">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="mycourse.html">Courses</a></li>
                    <li><a href="progress.html">Progress</a></li>
                    <li><a href="blog.html">Blogs</a></li>
                    <li><a href="logout.html">Logout</a></li>
                </ul>
            </div>
            <section>
                <h2 class="welcomeheading">Welcome <?php echo $_COOKIE['name'];?></h2>
                <h5 class="addingSchool"><a href="#">Add your organization</a></h5> 
                
            </section>

            <div class="wel">  
                  
                <ul class="wlist">
                    <li><a href="#">Classes</a></li>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Files</a></li>
                </ul> 
                <hr>
           </div>

           <div class="titleb">
               <h4>My Class</h4>
               <button type="button" class="addClass">Add class</button>
            </div>
           <div class="classes">
                
                
                   <ul class="myClass">
                   <li><a href="#">Class:Science</a></li><br>
                   <li><a href="#">Class:Programming Language</a></li><br>
                   <li><a href="#">Class:Computer Science</a></li>
               </ul>
           </div>
            
    </main> 

    </body>
</html>

<?php
    }
    else
    {
        header("location:login.php");
    }

?>
