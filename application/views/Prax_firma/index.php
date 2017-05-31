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
            <li class="active">Prax firma</li>
        </ol>
    </section>
    <div class ="row">

        <div class="col-md-11"><a href="<?php echo base_url(); ?>index.php/Prax_firma/insert" class="btn btn-primary pull-right">Pridaj</a></a></div>

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
                        <th style="width: 10px">ID </th>
                        <th>prax idprax</th>
                        <th>Firma idFirma</th>


                    </tr>
                    <?php foreach ($Prax_firma as $Prax_firma_item): ?>
                        <tr>
                            <td><?php echo $Prax_firma_item['ID']; ?></td>
                            <td><?php echo $Prax_firma_item['prax_idprax']; ?></td>
                            <td><?php echo $Prax_firma_item['Firma_idFirma']; ?></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Prax_firma/delete_Prax_firma_id/".$Prax_firma_item['ID']; ?>" onclick="return confirm('Ste si istý že chcete odstrániť daný riadok?')">Vymaž</a></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Prax_firma/show_Prax_firma_id/".$Prax_firma_item['ID']; ?>" >uprav</a></td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
