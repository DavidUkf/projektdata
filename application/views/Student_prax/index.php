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

        <div class="col-md-11"><a href="<?php echo base_url(); ?>index.php/Student_prax/insert" class="btn btn-primary pull-right">Pridaj</a></a></div>

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
                        <th>Student idstudentx</th>
                        <th>Prax idprax</th>


                    </tr>
                    <?php foreach ($Student_prax as $Student_prax_item): ?>
                        <tr>
                            <td><?php echo $Student_prax_item['ID']; ?></td>
                            <td><?php echo $Student_prax_item['Student_idStudent']; ?></td>
                            <td><?php echo $Student_prax_item['prax_idprax']; ?></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Student_prax/delete_Student_prax_id/".$Student_prax_item['ID']; ?>" onclick="return confirm('Ste si istý že chcete odstrániť daný riadok?')">Vymaž</a></td>
                            <td><a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/Student_prax/show_Student_prax_id/".$Student_prax_item['ID']; ?>" >uprav</a></td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
