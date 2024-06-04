<script>
    $(document).ready(function() {

        $('#print').click(function(){
            event.preventDefault();
            TableToExcel('filter', 'room_order');
        })

        
    });    
</script>
