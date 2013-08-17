<?php
    $this->load->view('header');
?>
<body>
    <div class="container" id="content">
        <div class="row">
            <!-- Left menu -->
            <div class="span3 left_menu">
                <?php
                    $this->load->view('menu/left_menu.php');
                ?>
            </div>
            
            <!-- Body pages -->
            <div class="span11 body_style">
                <!-- TOP menu -->
                <?php
                    isset($top_menu) ? $this->load->view($top_menu) : "";
                ?>
                
                <!-- body search -->
                <div class="row">
                    <div class="span11 body_content">
                        <?php
                            isset($search) ? $this->load->view($search) : "";
                        ?>
                    </div>
                </div>
                
                <!-- body contents -->
                <div class="row">
                    <?php
                        isset($order_pages) ? $this->load->view($order_pages) : "";
                    ?>
                </div>
                
                <!-- popup menu -->
                <div id="dialog" title="" style="display: none;"></div>
                <!-- footer -->
                <?php
                    $this->load->view('footer');
                ?>
            </div>
        </div>
    </div>
</body>
</html>