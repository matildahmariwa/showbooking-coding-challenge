<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--Fonts-->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
<style>
  body{
    background-color: #F8F9F9;
  }
  #full-body{
    width:100% !important;
    height:100% !important;
    position: relative;
  }
  #top-nav{
        margin-top:16px;
        
    }
  .logo{
        margin-left:10px;
        display: inline-block;
        float: left;
        letter-spacing: 2.5px;
        font-weight: bold;
        float: left;
        font-size: 20px;
        font-family: 'Bitter', serif;
    }
    .social-buttons{
        margin-right: 120px;
        float:right;  
    }
    .social-buttons li{
        text-decoration: none;
        list-style: none;
        display: inline-block;
        margin-right:18px; 
    }
    .social-buttons i{
        font-size: 22px;
    }
  
    .social-buttons a:hover{
        text-decoration:none;
    }
   .welcome{
     margin-top:12px; 
     
  }
  #myCarousel{
    width:90%;
    margin:auto;
    border-radius:5px;
    background-color:white;
    overflow: hidden;
    max-height:500px;
    opacity:1;
  }
  #myCarousel img{
    width:100%;
    height:auto;
    overflow: hidden;
  }
  .carousel-inner{
    position: relative;
    width: 100%;
    max-height:100vh;
    overflow: hidden;
  }
  #event-div p{
    margin-left: 140px;
    margin-top: 73px;
    font-weight: bold;
    letter-spacing: 1.5px;
    font-size:30px;
  }
  #event-card{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  display: inline-block;
  width:250px;
  height:280px;
  overflow: hidden;
  margin-right:10px;
  margin-bottom:10px;
  border-radius: 8px;
  margin-top:40px;
  }
 
  #card-details{
  padding: 2px 16px;
  display: inline-block;
  
}
#event-card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
#card-image{
  overflow: hidden;
}
#card-image{
  background-image:url('/churchill/public/assets/photos/event5.jpg');
  height:60%;
  width: 100%;
  background-size:323px 179px;
  overflow:hidden;
  background-repeat: no-repeat;
}
#event-cards{
  width:80%;
  margin-left:156px;
}
.footer{
  height:40px;
  width:100%;
  font: 10px;
  background-color:#01024e;
  color: #F8F9F9;
  position: relative;
  margin-top:30px;
}
.footer p{
  text-align: center;
  position: absolute;
  margin-top: 12px;
  margin-left: 530px;
  letter-spacing: 1.5px; 
}
</style>
</head>
<body>
<div id="full-body" class="container">
<div id="top-nav" class="container">
<span class="logo">CHURCHILL SHOW</span>
<div class="social-buttons">
    <li><a href="#"><i class="icon-instagram"></i></a></li>
    <li><a href="#"><i class="icon-twitter"></i></a></li>
    <li><a href="#"><i class="icon-youtube"></i></a></li>
</div>
</div><!--end of top nav-->
<div class="welcome">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
              
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{ URL::to('/assets/photos/churchill1.jpg') }}">
                  </div>
              
                  <div class="item">
                   
                    <img src="{{ URL::to('/assets/photos/event3.jpg') }}">
                  </div>
              
                  <div class="item">
                    <img src="{{ URL::to('/assets/photos/event4.jpg') }}">
                  </div>
                </div>
              
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>       
</div><!--End of welcome--> 
<div id="event-div">
<p>Upcoming Events</p>
<div id="event-cards">
    @if(count($events)>0)
    @foreach($events as $event)
    <div id="event-card">
    <div id="card-image">
    
    </div>
    <div class="container" id="card-details">
      {{$event->eventName}}
      <a href="{{route('book',$event->id)}}">Reserve</a>
    </div>
    </div>
    @endforeach
    @else
    <p>There are no events available now</p>
    @endif
    </div>
</div><!--End of Div cards-->
</div><!--end of event div-->
<div class="footer">
<p class="copyright">Copyright  &#169; <?php echo date("Y"); ?><a href="#"> Matildah mariwa</a>.All rights reserved</p>
</div><!--end of footer-->
</div><!--End of full-body-->
</body>
</html>