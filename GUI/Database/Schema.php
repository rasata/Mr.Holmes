<!--ORIGINAL CREATOR: Luca Garofalo (Lucksi)
AUTHOR: Luca Garofalo (Lucksi)
Copyright (C) 2022 Lucksi <lukege287@gmail.com>
License: GNU General Public License v3.0-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Graph</title>
        <?php
            require_once("../Actions/Language_Controller.php");
            Total_Languages();
        ?>
        <script src = "../Script/Author.js"></script>
        <script src = "../Script/Arrow.js"></script>
        <script src = "../Script/Graph/Builder.js"></script>
        <script src = "../Script/Graph/Params.js"></script>
        <script src = "../Script/Graph/Display.js"></script>
        <?php
            $exception = "/firefox/i";
            $browser = $_SERVER["HTTP_USER_AGENT"];
            if(preg_match($exception,$browser)){
        
            }
            else{
                require("../Actions/Session_Checker.php");
            }
            require_once("../Actions/Theme_Controller.php");
            $File_Name = "Schema.css";
            Body_Theme($File_Name);
        ?>   
        <link rel = "icon" href = "../Icon/Base/Logo.png">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <meta name="theme-color" content="#000000">
    </head>
    <?php
        require_once("../Actions/Language_Controller.php");
        $Modality = "SelectGraph";
        Get_Language($Modality);
    ?>
        <div class = "Top-bar">
            <p>MR.HOLMES</p>
            <div class = "Hidden-bar">
                <button id = "Menu" onclick="Active_Mobile()">MENU</button>
                <div class="Options" id ="Options1">
                    <a href="Username.php"></a>
                    <a href="Websites.php"></a>
                    <a href="Phone.php"></a>
                    <a href ="Ports.php"></a>
                    <a href = "Email.php"></a>
                    <a href="New_User.php"></a>
                    <a id = "change1"></a>
                    <?php 
                        require_once("../Actions/Language_Controller.php");
                        $Modality = "_SelectGraph_Mobile()";
                        List_Languages($Modality);
                    ?>
                </div>
            </div>
            <div class = "languages">
                <button id = "Current" onclick="Active_Language()"></button>
                <div class = "Content" id = "Content">
                    <?php 
                        require_once("../Actions/Language_Controller.php");
                        $Modality = "_SelectGraph()";
                        List_Languages($Modality);
                    ?>
                </div>
            </div>
            <div class = "Link">
                <a href= "Username.php"></a>
                <a href = "Websites.php"></a>
                <a href = "Phone.php"></a>
                <a href = "Ports.php"></a>
                <a href = "Email.php"></a>
                <a href= "New_User.php"></a>
                <a href="Schema.php"></a>
                <a id = "change2"></a>
            </div>
        </div>
        <?php 
            require_once("../Actions/Javascript_Controller.php");NoScript_Navbar();
            echo"<br>"; 
            require_once("../Actions/Javascript_Controller.php");NoScript_Alert();
        ?>
        <div class = "Upper-card">
            <?php require_once("../Actions/Theme_Controller.php");Image();?>
            <div id = "Options">
                <a href = "NewSchema.php"><button  id = "New" name = "New" type = "button"></button></a>
                <a href = "OpenSchema.php"><button  id = "Open" name = "Open" type = "button"></button></a>
                <a href = "DeleteSchema.php"><button  id = "Del" name = "Del" type = "button"></button></a>
            </div>
        </div> 
    </body>
</html>
