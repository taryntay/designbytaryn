	<!--  Navigation  -->
<nav>
	<ul>
		<li><a href="<?php echo site_url(); ?>/info">Park Info</a></li>
		<li><a href="<?php echo site_url(); ?>/events">Events</a></li>
		<li><a href="<?php echo site_url(); ?>/gallery">Gallery</a></li>
		<li><a href="<?php echo site_url(); ?>/rules">Rules</a></li>
		<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
		<li><a href="<?php echo site_url(); ?>/shop" id="selected">Buy Tickets</a></li>
	</ul>
</nav>

<div id="content_wrapper">

	<!--    Paypal View Cart Button from Paypal.com  using secure merchant id  -->
	<div id="viewcart">
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
			<input type="image" src="http://www.designbytaryn.com/assets/images/viewcartbutton.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" id="pixel">
		</form><!--End View Cart Button-->
		
		<!--  Featured Product  -->
		<h2>Featured Product</h2>
			<p><img src="http://i.istockimg.com/file_thumbview_approve/7950006/1/stock-photo-7950006-army-cap-clipping-path-included.jpg" alt="Camo Hat" width="150" height="150" class="itempic" /></p>
			<h4>Camo Hat: $10</h4>
	</div>

		<!--  Purchase Event Tickets  -->
		<div id="event_tickets">
			<h6>Event Tickets</h6>
			<!--    Paypal Add to Cart Code from Paypal.com    -->
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="93R7PCGEM2L8A">
				<table>
					<tr><td>
					<input type="hidden" name="on0" value="Choose your event weekend:"><p class="light">Choose your event weekend:</p>
					</td></tr>
					<tr><td>
					<select name="os0">
					<option value="September 13-15th">September 13-15th $40.00 USD</option>
					<option value="October 25-27th">October 25-27th $40.00 USD</option>
					<option value="December 27-29th">December 27-29th $40.00 USD</option>
					</select>
					</td></tr>
				</table>
				<input type="hidden" name="currency_code" value="USD">
				<input type="image" src="http://www.designbytaryn.com/assets/images/addtocartbutton.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" id="pixel">
			</form>
			<!--end paypal add to cart code-->
		</div>
		
		<!--  Items for sale list  -->
		<div class="contact_container">

			<div id="itempic">
				<p><img src="http://i.istockimg.com/file_thumbview_approve/9103441/1/stock-photo-9103441-blank-black-t-shirt-front-with-clipping-path.jpg" alt="TCB Tee" width="150" height="150" /></p></div>
			<div id="itemdesc"><h2>TCB T-Shirt</h2>
				<p>Item description item description item description item description item description item description item description item description item description item description.</p>
				
				<!--  Paypal Add to Cart Button  -->
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="7H7HJDTFJRZUQ">
					<table>
					<tr><td><input type="hidden" name="on0" value="Qty">Qty</td></tr><tr><td><select name="os0">
					<option value="1">1 $14.00 USD</option>
					<option value="2">2 $25.00 USD</option>
					<option value="3">3 $35.00 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="http://www.designbytaryn.com/assets/images/addtocartbutton.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" id="pixel" width="1" height="1">
				</form>
			</div>

			<div id="itempic">
				<p><img src="http://i.istockimg.com/file_thumbview_approve/7950006/1/stock-photo-7950006-army-cap-clipping-path-included.jpg" alt="Camo Hat" width="150" height="150" class="itempic" /></p></div>
			<div id="itemdesc"><h2>Camo Hat</h2>
					<p>Item description item description item description item description item description item description item description item description item description item description item description.</p>
				
				<!--  Paypal Add to Cart Button  -->
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="LRDTKKJMCHKJY">
					<table>
					<tr><td><input type="hidden" name="on0" value="Qty">Qty</td></tr><tr><td><select name="os0">
					<option value="1">1 $10.00 USD</option>
					<option value="2">2 $18.00 USD</option>
					<option value="3">3 $25.00 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="http://www.designbytaryn.com/assets/images/addtocartbutton.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" id="pixel" width="1" height="1">
				</form>
			</div>

	</div>
</div>
