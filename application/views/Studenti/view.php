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
                <div id="container">
                    <?php echo form_open('Studenti/insertStudenti'); ?>
                    <h1>Vypíšte údaje pre pridanie studenta.</h1><hr/>
                    <?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">Student pridaný.</h3></CENTER><br>
                    <?php } ?>
                    <?php echo form_label('Meno študenta :'); ?> <?php echo form_error('dmeno'); ?><br />
                    <?php echo form_input(array('id' => 'dmeno', 'name' => 'dmeno')); ?><br />

                    <?php echo form_label('Priezvisko študenta :'); ?> <?php echo form_error('dpriezvisko'); ?><br />
                    <?php echo form_input(array('id' => 'dpriezvisko', 'name' => 'dpriezvisko')); ?><br />

                    <?php echo form_label('Studijný program :'); ?> <?php echo form_error('dstudprogram'); ?><br />
                    <?php echo form_input(array('id' => 'dstudprogram', 'name' => 'dstudprogram')); ?><br />

                    <?php echo form_label('Ročník :'); ?> <?php echo form_error('drocnik'); ?><br />
                    <?php echo form_input(array('id' => 'drocnik', 'name' => 'drocnik')); ?> <br /><br />

                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Pridaj')); ?>
                    <?php echo form_close(); ?><br/>
                    <div id="fugo">

                    </div>
                </div>
