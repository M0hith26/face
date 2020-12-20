<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            img{
                margin-top: 100px;
                max-width: 100%;
                height: 500px;
                float: left;
            }

            .text{
                position: relative;
                float: right;
                margin-top:100px;
            }
            h2{
                margin:0px;
            }
        </style>

    </head>
    <body>
        <?php
            include 'header.php';
        ?>

        <?php
            $id=$_GET['id'];
            switch($id){
                case 1:
                    $src="images/5.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Cannon Eos</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Camera</strong><br><br>
                                        <strong> Price: 36000 </strong><br><br>
                                        Specifications: <strong> Autofocus single-lens ,<br> Mirrorless camera, <br> color-filter type </strong><br><br>
                                        Type: <strong>36 x 24 mm CMOS.</strong><br>
                                        Pixels:<strong>33MP</strong><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=3.8></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 3-5 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 2:
                    $src="images/2.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Sony DSLR</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Camera</strong><br><br>
                                        <strong> Price:40000  </strong><br><br>
                                        Specifications: <strong> Autofocus single-lens ,<br> white balancing, <br> color-filter type </strong><br><br>
                                        Type: <strong>97.1 x 128.1 x 79.6 mm</strong><br>
                                        color: <strong>white</strong><br>
                                        Pixels:<strong>32MP</strong><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=3.4></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 3-5 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 3:
                    $src="images/3.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Nikon DSLR</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Camera</strong><br><br>
                                        <strong> Price:50000  </strong><br><br>
                                        Specifications: <strong> Autofocus single-lens ,<br> white balancing, <br> color-filter type </strong><br><br>
                                        Type: <strong>single lens reflex digital camera</strong><br>
                                        color: <strong>black</strong><br>
                                        Pixels:<strong>24.7million</strong><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=3.7></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 3-5 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 4:
                    $src="images/4.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Olympus DSLR</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Camera</strong><br><br>
                                        <strong> Price:80000  </strong><br><br>
                                        Specifications: <strong> Autofocus single-lens ,<br> white balancing, <br> color-filter type </strong><br><br>
                                        Dimensions: <strong>134.1 x 90.9 x 68.9 mm</strong><br>
                                        color: <strong>black</strong><br>
                                        Pixels:<strong>20.4MP</strong><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=4.34></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 5-8 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 5:
                    $src="images/9.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Titan Model #301</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:watches</strong><br><br>
                                        <strong> Price:13000  </strong><br><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=4.34></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 5-8 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 6:
                    $src="images/10.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Titan Model #201</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:watches</strong><br><br>
                                        <strong> Price:3000  </strong><br><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=3.75></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 3-6 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 7:
                    $src="images/11.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>HMT Milan</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:watches</strong><br><br>
                                        <strong> Price:8000  </strong><br><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=3.76></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 4-6 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 8:
                    $src="images/12.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>FaburLuba #111</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:watches</strong><br><br>
                                        <strong> Price:18000  </strong><br><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=3.95></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 5-8 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 9:
                    $src="images/8.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>H&W</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Shirts</strong><br><br>
                                        <strong> Price:800  </strong><br><br>
                                        Specifications: <strong>Formal shirt with stripes</strong><br>
                                        Color: <strong>black</strong><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=4.03></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 3-5 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 10:
                    $src="images/6.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Luis Phil</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Shirts</strong><br><br>
                                        <strong> Price:1000  </strong><br><br>
                                        Specifications: <strong>Solid Formal shirt</strong><br>
                                        Color: <strong>LightBlue</strong><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=4.08></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 5-7 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 11:
                    $src="images/13.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Jon Zock</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Shirts</strong><br><br>
                                        <strong> Price:1500  </strong><br><br>
                                        Specifications: <strong>stripped Casual Shirt</strong><br>
                                        Color:<strong>Red</strong><br>
                                        <strong>Customer Reviews:</strong><progress max=5 value=3.75></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 3-4 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;

                case 12:
                    $src="images/14.jpg";
                    echo "<div class='container'>
                        <div class='row' >
                            <div class='col-xs-12'>                  
                                <img src='{$src}'>
                                <div class='text panel panel-info'>
                                    <div class='panel-heading'>
                                        <h2>Jhalsani</h2><br>
                                    </div>
                                    <div class='panel body'>
                                        <strong> Category:Shirts</strong><br><br>
                                        <strong> Price:1300  </strong><br><br>
                                        Specifications: <strong>Stripped casual shirt</strong><br>
                                        Color: <strong>sky blue</strong>
                                        <strong>Customer Reviews:</strong><progress max=5 value=4.3></progress><br>
                                    </div>
                                    <div class='panel-footer'>
                                        <h3>expected delivery in 3-4 days</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                break;
            }
        ?>
    </body>
</html>