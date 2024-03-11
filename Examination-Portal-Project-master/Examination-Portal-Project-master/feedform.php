<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <style>
   *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: Helvetica;
}
section{
    height: 100vh;
    width: 100%;
    background-color: #ADD8E6;
    align-items: center;
    display: flex;
    justify-content: center;
}
.Container{
    width: 90%;
    max-width: 450px;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0px 0px 20px black;
    border-radius: 20px;
}
.form-group{
    width: 100;
    margin-top: 20px;
}
.form-group input,
.form-group textarea{
    width: 100%;
    padding: 5px;

}
textarea{
    resize: vertical;
}
button[type="submit"]{
    width: 50%;
    height: 5vh;
    margin-left: 100px;
    color: black;
    background-color: chartreuse;
    cursor: pointer;
}
button[type="submit"]:hover{
    background-color: cornsilk;
}

#status{
    width: 90x;
    max-width: 500px;
    text-align: center;
    padding: 10px;
    margin: 0 auto;
    border-radius: 8px;
}



    </style>
</head>
<body >
  <div>
    <section>
      <div class="Container">
            <form action="https://formspree.io/f/xjvjjvpq" method="POST">
                
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName">
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
</form>
    </div>
    </section>
<img src="img/form_bg1.jpg" alt="no" width="1510px" height="700px">
  </div>
  
</body>
</html>