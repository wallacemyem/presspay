<div style="text-align:center">
    <input type="button" id="close" onclick="window.close()" value="Close Page" />
    <p id="msg"></p>
    <p id="final"></p>
</div>
<script type="text/javascript">
    var msg = document.getElementById('msg');
    var final = document.getElementById('final');
    var i=5;
    var inter = setInterval(() => {
        i--;
        msg.innerHTML = 'Please wait ... window will close in '+i+' seconds';
        if(i<=0){
            i=0;
            clearInterval(inter);
            final.innerHTML = 'Please tap the CLOSE button at the top right of your screen if window does not close automatically';
            window.close();
        }
    }, 1000);
</script>