<!-- Toast -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        @if (Session::has('flash_success'))
            toastr.success("{{ Session::get('flash_success') }}");
        @endif

        @if (Session::has('flash_error'))
            toastr.error("{{ Session::get('flash_error') }}");
        @endif
    });
</script>

<script src="{{ asset('app/assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('app/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('app/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('app/assets/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('app/assets/js/plugins-init/select2-init.js') }}"></script>
<script src="{{ asset('app/assets/vendor/apexchart/apexchart.js') }}"></script>


<script src="{{ asset('app/assets/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('app/assets/vendor/draggable/draggable.js') }}"></script>


<!-- tagify -->
<script src="{{ asset('app/assets/vendor/tagify/dist/tagify.js') }}"></script>

<script src="{{ asset('app/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('app/assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('app/assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('app/assets/vendor/datatables/js/jszip.min.js') }}"></script>
<script src="{{ asset('app/assets/js/plugins-init/datatables.init.js') }}"></script>

<!-- Apex Chart -->

<script src="{{ asset('app/assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('app/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>


<!-- Vectormap -->
<script src="{{ asset('app/assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('app/assets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('app/assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('app/assets/js/custom.js') }}"></script>
<script src="{{ asset('app/assets/js/deznav-init.js') }}"></script>

@if (Auth::user()->theme == 'dark')
    <script>
        jQuery(document).ready(function() {
            setTimeout(function() {
                dzSettingsOptions.version = 'dark';
                new dzSettings(dzSettingsOptions);
            }, 1500)
        });
    </script>
@endif
