    <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/simplebar/simplebar.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/data/stock-prices.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/jsvectormap/maps/world.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/index.init.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/libs/simple-datatables/umd/simple-datatables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/datatable.init.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>