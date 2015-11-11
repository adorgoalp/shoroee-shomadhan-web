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
                        <a class="navbar-brand" href="home.php" target="_blank">শরয়ী সমাধান হোম</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="seeQuestionAnswer.php" target="_blank"> প্রশ্নোত্তর </a></li>
                            <li><a href="postQuestion.php" target="_blank">প্রশ্ন করুন</a></li>
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
            <div style="padding-left: 100px;padding-right: 100px">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Developer links </h3>
                    </div>
                    <div class="panel-body">
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
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Our Aim </h3>
                    </div>
                    <div class="panel-body">
                        কুরআন-সুন্নাহ তথা শরিয়তের চার দলিল অনুসারে হানাফি 
                        ফিকহের উসুল অনুযায়ী আপনাদের দৈনন্দিন জিজ্ঞাসার 
                        জবাব দিবেন মুহতারাম মুফতিগণ।
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recent news </h3>
                    </div>
                    <div class="panel-body">
                        <p>   আলহামদুলিল্লাহ! আমাদের মাঝে আরেকজন বিজ্ঞ
                            মুফতি এসে যোগ দিয়েছেন৷ বিশিষ্ট মুফতি, গবেষক,
                            দাঈ, মুহাদ্দিস শায়খ Abdullah Talha হযরতের
                            পক্ষ থেকে ইতোমধ্যেই চমৎকার, দলীলভিত্তিক, অথচ 
                            সংক্ষিপ্ত উত্তর একাধারে আসা শুরু হয়েছে৷ আশাকরি আমাদের 
                            সবার প্রিয় এই গ্রুপে আপনাদের পক্ষ থেকে অপেক্ষমাণ প্রশ্নগুলো
                            শীঘ্রই উত্তরসহ ছাড় পাবে৷ আল্লাহ আমাদেরকে দ্বীনের পথে চলা 
                            সহজ করে দিন৷ আমাদের প্রত্যেককে দ্বীনের জন্যে কবুল করুন৷
                        </p>
                        <h4 align="right"> -জিয়া রাহমান</h4>

                    </div>
                </div>
                
                <div style="padding-top: 200px"></div>
                <div>
                    <a href="scholerLogIn.php" target="_blank">ওলামা'স হোম</a>
                </div>
               
            </div>
        </div>
    </body>

</html>
