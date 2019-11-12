<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Details</title>
    <form action="{{route('ticketstore',$event->id)}}" method="POST">
            @csrf
        <div class="textbox">
         <label for="">VIP quantity</label>
         <select class="form-control selectElement" name="vip_quantity">
                <option value="1" selected="1">1</option>
                <option value="2">2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                </select>
        </div>
        <div class="textbox">
                <label for="">Regular quantity</label>
                <select class="form-control selectElement"  name="regular_quantity">
                        <option value="1" selected="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
               </div>
        <div class="textbox" >
           <label for="Enter name">Name</label>
           <input type="text" name="userName">
           </div>
        <div class="textbox" >
            <label for="Enter email">Email</label>
            <input type="text" name="userEmail">
             </div>
             <div class="textbox" >
             <label for="Enter name">Phone Number</label>
             <input type="text" name="phoneNumber">
             </div>
             <input type="submit" id="submit">
    </form>
</head>
<body>
    
</body>
</html>