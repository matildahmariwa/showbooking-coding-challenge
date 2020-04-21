<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>confirmation</title>

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    .main-class{
        display: flex;
        min-height:100vh;
    }
    #message{
        flex:1;
        /* background-color: aquamarine; */
    }
    #photo{
        flex:2;
        
    }
    #message img{
        margin-top:160px;
        position:absolute;
        margin-left:135px;
    }
    #message-div h1{
    margin-left:80px;
    margin-top:80px;
    font-size: 44px;
    margin-bottom: -14px;
    text-decoration: underline;

    }
    #message-div{
        margin-top:210px;
        position: absolute;
    }
    #message-div p{
     margin-left:15px;
     font-family: 'Open Sans', sans-serif;
    }
    #photo{
        overflow: hidden;
    }
    #photo img{
        height: 100%;
        width: 100%;
    }
  
    #message-div a{
        width: 200px;
        height: 45px;
        margin-left:95px;
            margin-top:30px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight:500;
            color:white;
            background-color:#9230FF;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
    }
</style>
<body>
 <section class="main-class">
<section id="message">
<img src="{{ URL::to('/assets/photos/send2.png') }}" alt="send-icon">
<div id="message-div">
<h1 >Thank,you</h1><br>
<p>Your confirmation email has been sent.We are super excited <br> we can't wait to see you there!</p>
<a href="{{route('landing')}}"> Go to homepage</a>
</div>
</section>
<section id="photo">
        <img src="{{ URL::to('/assets/photos/churchill3.jpg') }}" alt="people laughing">
</section>

 </section><!--end of main-class-->
 
</body>
</html>