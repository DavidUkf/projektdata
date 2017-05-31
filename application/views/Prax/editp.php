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
                        <?php foreach ($single_prax as $prax): ?>
                            <p>Upravte údaje</p>
                            <form method="post" action="<?php echo base_url() . "index.php/Prax/update_prax_id1"?>">
                                <label id="hide">Id odbornej praxe :</label> <br>
                                <input type="text" id="hide" name="did" value="<?php echo $prax->idprax; ?>" > <br>
                                <label> Poznámka :</label> <br>
                                <input type="text" name="dpoznamka" value="<?php echo $prax->poznamka; ?>"> <br>
                                <label>Zaciatok praxe :</label> <br>
                                <input type="text" name="dzaciatok_praxe" value="<?php echo $prax->zaciatok_praxe; ?>"> <br>
                                <label>Koniec praxe :</label> <br>
                                <input type="text" name="dkoniec_praxe" value="<?php echo $prax->koniec_praxe; ?>"> <br>
                                <label>Uspesne ukoncenie :</label> <br>
                                <input type="text" name="duspesne_ukoncenie" value="<?php echo $prax->uspesne_ukoncenie; ?>"> <br> <br>
                                <label>Zodpovedná osoba :</label> <br>
                                <input type="text" name="dzodpovedny" value="<?php echo $prax->zodpovedny; ?>"> <br> <br>
                                <input type="submit" id="submit" name="dsubmit" value="Update">
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>