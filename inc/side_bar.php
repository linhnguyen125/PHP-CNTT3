<?php
$n = 11;
?>
<div class="col-md-3">
    <div id="side-bar">
        <ul class="list-group list-ex">
            <li class="list-group-item tag-bt">
                <a href="index.php">Bài tập php</a>
            </li>
            <?php
            for ($i = 1; $i <= $n; $i++) {

            ?>
                <li class="list-group-item">
                    <a href="bai<?php echo $i ?>.php">Bài <?php echo $i ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>