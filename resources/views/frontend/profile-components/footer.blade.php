<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- plugin for charts  -->
<script src="{{ asset('admin/assets/js/plugins/chartjs.min.js') }}"></script>
<!-- plugin for scrollbar  -->
{{-- <script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script> --}}
<!-- main script file  -->
<script src="{{ asset('admin/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/flowbite.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
{{-- <script src="{{ asset('admin/assets/css/customDataTable.css') }}"></script> --}}
@stack('datatable')
{{-- <script src="{{ asset('js/script.js') }}"></script> --}}
<script src="{{ asset('js/admin-script.js') }}"></script>
</body>

</html>
