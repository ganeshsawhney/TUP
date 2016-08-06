<!DOCTYPE html>

        <style>
        
        /* demo */
.well {height:200px;}
.height1 {height:250px}
.height2 {height:300px}
/* demo */


@media (min-width:768px) {
    .inline-block-row {
        word-spacing: -1em;
        letter-spacing: -1em;
        overflow:hidden;
    }
    .inline-block-row .col-sm-4 {
        word-spacing: normal;
        vertical-align: top;
        letter-spacing: normal;
        display: inline-block;
        float:none;
    }
}
@media (min-width:992px) {
    .inline-block-row .col-md-3 {
        float:none;
    }
}
        </style>
        <!-- begin:content -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <div class="page-title">
                    <h2>Latest Article</h2>
                </div>
            </div>
        </div>


<?php
$chk=0;
 require("database/dbconnection.php");
        session_start();    
        if(isset($_GET['orderby']))
        {
        $orderby= $_GET['orderby'];
        }
        else
        {
        header('Location: '.'index.html');
        }
$statement="select * from writeup";
$result = mysqli_query($connection,$statement);

if($orderby=="no")
{
    $chk=1;
    if(isset($_GET['no']))
    {
        $ty = $_GET['no'];
    }
    else
    {
        header('Location: '.'index.html');
    }
    $result = mysqli_query($connection, "select * from writeup where id = ".$ty);
}
else if($orderby=="type")
{
    if(isset($_GET['typeid']))
    {
        $ty = $_GET['typeid'];
    }
    else
    {
        header('Location: '.'index.html');
    }
    $ty="'" . $ty . "'";
    $statement="select * from writeup where type = ".$ty." ORDER BY dateofcreation DESC";
    $result = mysqli_query($connection,$statement );

}
else if($orderby=="author")
{

    if(isset($_GET['author']))
    {
        $ty = $_GET['author'];
    }
    else
    {
        header('Location: '.'index.html');
    }
    $ty="'" . $ty . "'";
    $statement="select * from writeup where author = ".$ty." ORDER BY dateofcreation DESC";
    $result = mysqli_query($connection,$statement );

}
else
{
header('Location: '.'index.html');
}

if($chk!=1)
{
?>
 <div class="row inline-block-row container-post" style="position: relative;">
            <!-- begin:article -->    
<br>  
<?php
}
else
{
?>
 <div class="row container-post" style="position: relative; height: 1026px;">
            <!-- begin:article -->      
            <br>
<?php
}


if (mysqli_num_rows($result) > 0) 
{       
while($row = mysqli_fetch_assoc($result)) 
{
$art=substr($row['text'], 0, 100);
if($chk==1){
$datevar = date_create($row['dateofcreation']);
$fdate= date_format($datevar, 'g:ia \o\n l jS F Y');
?>

            <script type="text/javascript">window.top.document.title = "TUP | <?php echo $row['heading'];?>";</script>
            
                <div class="post-container">
                    
                    <div class="post-content" style="outline: 8px solid grey;">
                    <div class="heading-title heading-small">
                          <h2><a onclick="loadDoc('specific_article.php?orderby=no&no=<?php echo $row['id'];?>');"><?php echo $row['heading'];?></a></h2>
                        </div>
                        <div class="post-meta">
                                                <span>Perma-Link: <a href="http://www.theuntamedpen.com/url.php?orderby=no&no=<?php echo urlencode($row['id']);?>">http://www.theuntamedpen.com/url.php?orderby=no&no=<?php echo urlencode($row['id']);?></a></span><br>
                         <span>In: <b><a onclick="loadDoc('specific_article.php?orderby=type&typeid=<?php echo urlencode($row['type']);?>')"><?php echo $row['type'];?></a></b></span>
                          <br>
                          <span>Date Added: <b><?php echo $fdate;?></b></span>
                          <br>

                          <span>By: <a href="<?php echo $row['authorfblink'];?>" title="Post by" rel="author" target="_Black"><b><?php echo $row['author'];?></b></a>
                          <br><a onclick="loadDoc('specific_article.php?orderby=author&author=<?php echo urlencode($row['author']);?>')" title="Post by" rel="author"><b>View Posts by <?php echo $row['author'];?> </b></a>
                          </span>
                        </div>

                        <?php
                        if($row['fileupload']=='yes')
                            {
                            ?>
                        <div class="post-content no-padding">
                        <img src="./uploads/<?php echo $row['id'];?>.png" alt="Image">
                    </div><br><br>
                    <?php
                }
                ?>


                        <button onclick="responsiveVoice.speak('<?php echo str_replace(array("\r","\n"),"",htmlspecialchars(addslashes($row['text']), ENT_QUOTES, 'UTF-8'));?>');" class="btn btn-info"><i class="fa faa-vertical animated fa-play"></i>&nbsp Listen to it </button><br><br>
                        <textarea style="width: 100%;     -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    display:inline-block; border: solid 1px #000; min-height:500px;" disabled><?php echo $row['text'];?></textarea>
                        <br><br><br>
                        <button onclick="loadDoc('allarticles.php');" type="button" class="btn btn-info"><i class="fa faa-vertical animated fa-backward"></i>&nbsp Back to All Articles</i></button>
                    </div>
                    <!--div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div-->
            </div>
            
            
            
<?php
}
else
{
$datevar = date_create($row['dateofcreation']);
$fdate= date_format($datevar, 'g:ia \o\n l jS F Y');
?>
            <script type="text/javascript">window.top.document.title = "The Untamed Pen";</script>
   
            <div class="col-sm-4 col-md-3">
                <div class="post-container" style="outline: 4px solid grey;">
                    
                    <div class="post-content">
                    <div class="heading-title heading-small" >
                          <h2><a onclick="loadDoc('specific_article.php?orderby=no&no=<?php echo $row['id'];?>');"><?php echo $row['heading'];?></a></h2>
                        </div>
                        <div class="post-meta">
                        <span>In: <b><a onclick="loadDoc('specific_article.php?orderby=type&typeid=<?php echo urlencode($row['type']);?>')"><?php echo $row['type'];?></a></b></span>
                          <br>
                          <span>Date Added: <b><?php echo $fdate;?></b></span>
                          <br>

                          <span>By: <a href="<?php echo $row['authorfblink'];?>" title="Post by" rel="author" target="_Black"><b><?php echo $row['author'];?></b></a>
                          <br><a onclick="loadDoc('specific_article.php?orderby=author&author=<?php echo urlencode($row['author']);?>')" title="Post by" rel="author"><b>View Posts by <?php echo $row['author'];?> </b></a>
                          </span><br>
                          
                          
                        </div>

         <?php
                        if($row['fileupload']=='yes')
                            {
                            ?>
                        <div class="post-content no-padding">
                        <img src="./uploads/<?php echo $row['id'];?>.png" alt="Image">
                    </div>
                    <p><?php echo substr($art,0,10);?>.....</p>
                    <?php
                }
                else{
                    ?>
                        <p><?php echo $art;?>.....</p>
                        <?php
                    }
                    ?>



                        <div class="post-link">
                        
                            <button onclick="loadDoc('specific_article.php?orderby=no&no=<?php echo $row['id'];?>');" type="button" class="btn btn-info"><i class="fa faa-vertical animated fa-expand"></i>&nbsp Read more</i></button>
                        </div>
                    </div>
                    <!--div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
<?php
}
}
}
else
{
header('Location: '.'index.html');
}
?>


        </div> 
        <!-- end:article -->

      </div>
    </section>
    <!-- end:content -->