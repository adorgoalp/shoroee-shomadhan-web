<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>হোম</title>
        <meta name="description" content="My Parse App">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <?php
        require 'vendor/autoload.php';

        use Parse\ParseClient;

ParseClient::initialize('jVbb8uYocFpOhxTnZtY8DqvVmiEVgWQyU71K24p0', 'ilsN27z74t3N7FAxGVNk7KNDZPwprFbMqWGlQQk8', 'XWMlF7HBGQgblHHN242MfBMjuZJzxH17zzkvo0SB');
        ?>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home.php">শরয়ী সমাধান হোম</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="seeQuestionAnswer.php"> প্রশ্নোত্তর </a></li>
                            <li><a href="postQuestion.php">প্রশ্ন করুন</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="সার্চ">
                            </div>
                            <button type="submit" class="btn btn-default">সার্চ</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ক্যাটাগরি <span class="caret"></span></a>
                            </li>
                        </ul>
                    </div><!-- /.nav bar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="container">
            <ul>
                <li><a href="https://www.parse.com/apps/the-muslim-show/collections" target="_blank">Parse data</a></li>
                <li><a href="https://www.parse.com/docs/php/guide" target="_blank">Parse PHP document</a></li>
                <li><a href="http://www.w3schools.com/html/" target="_blank">HTML</a></li>
                <li><a href="http://www.w3schools.com/html/html5_intro.asp" target="_blank">HTML5</a></li>
                <li><a href="http://www.w3schools.com/php/" target="_blank">PHP 5</a></li>
                <li><a href="https://www.google.com/" target="_blank">Google</a></li>
                <li><a href="postQuestion.php" target="_blank">Make a question</a></li>
            </ul>
        </div>
        
    </body>

</html>
