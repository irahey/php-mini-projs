<!DOCTYPE html>
<html lang="en" >
    <head>
        
    <title>Chat - Customer Module</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    </head>
<body>

<div id="wrapper">
    <h2>jQuery/PHP Chat</h2>
    <p id="name-area"></p>
    <div id="menu">
        <p class="welcome">Welcome, <b></b></p>
        <p class="logout"><a id="exit" href="#">Close Chatbox</a></p>
        <div style="clear:both"></div>
    </div>

    <div id="chatbox"></div><div id="chat-area"></div></div>
     
    <form name="message" action="" id="sendmsgarea">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
    
</div>


</body>
</html>