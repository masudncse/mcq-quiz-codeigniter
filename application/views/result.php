<div class="message">
    <div class="row">
        <div class="col-md-12">
            <p>Quiz Result</p>
        </div>
    </div>
</div>

<main>
    <div class="container result">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">

                <?php if ($result == 3): ?>
                    <img width="180" src="<?php echo base_url('img/win.png'); ?>" alt="">

                    <h2 class="text-success" style="margin-bottom: 0; color: #24ed27;">Congratulation!</h2>
                    <h3 style="margin-top: 5px; color: #ffffff;">Your all answers are correct. You have won a gift.</h3>
                    <br>
                    <h1 class="text-success" style="margin-top: 5px; color: #24ed27;">Thank you</h1>

                    <br>
                    <br>

                    <a href="<?php echo site_url('home/'); ?>" class="btn btn-success">Go to Main Page</a>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>



                <?php else: ?>

                    <img width="180" src="<?php echo base_url('img/failed.png'); ?>" alt="">


                    <h2 class="text-danger" style="margin-bottom: 0; color: #ee2d28;">You are Failed.</h2>
                    <h3 class="text-warning" style="margin-top: 5px; color: #ffffff;">All answers are not correct.</h3>

                    <br>
                    <br>

                    <a href="<?php echo site_url('home/exam'); ?>" class="btn btn-danger">Try Again</a>
                    <a href="<?php echo site_url('home/'); ?>" class="btn btn-success">Go to Main Page</a>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <?php endif; ?>


            </div>
        </div>
    </div>
</main>


