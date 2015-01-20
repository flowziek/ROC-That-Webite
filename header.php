<?php
echo '
<div id="menu">
    <div id="wrapper-1">
		<div id="logo">
			<a href="index.php"><h1 style="font-family: "Raleway", sans-serif;" >ROC That</h1></a>
		</div>
		<div id="menu-btn" style="float: right; margin: 20px;" onclick="ShowMenu()">
			<img src="https://cdn2.iconfinder.com/data/icons/flat-ui-icons-24-px/24/menu-24-512.png" width="20px">
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a>ROC That</a>
					<ul>
						<li><a href="discography.php">Discography</a></li>
						<li><a href="about.php">Over ROC That</a></li>
					</ul>
				</li>
				<li><a href="tourdata.php">Tourdata</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a>Contact</a>
					<ul>
						<li><a href="guestbook.php">Gastenboek</a></li>
						<li><a href="contact">Contact Informatie</a></li>
					</ul>
				</li>
			</ul>
		</nav>
    </div>
</div>
';
?>
