<?php
					if($_SESSION["fb_link"]!='0')
					{
                        ?>
						<a target="_Blank" href="https://www.facebook.com/'.$_SESSION["fb_link"].'" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
						<?php
						
					}
					?>
						<input style="width:300px" name="fblink" type="text" class="form-control" placeholder="Update Facebook Link"><input name="submitfb" type="submit" class="btn btn-success" value="a" ></div>
						<?php
					if($_SESSION["googleplus_link"]!=0)
					{
                        echo '<a target="_Blank" href="https://plus.google.com/'.$_SESSION["googleplus_link"].'" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google+</a>';
						
					}
					else
					{
						?>
						<input name="submitgplus" type="submit" class="btn btn-success" value="Update Google+ Link">
						<?php
					}
					
					if($_SESSION["twitter_link"]!=0)
					{
                        echo '<a target="_Blank" href="https://twitter.com/'.$_SESSION["twitter_link"].'" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter</a>';
						
					}
					else
					{
						?>
						<input name="submittwitter" type="submit" class="btn btn-success" value="Update Twitter Link">
						<?php
					}
					
					if($_SESSION["linkedin_link"]!=0)
					{
                        echo '<a target="_Blank" href="https://www.linkedin.com/in/'.$_SESSION["linkedin_link"].'" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin</a>';
						
					}
					else
					{
						?>
						<input name="submitlinkedin" type="submit" class="btn btn-success" value="Update Linkedin Link">
						<?php
					}
					?>