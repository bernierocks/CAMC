<?
$home = 'Y'; // This variable designates this as the index page, and tells the header to not put the title on this home page.
include('header.php'); // Include pulls another file into the page, and sticks it on where the include is called.
?>
 

    <div class="row">  
        <div class="slide-area">
    <div class="col col-sm-12 col-md-8">   
        
            <?php  echo quick_slideshow('FD1', 7000); ?> 
        
    </div><!-- /.col9-->
    <div class="col col-sm-12 col-md-4">   
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
    </div><!-- /.col3-->    
            </div><!-- /.slide-area -->
        </div><!-- /.row -->





<?include('footer.php'); ?>