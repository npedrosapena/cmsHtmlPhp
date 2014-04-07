
$(document).ready(function()
{
    $('div#divmeta').hide();
    $('div#divusers').hide();
    $('div#divtitle').hide();
   
   $("#meta").click(function () {
      $("#divmeta").each(function() {
        displaying = $(this).css("display");
        if(displaying === "block") {
          $(this).fadeOut('slow',function() {
           $(this).css("display","none");
           $('#divtitle').fadeOut('slow');
           $('#divusers').fadeOut('slow');
          });
        } else {
          $(this).fadeIn('slow',function() {
            $(this).css("display","block");
            $('#divtitle').fadeOut('fast');
            $('#divusers').fadeOut('fast');
          });
        }
      });
    });
    
    $("#users").click(function () {
      $("#divusers").each(function() {
        displaying = $(this).css("display");
        if(displaying === "block") {
          $(this).fadeOut('slow',function() {
           $('#divtitle').fadeOut('slow');
           $('#divmeta').fadeOut('slow');
           $(this).css("display","none");
          });
        } else {
          $(this).fadeIn('slow',function() {
            //$('#divtitle').slidedown();
            $('#divtitle').fadeOut('fast');
            //$('#divmeta').slidedown();
            $('#divmeta').fadeOut('slow');
            $(this).css("display","block");
          });
        }
      });
    });
    
    $("#title").click(function () {
      $("#divtitle").each(function() {
        displaying = $(this).css("display");
        if(displaying === "block") {
          $(this).fadeOut('slow',function() {
           //$('#divusers').slideup();
           $('#divusers').fadeOut('fast');
           //$('#divmeta').slideup();
           $('#divmeta').fadeOut('slow');
           $(this).css("display","none");
          });
        } else {
          $(this).fadeIn('slow',function() {
           // $('#divusers').slideup();
            $('#divusers').fadeOut('fast');
            //$('#divmeta').slideup();
            $('#divmeta').fadeOut('fast');
            $(this).css("display","block");
          });
        }
      });
    });
    
    
    
});



function lector($Id)
{
    var campo="";
    var res=campo.concat("'div#div",$Id,"'");
   // alert(res.valueOf());

    $(res).fadeIn(2000);
}

