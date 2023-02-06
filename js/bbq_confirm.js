//jQuery(function($){
document.addEventListener('DOMContentLoaded', function() {

	$.fn.getTextNode = function() {
    var $contents = $(this).contents();
 
    if ($contents.length === 0) return;
 
    return $contents.filter(function() {
        if (this.nodeType === 3 && this.data) {
            return true;
        }
    });
};

	var message = "";
	$("table.sbox tr").each(function (elm) {
			var name	=	$(this).children("th").getTextNode().text();
			var value	=	"";
                        value = value + $(this).find("p.ssbox").text();
                        value = value + $(this).find("label").text();
                        value = value + $(this).children("td").getTextNode().text();
                        if(value == "" || value.replace(/\n/g,"") == ""){
                          value	= value + $(this).children("td").text();
                        }
                        value = value.replace(/\n/g," ");

			message		+=	"■"+ name +"\n";
			message		+=	value.replace(/<br>/g, "\n") +"\n\n";
		});
       message += "■見積もり\n";
       message += $('input[name=mitumori]').val();

       console.log(message);

$('#form button[name="submitBack"]').on('click', function(){
  $('#form form').attr('target','_self');
  return true;
});

	
let elm = $("button.btn_contact_send");
	elm.dummy = true;

	elm.on("click", function () {
        var val = $("input[name=send_tool]").val()
	  if(val == "LINEで送信") {
		  
                if(elm.dummy){
                  $('body').append('<div style="display:none"><iframe name="dummy" style="width:1px;height:1px;"></iframe></div>');
                  $('#form form').attr('target','dummy');
                  elm.dummy = false;
                  $('#dummy').load(function(){
                    $('#form form').attr('target','_self');
                    message	=	encodeURIComponent(message);
                    location.href	=	"https://line.me/R/oaMessage/@gya1712d/?"+ message;
                  });
                  return true;
                }else{
		  
		          elm.attr("onclick", "");
		          elm.off("click");
	              message	=	encodeURIComponent(message);
            	  location.href	=	"https://line.me/R/oaMessage/@gya1712d/?"+ message;
//                location.href   = "https://line.me/R/msg/text/?" + message;
                  return false;
				}
	  }
	});
});