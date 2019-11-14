/*
 * lang-php JavaScript Library v5.2
 *
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @license   https://lang-php.com/license
 *
 */

function refreshlang(value) {
	window.location.href = window.location.pathname + '?lang=' + value;
}

function qlang(value) {
	var days = '30';

	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = "mark_lang"+"="+value.toLowerCase()+expires+"; path=/";

	window.location.href="../"; 
}

function lang(value) {
	var days = '30';

	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = "lang"+"="+value.toLowerCase()+expires+"; path=/";

	var rurl = window.location.toString();
	//Remove anchor from url using the split
	rurl = rurl.split("#")[0];

	if(location.href.indexOf("?")==-1 || location.href.indexOf(name+'=')==-1) {
		skip(rurl);
	} else {
		skip(delQueStr(rurl, "lang"));
	}
}

function skip(url) {
	// Internet Explorer 8 and lower fix
	if (navigator.userAgent.match(/MSIE\s(?!9.0)/)) {
		var referLink = document.createElement("a");
		referLink.href = url;
		document.body.appendChild(referLink);
		referLink.click();
	} else {
		// All other browsers
		window.location.replace(url);
	}
}

function delQueStr(url, ref)
{
	var str = "";

	if (url.indexOf('?') != -1)
		str = url.substr(url.indexOf('?') + 1);
	else
		return url;
	var arr = "";
	var returnurl = "";
	var setparam = "";
	if (str.indexOf('&') != -1) {
		arr = str.split('&');
		for (i in arr) {
			if (arr[i].split('=')[0] != ref) {
				returnurl = returnurl + arr[i].split('=')[0] + "=" + arr[i].split('=')[1] + "&";
			}
		}
		return url.substr(0, url.indexOf('?')) + "?" + returnurl.substr(0, returnurl.length - 1);
	}
	else {
		arr = str.split('=');
		if (arr[0] == ref)
			return url.substr(0, url.indexOf('?'));
		else
			return url;
	}
}