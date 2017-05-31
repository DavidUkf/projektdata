<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $header ?>
            <small><?php echo $header2 ?></small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="container">
                    <div id="wrapper">
                    </div>
                    <div id="detail" style="margin-left: 20px">
                        <?php foreach ($single_Student_prax as $Student_prax): ?>
                            <p>Upravte údaje</p>
                            <form method="post" action="<?php echo base_url() . "index.php/Student_prax/update_Student_prax_id1"?>">
                                <label id="hide">ID idprax :</label> <br>
                                <input type="text" id="hide" name="did" value="<?php echo $Student_prax->ID; ?>" > <br>
                                <label>student idstudent :</label> <br>
                                <input type="text" name="dStudent_idStudent" value="<?php echo $Student_prax->Student_idStudent; ?>"> <br>
                                <label>prax idprax :</label> <br>
                                <input type="text" name="dprax_idprax" value="<?php echo $Student_prax->prax_idprax; ?>"> <br>

                                <input type="submit" id="submit" name="dsubmit" value="Update">
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>