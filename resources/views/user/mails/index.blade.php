<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        body{
            font-family: sans-serif;
            color: #3b0459;

        }

        a{
            color: white;
        }

        .navbar{
            display: flex;
            justify-content: space-between;
            padding: 10px 10%;
            align-items: center;
        }

        .logo{

            margin-left: 350px;
            margin-top: 10px;
        }


        .logo_p1{
            width: 5%;
            border-radius: 100px;
            margin-left: 40%;
            margin-top: 12px;


        }





        .btn{
            padding: 6px 20px;
            background-color: black;
            border-radius: 100px;
            text-decoration: none;
            transition: all 0.4s;
            margin-left: 40%;
            margin-top: 8px;


        }

        .btn:hover{
            background-color: #034f63;
        }


ul li{

    padding: 10px;
    border-radius:  20px;


}
        .container:before{
            background-image: url("image/backg.png");

            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            left: 0;
            background-position:center ;
            background-size: 500px;
            z-index: 3;
            width: 80%;
            height: 50%;
            opacity: 10%;
            content: '';
            margin-left: 100px;
            margin-top: 50px;


        }
.footer-height{
    display: flex;
    justify-content: center;



}
        .footer-height img{
            margin: 25px 5px 0;
            width: 40px;
            height: 40px;
            float: left;

}

        .footer-height2{
            height: 100px;



        }

        .footer-height2 p{
             justify-content: center;
            display: flex;
            color: black;
            font-size: 15px;







}






    </style>
    <link rel="stylesheet" href='{{mix('css/styles.css')}}'>
    @stack('styles')
</head>
<body class="body">
 <div class="container">

     <div class="row">

<div class="col-12 col-t12 col-p12 col-l12 col-m12  header-height">
    <div class="navbar">
        <div>
            <img src="{{asset('css/image/logo.png')}}" class="logo">
        </div>

         <!--<img src="image/sadnan.png" class="logo_p1">
        <h1 style="font-size: 12px; color: white">Usename:Md Sadnan Hossain</h1>-->
    </div>


</div>


     </div>
     <div class="row second">


         <div class="col-12 col-t12 col-st12 col-p12 col-l12 col-m12 body-height">
             <img src="image/sadnan.png" class="logo_p1">
             <h5 style=" color: black;margin-left: 40%;font-weight: bold;">Md Sadnan Hossain</h5>
             <p style="color:black;margin-left: 40%;font-family: 'MS Reference Sans Serif'">Congratulations for joinning our shop</p> <br>
             <p style="color:black;margin-left: 40%;font-family: 'MS Reference Sans Serif'">please click below confirm your account</p>

             <button class="btn"><a href="#">Login</a></button><br><br>

    <p style="color:black;margin-left: 40%;font-family: 'MS Reference Sans Serif'">Thanks from
        Eiser Shop</p>

         </div>

     </div>

     <div class="row">
         <div class="col-6 col-t12 col-st12 col-p12 col-l12 col-m12 footer-height2">
             <p style="margin-top: 10px;font-family: 'MS Reference Sans Serif'">Contact Info</p>
             <p style="font-family: 'MS Reference Sans Serif'" >Phone No:01892409715</p>
             <p style="font-family: 'MS Reference Sans Serif'" >Email:eiser@gmail.com</p>
             <p style="font-family: 'MS Reference Sans Serif'">Address:Dhanmodi,Dhaka 1205</p>



         </div>
         <div class="col-6 col-t12 col-st12 col-p12 col-l12 col-m12 footer-height">
                      <div class="d-flex justify-content-center">
                        <a href="#">  <img src="image/facebook.png"></a>

                          <a href="#">  <img src="image/twitter.png" ></a>

                              <a href="#"> <img src="image/google-symbol.png"></a>

                                  <a href="#"> <img src="image/linkedin.png" ></a>
                      </div>

         </div>

     </div>
 </div>
</body>
</html>
