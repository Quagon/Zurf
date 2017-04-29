<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">

<style>
    #login_box{
    width: 70%;
    height: 80%;
    border: solid black 1px;
    text-align:center;
    background-color: #F0F8FF;
    margin: 0 auto;
}

input[type=text], input[type=password]{
    width: 30%;
    padding: 0.5%;
    margin: 0;
    border: solid black 1px;
}

button {
    width:29.5%;
    color: white;
    padding: 1%;
    margin: 1%;
    border: none;
    font-size: 120%;
    font-family: verdana;
}
button:hover{
    opacity:0.7;
}
img.avatar{
    width:15%;
    border-radius: 25%;
}
.imgcontainer{
    text-align:center;
    margin:2% 0% 1% 0%;
}
#btn{
    background-color: #00FFFF;
}
#cancel{
    background-color: red;
}
.bottomcontainer{
    background-color:#E6E6FA;
}
</style>
</head>
<body>
    
    
     <form action="login_processing.php" method="POST">
        <div class="imgcontainer">
            <img src="key.jpg" alt="Avatar" class="avatar">
            
        </div>
        <div id="login_box">
            <p>
                <label><strong>Brugernavn: </strong></label>
                </br>
                <input type="text" placeholder="brugernavn" id="bruger" name="bruger" required />
            </p>
            <p>
                <label><strong>Password: </strong></label>
                </br>
                <input type="password" id="pass" placeholder="password" name="pass" required />
            </p>
            <p>
                <button type="submit" id="btn" value="Login"><strong> Login </strong></button>
            </p>
    <div class="bottomcontainer">
        <button type="button" id="cancel"> Cancel</button>
    </div>
     </div>
     </form>
    
    

</body>    
</html>