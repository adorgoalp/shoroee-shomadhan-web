<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>প্রশ্ন করুন</title>
        <meta name="description" content="My Parse App">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <?php
        require 'vendor/autoload.php';

        use Parse\ParseClient;
        use Parse\ParseObject;
        use Parse\ParseException;

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


        <div style="padding-left: 100px; padding-right: 100px">
            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $question = $_POST['question'];
                if ($name == '' || $question == '') {
                    echo 'Please enter your name and question.';
                } elseif (strlen($name) > 0 && strlen(trim($name)) == 0) {
                    echo 'Please enter your name.';
                } elseif (strlen($question) > 0 && strlen(trim($question)) == 0) {
                    echo 'Please enter a question.';
                } else {
                    $questionAnswer = new ParseObject("QuestionAnswer");
                    $questionAnswer->set("question", $question);
                    $questionAnswer->set("name", $name);
                    try {
                        $questionAnswer->save();
                        echo 'Submitted your question';
                    } catch (ParseException $exc) {
                        echo $exc->getTraceAsString();
                    }
                }
            }
            ?>
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">প্রশ্ন করুন </h3>
                    </div>
                    <div class="panel-body">
                        <form action="postQuestion.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">আপনার নাম</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="নাম">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">প্রশ্ন</label>
                                <input type="text" class="form-control" id="question" name="question" placeholder="প্রশ্ন">
                            </div>


                            <button type="submit" class="btn btn-success " name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
