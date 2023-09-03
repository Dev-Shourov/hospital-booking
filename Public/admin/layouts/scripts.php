        <script src="<?php echo url_for('admin/assets/plugins/common/common.min.js'); ?>"></script>
        <script src="<?php echo url_for('admin/assets/js/custom.min.js'); ?>"></script>
        <script src="<?php echo url_for('admin/assets/js/settings.js'); ?>"></script>
        <script src="<?php echo url_for('admin/assets/js/gleek.js'); ?>"></script>
        <script src="<?php echo url_for('admin/assets/js/styleSwitcher.js'); ?>"></script>

    </body>

</html>

<?php
    db_disconnect($DB);
?>