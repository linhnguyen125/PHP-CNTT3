<?php
require('./inc/header.php');
require('./lib/function_helper.php');
require('./lib/sinhvien.php');
?>
<div id="wrapper-content">
    <div class="row">
        <?php require('./inc/side_bar.php') ?>
        <div class="col-md-9">
            <div id="content">
                <p class="bt">Bài làm</p>
                <hr />
                <div class="ex">
                    Đề bài: Class PERSON gồm các thông tin: Họtên, ngày sinh, quê quán.
                    Xây dựng class SINHVIENkếthừa từclass trên và có thêm thuộc tính lớp.
                    Tạo đối tượng sinh viên với thông tin in ra là thông tin cá nhân của sinh viên.<br />
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <p>
                        <?php
                        $sinhvien = new SINHVIEN('Nguyen Van Linh', '11/01/2000', 'Nam Dinh',  'CNTT3-K59');
                        $sinhvien->showInfo();
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