<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<video autoplay muted loop id="myVideo">
  <source src="videos/dishesrating.mp4" type="video/mp4">
</video>

    <style>
    /* Style the video: 100% width and height to cover the entire window */
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        /* Add some content at the bottom of the video/page */
        .content {
            position: relative;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            /*padding: 20px;*/
        }

        /* Style the button used to pause/play the video */
        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            color: #fff;
            cursor: pointer;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        } 
        .jumbotron{
            /*background-image: url(images/bg.jpg);*/
            text-align:center;
            margin-top:70px;
        }
        #email{
            width:300px;
        }
        #summary{
            text-align:center;
            margin-top:50px;
            margin-bottom:50px;
        }
        .card-img-top{
            width:100%;
        }
        #appstore{
            width:200px;
        }
        #footer{
            padding-left: 10px;
            padding-top:20px;
            margin-top:20px;
        }
        body{
            position:relative;
        }
        .card-text{
            padding: 10px 20px 0px 20px ;
        }
        .card-title{
            padding: 20px 20px 0px 20px;
        }
        .navbar{
            width: 100%;
        }
        .content {
           /* background-image:url(images/ratingback.jpg);*/
        }

    </style>
    <title>Location</title>

</head>
<body>
<nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">

    <a class="navbar-brand" href="index.html">Food Web</a>
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#jumbotron">About<span class="sr-only">(current)</span></a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="review.html">Review<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#jumbotron">Food Blog<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">

        <li class="nav-item">
            <a class="nav-link" href="#footer"></a>
        </li>
    </ul>
    <form class="form-inline pull-xs-right">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>

    </form>


</nav>
<div class = content >
<div class="jumbotron content" id="jumbotron">
    <h1 class="display-1">Restaurant Locations</h1>
    <p class="lead">Get the information of any restaurant anywhere!</p>
    <hr class="my-4">

    <form class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="email">Email Address</label>

            <div class="input-group">
                <input type="text" class="form-control" id="name" placeholder="Search your food here">
            </div>
            <br>
            <br>
            <div class="input-group">
                <input type="text" class="form-control" id="location" placeholder="Type your location here">
            </div>
            <br>
            <br>
            <input type="button" id="submit" value="Search" class="btn btn-primary">
        </div>


        
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="https://use.fontawesome.com/3186f7a244.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
<script type="text/javascript">
    
    $("#submit").click(function(){
        
        var search = $("#name").val();
      var location =$("#location").val();
        window.open("https://www.yelp.com/search?find_desc="+search+"+&find_loc="+location+"&sortby=rating&start=0");
    
          
        
      });
              
         function updateSearch() {
              var form = this.toString();
              document.write(form) ;

          }

// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}
</script>
</body>
</html>