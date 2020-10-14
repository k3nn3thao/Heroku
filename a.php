<script>
function CheckSum()
{
    var data = '$$0103AA52|0081100019111916063240000000000000004F370708103127800300.800008351432.2847N12100.0829E000618'
    var nCheck = 0;
    var strCheck = '';
    for(let n=0; n<data.length; n++)
    {
         nCheck^= data.charCodeAt(n);        
    }
    alert(nCheck);
	strCheck = nCheck.toString(16);
	
	 if (strCheck.length == 1)
         {
             strCheck = '0' + strCheck;
         }
return strCheck;		 
}
alert(CheckSum());
</script>