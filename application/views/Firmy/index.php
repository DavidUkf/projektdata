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
            <li class="active">Firmy</li>
        </ol>
    </section>
    <div class ="row">

        <div class="col-md-11"><a href="<?php echo base_url(); ?>index.php/Firmy/insert" class="btn btn-primary pull-right">Pridaj firmu</a></a></div>

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
                        <th style="width: 10px">ID firmy</th>
                        <th>Nazov firmy</th>
                        <th>Adresa firmy</th>

                    </tr>
                    <?php foreach ($Firmy as $Firmy_item): ?>
                        <tr>
                            <td><?php echo $Firmy_item['idFirma']; ?></td>
                            <td><?php echo $Firmy_item['nazov']; ?></td>
                            <td><?php echo $Firmy_item['adresa']; ?></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Firmy/delete_firmy_id/".$Firmy_item['idFirma']; ?>" onclick="return confirm('Ste si istý že chcete odstrániť daný riadok?')">Vymaž</a></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Firmy/show_firmy_id/".$Firmy_item['idFirma']; ?>" >uprav</a></td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
