<?php
require('./inc/header.php');
$s = 0;
function snt($a)
{
    $count = 0;
    if ($a < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($a); $i++) {
        if ($a % $i == 0) {
            $count++;
        }
    }
    if ($count == 0) {
        return true;
    } else {
        return false;
    }
}
?>
<div id="wrapper-content">
    <div class="row">
        <?php require('./inc/side_bar.php') ?>
        <div class="col-md-9">
            <div id="content">
                <p class="bt">Bài làm</p>
                <hr />
                <div class="ex">
                    Đề bài: Tính tổng các snt từ 1 -> 100
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <p>Tổng các số nt từ 1 -> 100:
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            if (snt($i)) {
                                $s += $i;
                            }
                        }
                        echo $s;
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