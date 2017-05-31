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
                        <?php foreach ($single_Prax_firma as $Prax_firma): ?>
                            <p>Upravte údaje</p>
                            <form method="post" action="<?php echo base_url() . "index.php/Prax_firma/update_Prax_firma_id1"?>">
                                <label id="hide">Id prax idprax :</label> <br>
                                <input type="text" id="hide" name="did" value="<?php echo $Prax_firma->ID; ?>" > <br>
                                <label>prax idprax :</label> <br>
                                <input type="text" name="dprax_idprax" value="<?php echo $Prax_firma->prax_idprax; ?>"> <br>
                                <label>Firma idFirma :</label> <br>
                                <input type="text" name="dFirma_idFirma" value="<?php echo $Prax_firma->Firma_idFirma; ?>"> <br>

                                <input type="submit" id="submit" name="dsubmit" value="Update">
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>