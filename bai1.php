<?php
require('./inc/header.php');
$error = array();
$s = 0;
if ($_POST) {
    $n = $_POST['n'];
    if (empty($n) || $n < 1) {
        $error = 'Nhập lại n';
    } else {
        for ($i = 1; $i <= $n; $i++) {
            $s += $i;
        }
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
                    Đề bài: Nhập n từ bàn phím, tính tổng các số nguyên từ 1 -> n
                    <form action="" method="POST">
                        <input type="number" name="n" placeholder="Nhap n = ...">
                        <button type="submit">Submit</button>
                        <p class="text-danger">
                            <?php if (!empty($error)) {
                                print_r($error);
                            } ?>
                        </p>
                    </form>
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <p>Tổng:
                        <?php
                        if (empty($error)) {
                            echo $s;
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