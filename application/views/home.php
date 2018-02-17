<div class="message">
    <div class="row">
        <div class="col-md-12">
            <p>Thanks for visit our stall. participate in our quiz contest & win a gift.</p>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php echo form_open('home/process', array('autocomplete' => 'off')); ?>
                <div class="form-group">
                    <label>Your Name:</label>
                    <input type="text" name="name" class="form-control" required=""
                           value="<?php echo set_value('name'); ?>" placeholder="Enter your name" autofocus>
                    <?php echo form_error('name'); ?>
                </div>

                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="email" name="email" class="form-control" required=""
                           value="<?php echo set_value('email'); ?>" placeholder="Enter your valid email">
                    <?php echo form_error('email'); ?>
                </div>

                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="phone" pattern=".{10,}[0-9]" required=""
                           value="<?php echo set_value('phone'); ?>" class="form-control"
                           placeholder="Enter your mobile number">
                    <?php echo form_error('phone'); ?>
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">go to next</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</main>

