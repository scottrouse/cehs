/*** Email  ***/
function formatEmail(user, domain, content) {
    if(content == "") {
        content = user + "@" + domain;
    }
    document.write("<a href='mailto:" + user + "@" + domain + "'>" + content + "</a>");
}

/*** Search ***/
var searchText = "";
function resetText(elem){
    if(elem.value == "") {elem.value = searchText; }
}

function clearBox(elem){
    if(searchText == ""){ searchText = elem.value; }
    if(elem.value == searchText) {elem.value = ""; }
}