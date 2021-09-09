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
                    Đề bài: Viết chương trình nhập vào một sốgiây sau đó in ra màn hình thời gian dưới dạng giờ:phút:giây <br>
                    Ví dụ nhập vào 3769 giây thì in ra màn hình dưới dạng: 01:02: 49
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <form action="" method="POST">
                        <label for="n">Nhập số nguyên n : </label>
                        <input type="number" name="n" id="n" placeholder="Nhập n ...">
                        <input type="submit" name='submit' value="Submit">
                    </form>
                    <p>
                        <?php
                        if (isset($_POST['submit'])) {
                            $result = validate($_POST['n']);
                            echo $result;
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