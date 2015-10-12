<?
$home = 'Y'; // This variable designates this as the index page, and tells the header to not put the title on this home page.
include('header.php'); // Include pulls another file into the page, and sticks it on where the include is called.
?>
 
<div class="bc-slidearea">
    <div class="bc-inner">
    <div class="row">  
        
    <div class="col col-sm-12 col-md-8">   
        
            <?php  echo quick_slideshow('FD1', 7000); ?> 
        
    </div><!-- /.col9-->
    <div class="col col-sm-12 col-md-4">   
        <div id="welcome-message">
			<h3>Welcome to CAMC</h3>
            <p>
			<img alt="" height="118" src="http://camconline.org/photos/21975_05122015083516.jpg" style="width: 100px; height: 118px; border-width: 5px; border-style: solid; margin: 5px; float: left;" width="100">
The Capital Area Manufacturing Council (CAMC) is an important business alliance in Mid-Michigan, represented by manufacturing executives and HR professionals. &nbsp;A CAMC membership offers many benefits, such as increased knowledge of industries best practices by networking with innovative and forward-thinking peers,&nbsp;collaborated training efforts, outreach to Michigan’s youth, meaningful agendas at bi-monthly member meetings and industry tours.&nbsp;If you're a leader in the manufacturing community, we invite you to join!&nbsp;- <u><strong><a href="http://www.camconline.org/docs/Chris_Turner_Profile.pdf"><span style="color:#ADD8E6;">Chris Turner</span></a></strong></u><span style="color:#FFFFFF;">, </span>President of F.C. Mason, and CAMC Chair
&nbsp;</p>		</div>
    </div><!-- /.col3-->    
            
        </div><!-- /.row -->
    </div><!-- /.bc-inner -->
</div><!-- /.slide-area -->


<div class="bc-content-mid">
    <div class="row">  
        <div class="col col-sm-12 col-md-4">   
            <h3 class="titles">CAMC Events</h3>
            <div class="indent">
                <? include("/home/camc/public_html/events_feed.php");?>
            </div><!-- /.indent -->
            
            <h3 class="titles">Member Spotlight</h3>
            <?include("/home/camc/public_html/member_of_the_month.htm");?>
        </div><!-- /.col4-->
        
        <div class="col col-sm-12 col-md-4 mid">   
            <h3 class="titles">CAMC News</h3>
            <div class="indent">
							<a href="<?=$base;?>members/news/news_archive.php?org_id=CAMC">View News Archive</a><br /><br />
						<?include("/home/camc/public_html/news_feed.php");?>
                        </div>
        </div><!-- /.col4-->
        
        <div class="col col-sm-12 col-md-4">   
            <h3 class="titles">Member Log In</h3>
            <div class="indent">
							<form method="POST" style="display:inline;" action="https://www.viethconsulting.com/members/gateway.php">
								<input class="ls-box"  type="text" name="Username" value="Username..." onFocus="this.value='';" /><br />
								<input class="ls-box" type="password" name="Password" value="Password..." onFocus="this.type='password';this.value=''" id="Password"/>
								<input type="submit" value="Log In" class="ls-button" />
								<a href="<?=$base?>forgot_pwd.php"><i>Forgot Password?</i></a>
								
							</form>
						</div>
            
            <h3 class="titles">Search the Site</h3>
                        <div class="indent">
							<form id="searchbox_006666080711133337058:9cbw5nvm-7k" action="<?=$base?>search.php?ma=Y">
								<input value="006666080711133337058:9cbw5nvm-7k" name="cx" type="hidden"/>
								<input value="FORID:11" name="cof" type="hidden"/>
								<input id="q" class="ls-box" name="q" />
								<input value="Search" name="sa" class="ls-button" type="submit"/>
								<br />
							</form>
						</div>

            <h3 class="titles">Resources</h3>
            <div class="indent">
							<?include("/home/camc/public_html/links.htm")?>
						</div>
            
            <div class="indent blue-border" style="margin-left: -1px;">
							<div id="slider-container-FD2" style="display:none;margin:0px auto; width:262px; height:300"
							name="https://www.viethconsulting.com/slideshows/nivo_feed.php?org_id=CAMC&ban=FD2&speed=6">Loading...</div>
							<link href="https://www.viethconsulting.com/_jquery/nivo/nivo-slider.css" media="screen" rel="stylesheet" type="text/css">
							<script type="text/javascript" src="https://www.viethconsulting.com/_jquery/js/init_jquery.js"></script>
							<script type="text/javascript" src="https://www.viethconsulting.com/_jquery/js/init_nivoslider.js"></script>
							<script type="text/javascript">
							function banner_callback_FD2(data){
								 $("#slider-container-FD2").html(data.html).show();
							}
							$(document).ready( function() {
								$.ajax({
									url: $("#slider-container-FD2").attr("name"),
									dataType: 'jsonp',
									jsonpCallback: 'banner_callback_FD2',
									success: function(data){
										// we make a successful JSONP call!
									}
								});
							});
							</script>
						</div>
        </div><!-- /.col4-->
        
    </div><!-- /.row -->
    <div class="mid-bottom row"> 
        <div class="col col-sm-12 col-md-12">   
            <h3 class="titles">Contact Information</h3>
        </div><!-- /.col12-->
        
    </div><!-- /.row -->
    <div class="bottom row">  
        <div class="col col-sm-12 col-md-12">   
        <ul class="list-unstyled  list-inline">
            <li>
                
                
				<p>
                    <img alt="" src="images/icon-mail.png">
                    2110 South Cedar
                <br>
				Lansing, MI 48910
                    </p>
			
            </li>
        </ul>
            </div><!-- /.col12-->
    </div><!-- /.row -->

</div><!-- /. -->



<?include('footer.php'); ?>