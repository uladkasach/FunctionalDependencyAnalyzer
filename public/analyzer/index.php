<?php
/////////////////////////////////////////////
// Sets Global Variables and Functions
/////////////////////////////////////////////
require_once($_SERVER["DOCUMENT_ROOT"] . "/../notpublic/config.php");
?>
<html>
<head>
     
<title> Functional Dependency Analyzer </title>
<meta name = 'description' content = ''>
<?php require_once(PUBLIC_ROOT . "/0_global/header/header.php"); ?>
    
<!-- include analyzer level global functions -->
<script src = '/analyzer/global/table_creator.js'></script>
    
</head>


<div class = 'flexme ' style = 'position:absolute; top:0; left:0; right:0; height:100%;'> 
    <!-- container limiting max screen size to 1920px -->
    <div style = 'min-width:1000px; margin-left:auto; margin-right:auto; min-height:100%;'>
        <Br><Br>
        <!-- call to action and first customer interaction -->
        <?php include("input/include.php"); ?> 
    
        <Br><Br>
        <!-- call to action and first customer interaction -->
        <?php include("process/include.php"); ?> 
    
        <Br><Br>
    </div>
    <!-- end limiting container -->
</div>    

</html>