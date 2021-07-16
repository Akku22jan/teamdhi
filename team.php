<?php
$text= file_get_contents('./templates/header.html');
echo $text;
?>

<!-- css stylesheets -->
<link rel='stylesheet' type='text/css' href='./css/team.css'/>
</head>

    <body>
        <header class="Header_othercontainer__36Frz"
        style="background-image:linear-gradient(coral,lighten(blueviolet,15%))">
        <div class="Header_otherheadingcontainer__2Y0BQ">
            <div>
                <h1 class="Header_title__2ukzk" style="text-transform:uppercase">Our Team
                    <!-- -->
                </h1>
                <!-- <p class="Header_subheading__HxO0y">“One’s approach towards studying a subject determines their
                    success in it. With the right approach, one is bound to be successful.”</p> -->
            </div>
        </div>
<!-- NavBar Section -->
		<?php
$text= file_get_contents('./templates/navbar.html');
echo $text;
?>
<section>
	<h2>Our Team</h2>
	<div class='team'>
            <div class='team_card'>
				<div class='team-imgbox'>
                <img src='./images/lahari_cropresize.JPG' alt='Lahari Bhattacharya'/>
				</div>
				<div class='team-intro'>
                <h3>Lahari Bhattacharya</h3>
                <h4>Counsellor Academics</h4>
                <p>Alumnus: English Honours, University Of Calcutta</p>
				</div>
            </div>

            <div class='team_card'>
				<div class='team-imgbox'>
                   <img src='./images/akansha_cropresize.jpg' alt='Akanksha Yadav'/>
				   </div>
				   <div class='team-intro'>
                <h3>Akanksha Yadav</h3>
                <h4>Manager, Academics & Administration</h4>
                <p>Alumnus: IIT Bombay & AIT Pune</p>
				</div>
                <!-- <p>AIT Pune</p> -->
            </div>
			</div>

			<?php
$text= file_get_contents('./templates/button.html');
echo $text;
?> 

</section>

    <?php
$text= file_get_contents('./templates/footer.html');
echo $text;
?>