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
            < class="box-header with-border">
                < id="container">
                    <?php echo form_open('Firmy/insertFirmy'); ?>
                    <h1>Vypíšte údaje pre pridanie firmy.</h1><hr/>
                    <?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">Firma pridaná.</h3></CENTER><br>
                    <?php } ?>
                    <?php echo form_label('Názov firmy :'); ?> <?php echo form_error('dnazov'); ?><br />
                    <?php echo form_input(array('id' => 'dnazov', 'name' => 'dnazov')); ?><br />

                    <?php echo form_label('Adresa firmy :'); ?> <?php echo form_error('dadresa'); ?><br />
                    <?php echo form_input(array('id' => 'dadresa', 'name' => 'dadresa')); ?><br />


            <?php echo form_submit(array('id' => 'submit', 'value' => 'Pridaj')); ?>
            <?php echo form_close(); ?><br/>
                    <div id="fugo">

                    </div>
                </div>
