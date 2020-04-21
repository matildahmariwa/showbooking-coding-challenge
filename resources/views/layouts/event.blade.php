<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- bootstrap.min css -->
{{-- <link rel="stylesheet" href="bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}

<style>
    body{
        padding-top: 20px;
        padding-bottom: 60px;
        margin: 0 auto;
        max-width: 1000px;
        text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
    }
    h1, .h1 {
        font-size: 2.5rem;
    }
    h3, .h3 {
        font-size: 1.5rem;
    }
    .container{
        text-align: center;
    }
    .form-control {
        box-shadow: none;
    }
    .form-control:focus {
        box-shadow: none;
        border: 1px solid #f75757;
    }
    p {
        line-height: 30px;
    }


</style>

<title>Event Details</title>
    
</head>
<body>
    <div class="row">
    <div class="col-6">
    <div class="card">
            <div class="card-header">
              <h3>Book your ticket now!</h3>
            </div>
            <div class="card-body">

                    <div class="container">
                                        <form action="{{route('ticketstore',$event->id)}}" method="POST">
                                            @csrf
                                                <div class="textbox">
                
                                                <label for="">VIP quantity {{$event->VIP_price}} per ticket</label>
                                                <select class="form-control selectElement" name="vip_quantity">
                                                        <option value="0" selected="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2" >2</option>
                                                        <option value="3" >3</option>
                                                        <option value="4" >4</option>
                                                        <option value="5" >5</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="">Regular quantity KES {{$event->VIP_price}}  per ticket </label>
                                                        <select class="form-control selectElement"  name="regular_quantity">
                                                            <option value="0" selected="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2" >2</option>
                                                            <option value="3" >3</option>
                                                            <option value="4" >4</option>
                                                            <option value="5" >5</option>
                                                                </select>
                                                    </div>
                                                <div class="form-group" >
                                                    <label for="Enter name">Name</label>
                                                    <input type="text" class="form-control" name="userName">
                                                </div>
                
                                                <div class="form-group" >
                                                    <label for="Enter email">Email</label>
                                                    <input type="text" class="form-control" name="userEmail">
                                                </div>
                                                <div class="form-group" >
                                                    <label for="Enter name">Phone Number</label>
                                                    <input type="text" class="form-control" name="phoneNumber">
                                                </div>
                                                
                                                <div class="alert alert-dark" role="alert">
                                                    Ensure your details are correct before submitting
                                                </div>
                                                
                                                <input type="submit" id="submit" class="btn btn-dark btn-lg">
                
                                        </form>
                    </div>
            </div>
            </div>
        </div>
        <div class="col-6">
                <h2>Churchill Show</h2>
                <p></p>

        <span class="text-muted">{{$event->details}}</span>
                <p></p>
                <img class="col-12" src="/churchill/public/storage/cover_images/{{$event->cover_image}}"   alt="Generic placeholder image">
                <p></p>
                   <p>This event has been sponsored by Safaricon to celebrate Kenya.</p>
                   <p></p>
                   <ul class="list-group">
                   <li class="list-group-item list-group-item-info">Date:{{$event->eventDate}}</li>
                   <li class="list-group-item list-group-item-info">Location:{{$event->location}}</li>
                    </ul>
        </div>

        </div>
    </div>
</div>  

</body>
</html>