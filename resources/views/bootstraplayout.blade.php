<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    .debug {
        border: solid black 1px;
    }
</style>
<body>
<div class="page-container">

    <!-- top navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Bootstrap Layout</a>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row">

            <!-- sidebar -->
            <div class="col-xs-6 col-sm-3">
                <ul class="nav">
                    <li>
                        <a href="#">
                            Start Bootstrap
                        </a>
                    </li>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/bootstraplayout">BootstrapLayout</a>
                    </li>
                    <li>
                        <a href="/boxmodel">BoxModel</a>
                    </li>
                    <li>
                        <a href="/csstables">CSSTables</a>
                    </li>
                    <li>
                        <a href="/float">float</a>
                    </li>
                    <li>
                        <a href="/floatlayout">floatlayout</a>
                    </li>
                    <li>
                        <a href="/tasks">tasks</a>
                    </li>
                    <li>
                        <a href="/profile/tokens">tokens</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <br>

            <!-- main area -->
            <div class="col-xs-12 col-sm-9">
                <div class="jumbotron">
                    <h1>Prova</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 debug">a</div>
                    <div class="col-md-4 debug">a</div>
                    <div class="col-md-4 debug">a</div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ex fugiat, fugit harum in ipsa
                    iste laboriosam minus nobis nostrum nulla praesentium quae quasi qui sequi sint vel, voluptatum.
                    Accusamus architecto asperiores atque commodi debitis delectus deleniti dolorum enim, est facere
                    illum labore magnam magni qui quos repudiandae soluta vel veniam, veritatis voluptatibus! Ab dolor
                    enim exercitationem fugiat impedit in inventore ipsum iste omnis, pariatur provident quidem totam ut
                    voluptatem voluptatibus. Adipisci aperiam blanditiis commodi dignissimos doloremque excepturi
                    repudiandae rerum ullam? Accusantium ad architecto distinctio earum, et facere fugit laborum
                    molestias, neque non odit placeat quis quo quos, recusandae rerum?
                </p>
            </div><!-- /.col-xs-12 main -->
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/.page-container-->

<footer class="footer">
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
    </div>
</footer>
</body>
</html>