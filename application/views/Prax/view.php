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
                    <?php echo form_open('Prax/insertPrax'); ?>
                    <h1>Vypíšte údaje pre pridanie odbornej praxe.</h1><hr/>
                    <?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">Prax pridaná.</h3></CENTER><br>
                    <?php } ?>
                    <?php echo form_label('Poznámka :'); ?> <?php echo form_error('dpoznamka'); ?><br />
                    <?php echo form_input(array('id' => 'dpoznamka', 'name' => 'dpoznamka')); ?><br />

                    <?php echo form_label('zaciatok praxe :'); ?> <?php echo form_error('dzaciatok_praxe'); ?><br />
                    <?php echo form_input(array('id' => 'dzaciatok_praxe', 'name' => 'dzaciatok_praxe','value'=>'rrrr-mm-dd')); ?><br />

                    <?php echo form_label('Koniec praxe :'); ?> <?php echo form_error('dkoniec_praxe'); ?><br />
                    <?php echo form_input(array('id' => 'dkoniec_praxe', 'name' => 'dkoniec_praxe','value'=>'rrrr-mm-dd')); ?><br />

                    <?php echo form_label('Úspešné ukončenie :'); ?> <?php echo form_error('duspesne_ukoncenie'); ?><br />
                    <?php echo form_input(array('id' => 'duspesne_ukoncenie', 'name' => 'duspesne_ukoncenie')); ?><br />

                    <?php echo form_label('Zodpovedná osoba :'); ?> <?php echo form_error('dzodpovedny'); ?><br />
                    <?php echo form_input(array('id' => 'dzodpovedny', 'name' => 'dzodpovedny')); ?> <br /><br />

                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Pridaj')); ?>
                    <?php echo form_close(); ?><br/>
                    <div id="fugo">

                    </div>
                </div>
