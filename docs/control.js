// JavaScript Program
// Troop 214

//global var
var qts = "'";
var qt = unescape("%22");
var vbCrLf = unescape("%0D%0A");
var tempcolor;
var tempcolor2;
var temp;
//header
headertxt =
  "<iframe src='header.htm' frameborder='0' height='250' width='100%' scrolling=no></iframe>";
footertxt =
  "<iframe src='footer.htm' frameborder='0' height='130' width='100%' scrolling=no></iframe>";

// Links
function LinkMOver(linkID) {
  //alert(linkID.id);
  tempcolor = linkID.style.color;
  linkID.style.color = "red";
}

function LinkMOut(linkID) {
  linkID.style.color = tempcolor;
}
