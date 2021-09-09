<?php
require('./inc/header.php');
require('./lib/function_helper.php');
?>
<div id="wrapper-content">
    <div class="row">
        <?php require('./inc/side_bar.php') ?>
        <div class="col-md-9">
            <div id="content">
                <p class="bt">Bài làm</p>
                <hr />
                <div class="ex">
                    Đề bài: Viết hàm tính giá trị của n giai thừa (n! =n(n-1)!)<br />
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
                            echo 'Giá trị của ' . $_POST['n'] . '! là : ' . giaiThua($_POST['n']);
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