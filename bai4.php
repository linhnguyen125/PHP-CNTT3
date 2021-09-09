<?php
require('./inc/header.php');
function ktra($n)
{
    if ($n == 0) {
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
                    Đề bài: Viết chương trình nhập vào 1 sốcho đến khi nhập vào số 0 thì dừng
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <form action="" method="POST">
                        <label for="n">Nhập số nguyên n : </label>
                        <input type="number" name="n" id="n" placeholder="Nhập n ...">
                        <input type="submit" name='submit' value="Submit" <?php
                                                                            if (isset($_POST['submit'])) {
                                                                                if (ktra($_POST['n']))
                                                                                    echo 'disabled';
                                                                            }
                                                                            ?>>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('./inc/footer.php');
?>