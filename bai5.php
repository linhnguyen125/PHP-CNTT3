<?php
require('./inc/header.php');
function check($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) $sum += $i;
    }
    if ($sum == $n) {
        return true;
    }
    return false;
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
                    Đề bài: Nhập vào 1 số nguyên, kiểm tra số đó có phải số hoàn hảo không:<br />
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <form action="" method="POST">
                        <input type="number" name="n" placeholder="Nhập n ...">
                        <input type="submit" name='submit' value="Submit">
                    </form>
                    <br>
                    <p>
                        <?php if (isset($_POST['submit'])) {
                            if (check((int)$_POST['n'])) {
                                echo $_POST['n'] . ' là số hoàn hảo';
                            } else {
                                echo $_POST['n'] . ' không là số hoàn hảo';
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