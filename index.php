<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>

        .ajax_loader {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 3;
            opacity: 0;
            visibility: hidden;
            transition: all 0.6s;
            background-color: rgba(255, 255, 255, 0.6);

            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .ajax_loader.active{
             opacity:1;
             visibility: visible;
        }

    </style>
</head>
<body>

<div class="container">

    <h1 class="text-center mt-5 mb-5">You can use for practical in all ajax forms</h1>
    <div class="row">
        <div class="col-sm-6">
            <h2>Form 1</h2>
            <form action="action.php" id="callRequest" method="post" class="ajax">
                <div class="form-group">
                    <input type="text"  name="name" class="form-control">
                </div>
                <input type="submit" name="submit" class="btn btn-primary">
            </form>

        </div>
        <div class="col-sm-6">
            <h2>Form 2 </h2>
            <form action="action.php" id="subscribe" method="post" class="ajax">
                <div class="form-group">
                    <input type="text"  name="name" class="form-control">
                </div>
                <input type="submit" name="submit" class="btn btn-primary">
            </form>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/ajax_submit.js"></script>

</body>
</html>