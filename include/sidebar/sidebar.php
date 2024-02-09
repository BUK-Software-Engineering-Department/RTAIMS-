<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">Admin Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="#"><?php echo $_COOKIE["name"]  ?></a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="./"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="polls.php"><i class="fa fa-fw fa-tasks"></i>Surveys</a>                    </li>
                    <li>
                        <a href="topics.php"><i class="fa fa-fw fa-edit"></i> Topics</a>
                    </li>
                    <li>
                        <a href="questions.php"><i class="fa fa-fw fa-question-circle"></i> Questions</a>
                    </li>
                    <li>
                        <a href="responses.php"><i class="fa fa-fw fa-comments"></i> Comments/ Responses</a>
                    </li>
                    <?php
                    if(isset($_COOKIE["role"]) !="user"){
                   echo "<li>";

                   echo "    <a href=\"users.php\"><i class=\"fa fa-fw fa-users\"></i> Users</a>";

                   echo "</li>";
  }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
