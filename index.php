	<?php 
    $title = "About";
    include "./Components/Connection.php";
include_once "./Components/Header.php";

?>

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
				<main>
		    <div class="hero" id="hero">
			
			    <div class="container">
				   <div class="welcome-container">
				   <b>Welcome</b>
				   <h1 class="BigBites"><span style="color:white;"><font size="+10"><b>To TechWise</b></font></span></h1>
				   </div>
				   <div class="restaurant-title">
				        <h3 class="title">
						Computers <br>
						&amp Accessories
						</h3>
						</div>
					</div>
						
		   </div>
		 <section class="offers">
                <div class="container">
                    <h2 class="section-title">Services We Offer</h2>
                    <div class="three-columns-grid">
                        <div
                            class="grid-item"
                            data-aos="fade-right"
                            data-aos-offset="400"
                            data-aos-duration="1000"
                        >
                            <img src="img/Repair.jpg" alt="" width="200" />
                            <h3 class="subtitle">
                                <strong>Technical Support and Repair Services</strong>
                            </h3>
                            <p class="paragraph">
                            Our experienced technicians can help you with any problems you may have with your computer.</p>
                        </div>
						 <div
                            class="grid-item"
                            data-aos="fade-left"
                            data-aos-offset="400"
                            data-aos-duration="1000"
                        >
                            <img src="img/vr.jpg" alt="" width="200" />
                            <h3 class="subtitle">
                                <strong>Wide variety of Computers and Accessories</strong> 
                            </h3>
                            <p class="paragraph">
                            Variety of computer accessories including keyboards, mice, monitors, and more. We also have a wide selection of computer peripherals such as printers, scanners, and external hard drives. We also sell computer parts such as processors, motherboards, and memory.
                            </p>
                        </div>
						 <div
                            class="grid-item"
                            data-aos="fade-left"
                            data-aos-offset="400"
                            data-aos-duration="1000"
                        >
                            <img src="img/laptops.jpg" alt="" width="200" />
                            <h3 class="subtitle">
                                <strong>Our store features the latest laptops, desktops, and tablets from top manufacturers.</strong>
                            </h3>
                            <p class="paragraph">
                            We offer a wide range of products to meet all of your computer needs. </p>
                        </div>
                    </div>
                </div>
				
            </section>
			
	                 
	</main>

    <?php

require_once "./Components/Footer.php";

?>