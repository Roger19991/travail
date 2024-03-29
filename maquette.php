<?php
try {
    $pdo = new pdo('mysql:host=localhost;dbname=test2','root','');
} catch (\Throwable $th) {
    echo 'erreur de connexion';
}
$pdostat = $pdo->prepare('SELECT services,besoins,quantite,stock,dates FROM user');
$pdostat->execute();
$reponse = $pdostat->fetchall(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>maquette</title>
    <link rel="stylesheet" href="maquette.css">
</head>
<body>
    <nav >
        <div  class="divlogo">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <a href="#">clinic</a>
        </div>
        <div class="divnom" >
            <div class="enf1">
               <p>wanko marcello</p> 
            </div>
            <div class="enf2">
                <p>aucun nouveau message</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>
            </div>
            <div class="enf3">
                <p>connecté il y'a 45 minutes</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-power" viewBox="0 0 16 16">
                    <path d="M7.5 1v7h1V1h-1z"/>
                    <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                </svg>
            </div>
        </div>
        
            <div class="divmenu">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="white" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                </svg>
                
                
                <ul class="ul1">
                    
                    <li><a href="#" class="bg2">administration</a></li>
                    <li><a  href="#" id="po" class="bg2">magasins</a>
                        <ul class="ul2" id="liste2">
                            <li><a href="#" id="sous1">consommables</a></li>
                            <li><a href="#"  id="sous2">medicaments</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="bg2">prescripteurs</a></li>
                    <li><a href="#" class="bg2">finances</a></li>
                    <li><a href="#" class="bg2">accueil</a></li>
                    <li><a href="#" class="bg2">services</a></li>
                    <li><a href="#" class="bg2">patients</a></li>
                </ul>
            </div>
        
    </nav>
    <div class="divcontenu">
        <section class="section1">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                </svg>
                <a href="">demandes</a>
                
            </p>
            <p>
                <img src="5.svg" alt="" width="15" height="15">
                <a href="">gerer les stocks</a>
                
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                </svg>
                <a href="">commandes</a>
                
            </p>
            <p>
                <img src=".svg" alt="" width="15" height="15">
                <a href="">bons de commandes</a>
                
            </p>
        </section>
        <section class="section2">
            <div class="divsearch">
                <input type="text" placeholder="recherche">
                <img src="../maquette/images/plus.png" alt="" width="20" height="20">
            </div>
            <div id="der">
                <div class="divtableau">
                    <h1>A commander</h1>
                    <table>
                    
                        <tr class="ent">
                            <th>service</th>
                            <th>besoins</th>
                            <th>quantite</th>
                            <th>en stock</th>
                            <th>date</th>
                            <th>action</th>
                        </tr>
                       <?php foreach($reponse as $valeur){?>
                            <tr class="bordure">
                                <td><?php echo $valeur['services'] ?></td>
                                <td><?php echo $valeur['besoins'] ?></td>
                                <td><?php echo $valeur['quantite'] ?></td>
                                <td><?php echo $valeur['stock'] ?></td>
                                <td><?php echo $valeur['dates'] ?></td>
                                <td><img src="3.svg" alt="" width="25" height="25"></td>
                            </tr>
                            <?php }?>
                        
                       
                    </table>
                </div>
               
                <div class="piedsect2">
                    <div class="enfpied">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16" >
                            <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <a href="#" class="number" id="pr">1</a>
                        <a href="#" class="number">2</a>
                        <a href="#" class="number">3</a>
                        <a href="#" class="number">4</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
        </section>
    </div>
    <script src="maquette.js"></script>
</body>

</html>