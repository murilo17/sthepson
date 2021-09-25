<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->

<script src="<?php echo base_url('public/assets/js/jquery-3.2.1.slim.min.js') ?>"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('public/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('public/assets/js/util.js') ?>"></script>
<script src="<?php echo base_url('public/assets/js/login.js') ?>"></script>
<script src="<?php echo base_url('public/assets/js/scripts.js') ?>"></script>
<?php
if (isset($scripts)){

    foreach ($scripts as $script_name){
        $src = base_url()."public/assets/js/".$script_name;
        ?>
        <script src="<?=$src ?>"></script>
    <?php }
} ?>
</body>
</html>