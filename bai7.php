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
                    Đề bài: Liệt kê tất cả các “ước số” của số nguyên dương n<br />
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
                            echo 'Ước của ' . $_POST['n'] . ' là : ';
                            $uoc = array();
                            $uoc = timUoc($_POST['n']);
                            foreach ($uoc as $item) {
                                echo $item . ', ';
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