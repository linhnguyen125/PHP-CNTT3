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
                <p class="text-center do">Giải</p>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Login</h5>
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="email" class="form-control form-control-sm" id="username" style="width: 250px;">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-sm" id="password" style="width: 250px;">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h5>Signup For New Account</h5>
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="email" class="form-control form-control-sm" id="username">
                            </div>
                            <div class="form-group">
                                <label for="useremail">User email</label>
                                <input type="text" class="form-control form-control-sm" id="useremail">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="select-title">Select title</label><br>
                                        <select id="select-title" class="form-control form-control-sm" style="width: 100px;">
                                            <option>Mr.</option>
                                            <option>Ms.</option>
                                            <option>Lgbt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="fullname">Full name</label>
                                        <input type="text" class="form-control form-control-sm" id="fullname">
                                    </div>
                                </div>
                            </div>
                            <p class="font-weight-bold">Company detail</p>
                            <p class="font-weight-light">provide detail about your company</p>
                            <div class="form-group">
                                <label for="company-name">Company name</label>
                                <input type="text" class="form-control form-control-sm" id="company-name" style="width: 250px;">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">I am agree with registration</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('./inc/footer.php');
?>