<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="main-section">
        <p>Edit Event</p>
    <form action="{{route('eventupdate',$event->id)}}" method="POST">
        @csrf 
           <div class="textbox">
               <label for="eventName">Event Name</label>
               <input type="text"  value="{{$event->eventName}}" name="eventName">
           </div>
           <div class="textbox">
            <label>Date</label>
            <input type="date"  value="{{$event->eventDate}}" name="eventDate">
        </div> 
           <div class="textbox">
                <label for="location">Location</label>
                <input type="text" value="{{$event->location}}" name="location">
            </div>
            <div class="textbox">
                <label>Details</label>
                <textarea type="text"  value="{{$event->details}}" name="details"></textarea>
            </div> 
            <div class="textbox">
                    <label for="Max_attendies">Maximum people</label>
                    <input type="text"  value="{{$event->Max_attendies}}" name="Max_attendies">
                </div> 
                <div class="textbox">
                        <label for="Regular Price">Regular Price</label>
                        <input type="text" value="{{$event->regularPrice}}" name="regularPrice">
                    </div> 
                    <div class="textbox">
                            <label>VIP Price</label>
                            <input type="text"  value="{{$event->VIP_price}}" name="VIP_price">
                        </div> 
                            <div class="textbox">
                                <label>Cover image</label>
                            <input type="file" value="{{$event->cover_image}}" name="cover_image">
                            </div> 
                            
                            
                   <input type="submit" id="submit">
        </form>
    </section>  
</body>
</html>