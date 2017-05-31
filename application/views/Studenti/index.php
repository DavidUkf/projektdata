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
            <li class="active">Studenti</li>
        </ol>
    </section>

    <!-- Main content -->

    <div class ="row">

        <div class="col-md-11"><a href="<?php echo base_url(); ?>index.php/Studenti/insert" class="btn btn-primary pull-right">Pridaj studenta</a></a></div>

    </div>

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
                        <th>Meno studenta</th>
                        <th>Priezvisko studenta</th>
                        <th>Studijny program</th>
                        <th>Rocnik</th>
                    </tr>
                    <?php foreach ($Studenti as $Studenti_item): ?>
                        <tr>
                            <td><?php echo $Studenti_item['idStudent']; ?></td>
                            <td><?php echo $Studenti_item['meno']; ?></td>
                            <td><?php echo $Studenti_item['priezvisko']; ?></td>
                            <td><?php echo $Studenti_item['studprogram']; ?></td>
                            <td><?php echo $Studenti_item['rocnik']; ?></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Studenti/delete_studenti_id/".$Studenti_item['idStudent']; ?>" onclick="return confirm('Ste si istý že chcete odstrániť daný riadok?')">Vymaž</a></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Studenti/show_studenti_id/".$Studenti_item['idStudent']; ?>" >uprav</a></td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
