<?php

    if(isset($_POST['submit']))
    
    {
        include_once('config.php');

        $email = $_POST['email']; 

        $result = mysqli_query($conexao, "INSERT INTO email(email) VALUES ('$email')");
    }
    

?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Newsletter</title>
        <meta http-equiv="X-AU-Compatible" content="IE-edge">
        <meta name="author" content="Yohan Marques">
        <meta name="description" content="Leads ou Newsletter">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="CSS/style.css">

        <!--Font Google-->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&family=Kaushan+Script&family=Kumbh+Sans:wght@400;700&family=League+Spartan:wght@400;500;700&family=Outfit:wght@300;400;600&family=Poppins:wght@400;500;600;700&family=Quicksand:wght@300;400;500;600;700&family=Red+Hat+Display:wght@500;700;900&family=Roboto:wght@400;500;700;900&family=Staatliches&family=The+Nautigal:wght@700&family=Work+Sans:wght@400;500;700&display=swap" rel="stylesheet">
        <!--Font Google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&family=Kaushan+Script&family=Kumbh+Sans:wght@400;700&family=League+Spartan:wght@400;500;700&family=Outfit:wght@300;400;600&family=Poppins:wght@400;500;600;700&family=Quicksand:wght@300;400;500;600;700&family=Red+Hat+Display:wght@500;700;900&family=Roboto:wght@400;500;700;900&family=Staatliches&family=The+Nautigal:wght@700&family=Work+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            
            <div class="one">
                <img class="logo" src="./images/logo.svg" alt="logo">
                
                <h3>atualize ideias e informações em 5 minutos.</h3>
                
                <p><strong>tudo que você precisa saber para começar seu dia bem e informado</strong></p>
                
                <p>noticias sobre o universo Rocketseat, e tudo o que precisa para começar o dia melhor.
                    perfeito para se preparar para codar ☕</p>
                    
                    <div>
                    <form action="leadnew.php" method="POST">
                       <label>Insira seu e-mail:</label>
                       
                       <div class="Rect">
                           <input type="email" name="email" id="email" placeholder="oi@rocketseat.com">
                        <button type="submit" name="submit" id="submit" class="btn-seta" onclick="Sucesso()">
                             <img src="./images/send.svg" alt="seta-enviar">
                        </button>
                           
                        </div>
                        
                    </form>
                    
                    <div class="me-ler">
                        <a href="#">
                            <p>deixe-me ler primeiro</p>
                            <svg class="seta" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="#8257E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 5L19 12L12 19" stroke="#8257E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </a>
                    </div>
                    
                </div>
            </div>
    
                
            <div class="two">
                <img src="images/read_news.jpg" alt="computador +  Homem">
            </div>
        </div>
        <script src="./JS/btn.js"></script>
    </body>
</html>
<!-- <input type="submit" name="submit" id="submit" class="btn-seta" onclick="Sucesso()"> -->