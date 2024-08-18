<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "lengthMenu": [10, 25, 50, 75, 100, 500, 1000, 10000], // Entry select
            "pagingType": "full_numbers", // Enables First, Previous, Next, Last buttons
            "columnDefs": [{
                "targets": 0,
                "orderable": false
            }]
        });

        // Handle select all checkbox
        $('#select-all').on('click', function(){
            var rows = table.rows({ 'search': 'applied' }).nodes();
            $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });

        // Handle individual row selection
        $('#example tbody').on('change', 'input[type="checkbox"]', function(){
            if(!this.checked){
                var el = $('#select-all').get(0);
                if(el && el.checked && ('indeterminate' in el)){
                    el.indeterminate = true;
                }
            }
        });

        $('#example tbody').on('click', '.btn-primary', function(){
            var data = table.row($(this).parents('tr')).data();
            alert('You are editing the record of: ' + data[1]);
        });

        $('#example tbody').on('click', '.btn-danger', function(){
            var data = table.row($(this).parents('tr')).data();
            alert('You are deleting the record of: ' + data[1]);
        });
    });
</script>
