<html>
   <!--
      What objectives are you demonstrating?
      ( ) When the form is submitted to the server, a "thank you" message is returned with a copy of the submissions 
   -->
   ​
   <head>
      <title>Crazy Cassiel's Crafts</title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <script src="modernizr-1.5.js" type="text/javascript" ></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <link rel = "stylesheet" type = "text/css" href = "CCCstyles.css" />
   </head>
   <header> 
      <script>
         $(document).ready(function()
         {
            setTimeout(function(){history.back();}, 60000);
         });	
      </script>

      <style>
         #backgroundArea
         {
            width:95%;
            height:70%;	
            margin: 2% auto;	
            background-repeat: no-repeat;
            background-image:url(Yarn.jpg);
            background-repeat: no-repeat;
            background-size:cover;

            border: 1px solid black;
            border-bottom-left-radius:40px;
            border-bottom-right-radius:40px;
            border-top-left-radius:40px;
            border-top-right-radius:40px;
         }

         #displayArea
         {
            width:90%;
            height:74%;
            margin: 50px auto;
            border: 5px solid black;
            border-bottom-left-radius:40px;
            border-bottom-right-radius:40px;
            border-top-left-radius:40px;
            border-top-right-radius:40px;
            background-color: white;	
            opacity:0.55;
            text-align:center;
            color:black;
         }

         #test
         {
            margin: 0px auto;
            background-color:rgb(100,150,50 0.5);	
         }

         h3
         {
            line-height:140%;	
         }

         #top
         {
            width:100%;
            height:7%;
            margin 10px auto;
            float:left;
            background-color: #660000;
            border-top-left-radius:40px;
            border-top-right-radius:40px;
            border: 1 px line black;
            color:#FFDF00;
            font: normal small-caps 120% 'Times New Roman', Times, serif;
            text-align:center;
            line-height:200%;
         }

         #bottom
         {
            width:100%;
            margin: 87px auto;
            background-color: #660000;
            border-top-left-radius:40px;
            border-top-right-radius:40px;
            border-bottom-left-radius:40px;
            border-bottom-right-radius:40px;
            color:#FFDF00;
            text-align:center;	
            font: normal small-caps 120% 'Times New Roman', Times, serif;
         )
      </style>
   </header>
   <body>
      <?php
         //show error
         ini_set('display_errors',1);
         ini_set('display_startup_errors',1);
         error_reporting(E_ALL);

         //get user data
         //isset() //data at gateway
         if(isset($_GET["FName"])){$fname=$_GET["FName"];}else
            {$fname="Craft";}	
										
         if(isset($_GET["LName"])){$lname=$_GET["LName"];}else
            {$lname="Fan";}	
										
         if(isset($_GET["phone"])){$phone=$_GET["phone"];}else
            {$phone="no phone";}	
										
         if(isset($_GET["email"])){$email=$_GET["email"];}else
            {$email="no email";}	
         //show data
      ?>
	   
      <section id="backgroundArea">
         <section id="top">
            Crazy Cassiel's Crafts &#183;
            1600 Chester Avenue Bremerton, WA 98337&#183;
            (360)555-5555
         </section>

         <section id="displayArea">
            <p id="test">
               <h2><?php echo $fname;?> <?php echo $lname;?></h2>
               <h3> 
                  Our Coupon is on its way to your mailbox.
                  <br/>We sent it to<i><b><?php echo $email?></b></i>
                  <br/> and will call <?php echo $phone?> just to harrass you! Its worth it thought 'cause you get <br/>
               </h3>
               <h1> 50 % Off Our Best Tools!</h1><br/>
               <h4>.... ( you buy the Yarn! )</h4>
               <h1>
                  Thank You!<br/>
                  Crazy Cassiel's Crafts
               </h1>
            </p>
         </section>
			
         <section id="bottom">
            <p>Crazy Cassiel's Crafts &#183;
            1600 Chester Avenue Bremerton, WA 98337&#183;
            (360)555-5555 </p>
         </section>
      </section>
   </body>
</html>
