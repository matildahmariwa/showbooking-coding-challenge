<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        #main-body{
            display: flex;
            min-height:100vh;
        }
        #navbar{
            flex: 1;
            background-color:#01024e;
            color: aliceblue;
        }
        #admin-div{
            flex:6; 
          
        }
        .logo-dash p{
            float:left;
           
           
        }
        .Hey p{
            float:right;
            
        }
        .logo-dash{
           
        }
        .avatar {
             vertical-align: middle;
             width:30px;
             height:30px;
             border-radius: 50%;
             }
             #mini-body{
                 background-color:#F8F9F9;
                 
             }
             .enter{
                margin-top: 30px;
             }
             .enter p{
                 font-size: 25px;
                 float:left; 
                 padding-left: 73px;
                 display: inline-block;  
             }
             .enter  a{
                float:right;
                display: inline-block;  
                width: 150px;
                height: 30px;
                background-color: teal;
                color: white;
                margin-right:20px;  
             }
            #top-intro{
                height: 36px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
            #event-tab{
                margin-top:50px;
                position: absolute;
            }
            #card{
                margin:0px 30px 30px 20px;
                height: 180px;
                width: 1235px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
            #event-image img{
                height:20px;
                width:50px;;
            }
            
    </style>
</head>
<body>
<section id="main-body">
<section id="navbar">
Churchill
</section ><!--end of navbar-->
<section id="admin-div">
<header id="top-intro">
<div class="logo-dash">
        <p>Dashboard</p>
</div>
<div class="Hey">
<p>Hi,Admin! <img src="{{ URL::to('/assets/photos/avatar.jpg') }}" alt="Avatar" class="avatar" ></p>
</div>
</header>
<section id="mini-body">
<section class="enter">
        <p>Here are the available events</p>
        <a href="{{route('create')}}">Add Event</a>
</section>
<div id="event-tab">
        @if(count($events)>0)
        @foreach($events as $event)
        <div id="card" class="row-clearfix">
            <div class="col-md-8 col-sm-12" id="event-image">
                <img src="{{ URL::to('/assets/photos/churchill1.jpg') }}" alt="photo">
            </div>
            <div class="col-md-4 col-sm-12">
                    {{$event->eventName}}
          
            </div>
            <section class="admin-buttons">
                <form method="POST" action="{{ route('edit', $event->id) }} }}">
                    @method('PUT')
                    @csrf
                    <button type="submit">edit</button>
                </form> 
            
            <form method="POST" action="{{ route('events.delete', $event->id) }} }}">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form> 
             
            </section>
        </div>
        @endforeach
        @endif
</div>
</section><!--end of mini-body-->
</section><!--end of admin-div-->
</section><!--end of main body-->   
</body>
</html>