<?php
require('./inc/header.php');
?>
<div id="wrapper-content">
    <div class="row">
        <?php require('./inc/side_bar.php') ?>
        <div class="col-md-9">
            <div id="content">
                <p class="bt">Bài làm</p>
                <hr />
                <div class="ex">
                    <p style="font-size: 18px; font-weight: 500;">
                        Mình bắt trước loài mèo kêu nha<br />
                        Kêu cùng Boo Meoww Meoww Meoww Meoww<br />
                    </p>
                    <div class="video">
                        <video autoplay controls>
                            <source src="./videos/Học tiếng mèo kêu - Trần Đức Bo.mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('./inc/footer.php');
?>