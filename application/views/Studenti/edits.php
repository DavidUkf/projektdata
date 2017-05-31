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
                        <?php foreach ($single_student as $studenti): ?>
                            <p>Upravte údaje</p>
                            <form method="post" action="<?php echo base_url() . "index.php/Studenti/update_studenti_id1"?>">
                                <label id="hide">Id studenta :</label> <br>
                                <input type="text" id="hide" name="did" value="<?php echo $studenti->idStudent; ?>" > <br>
                                <label>Meno studenta :</label> <br>
                                <input type="text" name="dmeno" value="<?php echo $studenti->meno; ?>"> <br>
                                <label>priezvisko studenta :</label> <br>
                                <input type="text" name="dpriezvisko" value="<?php echo $studenti->priezvisko; ?>"> <br>
                                <label>studijný program :</label> <br>
                                <input type="text" name="dstudprogram" value="<?php echo $studenti->studprogram; ?>"> <br>
                                <label>Rocnik :</label> <br>
                                <input type="text" name="drocnik" value="<?php echo $studenti->rocnik; ?>"> <br> <br>
                                <input type="submit" id="submit" name="dsubmit" value="Update">
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>