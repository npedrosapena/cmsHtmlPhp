
$(document).ready(function()
{
    $('div#divmeta').hide();
    $('div#divusers').hide();
    $('div#divtitle').hide();
   
   $("#meta").click(function () 
   {
       $("#divtitle").hide(600);
       $("#divusers").hide(600);
       $("#divmeta").show(800);
    });
    
    $("#users").click(function () 
    {
       $("#divtitle").hide(600);
       $("#divmeta").hide(600);
       $("#divusers").show(800);
    });
    
    $("#title").click(function ()
    {
       $("#divusers").hide(600);
       $("#divmeta").hide(600);
       $("#divtitle").show(800);
    });
});


/*
function lector($Id)
{
    var campo="";
    var res=campo.concat("'div#div",$Id,"'");
   // alert(res.valueOf());

    $(res).fadeIn(2000);
}
*/
