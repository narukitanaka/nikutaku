function separate(num){
    return String(num).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
}
document.addEventListener('DOMContentLoaded', function() {
//jQuery(function($){
  let jsonTxt = $('input:hidden[name="json_mitumori"]').val();
  if(jsonTxt == null || jsonTxt == ""){ 
     return; 
  }

  console.log(jsonTxt);
  jsonTxt = jsonTxt.replace(/&quot;/g,'"');
  jsonTxt = jsonTxt.replace(/&#34;/g,'"');
  jsonTxt = jsonTxt.replace(/\\"/g,"\"");
  console.log(jsonTxt);
  let jsonData = jQuery.parseJSON( jsonTxt );
  console.log(jsonData);
  $('#total').text(separate(jsonData["total"]));
  $('#taxall').text(separate(jsonData["taxall"]));
  $('#totalinctax').text(separate(jsonData["totalinctax"]));
  $('#m_men').text(jsonData['men']);
  $('#oneprice').text(separate(jsonData["oneprice"]));

console.log(jsonData["men"]);

  let psList = jQuery(jsonData['psList']);
  let tbody = "";
  psList.each(function(idx,elm){
    console.log(elm);
    let TR = '</p><tr>';
    TR += '</p><td class="p_title">'+ elm["p_title"] +'</td><p>';
    TR += '</p><td class="num"><span class="price">' + separate(elm["price"]) + '円</span></td><p>';
    TR += '</p><td class="cnt">'+elm["cnt"] + '</td><p>';
    TR += '</p><td class="num"><span class="price">' + separate(elm["s_total"]) + '円</span></td><p>';
    TR += '</tr><p>';

    tbody += TR;
  });
  $('tbody#mitumori_cnf_table').html(tbody);
  $('.mitumori_cnf').show();

});
