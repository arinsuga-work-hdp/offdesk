<script>


    function print(url) {
        event.preventDefault();
        var w = 400;
        var h = 400;
        var left = (screen.width/2)-(w/2);
        var top = (screen.height/2)-(h/2);
        // alert("top = " + top + " ==> left = " + left);
        window.open(url, "_blank", "height="+h+",width="+w+"top="+top+",left="+left+",location=center");
    }

    $(document).ready(function() {
        
    });    
</script>
