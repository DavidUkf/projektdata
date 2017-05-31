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
                        <?php foreach ($single_firmy as $firma): ?>
                            <p>Upravte údaje</p>
                            <form method="post" action="<?php echo base_url() . "index.php/Firmy/update_firmy_id1"?>">
                                <label id="hide">Id firmy :</label> <br>
                                <input type="text" id="hide" name="did" value="<?php echo $firma->idFirma; ?>" > <br>
                                <label>Nazov firmy :</label> <br>
                                <input type="text" name="dnazov" value="<?php echo $firma->nazov; ?>"> <br>
                                <label>Adresa firmy :</label> <br>
                                <input type="text" name="dadresa" value="<?php echo $firma->adresa; ?>"> <br>

                                <input type="submit" id="submit" name="dsubmit" value="Update">
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>