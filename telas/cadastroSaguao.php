<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Saguão Principal</title>
    </head>
    <body>
        <?php
           
        ?>
        <h1></h1>
        
        
            <div id="dentro"><h1  style="color:white">Clínica Odontológica</h1></div>
     
            <div id="dentro2"></div>
			
			
         <input  type="button" class="MeuInput"  value="Sala de Bate-Papo" 
		 onclick="window.location='chatSaguao.php';"/>
		 
		 <input  type="button" class="MeuInput2" value="Saguão Principal"
		 onclick="window.location='saguao.php';"/>
			
		<input  type="button" class="MeuInput3" value="Sair"
		onclick="window.location='sair.php';"/>
           
		   <div id="dentro3"></div>
		
             
			 <div id="div_referencial">
			
			 
<br>


<a href="General_Message/General_Message.php"><img src="img/chat.png" class="navimg img-responsive">
<span class="nav-writting"></span> </a>
</div>
		 <div id="div_referencial2">
<br>


<a href="General_Message/General_Message.php"><img src="img/icone.png" class="navimg img-responsive">
<span class="nav-writting"></span> </a>
</div>

<div id="div_referencial3">
<br>


<a href="General_Message/General_Message.php"><img src="img/logout.png" class="navimg img-responsive">
<span class="nav-writting"></span> </a>
</div>

 
<br>

        
        
        <style>
		#quadro4{       
                width: 500px; height: 500px;
                background-color: red; 
                border-width: 444px;
				border-color: red;
                border-style: solid;    
				position: relative; 
				top: 0px; left: 0px; right: 0px;
}
		#div_referencial {

width:80px;
heigth:800px;
border-color: red;
border-width: 300px;

border-style: transparent;
position: absolute;
  top: 97px;
  left: 15px;
}

#div_referencial2 {

width:80px;
heigth:800px;
border-color: red;
border-width: 300px;

border-style: transparent;
position: absolute;
  top: 140px;
  left: 13px;
}
#div_referencial3 {

width:80px;
heigth:800px;
border-color: red;
border-width: 300px;

border-style: transparent;
position: absolute;
  top: 185px;
  left: 17px;
}
         
            #dentro{
                width: auto; height: 62px;
                background-image: 
                    linear-gradient(to left, rgba(0,0,255,0) , rgba(0,0,255,1) ); 
                margin-left: 0px;
				position: relative; top: -40px; left: auto right: auto;
				border-width: 4px;
				border-style: solid;
				border-color: #436EEE;
				
				
				
            }
			#dentro2{
                width: 220px; height: 55px;
              background-image: linear-gradient(to left, white, #9C9C9C, #B5B5B5);
                margin-left: 0px;
				position: relative; top: -40px; left: auto right: auto;
				
				
				
            }
INPUT.MeuInput {
     width: 220px;
     height: 45px;
     font-family: verdana;
     background-color: #B5B5B5;
	 position: relative; top: -40px; left: auto right: auto;
}
INPUT.MeuInput2 {
     width: 220px;
     height: 45px;
     font-family: verdana;
     background-color: #B5B5B5;
	 position: relative; top: 4px; left: -224px; right: auto;
	 
}
INPUT.MeuInput3  {
     width: 220px;
     height: 45px;
     font-family: verdana;
     background-color: #B5B5B5;
	 position: relative; top: 47px; left: -448px; right: auto;
	 
}
#dentro3{
                width: 220px; height: 1550px;
                background-image: linear-gradient(to left, white, #9C9C9C, #B5B5B5);
                margin-left: 0px;
				position: relative; top: 46px; left: auto right: auto;
}

        </style>     
    </body>
</html>