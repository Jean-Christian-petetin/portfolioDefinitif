<!DOCTYPE html>
<html>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logoJcDev.png" type="image/gif" sizes="16x16">
    <title>JCDEV.FR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
        .w3-row-padding img {margin-bottom: 12px}
        /* Set the width of the sidebar to 120px */
        .w3-sidebar {width: 120px;background: #222;}
        /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
        #main {margin-left: 120px}
        /* Remove margins from "page content" on small screens */
        @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <body class="w3-black">

        <!-- Icon Bar (Sidebar - hidden on small screens) -->
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
            <!-- Avatar image in top left corner -->
            <img class="indexPosition" src="<?php echo base_url(); ?>assets/img/logoJcDev.png" style="width:100%">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-home w3-xxlarge"></i>
                <p>ACCUEIL</p>
            </a>
            <a href="#about" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-user w3-xxlarge"></i>
                <p>SKILLS</p>
            </a>
            <a href="#photos" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-eye w3-xxlarge"></i>
                <p>TRAVAUX</p>
            </a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-envelope w3-xxlarge"></i>
                <p>CONTACT</p>
            </a>
        </nav>

        <!-- Navbar on small screens (Hidden on medium and large screens) -->
        <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
            <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
                <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
                <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
                <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
            </div>
        </div>

        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
                <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span>
                    <?php echo $presentation['jc_bienvenue'] ?>
                </h1>
                <p><?php echo $presentation['jc_metier'] ?>.</p>
                <img src="<?php echo base_url(); ?>assets/img/logoJcDev.png" class="w3-image" width="500" height="500">
            </header>

            <!-- About Section -->
            <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
                <h2 class="w3-text-light-grey"><?php echo $presentation['jc_nom'] ?></h2>
                <hr style="width:200px" class="w3-opacity">
                <p><?php echo $presentation['jc_textpres'] ?></p>

                <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>

                <?php foreach ($skills as $skills_items): ?>
                    <p class="w3-wide"><?php echo $skills_items['jc_nomSkill']; ?></p>
                    <div class="w3-white">
                        <div class="w3-dark-grey" style="height:28px;width:<?php echo $skills_items['pourcentage']; ?>%"></div>
                    </div>
                <?php endforeach; ?>

                <a href="<?php echo base_url(); ?>assets/img/CV_Jean-Christian_Petetin.pdf" download>
                    <button class="w3-button w3-light-grey w3-padding-large w3-section">
                        <i class="fa fa-download"></i> CV
                    </button>
                </a>
            </div>

            <!-- Testimonials -->
            <!--            <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
                        <img src="<?php echo base_url(); ?>assets/img/logoJcDev.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
                        <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>Jane Doe saved us from a web disaster.</p><br>
            
                        <img src="<?php echo base_url(); ?>assets/img/logoJcDev.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
                        <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
                        <p>No one is better than Jane Doe.</p>-->
            <!-- End About Section -->
        </div>

        <!-- Portfolio Section -->
        <div class="w3-padding-64 w3-content" id="photos">
            <h2 class="w3-text-light-grey"><?php echo $travaux['jc_travauxTitre'] ?></h2>
            <hr style="width:200px" class="w3-opacity">

            <!-- Grid for photos -->
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half">
                    <a href="https://github.com/"><img src="<?php echo base_url(); ?>assets/img/logoJcDev.png" class="image" style="width:100%"></a>
                    <a href="https://github.com/"><img src="<?php echo base_url(); ?>assets/img/testLogo2.png" class="image" style="width:100%"></a>
                </div>

                <div class="w3-half">
                    <a href="https://github.com/"><img src="<?php echo base_url(); ?>assets/img/logoJcDev.png" class="image" style="width:100%"></a>
                    <a href="https://github.com/"><img src="<?php echo base_url(); ?>assets/img/testLogo2.png" class="image" style="width:100%"></a>
                </div>
                <!-- End photo grid -->
            </div>
            <!-- End Portfolio Section -->
        </div>


        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
            <h2 class="w3-text-light-grey"><?php echo $contact['jc_contactTitre'] ?></h2>
            <hr style="width:200px" class="w3-opacity">

            <div class="w3-section">
                <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> <?php echo $contact['jc_contactLieu'] ?></p>
                <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> <?php echo $contact['jc_contactEmail'] ?></p>
            </div><br>
    <!--            <p>Lets get in touch. Send me a message:</p>
    
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
                <p>
                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </p>
            </form>-->
            <!-- End Contact Section -->
        </div>

        <!-- Footer -->
        <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
            <a href="<?php echo $contact['jc_contactLinkedin'] ?>"><i class="fa fa-linkedin fa-2x w3-hover-opacity"></i></a>
            <a href="<?php echo $contact['jc_contactTwitter'] ?>"><i class="fa fa-twitter fa-2x w3-hover-opacity"></i></a>
            <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
            <!-- End footer -->
        </footer>

        <!-- END PAGE CONTENT -->
    </div>
</body>
</html>