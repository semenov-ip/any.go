$(document).ready(function(){

    var textDetail = $("#searchUrl").html();

    urlArray = findUrls(textDetail);
	
    for(var key in urlArray){

        textDetail = textDetail.replace(urlArray[key], "<a href='" + urlArray[key] + "'>" + urlArray[key] + "</a>");

        $("#searchUrl").html(textDetail);
    }
});

function findUrls( text ) {
    var source = (text || '').toString();
    var urlArray = [];
    var url;
    var matchArray;

    // Regular expression to find FTP, HTTP(S) and email URLs.
    var regexToken = /(((ftp|http?):\/\/)[\-\w@:%_\+.~#?,&\/\/=]+)|((mailto:)?[_.\w-]+@([\w][\w\-]+\.)+[a-zA-Z]{2,3})/g;

    // Iterate through any URLs in the text.
    while( (matchArray = regexToken.exec( source )) !== null ){
        var token = matchArray[0];
        urlArray.push( token );
    }

    return urlArray;
}