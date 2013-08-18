<?php
    $this->load->view('header');
?>
<body>
    <div class="container-fluid">
        <div class="row-fluid">         
            <div class="span12">
                <div class="span12 logocolor">
                    <div class="logo"><a href="/news_tape/"><img src="/images/logo.png"></a></div>
                </div>
                <div class="span12 topmenu">
                    <div class="span8 list"> <a href="#"><div class="icon type"></div>Список груп</a></div>
                    <div class="span4 repeat"> <a href="#"><div class="icon repeat"></div>Обновить</a></div>
                </div>
                <div style="height: 39px"></div>
                <div class="span12 news_blok">
                     <div class="span12 topwhite">
                         <div class="span12">
                            <div style="margin:7px">
                                <img class="largeimage" src="<?php echo !empty($eventData->event->photo_url_big) ? $eventData->event->photo_url_big : "/images/bg.jpg"; ?>">
                            </div>
                            <div style="clear:both"></div>
                            <div style="margin:-7px 7px">
                                <h3><?php echo $eventData->event->group_name ?></h3>
                                <div class="icon time"></div><p><?php echo $eventData->event->event_date ?></p>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="span12 text">
                            <p id="searchUrl"><?php echo $eventData->event->text ?></p>
                        </div>
                        <div style="clear: both"></div>
                     </div>
                </div>
                <div class="span12 buttons">
                    <div class="event_form">
                        <a href="">
                            <div class="button-like">
                                <div class="like"></div>
                                <p class="likecoun"><?php echo $eventData->event->like_count ?></p>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                        <a href="">
                            <div class="button-igo">
                                <div class="igo"></div>
                                <p class="likecoun">Я ПОЙДУ</p>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                        <a target="_blank" href="<?php echo $eventData->event->event_url ?>">
                            <div class="button-source">
                                <div class="source"></div>
                                <p class="likecoun">ИСТОЧНИК</p>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </div>
                    <div style="height: 45px"></div>
                    <div style="clear: both"></div>
                </div>  
            </div>
        </div>
    </div>
    <script>
        // document.addEventListener('touchmove', function(event) {
        //     event.preventDefault();
        //     var touch = event.touches[0];
        //     console.log("Touch x:" + touch.pageX + ", y:" + touch.pageY);
        // }, false);
    </script>
</body>
</html>