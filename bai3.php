<?php
require('./inc/header.php');
$s = 0;
function giaiThua($n)
{
    if ($n == 1)
        return 1;
    return $n * giaiThua($n - 1);
}

function sum($x, $n)
{
    global $s;
    for ($i = 1; $i <= $n; $i++) {
        $s += (pow($x, $i)) / giaiThua($i);
    }
    return $s;
}

if (isset($_POST['submit'])) {
    $x = $_POST['x'];
    $n = $_POST['n'];
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
                    Đề bài: Nhập vào x, n. Tính tổng biểu thức sau:<br />
                    <img src="./images/bai3.png" alt="">
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <form action="" method="POST">
                        <input type="number" name="x" placeholder="Nhập x ...">
                        <input type="number" name="n" placeholder="Nhập n ...">
                        <input type="submit" name='submit' value="Submit">
                    </form>
                    <br>
                    <p>Tổng:
                        <?php if (isset($_POST['submit'])) {
                            echo sum($x, $n);
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