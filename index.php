<?
$home = 'Y'; // This variable designates this as the index page, and tells the header to not put the title on this home page.
include('header.php'); // Include pulls another file into the page, and sticks it on where the include is called.
?>
 

<div class="row">  
    <div class="col col-sm-12 col-md-12">   
        <?php  echo quick_slideshow('FD1', 7000); ?> 
    </div><!-- /.col12-->    
</div><!-- /.row -->
    




<?include('footer.php'); ?>