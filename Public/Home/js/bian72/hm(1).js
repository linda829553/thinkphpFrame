(function(){var h={},mt={},c={id:"8cf0b3aa7bc327b5c18b941457d47140",dm:["i72bian.com"],js:"tongji.baidu.com/hm-web/js/",etrk:[],icon:'',ctrk:false,align:-1,nv:-1,vdur:1800000,age:31536000000,rec:0,rp:[],trust:0,vcard:0,qiao:0,lxb:0,conv:0,comm:0,apps:''};var r=!0,s=null,t=!1;mt.k={};mt.k.ua=/msie (\d+\.\d+)/i.test(navigator.userAgent);mt.k.cookieEnabled=navigator.cookieEnabled;mt.k.javaEnabled=navigator.javaEnabled();mt.k.language=navigator.language||navigator.browserLanguage||navigator.systemLanguage||navigator.userLanguage||"";mt.k.ya=(window.screen.width||0)+"x"+(window.screen.height||0);mt.k.colorDepth=window.screen.colorDepth||0;mt.cookie={};
mt.cookie.set=function(a,b,e){var d;e.G&&(d=new Date,d.setTime(d.getTime()+e.G));document.cookie=a+"="+b+(e.domain?"; domain="+e.domain:"")+(e.path?"; path="+e.path:"")+(d?"; expires="+d.toGMTString():"")+(e.Va?"; secure":"")};mt.cookie.get=function(a){return(a=RegExp("(^| )"+a+"=([^;]*)(;|$)").exec(document.cookie))?a[2]:s};mt.s={};mt.s.Na=function(a){return document.getElementById(a)};mt.s.Oa=function(a,b){for(b=b.toUpperCase();(a=a.parentNode)&&1==a.nodeType;)if(a.tagName==b)return a;return s};
(mt.s.wa=function(){function a(){if(!a.A){a.A=r;for(var b=0,f=d.length;b<f;b++)d[b]()}}function b(){try{document.documentElement.doScroll("left")}catch(d){setTimeout(b,1);return}a()}var e=t,d=[],f;document.addEventListener?f=function(){document.removeEventListener("DOMContentLoaded",f,t);a()}:document.attachEvent&&(f=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",f),a())});(function(){if(!e)if(e=r,"complete"===document.readyState)a.A=r;else if(document.addEventListener)document.addEventListener("DOMContentLoaded",
f,t),window.addEventListener("load",a,t);else if(document.attachEvent){document.attachEvent("onreadystatechange",f);window.attachEvent("onload",a);var d=t;try{d=window.frameElement==s}catch(p){}document.documentElement.doScroll&&d&&b()}})();return function(b){a.A?b():d.push(b)}}()).A=t;mt.event={};mt.event.c=function(a,b,e){a.attachEvent?a.attachEvent("on"+b,function(b){e.call(a,b)}):a.addEventListener&&a.addEventListener(b,e,t)};
mt.event.preventDefault=function(a){a.preventDefault?a.preventDefault():a.returnValue=t};mt.l={};mt.l.parse=function(){return(new Function('return (" + source + ")'))()};
mt.l.stringify=function(){function a(a){/["\\\x00-\x1f]/.test(a)&&(a=a.replace(/["\\\x00-\x1f]/g,function(a){var b=e[a];if(b)return b;b=a.charCodeAt();return"\\u00"+Math.floor(b/16).toString(16)+(b%16).toString(16)}));return'"'+a+'"'}function b(a){return 10>a?"0"+a:a}var e={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};return function(d){switch(typeof d){case "undefined":return"undefined";case "number":return isFinite(d)?String(d):"null";case "string":return a(d);case "boolean":return String(d);
default:if(d===s)return"null";if(d instanceof Array){var f=["["],e=d.length,p,g,k;for(g=0;g<e;g++)switch(k=d[g],typeof k){case "undefined":case "function":case "unknown":break;default:p&&f.push(","),f.push(mt.l.stringify(k)),p=1}f.push("]");return f.join("")}if(d instanceof Date)return'"'+d.getFullYear()+"-"+b(d.getMonth()+1)+"-"+b(d.getDate())+"T"+b(d.getHours())+":"+b(d.getMinutes())+":"+b(d.getSeconds())+'"';p=["{"];g=mt.l.stringify;for(e in d)if(Object.prototype.hasOwnProperty.call(d,e))switch(k=
d[e],typeof k){case "undefined":case "unknown":case "function":break;default:f&&p.push(","),f=1,p.push(g(e)+":"+g(k))}p.push("}");return p.join("")}}}();mt.lang={};mt.lang.e=function(a,b){return"[object "+b+"]"==={}.toString.call(a)};mt.lang.Sa=function(a){return mt.lang.e(a,"Number")&&isFinite(a)};mt.lang.Ua=function(a){return mt.lang.e(a,"String")};mt.localStorage={};
mt.localStorage.C=function(){if(!mt.localStorage.g)try{mt.localStorage.g=document.createElement("input"),mt.localStorage.g.type="hidden",mt.localStorage.g.style.display="none",mt.localStorage.g.addBehavior("#default#userData"),document.getElementsByTagName("head")[0].appendChild(mt.localStorage.g)}catch(a){return t}return r};
mt.localStorage.set=function(a,b,e){var d=new Date;d.setTime(d.getTime()+e||31536E6);try{window.localStorage?(b=d.getTime()+"|"+b,window.localStorage.setItem(a,b)):mt.localStorage.C()&&(mt.localStorage.g.expires=d.toUTCString(),mt.localStorage.g.load(document.location.hostname),mt.localStorage.g.setAttribute(a,b),mt.localStorage.g.save(document.location.hostname))}catch(f){}};
mt.localStorage.get=function(a){if(window.localStorage){if(a=window.localStorage.getItem(a)){var b=a.indexOf("|"),e=a.substring(0,b)-0;if(e&&e>(new Date).getTime())return a.substring(b+1)}}else if(mt.localStorage.C())try{return mt.localStorage.g.load(document.location.hostname),mt.localStorage.g.getAttribute(a)}catch(d){}return s};
mt.localStorage.remove=function(a){if(window.localStorage)window.localStorage.removeItem(a);else if(mt.localStorage.C())try{mt.localStorage.g.load(document.location.hostname),mt.localStorage.g.removeAttribute(a),mt.localStorage.g.save(document.location.hostname)}catch(b){}};mt.sessionStorage={};mt.sessionStorage.set=function(a,b){if(window.sessionStorage)try{window.sessionStorage.setItem(a,b)}catch(e){}};
mt.sessionStorage.get=function(a){return window.sessionStorage?window.sessionStorage.getItem(a):s};mt.sessionStorage.remove=function(a){window.sessionStorage&&window.sessionStorage.removeItem(a)};mt.N={};mt.N.log=function(a,b){var e=new Image,d="mini_tangram_log_"+Math.floor(2147483648*Math.random()).toString(36);window[d]=e;e.onload=e.onerror=e.onabort=function(){e.onload=e.onerror=e.onabort=s;e=window[d]=s;b&&b(a)};e.src=a};mt.O={};
mt.O.la=function(){var a="";if(navigator.plugins&&navigator.mimeTypes.length){var b=navigator.plugins["Shockwave Flash"];b&&b.description&&(a=b.description.replace(/^.*\s+(\S+)\s+\S+$/,"$1"))}else if(window.ActiveXObject)try{if(b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"))(a=b.GetVariable("$version"))&&(a=a.replace(/^.*\s+(\d+),(\d+).*$/,"$1.$2"))}catch(e){}return a};
mt.O.La=function(a,b,e,d,f){return'<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="'+a+'" width="'+e+'" height="'+d+'"><param name="movie" value="'+b+'" /><param name="flashvars" value="'+(f||"")+'" /><param name="allowscriptaccess" value="always" /><embed type="application/x-shockwave-flash" name="'+a+'" width="'+e+'" height="'+d+'" src="'+b+'" flashvars="'+(f||"")+'" allowscriptaccess="always" /></object>'};mt.url={};
mt.url.j=function(a,b){var e=a.match(RegExp("(^|&|\\?|#)("+b+")=([^&#]*)(&|$|#)",""));return e?e[3]:s};mt.url.Qa=function(a){return(a=a.match(/^(https?:)\/\//))?a[1]:s};mt.url.ga=function(a){return(a=a.match(/^(https?:\/\/)?([^\/\?#]*)/))?a[2].replace(/.*@/,""):s};mt.url.Q=function(a){return(a=mt.url.ga(a))?a.replace(/:\d+$/,""):a};mt.url.Pa=function(a){return(a=a.match(/^(https?:\/\/)?[^\/]*(.*)/))?a[2].replace(/[\?#].*/,"").replace(/^$/,"/"):s};
h.r={Ra:"http://tongji.baidu.com/hm-web/welcome/ico",V:"hm.baidu.com/hm.gif",Y:"baidu.com",pa:"hmmd",qa:"hmpl",oa:"hmkw",ma:"hmci",ra:"hmsr",na:"hmcu",p:0,m:Math.round(+new Date/1E3),protocol:"https:"===document.location.protocol?"https:":"http:",Ta:0,Ia:6E5,Ja:10,Ka:1024,Ha:1,K:2147483647,W:"cc cf ci ck cl cm cp cu cw ds ep et fl ja ln lo lt nv rnd si st su v cv lv api tt u".split(" ")};
(function(){var a={o:{},c:function(a,e){this.o[a]=this.o[a]||[];this.o[a].push(e)},w:function(a,e){this.o[a]=this.o[a]||[];for(var d=this.o[a].length,f=0;f<d;f++)this.o[a][f](e)}};return h.F=a})();
(function(){function a(a,d){var f=document.createElement("script");f.charset="utf-8";b.e(d,"Function")&&(f.readyState?f.onreadystatechange=function(){if("loaded"===f.readyState||"complete"===f.readyState)f.onreadystatechange=s,d()}:f.onload=function(){d()});f.src=a;var m=document.getElementsByTagName("script")[0];m.parentNode.insertBefore(f,m)}var b=mt.lang;return h.load=a})();
(function(){function a(){return function(){h.b.a.nv=0;h.b.a.st=4;h.b.a.et=3;h.b.a.ep=h.D.ia()+","+h.D.fa();h.b.i()}}function b(){clearTimeout(x);var a;w&&(a="visible"==document[w]);y&&(a=!document[y]);g="undefined"==typeof a?r:a;if((!p||!k)&&g&&l)u=r,n=+new Date;else if(p&&k&&(!g||!l))u=t,q+=+new Date-n;p=g;k=l;x=setTimeout(b,100)}function e(a){var n=document,k="";if(a in n)k=a;else for(var q=["webkit","ms","moz","o"],b=0;b<q.length;b++){var d=q[b]+a.charAt(0).toUpperCase()+a.slice(1);if(d in n){k=
d;break}}return k}function d(a){if(!("focus"==a.type||"blur"==a.type)||!(a.target&&a.target!=window))l="focus"==a.type||"focusin"==a.type?r:t,b()}var f=mt.event,m=h.F,p=r,g=r,k=r,l=r,v=+new Date,n=v,q=0,u=r,w=e("visibilityState"),y=e("hidden"),x;b();(function(){var a=w.replace(/[vV]isibilityState/,"visibilitychange");f.c(document,a,b);f.c(window,"pageshow",b);f.c(window,"pagehide",b);"object"==typeof document.onfocusin?(f.c(document,"focusin",d),f.c(document,"focusout",d)):(f.c(window,"focus",d),
f.c(window,"blur",d))})();h.D={ia:function(){return+new Date-v},fa:function(){return u?+new Date-n+q:q}};m.c("pv-b",function(){f.c(window,"unload",a())});return h.D})();
(function(){var a=mt.lang,b=h.r,e=h.load,d={sa:function(d){if((void 0===window._dxt||a.e(window._dxt,"Array"))&&"undefined"!==typeof h.b){var m=h.b.H();e([b.protocol,"//datax.baidu.com/x.js?si=",c.id,"&dm=",encodeURIComponent(m)].join(""),d)}},Fa:function(b){if(a.e(b,"String")||a.e(b,"Number"))window._dxt=window._dxt||[],window._dxt.push(["_setUserId",b])}};return h.aa=d})();
(function(){function a(k){for(var b in k)if({}.hasOwnProperty.call(k,b)){var d=k[b];e.e(d,"Object")||e.e(d,"Array")?a(d):k[b]=String(d)}}function b(a){return a.replace?a.replace(/'/g,"'0").replace(/\*/g,"'1").replace(/!/g,"'2"):a}var e=mt.lang,d=mt.l,f=h.r,m=h.F,p=h.aa,g={q:[],B:0,T:t,init:function(){g.d=0;m.c("pv-b",function(){g.ba();g.ca()});m.c("pv-d",g.da);m.c("stag-b",function(){h.b.a.api=g.d||g.B?g.d+"_"+g.B:""});m.c("stag-d",function(){h.b.a.api=0;g.d=0;g.B=0})},ba:function(){var a=window._hmt||
[];if(!a||e.e(a,"Array"))window._hmt={id:c.id,cmd:{},push:function(){for(var a=window._hmt,k=0;k<arguments.length;k++){var n=arguments[k];e.e(n,"Array")&&(a.cmd[a.id].push(n),"_setAccount"===n[0]&&(1<n.length&&/^[0-9a-f]{32}$/.test(n[1]))&&(n=n[1],a.id=n,a.cmd[n]=a.cmd[n]||[]))}}},window._hmt.cmd[c.id]=[],window._hmt.push.apply(window._hmt,a)},ca:function(){var a=window._hmt;if(a&&a.cmd&&a.cmd[c.id])for(var b=a.cmd[c.id],d=/^_track(Event|MobConv|Order|RTEvent)$/,n=0,q=b.length;n<q;n++){var f=b[n];
d.test(f[0])?g.q.push(f):g.L(f)}a.cmd[c.id]={push:g.L}},da:function(){if(0<g.q.length)for(var a=0,b=g.q.length;a<b;a++)g.L(g.q[a]);g.q=s},L:function(a){var b=a[0];if(g.hasOwnProperty(b)&&e.e(g[b],"Function"))g[b](a)},_setAccount:function(a){1<a.length&&/^[0-9a-f]{32}$/.test(a[1])&&(g.d|=1)},_setAutoPageview:function(a){if(1<a.length&&(a=a[1],t===a||r===a))g.d|=2,h.b.R=a},_trackPageview:function(a){if(1<a.length&&a[1].charAt&&"/"===a[1].charAt(0)){g.d|=4;h.b.a.et=0;h.b.a.ep="";h.b.I?(h.b.a.nv=0,h.b.a.st=
4):h.b.I=r;var b=h.b.a.u,d=h.b.a.su;h.b.a.u=f.protocol+"//"+document.location.host+a[1];g.T||(h.b.a.su=document.location.href);h.b.i();h.b.a.u=b;h.b.a.su=d}},_trackEvent:function(a){2<a.length&&(g.d|=8,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=4,h.b.a.ep=b(a[1])+"*"+b(a[2])+(a[3]?"*"+b(a[3]):"")+(a[4]?"*"+b(a[4]):""),h.b.i())},_setCustomVar:function(a){if(!(4>a.length)){var d=a[1],f=a[4]||3;if(0<d&&6>d&&0<f&&4>f){g.B++;for(var n=(h.b.a.cv||"*").split("!"),q=n.length;q<d-1;q++)n.push("*");n[d-1]=f+"*"+b(a[2])+
"*"+b(a[3]);h.b.a.cv=n.join("!");a=h.b.a.cv.replace(/[^1](\*[^!]*){2}/g,"*").replace(/((^|!)\*)+$/g,"");""!==a?h.b.setData("Hm_cv_"+c.id,encodeURIComponent(a),c.age):h.b.xa("Hm_cv_"+c.id)}}},_setReferrerOverride:function(a){1<a.length&&(h.b.a.su=a[1].charAt&&"/"===a[1].charAt(0)?f.protocol+"//"+window.location.host+a[1]:a[1],g.T=r)},_trackOrder:function(b){b=b[1];e.e(b,"Object")&&(a(b),g.d|=16,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=94,h.b.a.ep=d.stringify(b),h.b.i())},_trackMobConv:function(a){if(a={webim:1,
tel:2,map:3,sms:4,callback:5,share:6}[a[1]])g.d|=32,h.b.a.et=93,h.b.a.ep=a,h.b.i()},_trackRTPageview:function(b){b=b[1];e.e(b,"Object")&&(a(b),b=d.stringify(b),512>=encodeURIComponent(b).length&&(g.d|=64,h.b.a.rt=b))},_trackRTEvent:function(b){b=b[1];if(e.e(b,"Object")){a(b);b=encodeURIComponent(d.stringify(b));var l=function(a){var n=h.b.a.rt;g.d|=128;h.b.a.et=90;h.b.a.rt=a;h.b.i();h.b.a.rt=n},m=b.length;if(900>=m)l.call(this,b);else for(var m=Math.ceil(m/900),n="block|"+Math.round(Math.random()*
f.K).toString(16)+"|"+m+"|",q=[],u=0;u<m;u++)q.push(u),q.push(b.substring(900*u,900*u+900)),l.call(this,n+q.join("|")),q=[]}},_setUserId:function(a){a=a[1];p.sa();p.Fa(a)}};g.init();h.Z=g;return h.Z})();
(function(){function a(){"undefined"===typeof window["_bdhm_loaded_"+c.id]&&(window["_bdhm_loaded_"+c.id]=r,this.a={},this.R=r,this.I=t,this.init())}var b=mt.url,e=mt.N,d=mt.O,f=mt.lang,m=mt.cookie,p=mt.k,g=mt.localStorage,k=mt.sessionStorage,l=h.r,v=h.F;a.prototype={J:function(a,b){a="."+a.replace(/:\d+/,"");b="."+b.replace(/:\d+/,"");var d=a.indexOf(b);return-1<d&&d+b.length===a.length},U:function(a,b){a=a.replace(/^https?:\/\//,"");return 0===a.indexOf(b)},z:function(a){for(var q=0;q<c.dm.length;q++)if(-1<
c.dm[q].indexOf("/")){if(this.U(a,c.dm[q]))return r}else{var d=b.Q(a);if(d&&this.J(d,c.dm[q]))return r}return t},H:function(){for(var a=document.location.hostname,b=0,d=c.dm.length;b<d;b++)if(this.J(a,c.dm[b]))return c.dm[b].replace(/(:\d+)?[\/\?#].*/,"");return a},P:function(){for(var a=0,b=c.dm.length;a<b;a++){var d=c.dm[a];if(-1<d.indexOf("/")&&this.U(document.location.href,d))return d.replace(/^[^\/]+(\/.*)/,"$1")+"/"}return"/"},ka:function(){if(!document.referrer)return l.m-l.p>c.vdur?1:4;var a=
t;this.z(document.referrer)&&this.z(document.location.href)?a=r:(a=b.Q(document.referrer),a=this.J(a||"",document.location.hostname));return a?l.m-l.p>c.vdur?1:4:3},getData:function(a){try{return m.get(a)||k.get(a)||g.get(a)}catch(b){}},setData:function(a,b,d){try{m.set(a,b,{domain:this.H(),path:this.P(),G:d}),d?g.set(a,b,d):k.set(a,b)}catch(f){}},xa:function(a){try{m.set(a,"",{domain:this.H(),path:this.P(),G:-1}),k.remove(a),g.remove(a)}catch(b){}},Da:function(){var a,b,d,f,e;l.p=this.getData("Hm_lpvt_"+
c.id)||0;13===l.p.length&&(l.p=Math.round(l.p/1E3));b=this.ka();a=4!==b?1:0;if(d=this.getData("Hm_lvt_"+c.id)){f=d.split(",");for(e=f.length-1;0<=e;e--)13===f[e].length&&(f[e]=""+Math.round(f[e]/1E3));for(;2592E3<l.m-f[0];)f.shift();e=4>f.length?2:3;for(1===a&&f.push(l.m);4<f.length;)f.shift();d=f.join(",");f=f[f.length-1]}else d=l.m,f="",e=1;this.setData("Hm_lvt_"+c.id,d,c.age);this.setData("Hm_lpvt_"+c.id,l.m);d=l.m===this.getData("Hm_lpvt_"+c.id)?"1":"0";if(0===c.nv&&this.z(document.location.href)&&
(""===document.referrer||this.z(document.referrer)))a=0,b=4;this.a.nv=a;this.a.st=b;this.a.cc=d;this.a.lt=f;this.a.lv=e},Ba:function(){for(var a=[],b=0,d=l.W.length;b<d;b++){var f=l.W[b],e=this.a[f];"undefined"!==typeof e&&""!==e&&a.push(f+"="+encodeURIComponent(e))}b=this.a.et;this.a.rt&&(0===b?a.push("rt="+encodeURIComponent(this.a.rt)):90===b&&a.push("rt="+this.a.rt));return a.join("&")},Ea:function(){this.Da();this.a.si=c.id;this.a.su=document.referrer;this.a.ds=p.ya;this.a.cl=p.colorDepth+"-bit";
this.a.ln=p.language;this.a.ja=p.javaEnabled?1:0;this.a.ck=p.cookieEnabled?1:0;this.a.lo="number"===typeof _bdhm_top?1:0;this.a.fl=d.la();this.a.v="1.1.11";this.a.cv=decodeURIComponent(this.getData("Hm_cv_"+c.id)||"");1===this.a.nv&&(this.a.tt=document.title||"");var a=document.location.href;this.a.cm=b.j(a,l.pa)||"";this.a.cp=b.j(a,l.qa)||"";this.a.cw=b.j(a,l.oa)||"";this.a.ci=b.j(a,l.ma)||"";this.a.cf=b.j(a,l.ra)||"";this.a.cu=b.j(a,l.na)||""},init:function(){try{this.Ea(),0===this.a.nv?this.Aa():
this.M(".*"),h.b=this,this.$(),v.w("pv-b"),this.za()}catch(a){var b=[];b.push("si="+c.id);b.push("n="+encodeURIComponent(a.name));b.push("m="+encodeURIComponent(a.message));b.push("r="+encodeURIComponent(document.referrer));e.log(l.protocol+"//"+l.V+"?"+b.join("&"))}},za:function(){function a(){v.w("pv-d")}this.R?(this.I=r,this.a.et=0,this.a.ep="",this.i(a)):a()},i:function(a){var b=this;b.a.rnd=Math.round(Math.random()*l.K);v.w("stag-b");var d=l.protocol+"//"+l.V+"?"+b.Ba();v.w("stag-d");b.X(d);
e.log(d,function(d){b.M(d);f.e(a,"Function")&&a.call(b)})},$:function(){var a=document.location.hash.substring(1),d=RegExp(c.id),f=-1<document.referrer.indexOf(l.Y),e=b.j(a,"jn"),g=/^heatlink$|^select$/.test(e);a&&(d.test(a)&&f&&g)&&(this.a.rnd=Math.round(Math.random()*l.K),a=document.createElement("script"),a.setAttribute("type","text/javascript"),a.setAttribute("charset","utf-8"),a.setAttribute("src",l.protocol+"//"+c.js+e+".js?"+this.a.rnd),e=document.getElementsByTagName("script")[0],e.parentNode.insertBefore(a,
e))},X:function(a){var b=k.get("Hm_unsent_"+c.id)||"",d=this.a.u?"":"&u="+encodeURIComponent(document.location.href),b=encodeURIComponent(a.replace(/^https?:\/\//,"")+d)+(b?","+b:"");k.set("Hm_unsent_"+c.id,b)},M:function(a){var b=k.get("Hm_unsent_"+c.id)||"";b&&(a=encodeURIComponent(a.replace(/^https?:\/\//,"")),a=RegExp(a.replace(/([\*\(\)])/g,"\\$1")+"(%26u%3D[^,]*)?,?","g"),(b=b.replace(a,"").replace(/,$/,""))?k.set("Hm_unsent_"+c.id,b):k.remove("Hm_unsent_"+c.id))},Aa:function(){var a=this,b=
k.get("Hm_unsent_"+c.id);if(b)for(var b=b.split(","),d=function(b){e.log(l.protocol+"//"+decodeURIComponent(b),function(b){a.M(b)})},f=0,g=b.length;f<g;f++)d(b[f])}};return new a})();
(function(){var a=mt.s,b=mt.event,e=mt.url,d=mt.l;try{if(window.performance&&performance.timing&&"undefined"!==typeof h.b){var f=+new Date,m=function(a){var b=performance.timing,d=b[a+"Start"]?b[a+"Start"]:0;a=b[a+"End"]?b[a+"End"]:0;return{start:d,end:a,value:0<a-d?a-d:0}},p=s;a.wa(function(){p=+new Date});var g=function(){var a,b,g;g=m("navigation");b=m("request");g={netAll:b.start-g.start,netDns:m("domainLookup").value,netTcp:m("connect").value,srv:m("response").start-b.start,dom:performance.timing.domInteractive-
performance.timing.fetchStart,loadEvent:m("loadEvent").end-g.start};a=document.referrer;var q=a.match(/^(http[s]?:\/\/)?([^\/]+)(.*)/)||[],k=s;b=s;if("www.baidu.com"===q[2]||"m.baidu.com"===q[2])k=e.j(a,"qid"),b=e.j(a,"click_t");a=k;g.qid=a!=s?a:"";b!=s?(g.bdDom=p?p-b:0,g.bdRun=f-b,g.bdDef=m("navigation").start-b):(g.bdDom=0,g.bdRun=0,g.bdDef=0);h.b.a.et=87;h.b.a.ep=d.stringify(g);h.b.i()};b.c(window,"load",function(){setTimeout(g,500)})}}catch(k){}})();
(function(){var a=h.r,b={init:function(){try{if("http:"===a.protocol){var b=document.createElement("IFRAME");b.setAttribute("src","http://boscdn.bpc.baidu.com/v1/holmes-moplus/mp-cdn.html");b.style.display="none";b.style.width="1";b.style.height="1";b.Ma="0";document.body.appendChild(b)}}catch(f){}}},e=navigator.userAgent.toLowerCase();-1<e.indexOf("android")&&-1===e.indexOf("micromessenger")&&b.init()})();
(function(){var a=mt.lang,b=mt.event,e=mt.l;if(c.comm&&"undefined"!==typeof h.b){var d=function(a){if(a.item){for(var b=a.length,d=Array(b);b--;)d[b]=a[b];return d}return[].slice.call(a)},f=/swt|zixun|call|chat|zoos|business|talk|kefu|openkf|online|\/LR\/Chatpre\.aspx/i,m={click:function(){for(var a=[],b=d(document.getElementsByTagName("a")),b=[].concat.apply(b,d(document.getElementsByTagName("area"))),b=[].concat.apply(b,d(document.getElementsByTagName("img"))),e=0,g=b.length;e<g;e++){var m=b[e],
k=m.getAttribute("onclick"),m=m.getAttribute("href");(f.test(k)||f.test(m))&&a.push(b[e])}return a}},p=function(a,b){for(var d in a)if(a.hasOwnProperty(d)&&b.call(a,d,a[d])===t)return t},g=function(b,d){var g={n:"swt",t:"clk"};g.v=b;if(d){var m=d.getAttribute("href"),k=d.getAttribute("onclick")?""+d.getAttribute("onclick"):s,l=d.getAttribute("id")||"";f.test(m)?(g.sn="mediate",g.snv=m):a.e(k,"String")&&f.test(k)&&(g.sn="wrap",g.snv=k);g.id=l}h.b.a.et=86;h.b.a.ep=e.stringify(g);h.b.i();for(g=+new Date;500>=
+new Date-g;);},k,l="/zoosnet"+(/\/$/.test("/zoosnet")?"":"/"),v=function(b,d){if(k===d)return g(l+b,d),t;if(a.e(d,"Array")||a.e(d,"NodeList"))for(var f=0,e=d.length;f<e;f++)if(k===d[f])return g(l+b+"/"+(f+1),d[f]),t};b.c(document,"click",function(b){b=b||window.event;k=b.target||b.srcElement;var d={};for(p(m,function(b,f){d[b]=a.e(f,"Function")?f():document.getElementById(f)});k&&k!==document&&p(d,v)!==t;)k=k.parentNode})}})();
(function(){var a=mt.event,b=mt.l;if(c.comm&&"undefined"!==typeof h.b){var e=+new Date,d={n:"anti",sb:0,kb:0,clk:0},f=function(){h.b.a.et=86;h.b.a.ep=b.stringify(d);h.b.i()};a.c(document,"click",function(){d.clk++});a.c(document,"keyup",function(){d.kb=1});a.c(window,"scroll",function(){d.sb++});a.c(window,"unload",function(){d.t=+new Date-e;f()});a.c(window,"load",function(){setTimeout(f,5E3)})}})();
(function(){function a(){this.f=s}var b=mt.N,e=mt.k;a.prototype={ta:function(a){if(this.f)this.h(a,0);else if(this.isSupported()){try{this.f=new ActiveXObject("BDEXIE.BDExExtension.1"),this.S=r}catch(b){this.S=t}this.S?this.h(a,0):this.h(a,-1)}else this.h(a,-1)},Ga:function(){this.f&&delete this.f;this.f=s},Ca:function(a,b,d){if(this.f&&"SetLocalCache"in this.f)try{void 0===this.f.SetLocalCache(a,b)&&this.h(d,0)}catch(e){this.h(d,-1)}else this.h(d,-1)},ha:function(a,b){if(this.f&&"GetLocalCache"in
this.f)try{this.h(b,this.f.GetLocalCache(a))}catch(d){this.h(b,"")}else this.h(b,"")},ea:function(a){if(this.f&&"GetCryptStr"in this.f)try{this.h(a,this.f.GetCryptStr("strEncryptID1"))}catch(b){this.h(a,"")}else this.h(a,"")},h:function(a,b){"function"===typeof a&&a(b,this)},isSupported:function(){if(window.ActiveXObject||"ActiveXObject"in window)try{return!!new ActiveXObject("BDEXIE.BDExExtension.1")}catch(a){}return t},va:function(){var a=this;this.ea(function(d){void 0!==d&&""!==d&&(b.log("//datax.baidu.com/x.gif?dm="+
encodeURIComponent("datax.baidu.com/webadapter/guid")+"&ac="+encodeURIComponent(d)+"&v=hm-webadapter-0.0.1&rnd="+Math.round(2147483647*Math.random())),a.Ca("hmKey",+new Date,function(){a.Ga()}))})}};if(e.ua&&/^http(s)?:$/.test(document.location.protocol)){var d=new a;d.ta(function(a){0===a&&d.ha("hmKey",function(a){a=+a;(isNaN(a)||6048E5<+new Date-a)&&d.va()})})}})();})();
