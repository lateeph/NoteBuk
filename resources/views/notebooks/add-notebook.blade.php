<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                NoteBook App
            </title>
            <link href="dist/css/main.css" rel="stylesheet">
                <link href="dist/css/bootstrap.css" rel="stylesheet">
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-dark bg-primary">
                <button aria-controls="navbar-header" class="navbar-toggler hidden-sm-up" data-target="#navbar-header" data-toggle="collapse" type="button">
                    ☰
                </button>
                <div class="collapse navbar-toggleable-xs" id="navbar-header">
                    <a class="navbar-brand" href="#">
                        NoteBook App
                    </a>
                </div>
            </nav>
            <!-- /navbar -->
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Add Notebook
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add Notebook form==================== -->
                <form action="/add" method="post">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="title" placeholder="Enter Notebook Title Here">
                        }
                    </div>
                    <button type="submit" class="btn btn-primary">Add Notebook</button>
                </form>
            </div>
            <!-- /container -->
            <script src="dist/js/jquery3.min.js">
            </script>
            <script src="dist/js/bootstrap.js">
            </script>
        </div>
    </body>
</html>
