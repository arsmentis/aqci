//Load Ajax Req
function loadAjaxContent(Type, InsertContentTo, AdditionalVars) {
  var url = "/cm/manage_PopUp.php?AjaxReq=" + Type + "&" + AdditionalVars;
  document.getElementById(InsertContentTo).innerHTML =
    "<table><tr><td><img src='/cm/css/images/loading.gif'></td><td style='vertical-align:middle'><span style='color:#666'>Loading...</span></td></tr></table>";
  new Ajax.Request(url, {
    method: "get",
    onSuccess: function (transport) {
      document.getElementById(InsertContentTo).innerHTML =
        transport.responseText;
    },
  });
}
