<div class="container">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <?php echo form_open('home/admin_login', ['class' => 'form-horizontal']); ?>
        <fieldset>
            <img src="../../../../SchoolERP/uploads/logo.png" width="347" height="215" /><br>
            <legend>Sign up</legend>
            <?php if ($error = $this->session->flashdata('login_failed')): ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="alert alert-dismissible alert-danger">
                            <?php echo $error ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="inputUsername" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'Username', 'class' => 'form-control', 'placeholder' => 'Enter username', 'value' => set_value('username')]); ?>
                    <?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter Email', 'value' => set_value('email')]); ?>
                    <?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Password', 'value' => set_value('password')]); ?>
                    <?php echo form_error('password', "<p class='text-danger'>", "</p>"); ?>
                </div>
            </div>
            <p class="" style="margin-left: 100px;">
                Already have a account! Click here to<a href="<?= site_url('home/admin_login'); ?>"> login</p></a>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <?php echo form_submit(['name' => 'Submit', 'value' => 'Register', 'class' => 'btn btn-info']); ?>
                </div>
            </div>

        </fieldset>
        </form>
    </div>
    <div class="col-sm-3">
    </div>
</div>