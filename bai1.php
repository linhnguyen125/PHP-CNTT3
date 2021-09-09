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
                    Đề bài: In các số lẻ, số chẵn từ 1 -> 50
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <p>Dãy số lẻ:
                        <?php
                        for ($i = 0; $i <= 50; $i++) {
                            if ($i % 2 != 0) {
                                echo $i . ", ";
                            }
                        }
                        ?>
                    </p>
                    <p>Dãy số chẵn:
                        <?php
                        for ($i = 0; $i <= 50; $i++) {
                            if ($i % 2 == 0) {
                                echo $i . ", ";
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('./inc/footer.php');
?>