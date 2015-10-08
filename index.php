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
The Capital Area Manufacturing Council (CAMC) is an important business alliance in Mid-Michigan, represented by manufacturing executives and HR professionals. &nbsp;A CAMC membership offers many benefits, such as increased knowledge of industries best practices by networking with innovative and forward-thinking peers,&nbsp;collaborated training efforts, outreach to Michigan’s youth, meaningful agendas at bi-monthly member meetings and industry tours.&nbsp;If you're a leader in the manufacturing community, we invite you to join!&nbsp;- <u><strong><a href="http://www.camconline.org/docs/Chris_Turner_Profile.pdf"><span style="color:#ADD8E6;">Chris Turner</span></a></strong></u><span style="color:#FFFFFF;">, </span>President of F.C. Mason, and CAMC Chair<br>
&nbsp;</p>		</div>
    </div><!-- /.col3-->    
            
        </div><!-- /.row -->
    </div><!-- /.bc-inner -->
</div><!-- /.slide-area -->




<?include('footer.php'); ?>