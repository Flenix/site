<?php 
    $page_title = "VE 1.7";
    $mod_name = "Voltz Engine";
    $mod_sub ="Minecraft Modding Toolkit";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.downloads.php");
    
?>
    <h2>!!Info!!</h2>
    <p>By downloading these files you agree to the <a href="https://raw.githubusercontent.com/Universal-Electricity/ICBM/master/license.md">EULA</a> </p>
    <h2>!!Alpha Downloads!!</h2>
    
    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}">Show/hide</button>
	 <div id="spoiler" style="display:none">
    <?php 
        print(file_get_contents("http://$_SERVER[SERVER_NAME]//downloads/dev/VoltzEngine/downloads-1.7.10.php"));
    ?>
    </div>
    </br>
    </br>
    <?php
        print(file_get_contents("http://$_SERVER[SERVER_NAME]//php/maven.php"));
    ?>
    
<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php");
?>
