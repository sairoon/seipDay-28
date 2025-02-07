<?php include "pages/includes/header.php"?>

<h1 class="text-center pt-3">This is Home page</h1>

    <!--<section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-success">Students</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Personal Number</th>
                                    <th>Parent Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Alu</td>
                                        <td>alu@alu.com</td>
                                        <td>5632623</td>
                                        <td>54361255</td>
                                    </tr>
                                    <tr>
                                        <td>Mula</td>
                                        <td>mula@mula.com</td>
                                        <td>563253215623</td>
                                        <td>54361264521455</td>
                                    </tr>
                                    <tr>
                                        <td>Begun</td>
                                        <td>begun@begun.com</td>
                                        <td>5645214632623</td>
                                        <td>5436153215255</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

<section class="py-4">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog) { ?>
            <div class="col-md-4 col-sm-6 pb-3">
                <div class="card rounded-0">
                    <img style="height: 180px;" src="assets/img/<?php echo $blog['image']?>" class="card-img-top rounded-0" alt="">
                    <div class="card-body">
                        <h3><?php echo $blog['title']?></h3>
                        <hr>
                        <p><?php echo $blog['short_description']?></p>
                        <a href="" class="btn btn-outline-success rounded-0 float-end">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php"?>
