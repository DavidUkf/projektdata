<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $header ?>
            <small><?php echo $header2 ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Databaza</a></li>
            <li class="active">Praxe</li>
        </ol>
    </section>
    <div class ="row">

        <div class="col-md-11"><a href="<?php echo base_url(); ?>index.php/Prax/insert" class="btn btn-primary pull-right">Pridaj prax</a></a></div>

    </div>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Poznamka</th>
                        <th>Zaciatok praxe</th>
                        <th>Koniec praxe</th>
                        <th>Uspesne ukoncenie</th>
                        <th>Zodpovedna osoba</th>
                    </tr>
                    <?php foreach ($Prax as $Prax_item): ?>
                        <tr>
                            <td><?php echo $Prax_item['idprax']; ?></td>
                            <td><?php echo $Prax_item['poznamka']; ?></td>
                            <td><?php echo $Prax_item['zaciatok_praxe']; ?></td>
                            <td><?php echo $Prax_item['koniec_praxe']; ?></td>
                            <td><?php echo $Prax_item['uspesne_ukoncenie']; ?></td>
                            <td><?php echo $Prax_item['zodpovedny']; ?></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Prax/delete_prax_id/".$Prax_item['idprax']; ?>" onclick="return confirm('Ste si istý že chcete odstrániť daný riadok?')">Vymaž</a></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Prax/show_prax_id/".$Prax_item['idprax']; ?>" >uprav</a></td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
