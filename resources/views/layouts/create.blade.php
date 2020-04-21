<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    .textbox input{
       
            /* outline: none; */
            color:black;
            font-size: 18px;
            width:40%;
            margin: 0 10px;
            /* border-bottom: 1px solid; */
    }

    body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
        align-items: center;
    }
</style>
<body>
    
    <section class="main-section">
        <h1><p>Create Event</p></h1>
        <div class="card d-flex justify-content-center">
        <div class="card-body">
        <form action="{{route("eventstore")}}" method="POST" enctype="multipart/form-data">
        @csrf 
           <div class="form-group">
               <label for="eventName">Event Name</label>
               <input type="text" placeholder="" name="eventName">
           </div>
           <div class="form-group">
            <label>Date</label>
            <input type="date" placeholder="" name="eventDate">
        </div> 
           <div class="form-group">
                <label for="location">Location</label>
                <input type="text" placeholder="" name="location">
            </div>
            <div class="from-group">
                <label>Details</label>
                <textarea type="text" placeholder="" name="details"></textarea>
            </div> 
            <div class="form-group">
                <label>VIP attendies</label>
                <input type="text" placeholder="" name="vip_attendies">
            </div> 
            <div class="form-group">
                    <label>Regular attendies</label>
                    <input type="text" placeholder="" name="regular_attendies">
                </div> 
                <div class="form-group">
                        <label for="Regular Price">Regular Price</label>
                        <input type="text" placeholder="" name="regular_price">
                    </div> 
                    <div class="form-group">
                            <label>VIP Price</label>
                            <input type="text" placeholder="" name="VIP_price">
                        </div> 
                            <div class="form-group">
                                <label>Cover image</label>
                                <input class="btn btn-dark" type="file" name="cover_image">
                            </div> 
                            
                            
                   <input class="btn btn-dark" type="submit" id="submit">
        </form>
        </div>
        </div>
    </section>  
</body>
</html>