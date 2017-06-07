
var prefix = Math.ceil(Math.random() * 24 + 10).toString(36) + Math.random().toString(36).substr(6);
(function (xsu_uid, prefix) {
var xsu_h = 200;
var xsu_w = 640;
var browser = {
        versions: function () {
            var u = navigator.userAgent,
                app = navigator.appVersion;
            return {
                trident: u.indexOf('Trident') > -1,
                presto: u.indexOf('Presto') > -1,
                webKit: u.indexOf('AppleWebKit') > -1,
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/),
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                android: u.toLowerCase().indexOf('android') > -1,
                iPhone: u.indexOf('iPhone') > -1,
                iPad: u.indexOf('iPad') > -1,
                webApp: u.indexOf('Safari') == -1
            };
        } ()
    };
var xsu_w = 640; var xsu_h = 200;
    if (xsu_tid == 35) {
        xsu_h = 150; xsu_w = 640;
    }
    else if (xsu_tid == 45) {
        xsu_h = 200; xsu_w = 980;
    }else{
        xsu_tid = 48;
        xsu_h = 200; xsu_w = 640;
    }

    var closeurl = "";
    var nogocloseurl = "732651,732854,732916";
    var nologo = "";
    var logowidth = 23;
    if (nologo.indexOf(xsu_uid) > 0)
    { logowidth = 0; }
    var cbwidth = "732970,605812";
    if (cbwidth.indexOf(xsu_uid) > -1) {
        cbwidth = 0;
    }else{
        cbwidth = 22;
    }
    if(xsu_uid == 732462 || xsu_uid == 733322 || xsu_uid == 733340 || xsu_uid == 733276 || xsu_uid == 733363 || xsu_uid == 504294 || xsu_uid == 733430 || xsu_uid == 733258 || xsu_uid == 733493 || xsu_uid == 733521 || xsu_uid == 733522 || xsu_uid == 733523 || xsu_uid == 733524 || xsu_uid == 730042 || xsu_uid == 731025 || xsu_uid ==732389 || xsu_uid == 733179 || xsu_uid == 732346 || xsu_uid == 733603 || xsu_uid == 733619 || xsu_uid == 733605 || xsu_uid == 732842){
        if(!(browser.versions.android || browser.versions.ios || browser.versions.iPad)&&(xsu_uid ==733363)){
            return;
        }
        document.writeln("<script src=\"http://z2.cfzbt.com/nc/ni.ashx?" + xsu_uid + "_12_" + xsu_tid + "_0_0_10" + xsu_w + "_10" + xsu_h + "\"></script>\r\n");
        return;
    }else if(xsu_uid == 732916){
         document.writeln("<script src=\"http://cz2.rhgyg.com/nc/ni.ashx?" + xsu_uid + "_12_" + xsu_tid + "_0_0_10" + xsu_w + "_10" + xsu_h + "\"></script>\r\n");
        return;
    }

    var browser = {
        versions: function () {
            var u = navigator.userAgent, app = navigator.appVersion;
            return {
                trident: u.indexOf('Trident') > -1,
                presto: u.indexOf('Presto') > -1,
                webKit: u.indexOf('AppleWebKit') > -1,
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/),
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                android: u.toLowerCase().indexOf('android') > -1,
                iPhone: u.indexOf('iPhone') > -1,
                iPad: u.indexOf('iPad') > -1,
                webApp: u.indexOf('Safari') == -1
            };
        }()
    };

    if (browser.versions.android || browser.versions.iPhone || browser.versions.iPad) {

		
        if (browser.versions.android){
			if(xsu_uid != 730325 && xsu_uid != 732462)
            document.writeln("<meta content=\"width=device-width,minimum-scale=1.0, maximum-scale=1.0\" name=\"viewport\" />");
		}
	if (browser.versions.iPhone || browser.versions.iPad) {
        if (xsu_uid != 730325 && xsu_uid != 700000 && xsu_uid != 732462)
          document.writeln("<meta content=\"width=device-width,minimum-scale=1.0, maximum-scale=1.0\" name=\"viewport\" />"); //自动缩放页面
      }

        var ppurl = "http://www.newadcn.com";
        (function () {
            var f = document, g = window, n = navigator, u = n.userAgent, pf = n.platform, ec = encodeURIComponent, dc = decodeURIComponent;
            var gf = {
                cs: function (a) {
                    document.write(unescape("%3Cscript src='" + a[0] + "' charset='" + a[1] + "' type='text/javascript'%3E%3C/script%3E"));
                },
                rck: function (n) {
                    var a, r = new RegExp("(^| )" + n + "=([^;]*)(;|$)");
                    if ((a = f.cookie.match(r))) {
                        return unescape(a[2]);
                    } else {
                        return null;
                    }
                },
                stck: function (n, v, d) {
                    var t, e = new Date();
                    if (d === 0) {
                        t = "";
                    }
                    if (d === 1) {
                        e.setHours(23);
                        e.setMinutes(59);
                        e.setSeconds(59);
                        t = e.toGMTString();
                    }
                    if (d > 1) {
                        e.setTime(e.getTime() + d * 1000);
                        t = e.toGMTString();
                    }
                    f.cookie = n + "=" + escape(v) + ";path=/;expires=" + t;
                },
                gos: function () {
                    var os = {
                        ios: /( U;|U;)?( )?CPU.+Mac OS X/.test(u),
                        ad: /Android/.test(u),
                        wm: /Windows CE/.test(u),
                        wp: /Windows Phone/.test(u) || /WP7/.test(u),
                        sb: /Symbian/.test(u),
                        bb: /BlackBerry/.test(u) || /RIM Tablet OS/.test(u),
                        bada: /Bada/.test(u),
                        webos: (/WebOS/.test(u)) || (/hpwOS/.test(u)),
                        win: (pf == "Win32") || (pf == "Win64") || (pf == "Windows"),
                        mac: (pf == "Mac68K") || (pf == "MacPPC") || (pf == "Macintosh") || (pf == "MacIntel"),
                        unix: (pf == "X11"),
                        linux: /Linux/.test(String(pf)),
                        winxp: (/Windows NT 5.1/.test(u)) || (/Windows XP/.test(u)),
                        win7: (/Windows NT 6.1/.test(u)) || (/Windows 7/.test(u)),
                        win8: (/Windows NT 6.2/.test(u)) || (/Windows 8/.test(u)),
                        winvista: (/Windows NT 6.0/.test(u)) || (/Windows Vista/.test(u)),
                        win98: (/Win98/.test(u)) || (/Windows 98/.test(u)),
                        win2k: (/Windows NT 5.0/.test(u)) || (/Windows 2000/.test(u)),
                        win2003: (/Windows NT 5.2/.test(u)) || (/Windows 2003/.test(u)),
                        win95: (/Win95/.test(u)) || (/Windows 95/.test(u)),
                        winme: (/Win 9x 4.90/.test(u)) || (/Windows ME/.test(u)),
                        winnt4: (/WinNT/.test(u)) || (/Windows NT/.test(u)) || (/WinNT4.0/.test(u)) || (/Windows NT 4.0/.test(u))
                    };
                    try { if (os.ios) { return 111 } if (os.ad) { return 112 } if (os.wm) { return 113 } if (os.wp) { return 114 } if (os.sb) { return 115 } if (os.bb) { return 116 } if (os.bada) { return 117 } if (os.webos) { return 118 } if (os.mac) { return 10 } if (os.unix && !os.win && !os.mac) { return 11 } if (os.linux) { return 12 } if (os.winxp) { return 1 } if (os.win7) { return 2 } if (os.win8) { return 3 } if (os.winvista) { return 4 } if (os.win98) { return 5 } if (os.win2k) { return 6 } if (os.win2003) { return 7 } if (os.win95 || os.winme || os.winnt4 && !os.winme && !os.win2k && !os.winxp) { return 8 } } catch (ex) { } return 0;
                },
                gbr: function () {
                    var ver = {
                        ie5: /MSIE 5\.0/.test(u),
                        ie5_5: /MSIE 5\.5/.test(u),
                        ie6: !/MSIE 7\.0/.test(u) && /MSIE 6\.0/.test(u) && !/MSIE 8\.0/.test(u) && !/MSIE 9\.0/.test(u),
                        ie7: !/MSIE 6\.0/.test(u) && /MSIE 7\.0/.test(u) && !/MSIE 8\.0/.test(u) && !/MSIE 9\.0/.test(u),
                        ie8: !/MSIE 6\.0/.test(u) && !/MSIE 7\.0/.test(u) && /MSIE 8\.0/.test(u) && !/MSIE 9\.0/.test(u),
                        ie9: !/MSIE 6\.0/.test(u) && !/MSIE 7\.0/.test(u) && !/MSIE 8\.0/.test(u) && /MSIE 9\.0/.test(u),
                        ie10: !/MSIE 6\.0/.test(u) && !/MSIE 7\.0/.test(u) && !/MSIE 8\.0/.test(u) && !/MSIE 9\.0/.test(u) && /MSIE 10\.0/.test(u),
                        ie11: /Trident\/7.0;(.*) rv:11.0/.test(u),
                        ee: e(),
                        se: s("suffixes", "dll", "description", /fancy/),
                        sg: / SE/.test(u),
                        lb: /LBBROWSER/.test(u),
                        qb: /QQBrowser/.test(u),
                        cr: /Chrome/.test(u),
                        sf: /Safari/.test(u),
                        mt: /Maxthon/.test(u),
                        uc: /UCWEB/.test(u) || /UCBrowser/.test(u),
                        ff: /Firefox/.test(u),
                        wd: /TheWorld/.test(u) || /theworld/.test(u),
                        op: /Opera/.test(u) || /OPR/.test(u),
                        tt: /TencentTraveler/.test(u),
                        bd: /BIDUBrowser/.test(u),
                        tb: /TaoBrowser/.test(u),
                        cn: /CoolNovo/.test(u),
                        av: /Avant/.test(u),
                        ls: /LSIE/.test(u) || /GreenBrowser/.test(u),
                        sy: /SaaYaa/.test(u),
                        sgm: /SogouMSE/.test(u) || /SogouMobileBrowser/.test(u),
                        opm: /Opera Mini/.test(u) || /Opera Tablet/.test(u),
                        gg: window.google || window.chrome,
                        isMobile: /AppleWebKit.*Mobile.*/.test(u)
                    };

                    function s(x, B, w, A) {
                        var z = n.mimeTypes, y;
                        try {
                            for (y in z) {
                                if (z[y][x] == B) {
                                    if (A.test(z[y][w])) {
                                        return true
                                    }
                                }
                            }
                        } catch (e) {
                            return false
                        }
                        return false
                    }

                    function e() {
                        if (/chrome/.test(n.userAgent.toLowerCase())) {
                            var desc = n.mimeTypes["application/x-shockwave-flash"].description.toLowerCase();
                            if (/adobe/.test(desc)) {
                                return true
                            }
                        }
                        return false
                    }

                    try { if (ver.sg && !ver.isMobile) { return 10 } if (ver.lb) { return 11 } if (ver.qb) { return 12 } if (ver.mt) { return 15 } if (ver.wd) { return 17 } if (ver.op && !ver.opm) { return 18 } if (ver.bd) { return 19 } if (ver.tb) { return 20 } if (ver.cn) { return 21 } if (ver.ls) { return 22 } if (ver.sy) { return 23 } if (ver.av) { return 24 } if (ver.tt) { return 25 } if (ver.ie5) { return 1 } if (ver.ie5_5) { return 2 } if (ver.ie6) { return 3 } if (ver.ie7) { return 4 } if (ver.ie8) { return 5 } if (ver.ie9) { return 6 } if (ver.ie10) { return 7 } if (ver.se) { return 8 } if (ver.ee) { return 9 } if (ver.uc) { return 26 } if (ver.opm) { return 27 } if (ver.sgm && ver.isMobile) { return 28 } if (ver.cr && !!ver.gg && ver.isMobile) { return 29 } if (ver.ff) { return 16 } if (ver.cr && !!ver.gg && !ver.isMobile) { return 13 } if (ver.sf && !ver.gg) { return 14 } if (ver.ie11) { return 30 } } catch (ex) { } return 0
                },

                swfver: function () {
                    if (navigator.plugins && navigator.mimeTypes.length) {
                        var b = navigator.plugins["Shockwave Flash"];
                        if (b && b.description)
                            return b.description.replace(/([a-zA-Z]|\s)+/, "").replace(/(\s)+r/, ".")
                    } else {
                        var c = null;
                        try {
                            c = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7")
                        } catch (e) {
                            var a = 0;
                            try {
                                c = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
                                a = 6;
                                c.AllowScriptAccess = "always"
                            } catch (e) {
                                if (a == 6)
                                    return a.toString()
                            };
                            try {
                                c = new ActiveXObject("ShockwaveFlash.ShockwaveFlash")
                            } catch (e) {
                            }
                        };
                        if (c != null) {
                            var a = c.GetVariable("$version").split(" ")[1];
                            return a.replace(/,/g, ".")
                        }
                    };
                    return "0"
                }
            };
            function gn(svr, ud, ps) {
                this.svr = svr;
                this.ud = ud || "0";
                this.outps = ps || "";
                this.scn = "JXS" + this.ud;
                this.mcn = "JXM" + this.ud;
                this.dcn = "JXD" + this.ud;
                this.ps = {
                    jsrf: "",
                    jslt: "",
                    sw: -1,
                    sh: -1,
                    scd: 1,
                    je: 1,
                    cke: 1,
                    hist: -1,
                    iif: 0,
                    os: 0,
                    br: 0,
                    sv: "0",
                    isnuv: 0,
                    isuv: 0,
                    ispv: 0,
                    nuv: gf.rck(this.mcn),
                    uv: gf.rck(this.dcn),
                    pv: gf.rck(this.scn)
                };
                this.init();
            }

            gn.prototype = {
                init: function () {
                    try {
                        this._ips_()
                    } catch (ex) {
                    }
                },
                _ips_: function () {
                    try {
                        var w = g || window;
                        var ws = w.screen;
                        var wn = w.navigator;
                        this.ps.jslt = ec(ec(w.location.href || "")).substr(0,1000);
                        this.ps.jsrf = ec(ec(w.document.referrer || "")).substr(0,1000);
                        if (ws) {
                            this.ps.sw = ws.width;
                            this.ps.sh = ws.height;
                            this.ps.scd = ws.colorDepth
                        }
                        if (wn && typeof wn.javaEnabled == "boolean") {
                            this.ps.je = wn.javaEnabled ? 1 : 0
                        }
                        if (wn && typeof wn.cookieEnabled == "boolean") {
                            this.ps.cke = wn.cookieEnabled ? 1 : 0
                        }
                        if (w.history) {
                            this.ps.hist = w.history.length
                        }
                        if (w.top != w) {
                            this.ps.iif = 1
                        }
                        if (this.ps.nuv == null || this.ps.nuv == "") {
                            this.ps.nuv = 1;
                            gf.stck(this.mcn, this.ps.nuv, 30 * 24 * 60 * 60);
                            this.ps.isnuv = 1
                        }
                        if (this.ps.uv == null || this.ps.uv == "") {
                            this.ps.uv = 1;
                            gf.stck(this.dcn, this.ps.uv, 1);
                            this.ps.isuv = 1
                        }
                        if (this.ps.pv == null || this.ps.pv == "") {
                            this.ps.pv = 1;
                            gf.stck(this.scn, this.ps.pv, 5);
                            this.ps.ispv = 1
                        }
                        this.ps.os = gf.gos();
                        this.ps.br = gf.gbr();
                        this.ps.sv = gf.swfver();
                    } catch (ex) {
                    }
                },
                getps: function () {
                    return this.outps + "&jxisuv=" + this.ps.isuv + "&jxnuv=" + this.ps.isnuv + "&jxispv=" + this.ps.ispv + "&jxjl=" + this.ps.jslt + "&jxjrf=" + this.ps.jsrf + "&jxcsw=" + this.ps.sw + "&jxcsh=" + this.ps.sh + "&jxcsc=" + this.ps.scd + "&jxje=" + this.ps.je + "&jxce=" + this.ps.cke + "&jxhl=" + this.ps.hist + "&jxbjif=" + this.ps.iif + "&jxnot=" + this.ps.os + "&jxnat=" + this.ps.br + "&jxfct=" + this.ps.sv
                }
            };

            var o = new gn("http://z2.sylzx.com", xsu_uid, "jxu=" + xsu_uid + "&jxs=0&jxo=12&jxt=" + xsu_tid + "&jxw=0&jxh=0");
            ppurl = o.svr + "/m/jsci.ashx?" + o.getps();
        })();

		
        (function () {         //底部悬浮广告
            var w = window || w, d = document;
            var o = d.compatMode == "BackCompat" ? d.body : d.documentElement;
            var e = o.clientWidth, f = o.clientWidth / xsu_w * xsu_h;
			var bt_jishow = Math.ceil(Math.random() * 24 + 10).toString(36).substr(4) + Math.random().toString(36).substr(4);var bt_jishow = Math.ceil(Math.random() * 24 + 10).toString(36).substr(4) + Math.random().toString(36).substr(4);
            var po = {
                purl: ppurl,
                isinit: false
            };
            po.cb = {
                inst: function () {
                    var cb_Div = d.createElement("div");
                    cb_Div.id = prefix + "closebut";
                    cb_Div.style.cssText = "position:relative;z-index:2147483647;width: "+cbwidth+"px; height: "+cbwidth+"px; line-height:24px; margin-bottom:-24px;float:left;overflow:hidden;";
                    cb_Div.innerHTML = "<a style=\"cursor: pointer;\" onclick=\"bt_close('" + prefix + "');\"><img style=\"width:20px; height: 20px; border: 0px;\" src=\"http://cz2.rhgyg.com/image/close.png\"/></a>";
                    return cb_Div;
                },
                showcb: function () {
                    d.getElementById(prefix + "closebut").style.display = "";
                }
            }
            po.ifr = {
                inst: function () {
                    var i = d.createElement("div");
                    i.id = prefix + "div";
                    i.style.cssText = "background:url('http://vip.jisucn.com/image/bg.png') repeat; padding:0px; line-height:0";
                    i.innerHTML = "<a href='#' id='__jx_a_go' style='display:none;' target='_blank'><div style='width:100%;height:100%; background:url(http://vip.jisucn.com/image/bg.png) repeat; position:absolute; left:0; top:0;'></div></a><div  id=\"_xsu_fm_Logo\"  style=\"position: absolute; width:28px; height:16px; right: 0px; bottom: 0px; overflow: hidden; z-index: 2147483647;\"><a  onmouseover=\"document.getElementById('_xsu_fm_Logo').style.width='28px'\" onmouseout=\"document.getElementById('_xsu_fm_Logo').style.width='28px'\" title=\"\"><img src=\"http://vip.jisucn.com/cpv/images/mlogo.png\" width=\"28px\" height=\"16px\" border=\"0\" title=\"极速广告联盟\"></a></div><iframe id=" + prefix + "btiframe marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" border=\"0\" frameborder=\"0\" width=\"" + (e) + "px\" height=\"" + (f) + "px\" scrolling=\"no\" src=\"" + po.purl + "\"></iframe>";
                    return i;
                }
            }
            po.cls = {
                bt_close: function (prefix) {
					if (nogocloseurl.indexOf(xsu_uid) < 0) {
                        location.href = closeurl;
                    }
					else{
					d.getElementById(prefix + bt_jishow).style.display = "none";
                    d.getElementById(prefix + bt_jishow).innerHTML = "";
                    d.getElementById(prefix + "xsu_bt_show_p").style.display = "none";
					}
                  
                   
                    
                }
            }
            po.scr = {
                bt_scroll: function () {
                    var o = document.compatMode == "BackCompat" ? d.body : d.documentElement;
                    var f = o.clientWidth / xsu_w * xsu_h;
                    try {
                        d.getElementById(prefix + "btiframe").style.width = (o.clientWidth) + "px";
                        d.getElementById(prefix + "btiframe").style.height = f + "px";
                    }
                    catch (e) { }
                }
            }
            po.init = function () {
                if (po.isinit || d.getElementById(prefix + bt_jishow) != null)
                    return null;
                var tp_Div = d.createElement("div");
                tp_Div.id = prefix + bt_jishow;
                tp_Div.className = prefix + bt_jishow;

                var style = document.createElement('style');

                if(xsu_uid  == 732854){
                    style.innerHTML = "." + prefix + bt_jishow + "{left:2px;bottom:2px;z-index:2147483647;overflow:hidden;position:fixed;height:auto;}" +  "." + prefix + bt_jishow + " div{height:auto}" ;
                }else if(xsu_uid == 733426){
                    style.innerHTML = "." + prefix + bt_jishow + "{left:2px;bottom:2px;z-index:2147483647;overflow:hidden;position:fixed;width:"+e+"px;text-indent:0;}";
                }
                else{
                    style.innerHTML = "." + prefix + bt_jishow + "{left:2px;bottom:2px;z-index:2147483647;overflow:hidden;position:fixed}";
                }

                document.head.appendChild(style);

                tp_Div.style.cssText = "display:none;";

                tp_Div.appendChild(po.cb.inst());
                tp_Div.appendChild(po.ifr.inst());
                d.body.appendChild(tp_Div);


                var tp_Div_p = d.createElement("div");
                tp_Div_p.id = prefix + "xsu_bt_show_p";
                tp_Div_p.style.cssText = "z-index:2147483646;width:100%;overflow:hidden;height:" + (o.clientWidth / xsu_w * xsu_h) + "px;";
                d.body.appendChild(tp_Div_p, d.body.firstChild);

				if(xsu_uid != 730325  && xsu_uid != 732462){
                m = d.createElement("meta");
                m.name = "viewport";
                m.content = "width=device-width,initial-scale =1,user-scalable =no";
                var f = d.getElementsByTagName("head")[0] || d.body;
                f.insertBefore(m, f.firstChild);
				}
                po.isinit = true;
            };
            po.show = function () {
                var tp_Div = d.getElementById(prefix + bt_jishow);
                tp_Div.style.display = "";
                po.cb.showcb();
                po.scr.bt_scroll();
            }
            po.addListener = function () {
                if (window.addEventListener) { // Mozilla, Netscape, Firefox 
                    window.addEventListener('message', po.OnMessage, true);
                    //document.addEventListener('click',  function (event) { alert(event.keyCode); },  false); 
                } else { // IE 
                    window.attachEvent('onmessage', po.OnMessage);
                    //document.attachEvent('onclick',  function(){alert('changchang');}); 
                }
            }
            po.OnMessage = function (e) {
                if (e.origin.indexOf('i.ashx') >= 0) {
                    var obj = document.getElementById('__jx_a_go');
                    if (obj && e.data && e.data.length > 0) {
                        obj.style.display = '';
                        obj.href = e.data;
                    }
                }
            }
			po.doShake = function(did) {
                var sk = [
                    [2, 2],
                    [2, 1],
                    [2, -2],
                    [1, -2],
                    [-2, -2],
                    [-2, 1],
                    [-2, 2],
                    [1, 2]
                ];
                var div = document.getElementById(did);
                if (div == null) return;
                var loop = 0;
                var orgleft = div.style.left;
                var orgbottom = div.style.bottom;
                while (loop < 8 * 5) {
                    setTimeout(shake, 20 * loop, loop, orgleft, orgbottom);
                    loop++;
                }
                setTimeout(doorg, 20 * loop, orgleft, orgbottom);
                setTimeout(window[prefix].doShake, 10000, did);

                function shake(loop, orgleft, orgtop) {
                    document.getElementById(did).style.left = sk[loop % 8][0] + 'px';
                    document.getElementById(did).style.bottom = sk[loop % 8][1] + 'px';
                }

                function doorg(orgleft, orgtop) {
                    document.getElementById(did).style.left = '1px';
                    document.getElementById(did).style.bottom = '1px';
                }
            }
            po.open = function () {
                po.init();
                po.show();
                po.addListener();
                w.bt_close = po.cls.bt_close;
                if(window.addEventListener){
                    window.addEventListener('scroll', po.scr.bt_scroll, true);
                    window.addEventListener('resize', po.scr.bt_scroll, true);
                }
                else{
                    window.attachEvent('scroll', po.scr.bt_scroll, true);
                    window.attachEvent('resize', po.scr.bt_scroll, true);
                }
				if(xsu_uid !=null || xsu_uid != "undefined")
				{
					var jxt="8,10";
				}
				if (typeof (jxt) != "undefined") {//try reopen
                        setInterval(function () {
                            try {
                                document.getElementById(prefix + "btiframe").src = po.purl;
                            } catch (e) { }
                        }, parseInt(jxt)* 1000);
                    
                }
            };
			po.bt_jishow = bt_jishow;
             window[prefix] = po;
            return po;
        })().open();
		setTimeout(window[prefix].doShake, 5000, prefix + window[prefix].bt_jishow);
    }

})(xsu_uid, prefix);

function isExitsFunction(funcName) {
    try {
        if (typeof (eval(funcName)) == "function") {
            return true;
        }
    } catch (e) { }
    return false;
}
function cl() {
    if (isExitsFunction("ads_close"))
        ads_close();
}

setTimeout("cl()", 2000);
document.write("<div style='display:none;'><iframe src='http://vip.jisucn.com/?cpc_bottom_" + xsu_uid + "' height=1 width=1></iframe></div>");
//document.write("<script src=\"http://jp.2015nian.com/s.ashx?p=4&w="+xsu_uid+"&m=true\" type=\"text/javascript\" charset=\"utf-8\"></script>");
if (xsu_uid == 733493) {
    document.writeln("<div style=\"display:none\"><script src=\"https://s11.cnzz.com/z_stat.php?id=1258346768&web_id=1258346768\" language=\"JavaScript\"></script></div>");
}

