/*!
 * BugKick core
 *
 * Requires jQuery.
 *
 * @author Evgeniy `f0t0n` Naydenov
 * @author Alexey Kavshirko
 * @copyright BugKick
 */
(function(e,t){function s(){i.page.includeJs(i._url("bugkick/client.js"));i.page.includeJs(i._url("bugkick/bugkickui.js"))}var n=t.document,r="bugkick";if(!t._bugKickKey||!t._bugKickPID){return}var i=t[r]=t[r]||{};i.jQuery_URL="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js";i.LIB_URL="https://bugkick.com/BugKick.js/";i.apiKey=t._bugKickKey;i.projectID=t._bugKickPID;i.namespace=function(e){var t=e.split("."),n=i;if(t.length>0&&t[0]==r){t.shift()}for(var s=0,o;o=t[s++];){n[o]=n[o]||{};n=n[o]}return n};i.string=i.namespace("string");i.url=i.namespace("url");i.page=i.namespace("page");i.string.buildString=function(e){return Array.prototype.join.call(arguments,"")};i.url.REGEX_QUERY_ARRAY_PARAM=/\[\]$/;i.url.AMPERSAND="&";i.url.queryStringToObject=function(t){var n={};t.split(i.url.AMPERSAND).forEach(function(t){var r=t.split("="),s=r.shift(),o=r.shift();if(i.url.REGEX_QUERY_ARRAY_PARAM.test(s)){s=s.replace(i.url.REGEX_QUERY_ARRAY_PARAM,"")}if(n.hasOwnProperty(s)){if(!e.isArray(n[s])){n[s]=[n[s]]}n[s].push(o)}else{n[s]=o}});return n};i.page.appendToHead=function(e){n.getElementsByTagName("head")[0].appendChild(e)};i.page.includeJs=function(e,t,r){var s=n.createElement("script");s.type="text/javascript";if(!!e){s.src=e}if(typeof t==="object"){for(var o in t){s[o]=t[o]}}if(typeof r==="string"){s.innerHTML=r}i.page.appendToHead(s)};i.page.includeCss=function(e){var t=n.createElement("link");t.rel="stylesheet";t.href=e;i.page.appendToHead(t)};i._url=function(e){return i.string.buildString(i.LIB_URL,e)};if(typeof e==="undefined"){i.page.includeJs(i.jQuery_URL,{onload:s})}else{s()}})(this.jQuery,this)