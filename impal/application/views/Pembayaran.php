<!DOCTYPE html>
<html>
<title>Sistem Informasi PT.CAHKERETA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    body {font-family: "Roboto", sans-serif}
    .w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
    .margin1{
        margin-top:120px;
        margin-bottom:50px;
        padding: 10px;
    }
    .margin2{
        margin-top:5px;
    }
    .panel{
        height:550px;
        overflow-y:scroll;
    }
</style>
<body>
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
        <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="<?php echo base_url(); ?>Cdashboard"><img src="<?php echo base_url(); ?>/img/LOGO.png" style="width:100%;"></a>
        <a class="w3-bar-item w3-button" href="<?php echo base_url(); ?>Cdashboard">Home</a>
        <a class="w3-bar-item w3-button w3-teal" href="<?php echo base_url(); ?>Cdashboard/pesan">Pesan Tiket</a>
        <a class="w3-bar-item w3-button" href="<?php echo base_url(); ?>Criwayat">Riwayat Pemesanan</a>
        <a class="w3-bar-item w3-button" href="<?php echo base_url(); ?>Clogin/logout">LOGOUT</a>
    </nav>
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
    <div id="myTop" class="w3-container w3-top w3-large">
        <p style="margin-top:5px;"><i class="fa fa-bars w3-button w3-hide-large w3-xlarge" onclick="w3_open()"></i>
        <span id="myIntro" class="w3-hide">Cah Kereta</span></p>
    </div>
    <div class="w3-row">
        <div class="w3-col l2" style="background-color:white;margin-top:40px;"></div>
        <div class="w3-col l10">
            <div class="w3-container">
                <div class="w3-container">
                    <div class="w3-container">
                        <div class="w3-container">
                            <div class="w3-container">
                                <div class="w3-container margin1">
                                    <div class="row">
                                        <div class="w3-col l2 m2"></div>
                                        <div class="w3-col l8 m8 w3-card" style="">
                                            <div class="w3-container w3-round">
                                                <h2 class="w3-center w3-bold" style="padding-top:15px;">Kode Pembayaran</h2>
                                                <hr>
                                                <div class="w3-container">
                                                    <div class="w3-container">
                                                        <header>
                                                            <h4 class="w3-center"><b>Terima Kasih</b></h4>
                                                            <hr>
                                                        </header>
                                                        <div>
                                                            <p>Berikut merupakan kode pembayaran Anda. Pembayaran bisa dilakukan di retail atau ATM terdekat.</p>
                                                            <div class="w3-border w3-sand" style="margin:auto;padding:10px;">
                                                                <h4 class="w3-center"><b>9983423642736</b></h4>
                                                            </div>
                                                        </div>
                                                        <footer style="margin-top:10px;margin-bottom:10px;">
                                                            <p>Salam Hangat, Cah Kereta</p>
                                                            <form action="<?php echo base_url(); ?>Cdashboard">
                                                                <input type="submit" class="w3-button w3-sand w3-round" value="Beranda">
                                                            </form>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w3-col l2 m2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    // Open and close the sidebar on medium and small screens
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    // Change style of top container on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity","w3-theme");
            document.getElementById("myIntro").classList.add("w3-show-inline-block");
        } else {
            document.getElementById("myIntro").classList.remove("w3-show-inline-block");
            document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity","w3-theme");
        }
    }

    // Accordions
    function myAccordion(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme";
        } else { 
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className = 
            x.previousElementSibling.className.replace(" w3-theme", "");
        }
    }
</script>
</body>
</html> 
