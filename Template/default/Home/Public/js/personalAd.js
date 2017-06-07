//read a cookie
function getCookie(cookieName){
    var arg = cookieName + "=";
    var alen = arg.length;
    var clen = document.cookie.length;
    var i = 0;
    while (i < clen) {
        var j = i + alen;
        if (document.cookie.substring(i, j) == arg) {
            var endstr = document.cookie.indexOf(";", j);
            if (endstr == -1) {
                endstr = document.cookie.length;
            }
            var ret = unescape(document.cookie.substring(j, endstr));
            if (ret != "") {
                return ret;
            }
        }
        i = document.cookie.indexOf(" ", i) + 1;
        if (i == 0) 
            break;
    }
    return "";
}

//delete a cookie
function delCookie(cookieName){
    var exp = new Date();
    exp.setTime(exp.getTime() - 100);
    document.cookie = cookieName + "=; path=/; domain=kuwo.cn; expires=" + exp.toGMTString();
    document.cookie = cookieName + "=; path=/; expires=" + exp.toGMTString();
}

//add a cookie
function addCookie(cookieName, cookieValue){
    var expdate = new Date();
    var argv = addCookie.arguments;
    var argc = addCookie.arguments.length;
    var expires = (argc > 2 && argv[2] != 0) ? argv[2] : null;
    var path = (argc > 3) ? argv[3] : null;
    var domain = (argc > 4) ? argv[4] : null;
    var secure = (argc > 5) ? argv[5] : false;
    if (expires != null) {
        expdate.setTime(expdate.getTime() + (expires * 1000));
    }
    document.cookie = cookieName + "=" + escape(cookieValue) +
    ((expires == null) ? "" : ("; expires=" + expdate.toGMTString())) +
    ((path == null) ? "" : ("; path=" + path)) +
    ((domain == null) ? "" : ("; domain=" + domain)) +
    ((secure == true) ? "; secure" : "");
}
var pad={};
pad.addNew=function(dist)
{
	var distarray={
		"%B1%B1%BE%A9":1,
		"%CC%EC%BD%F2":2,
		"%B9%E3%B6%AB":3,
		"%B8%A3%BD%A8":4,
		"%BC%AA%C1%D6":5,
		"%BA%A3%C4%CF":6,
		"%B9%E3%CE%F7":7,
		"%D5%E3%BD%AD":8,
		"%C9%BD%B6%AB":9,
		"%C4%FE%CF%C4":10,
		"%BA%DA%C1%FA%BD%AD":11,
		"%D4%C6%C4%CF":12,
		"%C9%BD%CE%F7":13,
		"%BA%FE%B1%B1":14,
		"%C9%C2%CE%F7":15,
		"%B8%CA%CB%E0":16,
		"%D6%D8%C7%EC":17,
		"%BA%D3%B1%B1":18,
		"%BD%AD%CB%D5":19,
		"%B0%B2%BB%D5":20,
		"%CB%C4%B4%A8":21,
		"%BA%D3%C4%CF":22,
		"%C7%E0%BA%A3":23,
		"%C9%CF%BA%A3":24,
		"%CE%F7%B2%D8":25,
		"%C4%DA%C3%C9%B9%C5":26,
		"%BD%AD%CE%F7":27,
		"%D0%C2%BD%AE":28,
		"%B9%F3%D6%DD":29,
		"%C1%C9%C4%FE":30,
		"%BA%FE%C4%CF":31
	};
	addCookie("ad_dist",dist,3600*24*7,'/','kuwo.cn');
	pad.distNo=distarray[dist];
}
pad.init=function()
{
	var ad_dist=getCookie('ad_dist');
	if(ad_dist!=null&&ad_dist!='')
	{
		pad.addNew(ad_dist);
	}else
	{
		var nscp=document.createElement("script");
		nscp.setAttribute("type","text/javascript");
		nscp.setAttribute("src","http://ipdomainserver.kuwo.cn/ip_domain");
		var head = document.getElementsByTagName("head")[0];
		head.appendChild(nscp);
	}
}
function cbDomain(ipdomain){
        pad.addNew(ipdomain);
}
window.setTimeout(pad.init,100);

