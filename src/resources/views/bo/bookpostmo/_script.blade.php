<script>
    // flatpickr(".date", {
    //     enableTime: true,
    //     dateFormat: "{{ config('a1.datejs.datetime') }}",
    //     defaultDate: ["2021-09-06 00:00:00"]
    // });
    //CKEDITOR.replace( 'description' );

    /** meetingdt tidak diformat lagi ke format iso
     *  karena output sudah otomatis format iso
     *  YYYY-MM-DD
     */
    flatpickr('#meetingdt', {
        enableTime: false,
        dateFormat: "{{ config('a1.datejs.date') }}",
        defaultDate: new Date("{{ $viewModel->data->meetingdt }}")
    });

    /** startdt tidak diformat lagi ke format iso
     *  karena output sudah otomatis format iso
     *  HH:mm
     */
    flatpickr('#startdt', {
        enableTime: true,
        noCalendar: true,
        dateFormat: "{{ config('a1.datejs.timeshort') }}",
        defaultHour: 6,
        minTime: '06:00',
        maxTime: '23:59',
        time_24hr: true
    });

    /** enddt tidak diformat lagi ke format iso
     *  karena output sudah otomatis format iso
     *  YYYY-MM-DD HH:mm:ss
     */
    flatpickr('#enddt', {
        enableTime: true,
        noCalendar: true,
        dateFormat: "{{ config('a1.datejs.timeshort') }}",
        defaultHour: 6,
        minTime: '06:00',
        maxTime: '23:59',
        time_24hr: true
    });

// window.jsPDF = window.jspdf.jsPDF;
$(document).ready(function() {

    var frm = document.getElementById('frmData');
    if (frm) {

        $('#btnSubmit').click(function() {
            event.preventDefault();
            document.getElementById('frmData').submit();
        })
        
    } else {
        $('#btnSubmit').hide();
    }


    $('#exportXLS').click(function(){
        TableToExcel('filter', 'support_rpt');
    })

    $('#exportPDF').click(function(){

        var options = {
            columnStyles:{
                0: {
                    cellWidth: 23
                },
                1: {
                    cellWidth: 23
                }, 
                2: {
                    cellWidth: 20
                },
                3: {
                    cellWidth: 23
                },
                4: {
                    cellWidth: 60, overflow: 'linebreak'
                },
                5: {
                    cellWidth: 60, overflow: 'linebreak'
                },
                6: {
                    cellWidth: 60, overflow: 'linebreak'
                },
                7: {
                    cellWidth: 'auto', halign: 'center'
                },
                8: {
                    cellWidth: 'auto', halign: 'center'
                },
                9: {
                    cellWidth: 'auto', halign: 'center'
                },
                10: {
                    cellWidth: 'auto', halign: 'center'
                },
                11: {
                    cellWidth: 'auto', halign: 'center'
                },
                12: {
                    cellWidth: 'auto', halign: 'center'
                },
            }
        };

        TableToPdf('filter', 'support_rpt', 'l', 'a3', options);
    })

    $('.select2').select2();
    var $tasktype_id = $('#tasktype_id');
    
    //init tasksubtype1
    var $tasksubtype1_id = $('#tasksubtype1_id');
    var tasksubtype1_id_url = "{{ route('subcategory.json', ['tasktype' => 'inject']) }}";
    var url1 = tasksubtype1_id_url.replace("inject", $tasktype_id.val());
    $tasksubtype1_id.empty().select2({
        ajax: {
            url: url1,
            dataType: 'json'
            // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
        }
    }); //end action

    //event takstype
    $tasktype_id.on("select2:select", function (e) { 

        //tasksubtype1
        var url = tasksubtype1_id_url.replace("inject",$tasktype_id.val());
        $tasksubtype1_id.empty().select2({
            ajax: {
                url: url,
                dataType: 'json'
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });

        //tasksubtype2 set empty
        $tasksubtype2_id.empty().select2();
    }); //end event
    
    //event tasksubtype1
    var $tasksubtype2_id = $('#tasksubtype2_id');
    var tasksubtype2_id_url = "{{ route('item.json', ['tasktype' => 'inject1', 'tasksubtype1' => 'inject2']) }}";
    $tasksubtype1_id.on("select2:select", function (e) { 

        var url = tasksubtype2_id_url
            .replace("inject1", $tasktype_id.val())
            .replace("inject2", $tasksubtype1_id.val());
        $tasksubtype2_id.empty().select2({
            ajax: {
                url: url,
                dataType: 'json'
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });
        
    }); //end event
    
});    
    

</script>

