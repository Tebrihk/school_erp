<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php echo form_open('home/admin_login', ['class' => 'form-horizontal']); ?>
            <fieldset>

                <legend>STAFF REGISTRATION</legend>

                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">ID</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'id', 'class' => 'form-control', 'placeholder' => 'Enter ID', 'value' => set_value('id')]); ?>
                        <?php echo form_error('id', "<p class='text-danger'>", "</p>"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'Fname', 'class' => 'form-control', 'placeholder' => 'Enter First name', 'value' => set_value('Fname')]); ?>
                        <?php echo form_error('first username', "<p class='text-danger'>", "</p>"); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'Lname', 'class' => 'form-control', 'placeholder' => 'Enter Last name', 'value' => set_value('Lname')]); ?>
                        <?php echo form_error('Last username', "<p class='text-danger'>", "</p>"); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">Date of Birth</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'DOB', 'type' => 'date', 'class' => 'form-control', 'placeholder' => 'Enter Last name', 'value' => set_value('Lname')]); ?>
                        <?php echo form_error('Last username', "<p class='text-danger'>", "</p>"); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">Phone Number</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'pnumber', 'class' => 'form-control', 'placeholder' => 'Enter phone Number', 'value' => set_value('Pnumber')]); ?>
                        <?php echo form_error('Phone Number', "<p class='text-danger'>", "</p>"); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'add', 'class' => 'form-control', 'placeholder' => 'Enter Home Address', 'value' => set_value('address')]); ?>
                        <?php echo form_error('Last Address', "<p class='text-danger'>", "</p>"); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">Mail</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'mail', 'class' => 'form-control', 'placeholder' => 'Enter mail', 'value' => set_value('mail')]); ?>
                        <?php echo form_error('Last mail', "<p class='text-danger'>", "</p>"); ?>

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
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Department</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name' => 'dept', 'class' => 'form-control', 'placeholder' => 'Enter department', 'value' => set_value('department')]); ?>
                        <?php echo form_error('dept', "<p class='text-danger'>", "</p>"); ?>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <?php echo form_submit(['name' => 'Submit', 'value' => 'Register', 'class' => 'btn btn-info']); ?>
                    </div>
                </div>

            </fieldset>
            </form>
        </div>
        <div class="col-lg-6"></div>
    </div>
</div>