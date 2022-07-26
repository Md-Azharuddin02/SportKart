<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body{
        margin: auto;
        padding: none;
        background:#ccefff;
    }
    div.title{
        text-align: center;
        font-size: 40px;
        font-weight: bold;
        width:100%
        padding: 10%;
        border: 2px;
        color:black;
        
        text-decoration:underline;
        
        
    }
    section{
        display: flex;
        justify-content: center;
        margin: auto;
        height: 80%;
        width: 90%;
        height: 100%;
        padding: 5px;
        position: absolute;
        top: 40%;
        left: 10%;
        right: 10%;
        
        
    }
    div {
        position: bottom;
        align-items: center;
        text-align: left;
        width: 100%;
        height: 100%;
        padding: 5px;
        position: static;
        top: 50%;
        /* left: 10%; */
        right:10%;
    }
    div.p4{
        align-items: center;
        position: static;
        right: inherit;
        text-align: left;        
    }
    img{
        width: 50%;
        align-items: center;
        height: 30%;
        border: 2px;
        padding: 4px;
        border-radius: 10px;
        border-bottom: lawngreen;
    }
    h4{
        text-align: left;
    }
</style>
<body>
   
    <br>
    <div class="title">
        <h2>About members</h2>
    </div>
    <section>
        <div class="p1">
            <img src="img/Saurabh.jpeg" alt="img">
            <div class="about">
                <h4>Saurabh Kr. Sharma</h4>
                <p> B.Tech(CSE)<br>
                    mob-9693290040
                </p>
            </div>
        </div>
        <div class="p2">
            <img src="img/azhar.jpg" alt="img">
            <div class="about">
                <h4>Md. Azharuddin</h4>
                <p> B.Tech(CSE)<br>
                    mob-7282845498
                </p>
            </div>
        </div><div class="p3">
            <img src="img/prem.jpg" alt="img">
            <div class="about">
                <h4>Premchandra Yadav</h4>
                <p> B.Tech(CSE)<br>
                    mob-7033180338
                </p>
            </div>
        </div><div class="p4">
            <img src="img/shivam.jpg" alt="img">
            <div class="about">
                <h4>Shivam Kumar Nayak</h4>
                <p> B.Tech(CSE)<br>
                    mob-9709808834
                </p>
            </div>
        </div>
    </section>
</body>

</html>