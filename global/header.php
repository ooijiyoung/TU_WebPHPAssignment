<?php
function linkfile($file){
         /*
         $file is the file url relative to the root of your site.
         Yourdomain.com/folder/file.inc would be passed as
         "folder/file.inc"
         */

         $folder_depth = substr_count($_SERVER["PHP_SELF"] , "/");

         if($folder_depth == false)
            $folder_depth = 1;
         echo(str_repeat("../", $folder_depth - 1) . $file);
         }
?>

<div id="nav">
<li id="navLogoBtn"><a href="<?php linkfile("index.php");?>"><img src="<?php linkfile("img/logoSmall.png");?>" id="sitelogo" height="25px"> </a></li>

<li class="dropdown"><a href="#">Discover</a>
    <ul class="dropdown-content">
        <li><a href="<?php linkfile("discover/phone.php");?>">Phones</a></li>
        <li><a href="<?php linkfile("discover/computer.php");?>">Computers</a></li>
    </ul >
</li>
<li><a href="<?php linkfile("store/index.php");?>">Store</a></li>
<li><a href="<?php linkfile("store/cart.php");?>">Cart</a></li>
<li class="dropdown right"><a href="#">About</a>
    <ul class="dropdown-content right-content">
        <li><a href="<?php linkfile("about/about.php");?>">About Us</a></li>
        <li><a href="<?php linkfile("about/contact.php");?>">Contact Us</a></li>
    </ul >
</li>
<li class="dropdown right"><a href="#"><script src="<?php linkfile("script/member.js");?>" onload="rootDirNavBar()"></script></a>
    <ul class="dropdown-content right-content" id="loginContainer">
            <script src="<?php linkfile("script/member.js");?>" onload="rootDirDropMenu()"></script>
    </ul >
</li>
</div><!-- end of nav-->