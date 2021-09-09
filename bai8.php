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
                    Đề bài: Nhập vào 1 mảng, in ra các gtri âm và gtri dương của mảng<br />
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <p>Nhập vào 1 mảng cách nhau bởi dấu ',':</p>
                    <form action="" method="POST">
                        <input type="text" name="a">
                        <input type="submit" name='submit' value="Submit">
                    </form>
                    <br>
                    <p>
                        <?php if (isset($_POST['submit'])) {
                            $array = array();
                            $array = explode(',', $_POST['a']);
                            $arrayAm = gtriAm($array);
                            $arrayDuong = gtriDuong($array);
                            echo 'Các giá trị âm: ';
                            foreach ($arrayAm as $item) {
                                echo $item . ', ';
                            }
                            echo '<br>';
                            echo 'Các giá trị dương: ';
                            foreach ($arrayDuong as $item) {
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