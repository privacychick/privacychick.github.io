<?php
   include('header.html');
?>

<!--#include file="header.html" -->
	<!-- Main -->
		<div id="main">
			<div class="inner">
				<h1>Contact</h1>
				<span class="image main"><img width=1152 height=326 src="images/aaron-burden-64849-unsplash.jpg" alt="Photo by Aaron Burden on Unsplash" /></span>
				<section>
					<h2>Get in touch</h2>
					<form method="post" action="#">
						<div class="field half first">
							<input type="text" name="name" id="name" placeholder="Name" />
						</div>
						<div class="field half">
							<input type="email" name="email" id="email" placeholder="Email" />
						</div>
						<div class="field">
							<textarea name="message" id="message" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send" class="special" /></li>
						</ul>
					</form>
				</section>			
			</div>
		</div>
<?php
   include('footer.html');
?>
