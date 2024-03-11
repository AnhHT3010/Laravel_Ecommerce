
<!-- Mainly scripts -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- jQuery UI -->
<script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Toastr -->
<script src="assets/js/plugins/toastr/toastr.min.js"></script>
@if(isset($config['js']) && is_array($config['js']))
    @foreach ($config['js'] as $key => $val)
        {!!'<script script src="'.$val.'"></script>'!!}
    @endforeach
@endif


