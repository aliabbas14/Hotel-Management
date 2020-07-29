<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once 'header3.php'; ?>
    <div class="w3_breadcrumb">
    <div class="breadcrumb-inner">  
            <ul>
                <li><a href="index.php">Home</a> <i> /</i></li>
                <li>FAQ</li>
            </ul>
        </div>
    </div>



<!-- Bootstrap FAQ - START -->
<div class="container">
    
         <div class="w3_content_agilleinfo_inner">
                        <div class="container">
                            <div class="inner-agile-w3l-part-head">
                               <h2 class="w3l-inner-h-title">FAQ(Frequently Ask Questions)</h2>
                                
                            </div>
                            </div>
                            </div>
    
<?php
    $connection=mysqli_connect("localhost","root","") or die("Unable to connect with Database");
    $select_db=mysqli_select_db($connection,"hotel_management") or die("Unable to connect with Database");
    $result=mysqli_query($connection,"select * from faq");
    while($a=mysqli_fetch_array($result))
    {
        
        $que1=$a['q1'];
        $que2=$a['q2'];
        $que3=$a['q3'];
        $que4=$a['q4'];
        $que5=$a['q5'];
        $que6=$a['q6'];
        $que7=$a['q7'];
        $que8=$a['q8'];
        $a1=$a['ans1'];
        $a2=$a['ans2'];
        $a3=$a['ans3'];
        $a4=$a['ans4'];
        $a5=$a['ans5'];
        $a6=$a['ans6'];
        $a7=$a['ans7'];
        $a8=$a['ans8'];

                    
        
    }


                
?>

    <div class="panel-group" id="accordion">
        <div class="faqHeader">General questions</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo $que1;?></a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php echo $a1;?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"><?php echo $que2;?></a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                   <?php echo $a2;?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"><?php echo $que3;?></a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                   <?php echo $a3;?>
                </div>
            </div>
        </div>

       
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><?php echo $que4;?></a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $a4;?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><?php echo $que5;?></a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    
                    <?php echo $a5;?>
                    
                   
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><?php echo $que6;?></a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    
                        <?php echo $a6;?>
                    <br />
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><?php echo $que7;?></a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $a7;?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"><?php echo $que8;?></a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $a8;?>
                </div>
            </div>
        </div>
       
        
</div>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

<!-- Bootstrap FAQ - END -->

</div>
<?php include_once 'footer.php'; ?>
</body>
</html>