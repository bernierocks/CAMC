<?
$home = 'Y'; // This variable designates this as the index page, and tells the header to not put the title on this home page.
include('header.php'); // Include pulls another file into the page, and sticks it on where the include is called.
?>
 

<div class="row">  
    <div class="col col-sm-12 col-md-7">   
    <h1>WELCOME TO THE AFP OF NORTHWEST</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo orci,
placerat in elit vitae, elementum mollis turpis. Maecenas id nulla vitae nisl
rutrum fermentum.</p>

<p>Pellentesque eu ante ut risus auctor aliquam a a tortor. Sed ac consectetur
lectus, in lobortis nisi. Nullam eu lectus lacus. Integer feugiat viverra justo, eu
rhoncus ante ornare sed. Donec ac nisi molestie, mollis urna et, imperdiet leo.</p>

<p>Praesent hendrerit tristique consectetur. Pellentesque habitant morbi
tristique senectus et netus et malesuada fames ac turpis egestas. Praesent in
dapibus sem. Sed posuere magna non orci feugiat varius. </p>
</div><!-- /.col7-->
        <div class="col col-sm-12 col-md-5">   
        <img class="img-responsive" alt="" src="<?=$base;?>images/feature-home.jpg">
    </div><!-- /.col5-->
    
    
    </div><!-- /.row -->
    
    <br>
    <div class="row">  
        <div class="col col-sm-12 col-md-12">   
            <h1>CALENDAR OF EVENTS</h1>
            <div class="row">  
            <div class="bc-calendar">
                <? event_feed($event_options); ?>
            </div><!-- /.bc-calendar -->
                </div><!-- /.row -->
        </div><!-- /.col12-->
    </div><!-- /.row -->
    



<?include('footer.php'); ?>