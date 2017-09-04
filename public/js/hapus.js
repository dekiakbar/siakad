$(function(){
   $('[data-method,data-token]').append(function(){
        return "\n"+
        "<form action='"+$(this).attr('href')+"' method='POST' style='display:none'>\n"+
        "   <input type='hidden' name='_method' data-token='"+$(this).attr('data-token')+"' value='"+$(this).attr('data-method')+"'>\n"+
        "</form>\n"
   })
   .removeAttr('href')
   .attr('style','cursor:pointer;')
   .attr('onclick','$(this).find("form").submit();');
});