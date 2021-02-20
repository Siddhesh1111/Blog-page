/*! This file is auto-generated */
this.wp=this.wp||{},this.wp.hooks=function(n){var r={};function e(t){if(r[t])return r[t].exports;var o=r[t]={i:t,l:!1,exports:{}};return n[t].call(o.exports,o,o.exports,e),o.l=!0,o.exports}return e.m=n,e.c=r,e.d=function(n,r,t){e.o(n,r)||Object.defineProperty(n,r,{enumerable:!0,get:t})},e.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},e.t=function(n,r){if(1&r&&(n=e(n)),8&r)return n;if(4&r&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(e.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&r&&"string"!=typeof n)for(var o in n)e.d(t,o,function(r){return n[r]}.bind(null,o));return t},e.n=function(n){var r=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(r,"a",r),r},e.o=function(n,r){return Object.prototype.hasOwnProperty.call(n,r)},e.p="",e(e.s=481)}({17:function(n,r,e){"use strict";e.d(r,"a",(function(){return u}));var t=e(27);var o=e(37),i=e(31);function u(n){return function(n){if(Array.isArray(n))return Object(t.a)(n)}(n)||Object(o.a)(n)||Object(i.a)(n)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}},27:function(n,r,e){"use strict";function t(n,r){(null==r||r>n.length)&&(r=n.length);for(var e=0,t=new Array(r);e<r;e++)t[e]=n[e];return t}e.d(r,"a",(function(){return t}))},31:function(n,r,e){"use strict";e.d(r,"a",(function(){return o}));var t=e(27);function o(n,r){if(n){if("string"==typeof n)return Object(t.a)(n,r);var e=Object.prototype.toString.call(n).slice(8,-1);return"Object"===e&&n.constructor&&(e=n.constructor.name),"Map"===e||"Set"===e?Array.from(n):"Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e)?Object(t.a)(n,r):void 0}}},37:function(n,r,e){"use strict";function t(n){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(n))return Array.from(n)}e.d(r,"a",(function(){return t}))},481:function(n,r,e){"use strict";e.r(r),e.d(r,"createHooks",(function(){return f})),e.d(r,"addAction",(function(){return h})),e.d(r,"addFilter",(function(){return v})),e.d(r,"removeAction",(function(){return m})),e.d(r,"removeFilter",(function(){return A})),e.d(r,"hasAction",(function(){return b})),e.d(r,"hasFilter",(function(){return y})),e.d(r,"removeAllActions",(function(){return _})),e.d(r,"removeAllFilters",(function(){return g})),e.d(r,"doAction",(function(){return F})),e.d(r,"applyFilters",(function(){return j})),e.d(r,"currentAction",(function(){return O})),e.d(r,"currentFilter",(function(){return k})),e.d(r,"doingAction",(function(){return x})),e.d(r,"doingFilter",(function(){return I})),e.d(r,"didAction",(function(){return S})),e.d(r,"didFilter",(function(){return w})),e.d(r,"actions",(function(){return T})),e.d(r,"filters",(function(){return M}));var t=function(n){return"string"!=typeof n||""===n?(console.error("The namespace must be a non-empty string."),!1):!!/^[a-zA-Z][a-zA-Z0-9_.\-\/]*$/.test(n)||(console.error("The namespace can only contain numbers, letters, dashes, periods, underscores and slashes."),!1)};var o=function(n){return"string"!=typeof n||""===n?(console.error("The hook name must be a non-empty string."),!1):/^__/.test(n)?(console.error("The hook name cannot begin with `__`."),!1):!!/^[a-zA-Z][a-zA-Z0-9_.-]*$/.test(n)||(console.error("The hook name can only contain numbers, letters, dashes, periods and underscores."),!1)};var i=function(n){return function(r,e,i){var u=arguments.length>3&&void 0!==arguments[3]?arguments[3]:10;if(o(r)&&t(e))if("function"==typeof i)if("number"==typeof u){var c={callback:i,priority:u,namespace:e};if(n[r]){var a,l=n[r].handlers;for(a=l.length;a>0&&!(u>=l[a-1].priority);a--);a===l.length?l[a]=c:l.splice(a,0,c),(n.__current||[]).forEach((function(n){n.name===r&&n.currentIndex>=a&&n.currentIndex++}))}else n[r]={handlers:[c],runs:0};"hookAdded"!==r&&F("hookAdded",r,e,i,u)}else console.error("If specified, the hook priority must be a number.");else console.error("The hook callback must be a function.")}};var u=function(n,r){return function(e,i){if(o(e)&&(r||t(i))){if(!n[e])return 0;var u=0;if(r)u=n[e].handlers.length,n[e]={runs:n[e].runs,handlers:[]};else for(var c=n[e].handlers,a=function(r){c[r].namespace===i&&(c.splice(r,1),u++,(n.__current||[]).forEach((function(n){n.name===e&&n.currentIndex>=r&&n.currentIndex--})))},l=c.length-1;l>=0;l--)a(l);return"hookRemoved"!==e&&F("hookRemoved",e,i),u}}};var c=function(n){return function(r,e){return void 0!==e?r in n&&n[r].handlers.some((function(n){return n.namespace===e})):r in n}};e(17);var a=function(n,r){return function(e){n[e]||(n[e]={handlers:[],runs:0}),n[e].runs++;var t=n[e].handlers;for(var o=arguments.length,i=new Array(o>1?o-1:0),u=1;u<o;u++)i[u-1]=arguments[u];if(!t||!t.length)return r?i[0]:void 0;var c={name:e,currentIndex:0};for(n.__current.push(c);c.currentIndex<t.length;){var a=t[c.currentIndex],l=a.callback.apply(null,i);r&&(i[0]=l),c.currentIndex++}return n.__current.pop(),r?i[0]:void 0}};var l=function(n){return function(){return n.__current&&n.__current.length?n.__current[n.__current.length-1].name:null}};var s=function(n){return function(r){return void 0===r?void 0!==n.__current[0]:!!n.__current[0]&&r===n.__current[0].name}};var d=function(n){return function(r){if(o(r))return n[r]&&n[r].runs?n[r].runs:0}};var f=function(){var n=Object.create(null),r=Object.create(null);return n.__current=[],r.__current=[],{addAction:i(n),addFilter:i(r),removeAction:u(n),removeFilter:u(r),hasAction:c(n),hasFilter:c(r),removeAllActions:u(n,!0),removeAllFilters:u(r,!0),doAction:a(n),applyFilters:a(r,!0),currentAction:l(n),currentFilter:l(r),doingAction:s(n),doingFilter:s(r),didAction:d(n),didFilter:d(r),actions:n,filters:r}},p=f(),h=p.addAction,v=p.addFilter,m=p.removeAction,A=p.removeFilter,b=p.hasAction,y=p.hasFilter,_=p.removeAllActions,g=p.removeAllFilters,F=p.doAction,j=p.applyFilters,O=p.currentAction,k=p.currentFilter,x=p.doingAction,I=p.doingFilter,S=p.didAction,w=p.didFilter,T=p.actions,M=p.filters}});
/*! This file is auto-generated */
!function(f,w){w.wp=w.wp||{},w.wp.heartbeat=new function(){var e,t,n,a,r=f(document),i={suspend:!1,suspendEnabled:!0,screenId:"",url:"",lastTick:0,queue:{},mainInterval:60,tempInterval:0,originalInterval:0,minimalInterval:0,countdown:0,connecting:!1,connectionError:!1,errorcount:0,hasConnected:!1,hasFocus:!0,userActivity:0,userActivityEvents:!1,checkFocusTimer:0,beatTimer:0};function o(){return(new Date).getTime()}function c(e){var t,n=e.src;if(!n||!/^https?:\/\//.test(n)||(t=w.location.origin||w.location.protocol+"//"+w.location.host,0===n.indexOf(t)))try{if(e.contentWindow.document)return 1}catch(e){}}function s(){i.hasFocus&&!document.hasFocus()?m():!i.hasFocus&&document.hasFocus()&&v()}function u(e,t){var n;if(e){switch(e){case"abort":break;case"timeout":n=!0;break;case"error":if(503===t&&i.hasConnected){n=!0;break}case"parsererror":case"empty":case"unknown":i.errorcount++,2<i.errorcount&&i.hasConnected&&(n=!0)}n&&!b()&&(i.connectionError=!0,r.trigger("heartbeat-connection-lost",[e,t]),wp.hooks.doAction("heartbeat.connection-lost",e,t))}}function l(){var e;i.connecting||i.suspend||(i.lastTick=o(),e=f.extend({},i.queue),i.queue={},r.trigger("heartbeat-send",[e]),wp.hooks.doAction("heartbeat.send",e),e={data:e,interval:i.tempInterval?i.tempInterval/1e3:i.mainInterval/1e3,_nonce:"object"==typeof w.heartbeatSettings?w.heartbeatSettings.nonce:"",action:"heartbeat",screen_id:i.screenId,has_focus:i.hasFocus},"customize"===i.screenId&&(e.wp_customize="on"),i.connecting=!0,i.xhr=f.ajax({url:i.url,type:"post",timeout:3e4,data:e,dataType:"json"}).always(function(){i.connecting=!1,d()}).done(function(e,t,n){var a;e?(i.hasConnected=!0,b()&&(i.errorcount=0,i.connectionError=!1,r.trigger("heartbeat-connection-restored"),wp.hooks.doAction("heartbeat.connection-restored")),e.nonces_expired&&(r.trigger("heartbeat-nonces-expired"),wp.hooks.doAction("heartbeat.nonces-expired")),e.heartbeat_interval&&(a=e.heartbeat_interval,delete e.heartbeat_interval),e.heartbeat_nonce&&"object"==typeof w.heartbeatSettings&&(w.heartbeatSettings.nonce=e.heartbeat_nonce,delete e.heartbeat_nonce),e.rest_nonce&&"object"==typeof w.wpApiSettings&&(w.wpApiSettings.nonce=e.rest_nonce),r.trigger("heartbeat-tick",[e,t,n]),wp.hooks.doAction("heartbeat.tick",e,t,n),a&&I(a)):u("empty")}).fail(function(e,t,n){u(t||"unknown",e.status),r.trigger("heartbeat-error",[e,t,n]),wp.hooks.doAction("heartbeat.error",e,t,n)}))}function d(){var e=o()-i.lastTick,t=i.mainInterval;i.suspend||(i.hasFocus?0<i.countdown&&i.tempInterval&&(t=i.tempInterval,i.countdown--,i.countdown<1&&(i.tempInterval=0)):t=12e4,i.minimalInterval&&t<i.minimalInterval&&(t=i.minimalInterval),w.clearTimeout(i.beatTimer),e<t?i.beatTimer=w.setTimeout(function(){l()},t-e):l())}function m(){i.hasFocus=!1}function v(){i.userActivity=o(),i.suspend=!1,i.hasFocus||(i.hasFocus=!0,d())}function h(){i.userActivityEvents=!1,r.off(".wp-heartbeat-active"),f("iframe").each(function(e,t){c(t)&&f(t.contentWindow).off(".wp-heartbeat-active")}),v()}function p(){var e=i.userActivity?o()-i.userActivity:0;3e5<e&&i.hasFocus&&m(),(i.suspendEnabled&&6e5<e||36e5<e)&&(i.suspend=!0),i.userActivityEvents||(r.on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){h()}),f("iframe").each(function(e,t){c(t)&&f(t.contentWindow).on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){h()})}),i.userActivityEvents=!0)}function b(){return i.connectionError}function I(e,t){var n,a=i.tempInterval||i.mainInterval;if(e){switch(e){case"fast":case 5:n=5e3;break;case 15:n=15e3;break;case 30:n=3e4;break;case 60:n=6e4;break;case 120:n=12e4;break;case"long-polling":return i.mainInterval=0;default:n=i.originalInterval}5e3===(n=i.minimalInterval&&n<i.minimalInterval?i.minimalInterval:n)?(t=(t=parseInt(t,10)||30)<1||30<t?30:t,i.countdown=t,i.tempInterval=n):(i.countdown=0,i.tempInterval=0,i.mainInterval=n),n!==a&&d()}return i.tempInterval?i.tempInterval/1e3:i.mainInterval/1e3}return"string"==typeof w.pagenow&&(i.screenId=w.pagenow),"string"==typeof w.ajaxurl&&(i.url=w.ajaxurl),"object"==typeof w.heartbeatSettings&&(e=w.heartbeatSettings,!i.url&&e.ajaxurl&&(i.url=e.ajaxurl),e.interval&&(i.mainInterval=e.interval,i.mainInterval<15?i.mainInterval=15:120<i.mainInterval&&(i.mainInterval=120)),e.minimalInterval&&(e.minimalInterval=parseInt(e.minimalInterval,10),i.minimalInterval=0<e.minimalInterval&&e.minimalInterval<=600?1e3*e.minimalInterval:0),i.minimalInterval&&i.mainInterval<i.minimalInterval&&(i.mainInterval=i.minimalInterval),i.screenId||(i.screenId=e.screenId||"front"),"disable"===e.suspension&&(i.suspendEnabled=!1)),i.mainInterval=1e3*i.mainInterval,i.originalInterval=i.mainInterval,void 0!==document.hidden?(t="hidden",a="visibilitychange",n="visibilityState"):void 0!==document.msHidden?(t="msHidden",a="msvisibilitychange",n="msVisibilityState"):void 0!==document.webkitHidden&&(t="webkitHidden",a="webkitvisibilitychange",n="webkitVisibilityState"),t&&(document[t]&&(i.hasFocus=!1),r.on(a+".wp-heartbeat",function(){"hidden"===document[n]?(m(),w.clearInterval(i.checkFocusTimer)):(v(),document.hasFocus&&(i.checkFocusTimer=w.setInterval(s,1e4)))})),document.hasFocus&&(i.checkFocusTimer=w.setInterval(s,1e4)),f(w).on("unload.wp-heartbeat",function(){i.suspend=!0,i.xhr&&4!==i.xhr.readyState&&i.xhr.abort()}),w.setInterval(p,3e4),r.ready(function(){i.lastTick=o(),d()}),{hasFocus:function(){return i.hasFocus},connectNow:function(){i.lastTick=0,d()},disableSuspend:function(){i.suspendEnabled=!1},interval:I,hasConnectionError:b,enqueue:function(e,t,n){return!!e&&((!n||!this.isQueued(e))&&(i.queue[e]=t,!0))},dequeue:function(e){e&&delete i.queue[e]},isQueued:function(e){if(e)return i.queue.hasOwnProperty(e)},getQueuedItem:function(e){if(e)return this.isQueued(e)?i.queue[e]:void 0}}}}(jQuery,window);
/*! This file is auto-generated */
!function(u,h){var p,f;function c(e){var t={number:null,id_base:null},i=e.match(/^(.+)-(\d+)$/);return i?(t.id_base=i[1],t.number=parseInt(i[2],10)):t.id_base=e,t}u&&u.customize&&((p=u.customize).Widgets=p.Widgets||{},p.Widgets.savedWidgetIds={},p.Widgets.data=_wpCustomizeWidgetsSettings||{},f=p.Widgets.data.l10n,p.Widgets.WidgetModel=Backbone.Model.extend({id:null,temp_id:null,classname:null,control_tpl:null,description:null,is_disabled:null,is_multi:null,multi_number:null,name:null,id_base:null,transport:null,params:[],width:null,height:null,search_matched:!0}),p.Widgets.WidgetCollection=Backbone.Collection.extend({model:p.Widgets.WidgetModel,doSearch:function(e){this.terms!==e&&(this.terms=e,0<this.terms.length&&this.search(this.terms),""===this.terms&&this.each(function(e){e.set("search_matched",!0)}))},search:function(e){var t,i;e=(e=e.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")).replace(/ /g,")(?=.*"),t=new RegExp("^(?=.*"+e+").+","i"),this.each(function(e){i=[e.get("name"),e.get("description")].join(" "),e.set("search_matched",t.test(i))})}}),p.Widgets.availableWidgets=new p.Widgets.WidgetCollection(p.Widgets.data.availableWidgets),p.Widgets.SidebarModel=Backbone.Model.extend({after_title:null,after_widget:null,before_title:null,before_widget:null,class:null,description:null,id:null,name:null,is_rendered:!1}),p.Widgets.SidebarCollection=Backbone.Collection.extend({model:p.Widgets.SidebarModel}),p.Widgets.registeredSidebars=new p.Widgets.SidebarCollection(p.Widgets.data.registeredSidebars),p.Widgets.AvailableWidgetsPanelView=u.Backbone.View.extend({el:"#available-widgets",events:{"input #widgets-search":"search","focus .widget-tpl":"focus","click .widget-tpl":"_submit","keypress .widget-tpl":"_submit",keydown:"keyboardAccessible"},selected:null,currentSidebarControl:null,$search:null,$clearResults:null,searchMatchesCount:null,initialize:function(){var t=this;this.$search=h("#widgets-search"),this.$clearResults=this.$el.find(".clear-results"),_.bindAll(this,"close"),this.listenTo(this.collection,"change",this.updateList),this.updateList(),this.searchMatchesCount=this.collection.length,h("#customize-controls, #available-widgets .customize-section-title").on("click keydown",function(e){e=h(e.target).is(".add-new-widget, .add-new-widget *");h("body").hasClass("adding-widget")&&!e&&t.close()}),this.$clearResults.on("click",function(){t.$search.val("").focus().trigger("input")}),p.previewer.bind("url",this.close)},search:_.debounce(function(e){var t;this.collection.doSearch(e.target.value),this.updateSearchMatchesCount(),this.announceSearchMatches(),this.selected&&!this.selected.is(":visible")&&(this.selected.removeClass("selected"),this.selected=null),this.selected&&!e.target.value&&(this.selected.removeClass("selected"),this.selected=null),!this.selected&&e.target.value&&(t=this.$el.find("> .widget-tpl:visible:first")).length&&this.select(t),""!==e.target.value?this.$clearResults.addClass("is-visible"):""===e.target.value&&this.$clearResults.removeClass("is-visible"),this.searchMatchesCount?this.$el.removeClass("no-widgets-found"):this.$el.addClass("no-widgets-found")},500),updateSearchMatchesCount:function(){this.searchMatchesCount=this.collection.where({search_matched:!0}).length},announceSearchMatches:function(){var e=f.widgetsFound.replace("%d",this.searchMatchesCount);this.searchMatchesCount||(e=f.noWidgetsFound),u.a11y.speak(e)},updateList:function(){this.collection.each(function(e){var t=h("#widget-tpl-"+e.id);t.toggle(e.get("search_matched")&&!e.get("is_disabled")),e.get("is_disabled")&&t.is(this.selected)&&(this.selected=null)})},select:function(e){this.selected=h(e),this.selected.siblings(".widget-tpl").removeClass("selected"),this.selected.addClass("selected")},focus:function(e){this.select(h(e.currentTarget))},_submit:function(e){"keypress"===e.type&&13!==e.which&&32!==e.which||this.submit(h(e.currentTarget))},submit:function(e){(e=e||this.selected)&&this.currentSidebarControl&&(this.select(e),e=h(this.selected).data("widget-id"),(e=this.collection.findWhere({id:e}))&&((e=this.currentSidebarControl.addWidget(e.get("id_base")))&&e.focus(),this.close()))},open:function(e){this.currentSidebarControl=e,_(this.currentSidebarControl.getWidgetFormControls()).each(function(e){e.params.is_wide&&e.collapseForm()}),p.section.has("publish_settings")&&p.section("publish_settings").collapse(),h("body").addClass("adding-widget"),this.$el.find(".selected").removeClass("selected"),this.collection.doSearch(""),p.settings.browser.mobile||this.$search.focus()},close:function(e){(e=e||{}).returnFocus&&this.currentSidebarControl&&this.currentSidebarControl.container.find(".add-new-widget").focus(),this.currentSidebarControl=null,this.selected=null,h("body").removeClass("adding-widget"),this.$search.val("").trigger("input")},keyboardAccessible:function(e){var t=13===e.which,i=27===e.which,n=40===e.which,s=38===e.which,d=9===e.which,a=e.shiftKey,o=null,r=this.$el.find("> .widget-tpl:visible:first"),l=this.$el.find("> .widget-tpl:visible:last"),c=h(e.target).is(this.$search),g=h(e.target).is(".widget-tpl:visible:last");if(n||s)return n?c?o=r:this.selected&&0!==this.selected.nextAll(".widget-tpl:visible").length&&(o=this.selected.nextAll(".widget-tpl:visible:first")):s&&(c?o=l:this.selected&&0!==this.selected.prevAll(".widget-tpl:visible").length&&(o=this.selected.prevAll(".widget-tpl:visible:first"))),this.select(o),void(o||this.$search).focus();t&&!this.$search.val()||(t?this.submit():i&&this.close({returnFocus:!0}),this.currentSidebarControl&&d&&(a&&c||!a&&g)&&(this.currentSidebarControl.container.find(".add-new-widget").focus(),e.preventDefault()))}}),p.Widgets.formSyncHandlers={rss:function(e,t,i){var n=t.find(".widget-error:first"),i=h("<div>"+i+"</div>").find(".widget-error:first");n.length&&i.length?n.replaceWith(i):n.length?n.remove():i.length&&t.find(".widget-content:first").prepend(i)}},p.Widgets.WidgetControl=p.Control.extend({defaultExpandedArguments:{duration:"fast",completeCallback:h.noop},initialize:function(e,t){var i=this;i.widgetControlEmbedded=!1,i.widgetContentEmbedded=!1,i.expanded=new p.Value(!1),i.expandedArgumentsQueue=[],i.expanded.bind(function(e){var t=i.expandedArgumentsQueue.shift(),t=h.extend({},i.defaultExpandedArguments,t);i.onChangeExpanded(e,t)}),i.altNotice=!0,p.Control.prototype.initialize.call(i,e,t)},ready:function(){var n=this;n.section()?p.section(n.section(),function(t){var i=function(e){e&&(n.embedWidgetControl(),t.expanded.unbind(i))};t.expanded()?i(!0):t.expanded.bind(i)}):n.embedWidgetControl()},embedWidgetControl:function(){var e,t=this;t.widgetControlEmbedded||(t.widgetControlEmbedded=!0,e=h(t.params.widget_control),t.container.append(e),t._setupModel(),t._setupWideWidget(),t._setupControlToggle(),t._setupWidgetTitle(),t._setupReorderUI(),t._setupHighlightEffects(),t._setupUpdateUI(),t._setupRemoveUI())},embedWidgetContent:function(){var e,t=this;t.embedWidgetControl(),t.widgetContentEmbedded||(t.widgetContentEmbedded=!0,t.notifications.container=t.getNotificationsContainerElement(),t.notifications.render(),e=h(t.params.widget_content),t.container.find(".widget-content:first").append(e),h(document).trigger("widget-added",[t.container.find(".widget:first")]))},_setupModel:function(){var i=this,e=function(){p.Widgets.savedWidgetIds[i.params.widget_id]=!0};p.bind("ready",e),p.bind("saved",e),this._updateCount=0,this.isWidgetUpdating=!1,this.liveUpdateMode=!0,this.setting.bind(function(e,t){_(t).isEqual(e)||i.isWidgetUpdating||i.updateWidget({instance:e})})},_setupWideWidget:function(){var n,s,e,t,i,d=this;!this.params.is_wide||h(window).width()<=640||(n=this.container.find(".widget-inside"),s=n.find("> .form"),e=h(".wp-full-overlay-sidebar-content:first"),this.container.addClass("wide-widget-control"),this.container.find(".form:first").css({"max-width":this.params.width,"min-height":this.params.height}),i=function(){var e=d.container.offset().top,t=h(window).height(),i=s.outerHeight();n.css("max-height",t),i=Math.max(0,Math.min(Math.max(e,0),t-i)),n.css("top",i)},t=h("#customize-theme-controls"),this.container.on("expand",function(){i(),e.on("scroll",i),h(window).on("resize",i),t.on("expanded collapsed",i)}),this.container.on("collapsed",function(){e.off("scroll",i),h(window).off("resize",i),t.off("expanded collapsed",i)}),p.each(function(e){0===e.id.indexOf("sidebars_widgets[")&&e.bind(function(){d.container.hasClass("expanded")&&i()})}))},_setupControlToggle:function(){var t=this;this.container.find(".widget-top").on("click",function(e){e.preventDefault(),t.getSidebarWidgetsControl().isReordering||t.expanded(!t.expanded())}),this.container.find(".widget-control-close").on("click",function(){t.collapse(),t.container.find(".widget-top .widget-action:first").focus()})},_setupWidgetTitle:function(){var i=this,e=function(){var e=i.setting().title,t=i.container.find(".in-widget-title");e?t.text(": "+e):t.text("")};this.setting.bind(e),e()},_setupReorderUI:function(){var t,e,d=this,s=function(e){e.siblings(".selected").removeClass("selected"),e.addClass("selected");e=e.data("id")===d.params.sidebar_id;d.container.find(".move-widget-btn").prop("disabled",e)};this.container.find(".widget-title-action").after(h(p.Widgets.data.tpl.widgetReorderNav)),e=_.template(p.Widgets.data.tpl.moveWidgetArea),t=h(e({sidebars:_(p.Widgets.registeredSidebars.toArray()).pluck("attributes")})),this.container.find(".widget-top").after(t),(e=function(){var e=t.find("li"),i=0,n=e.filter(function(){return h(this).data("id")===d.params.sidebar_id});e.each(function(){var e=h(this),t=e.data("id"),t=p.Widgets.registeredSidebars.get(t).get("is_rendered");e.toggle(t),t&&(i+=1),e.hasClass("selected")&&!t&&s(n)}),1<i?d.container.find(".move-widget").show():d.container.find(".move-widget").hide()})(),p.Widgets.registeredSidebars.on("change:is_rendered",e),this.container.find(".widget-reorder-nav").find(".move-widget, .move-widget-down, .move-widget-up").each(function(){h(this).prepend(d.container.find(".widget-title").text()+": ")}).on("click keypress",function(e){var t,i;"keypress"===e.type&&13!==e.which&&32!==e.which||(h(this).focus(),h(this).is(".move-widget")?d.toggleWidgetMoveArea():(t=h(this).is(".move-widget-down"),i=h(this).is(".move-widget-up"),e=d.getWidgetSidebarPosition(),i&&0===e||t&&e===d.getSidebarWidgetsControl().setting().length-1||(i?(d.moveUp(),u.a11y.speak(f.widgetMovedUp)):(d.moveDown(),u.a11y.speak(f.widgetMovedDown)),h(this).focus())))}),this.container.find(".widget-area-select").on("click keypress","li",function(e){"keypress"===e.type&&13!==e.which&&32!==e.which||(e.preventDefault(),s(h(this)))}),this.container.find(".move-widget-btn").click(function(){d.getSidebarWidgetsControl().toggleReordering(!1);var e=d.params.sidebar_id,t=d.container.find(".widget-area-select li.selected").data("id"),i=p("sidebars_widgets["+e+"]"),n=p("sidebars_widgets["+t+"]"),s=Array.prototype.slice.call(i()),e=Array.prototype.slice.call(n()),t=d.getWidgetSidebarPosition();s.splice(t,1),e.push(d.params.widget_id),i(s),n(e),d.focus()})},_setupHighlightEffects:function(){var e=this;this.container.on("mouseenter click",function(){e.setting.previewer.send("highlight-widget",e.params.widget_id)}),this.setting.bind(function(){e.setting.previewer.send("highlight-widget",e.params.widget_id)})},_setupUpdateUI:function(){var t,i,n=this,s=this.container.find(".widget:first"),e=s.find(".widget-content:first"),d=this.container.find(".widget-control-save");d.val(f.saveBtnLabel),d.attr("title",f.saveBtnTooltip),d.removeClass("button-primary"),d.on("click",function(e){e.preventDefault(),n.updateWidget({disable_form:!0})}),t=_.debounce(function(){n.updateWidget()},250),e.on("keydown","input",function(e){13===e.which&&(e.preventDefault(),n.updateWidget({ignoreActiveElement:!0}))}),e.on("change input propertychange",":input",function(e){n.liveUpdateMode&&("change"===e.type||this.checkValidity&&this.checkValidity())&&t()}),this.setting.previewer.channel.bind("synced",function(){n.container.removeClass("previewer-loading")}),p.previewer.bind("widget-updated",function(e){e===n.params.widget_id&&n.container.removeClass("previewer-loading")}),(i=p.Widgets.formSyncHandlers[this.params.widget_id_base])&&h(document).on("widget-synced",function(e,t){s.is(t)&&i.apply(document,arguments)})},onChangeActive:function(e,t){this.container.toggleClass("widget-rendered",e),t.completeCallback&&t.completeCallback()},_setupRemoveUI:function(){var e,s=this,t=this.container.find(".widget-control-remove");t.on("click",function(){var n=s.container.next().is(".customize-control-widget_form")?s.container.next().find(".widget-action:first"):s.container.prev().is(".customize-control-widget_form")?s.container.prev().find(".widget-action:first"):s.container.next(".customize-control-sidebar_widgets").find(".add-new-widget:first");s.container.slideUp(function(){var e,t,i=p.Widgets.getSidebarWidgetControlContainingWidget(s.params.widget_id);i&&(e=i.setting().slice(),-1!==(t=_.indexOf(e,s.params.widget_id))&&(e.splice(t,1),i.setting(e),n.focus()))})}),e=function(){t.text(f.removeBtnLabel),t.attr("title",f.removeBtnTooltip)},this.params.is_new?p.bind("saved",e):e()},_getInputs:function(e){return h(e).find(":input[name]")},_getInputsSignature:function(e){return _(e).map(function(e){e=h(e),e=e.is(":checkbox, :radio")?[e.attr("id"),e.attr("name"),e.prop("value")]:[e.attr("id"),e.attr("name")];return e.join(",")}).join(";")},_getInputState:function(e){return(e=h(e)).is(":radio, :checkbox")?e.prop("checked"):e.is("select[multiple]")?e.find("option:selected").map(function(){return h(this).val()}).get():e.val()},_setInputState:function(e,t){(e=h(e)).is(":radio, :checkbox")?e.prop("checked",t):e.is("select[multiple]")?(t=h.isArray(t)?_.map(t,function(e){return String(e)}):[],e.find("option").each(function(){h(this).prop("selected",-1!==_.indexOf(t,String(this.value)))})):e.val(t)},getSidebarWidgetsControl:function(){var e="sidebars_widgets["+this.params.sidebar_id+"]",e=p.control(e);if(e)return e},updateWidget:function(s){var e,d,a,o,r,l,t,i,c,g=this;g.embedWidgetContent(),e=(s=h.extend({instance:null,complete:null,ignoreActiveElement:!1},s)).instance,d=s.complete,this._updateCount+=1,r=this._updateCount,a=this.container.find(".widget:first"),(o=a.find(".widget-content:first")).find(".widget-error").remove(),this.container.addClass("widget-form-loading"),this.container.addClass("previewer-loading"),(t=p.state("processing"))(t()+1),this.liveUpdateMode||this.container.addClass("widget-form-disabled"),(i={action:"update-widget",wp_customize:"on"}).nonce=p.settings.nonce["update-widget"],i.customize_theme=p.settings.theme.stylesheet,i.customized=u.customize.previewer.query().customized,i=h.param(i),(l=this._getInputs(o)).each(function(){h(this).data("state"+r,g._getInputState(this))}),i+=e?"&"+h.param({sanitized_widget_setting:JSON.stringify(e)}):"&"+l.serialize(),i+="&"+o.find("~ :input").serialize(),this._previousUpdateRequest&&this._previousUpdateRequest.abort(),i=h.post(u.ajax.settings.url,i),(this._previousUpdateRequest=i).done(function(e){var n,t,i=!1;if("0"===e)return p.previewer.preview.iframe.hide(),void p.previewer.login().done(function(){g.updateWidget(s),p.previewer.preview.iframe.show()});"-1"!==e?e.success?(t=h("<div>"+e.data.form+"</div>"),n=g._getInputs(t),(t=g._getInputsSignature(l)===g._getInputsSignature(n))&&!g.liveUpdateMode&&(g.liveUpdateMode=!0,g.container.removeClass("widget-form-disabled"),g.container.find('input[name="savewidget"]').hide()),t&&g.liveUpdateMode?(l.each(function(e){var t=h(this),i=h(n[e]),e=t.data("state"+r),i=g._getInputState(i);t.data("sanitized",i),_.isEqual(e,i)||!s.ignoreActiveElement&&t.is(document.activeElement)||g._setInputState(t,i)}),h(document).trigger("widget-synced",[a,e.data.form])):g.liveUpdateMode?(g.liveUpdateMode=!1,g.container.find('input[name="savewidget"]').show(),i=!0):(o.html(e.data.form),g.container.removeClass("widget-form-disabled"),h(document).trigger("widget-updated",[a])),(c=!i&&!_(g.setting()).isEqual(e.data.instance))?(g.isWidgetUpdating=!0,g.setting(e.data.instance),g.isWidgetUpdating=!1):g.container.removeClass("previewer-loading"),d&&d.call(g,null,{noChange:!c,ajaxFinished:!0})):(i=f.error,e.data&&e.data.message&&(i=e.data.message),d?d.call(g,i):o.prepend('<p class="widget-error"><strong>'+i+"</strong></p>")):p.previewer.cheatin()}),i.fail(function(e,t){d&&d.call(g,t)}),i.always(function(){g.container.removeClass("widget-form-loading"),l.each(function(){h(this).removeData("state"+r)}),t(t()-1)})},expandControlSection:function(){p.Control.prototype.expand.call(this)},_toggleExpanded:p.Section.prototype._toggleExpanded,expand:p.Section.prototype.expand,expandForm:function(){this.expand()},collapse:p.Section.prototype.collapse,collapseForm:function(){this.collapse()},toggleForm:function(e){void 0===e&&(e=!this.expanded()),this.expanded(e)},onChangeExpanded:function(e,t){var i,n,s,d,a,o,r=this;r.embedWidgetControl(),e&&r.embedWidgetContent(),t.unchanged?e&&p.Control.prototype.expand.call(r,{completeCallback:t.completeCallback}):(i=this.container.find("div.widget:first"),n=i.find(".widget-inside:first"),o=this.container.find(".widget-top button.widget-action"),a=function(){p.control.each(function(e){r.params.type===e.params.type&&r!==e&&e.collapse()}),s=function(){r.container.removeClass("expanding"),r.container.addClass("expanded"),i.addClass("open"),o.attr("aria-expanded","true"),r.container.trigger("expanded")},t.completeCallback&&(d=s,s=function(){d(),t.completeCallback()}),r.params.is_wide?n.fadeIn(t.duration,s):n.slideDown(t.duration,s),r.container.trigger("expand"),r.container.addClass("expanding")},e?p.section.has(r.section())?p.section(r.section()).expand({completeCallback:a}):a():(s=function(){r.container.removeClass("collapsing"),r.container.removeClass("expanded"),i.removeClass("open"),o.attr("aria-expanded","false"),r.container.trigger("collapsed")},t.completeCallback&&(d=s,s=function(){d(),t.completeCallback()}),r.container.trigger("collapse"),r.container.addClass("collapsing"),r.params.is_wide?n.fadeOut(t.duration,s):n.slideUp(t.duration,function(){i.css({width:"",margin:""}),s()})))},getWidgetSidebarPosition:function(){var e=this.getSidebarWidgetsControl().setting(),e=_.indexOf(e,this.params.widget_id);if(-1!==e)return e},moveUp:function(){this._moveWidgetByOne(-1)},moveDown:function(){this._moveWidgetByOne(1)},_moveWidgetByOne:function(e){var t=this.getWidgetSidebarPosition(),i=this.getSidebarWidgetsControl().setting,n=Array.prototype.slice.call(i()),s=n[t+e];n[t+e]=this.params.widget_id,n[t]=s,i(n)},toggleWidgetMoveArea:function(e){var t=this,i=this.container.find(".move-widget-area");(e=void 0===e?!i.hasClass("active"):e)&&(i.find(".selected").removeClass("selected"),i.find("li").filter(function(){return h(this).data("id")===t.params.sidebar_id}).addClass("selected"),this.container.find(".move-widget-btn").prop("disabled",!0)),i.toggleClass("active",e)},highlightSectionAndControl:function(){var e=this.container.is(":hidden")?this.container.closest(".control-section"):this.container;h(".highlighted").removeClass("highlighted"),e.addClass("highlighted"),setTimeout(function(){e.removeClass("highlighted")},500)}}),p.Widgets.WidgetsPanel=p.Panel.extend({ready:function(){var d=this;p.Panel.prototype.ready.call(d),d.deferred.embedded.done(function(){var t,n,i,e=d.container.find(".panel-meta"),s=h("<div></div>",{class:"no-widget-areas-rendered-notice"});e.append(s),n=function(){return _.filter(d.sections(),function(e){return"sidebar"===e.params.type&&e.active()}).length},i=function(){var e=n();return 0===e||e!==p.Widgets.data.registeredSidebars.length},(t=function(){var e,t,i=n();s.empty(),i!==(t=p.Widgets.data.registeredSidebars.length)&&((e=0!==i?(e=t-i,f.someAreasShown[e]):f.noAreasShown)&&s.append(h("<p></p>",{text:e})),s.append(h("<p></p>",{text:f.navigatePreview})))})(),s.toggle(i()),p.previewer.deferred.active.done(function(){s.toggle(i())}),p.bind("pane-contents-reflowed",function(){var e="resolved"===p.previewer.deferred.active.state()?"fast":0;t(),i()?s.slideDown(e):s.slideUp(e)})})},isContextuallyActive:function(){return this.active()}}),p.Widgets.SidebarSection=p.Section.extend({ready:function(){var t;p.Section.prototype.ready.call(this),t=p.Widgets.registeredSidebars.get(this.params.sidebarId),this.active.bind(function(e){t.set("is_rendered",e)}),t.set("is_rendered",this.active())}}),p.Widgets.SidebarControl=p.Control.extend({ready:function(){this.$controlSection=this.container.closest(".control-section"),this.$sectionContent=this.container.closest(".accordion-section-content"),this._setupModel(),this._setupSortable(),this._setupAddition(),this._applyCardinalOrderClassNames()},_setupModel:function(){var d=this;this.setting.bind(function(i,e){var t,n=_(e).difference(i);i=_(i).filter(function(e){e=c(e);return!!p.Widgets.availableWidgets.findWhere({id_base:e.id_base})}),(e=_(i).map(function(e){return p.Widgets.getWidgetFormControlForWidget(e)||d.addWidget(e)})).sort(function(e,t){return _.indexOf(i,e.params.widget_id)-_.indexOf(i,t.params.widget_id)}),t=0,_(e).each(function(e){e.priority(t),e.section(d.section()),t+=1}),d.priority(t),d._applyCardinalOrderClassNames(),_(e).each(function(e){e.params.sidebar_id=d.params.sidebar_id}),_(n).each(function(s){setTimeout(function(){var e,t,i,n=!1;p.each(function(e){e.id!==d.setting.id&&0===e.id.indexOf("sidebars_widgets[")&&"sidebars_widgets[wp_inactive_widgets]"!==e.id&&(e=e(),-1!==_.indexOf(e,s)&&(n=!0))}),n||(t=(e=p.Widgets.getWidgetFormControlForWidget(s))&&h.contains(document,e.container[0])&&!h.contains(d.$sectionContent[0],e.container[0]),e&&!t&&(p.control.remove(e.id),e.container.remove()),p.Widgets.savedWidgetIds[s]&&((i=p.value("sidebars_widgets[wp_inactive_widgets]")().slice()).push(s),p.value("sidebars_widgets[wp_inactive_widgets]")(_(i).unique())),i=c(s).id_base,(i=p.Widgets.availableWidgets.findWhere({id_base:i}))&&!i.get("is_multi")&&i.set("is_disabled",!1))})})})},_setupSortable:function(){var t=this;this.isReordering=!1,this.$sectionContent.sortable({items:"> .customize-control-widget_form",handle:".widget-top",axis:"y",tolerance:"pointer",connectWith:".accordion-section-content:has(.customize-control-sidebar_widgets)",update:function(){var e=t.$sectionContent.sortable("toArray"),e=h.map(e,function(e){return h("#"+e).find(":input[name=widget-id]").val()});t.setting(e)}}),this.$controlSection.find(".accordion-section-title").droppable({accept:".customize-control-widget_form",over:function(){p.section(t.section.get()).expand({allowMultiple:!0,completeCallback:function(){p.section.each(function(e){e.container.find(".customize-control-sidebar_widgets").length&&e.container.find(".accordion-section-content:first").sortable("refreshPositions")})}})}}),this.container.find(".reorder-toggle").on("click",function(){t.toggleReordering(!t.isReordering)})},_setupAddition:function(){var t=this;this.container.find(".add-new-widget").on("click",function(){var e=h(this);t.$sectionContent.hasClass("reordering")||(h("body").hasClass("adding-widget")?(e.attr("aria-expanded","false"),p.Widgets.availableWidgetsPanel.close()):(e.attr("aria-expanded","true"),p.Widgets.availableWidgetsPanel.open(t)))})},_applyCardinalOrderClassNames:function(){var t=[];_.each(this.setting(),function(e){e=p.Widgets.getWidgetFormControlForWidget(e);e&&t.push(e)}),0===t.length||1===p.Widgets.registeredSidebars.length&&t.length<=1?this.container.find(".reorder-toggle").hide():(this.container.find(".reorder-toggle").show(),h(t).each(function(){h(this.container).removeClass("first-widget").removeClass("last-widget").find(".move-widget-down, .move-widget-up").prop("tabIndex",0)}),_.first(t).container.addClass("first-widget").find(".move-widget-up").prop("tabIndex",-1),_.last(t).container.addClass("last-widget").find(".move-widget-down").prop("tabIndex",-1))},toggleReordering:function(e){var t=this.$sectionContent.find(".add-new-widget"),i=this.container.find(".reorder-toggle"),n=this.$sectionContent.find(".widget-title");(e=Boolean(e))!==this.$sectionContent.hasClass("reordering")&&(this.isReordering=e,this.$sectionContent.toggleClass("reordering",e),e?(_(this.getWidgetFormControls()).each(function(e){e.collapse()}),t.attr({tabindex:"-1","aria-hidden":"true"}),i.attr("aria-label",f.reorderLabelOff),u.a11y.speak(f.reorderModeOn),n.attr("aria-hidden","true")):(t.removeAttr("tabindex aria-hidden"),i.attr("aria-label",f.reorderLabelOn),u.a11y.speak(f.reorderModeOff),n.attr("aria-hidden","false")))},getWidgetFormControls:function(){var t=[];return _(this.setting()).each(function(e){e=function(e){var t=c(e);e="widget_"+t.id_base,t.number&&(e+="["+t.number+"]");return e}(e),e=p.control(e);e&&t.push(e)}),t},addWidget:function(n){var e,t,i,s=this,d="widget_form",a=c(n),o=a.number,r=a.id_base,l=p.Widgets.availableWidgets.findWhere({id_base:r});return!!l&&(!(o&&!l.get("is_multi"))&&(l.get("is_multi")&&!o&&(l.set("multi_number",l.get("multi_number")+1),o=l.get("multi_number")),a=h.trim(h("#widget-tpl-"+l.get("id")).html()),l.get("is_multi")?a=a.replace(/<[^<>]+>/g,function(e){return e.replace(/__i__|%i%/g,o)}):l.set("is_disabled",!0),r=h(a),(a=h("<li/>").addClass("customize-control").addClass("customize-control-"+d).append(r)).find("> .widget-icon").remove(),l.get("is_multi")&&(a.find('input[name="widget_number"]').val(o),a.find('input[name="multi_number"]').val(o)),n=a.find('[name="widget-id"]').val(),a.hide(),r="widget_"+l.get("id_base"),l.get("is_multi")&&(r+="["+o+"]"),a.attr("id","customize-control-"+r.replace(/\]/g,"").replace(/\[/g,"-")),(e=p.has(r))||(i={transport:p.Widgets.data.selectiveRefreshableWidgets[l.get("id_base")]?"postMessage":"refresh",previewer:this.setting.previewer},p.create(r,r,"",i).set({})),i=p.controlConstructor[d],t=new i(r,{settings:{default:r},content:a,sidebar_id:s.params.sidebar_id,widget_id:n,widget_id_base:l.get("id_base"),type:d,is_new:!e,width:l.get("width"),height:l.get("height"),is_wide:l.get("is_wide")}),p.control.add(t),p.each(function(e){var t,i;e.id!==s.setting.id&&0===e.id.indexOf("sidebars_widgets[")&&(t=e().slice(),-1!==(i=_.indexOf(t,n))&&(t.splice(i),e(t)))}),l=this.setting().slice(),-1===_.indexOf(l,n)&&(l.push(n),this.setting(l)),a.slideDown(function(){e&&t.updateWidget({instance:t.setting()})}),t))}}),h.extend(p.panelConstructor,{widgets:p.Widgets.WidgetsPanel}),h.extend(p.sectionConstructor,{sidebar:p.Widgets.SidebarSection}),h.extend(p.controlConstructor,{widget_form:p.Widgets.WidgetControl,sidebar_widgets:p.Widgets.SidebarControl}),p.bind("ready",function(){p.Widgets.availableWidgetsPanel=new p.Widgets.AvailableWidgetsPanelView({collection:p.Widgets.availableWidgets}),p.previewer.bind("highlight-widget-control",p.Widgets.highlightWidgetFormControl),p.previewer.bind("focus-widget-control",p.Widgets.focusWidgetFormControl)}),p.Widgets.highlightWidgetFormControl=function(e){e=p.Widgets.getWidgetFormControlForWidget(e);e&&e.highlightSectionAndControl()},p.Widgets.focusWidgetFormControl=function(e){e=p.Widgets.getWidgetFormControlForWidget(e);e&&e.focus()},p.Widgets.getSidebarWidgetControlContainingWidget=function(t){var i=null;return p.control.each(function(e){"sidebar_widgets"===e.params.type&&-1!==_.indexOf(e.setting(),t)&&(i=e)}),i},p.Widgets.getWidgetFormControlForWidget=function(t){var i=null;return p.control.each(function(e){"widget_form"===e.params.type&&e.params.widget_id===t&&(i=e)}),i},h(document).on("widget-added",function(e,t){var s,d,i,n=c(t.find("> .widget-inside > .form > .widget-id").val());"nav_menu"===n.id_base&&(s=p.control("widget_nav_menu["+String(n.number)+"]"))&&(d=t.find('select[name*="nav_menu"]'),i=t.find(".edit-selected-nav-menu > button"),0!==d.length&&0!==i.length&&(d.on("change",function(){p.section.has("nav_menu["+d.val()+"]")?i.parent().show():i.parent().hide()}),i.on("click",function(){var i,n,e=p.section("nav_menu["+d.val()+"]");e&&(n=s,(i=e).focus(),i.expanded.bind(function e(t){t||(i.expanded.unbind(e),n.focus())}))})))}))}(window.wp,jQuery);
/*
 * Thickbox 3.1 - One Box To Rule Them All.
 * By Cody Lindley (http://www.codylindley.com)
 * Copyright (c) 2007 cody lindley
 * Licensed under the MIT License: http://www.opensource.org/licenses/mit-license.php
*/

if ( typeof tb_pathToImage != 'string' ) {
	var tb_pathToImage = thickboxL10n.loadingAnimation;
}

/*!!!!!!!!!!!!!!!!! edit below this line at your own risk !!!!!!!!!!!!!!!!!!!!!!!*/

//on page load call tb_init
jQuery(document).ready(function(){
	tb_init('a.thickbox, area.thickbox, input.thickbox');//pass where to apply thickbox
	imgLoader = new Image();// preload image
	imgLoader.src = tb_pathToImage;
});

/*
 * Add thickbox to href & area elements that have a class of .thickbox.
 * Remove the loading indicator when content in an iframe has loaded.
 */
function tb_init(domChunk){
	jQuery( 'body' )
		.on( 'click', domChunk, tb_click )
		.on( 'thickbox:iframe:loaded', function() {
			jQuery( '#TB_window' ).removeClass( 'thickbox-loading' );
		});
}

function tb_click(){
	var t = this.title || this.name || null;
	var a = this.href || this.alt;
	var g = this.rel || false;
	tb_show(t,a,g);
	this.blur();
	return false;
}

function tb_show(caption, url, imageGroup) {//function called when the user clicks on a thickbox link

	var $closeBtn;

	try {
		if (typeof document.body.style.maxHeight === "undefined") {//if IE 6
			jQuery("body","html").css({height: "100%", width: "100%"});
			jQuery("html").css("overflow","hidden");
			if (document.getElementById("TB_HideSelect") === null) {//iframe to hide select elements in ie6
				jQuery("body").append("<iframe id='TB_HideSelect'>"+thickboxL10n.noiframes+"</iframe><div id='TB_overlay'></div><div id='TB_window' class='thickbox-loading'></div>");
				jQuery("#TB_overlay").click(tb_remove);
			}
		}else{//all others
			if(document.getElementById("TB_overlay") === null){
				jQuery("body").append("<div id='TB_overlay'></div><div id='TB_window' class='thickbox-loading'></div>");
				jQuery("#TB_overlay").click(tb_remove);
				jQuery( 'body' ).addClass( 'modal-open' );
			}
		}

		if(tb_detectMacXFF()){
			jQuery("#TB_overlay").addClass("TB_overlayMacFFBGHack");//use png overlay so hide flash
		}else{
			jQuery("#TB_overlay").addClass("TB_overlayBG");//use background and opacity
		}

		if(caption===null){caption="";}
		jQuery("body").append("<div id='TB_load'><img src='"+imgLoader.src+"' width='208' /></div>");//add loader to the page
		jQuery('#TB_load').show();//show loader

		var baseURL;
	   if(url.indexOf("?")!==-1){ //ff there is a query string involved
			baseURL = url.substr(0, url.indexOf("?"));
	   }else{
	   		baseURL = url;
	   }

	   var urlString = /\.jpg$|\.jpeg$|\.png$|\.gif$|\.bmp$/;
	   var urlType = baseURL.toLowerCase().match(urlString);

		if(urlType == '.jpg' || urlType == '.jpeg' || urlType == '.png' || urlType == '.gif' || urlType == '.bmp'){//code to show images

			TB_PrevCaption = "";
			TB_PrevURL = "";
			TB_PrevHTML = "";
			TB_NextCaption = "";
			TB_NextURL = "";
			TB_NextHTML = "";
			TB_imageCount = "";
			TB_FoundURL = false;
			if(imageGroup){
				TB_TempArray = jQuery("a[rel="+imageGroup+"]").get();
				for (TB_Counter = 0; ((TB_Counter < TB_TempArray.length) && (TB_NextHTML === "")); TB_Counter++) {
					var urlTypeTemp = TB_TempArray[TB_Counter].href.toLowerCase().match(urlString);
						if (!(TB_TempArray[TB_Counter].href == url)) {
							if (TB_FoundURL) {
								TB_NextCaption = TB_TempArray[TB_Counter].title;
								TB_NextURL = TB_TempArray[TB_Counter].href;
								TB_NextHTML = "<span id='TB_next'>&nbsp;&nbsp;<a href='#'>"+thickboxL10n.next+"</a></span>";
							} else {
								TB_PrevCaption = TB_TempArray[TB_Counter].title;
								TB_PrevURL = TB_TempArray[TB_Counter].href;
								TB_PrevHTML = "<span id='TB_prev'>&nbsp;&nbsp;<a href='#'>"+thickboxL10n.prev+"</a></span>";
							}
						} else {
							TB_FoundURL = true;
							TB_imageCount = thickboxL10n.image + ' ' + (TB_Counter + 1) + ' ' + thickboxL10n.of + ' ' + (TB_TempArray.length);
						}
				}
			}

			imgPreloader = new Image();
			imgPreloader.onload = function(){
			imgPreloader.onload = null;

			// Resizing large images - original by Christian Montoya edited by me.
			var pagesize = tb_getPageSize();
			var x = pagesize[0] - 150;
			var y = pagesize[1] - 150;
			var imageWidth = imgPreloader.width;
			var imageHeight = imgPreloader.height;
			if (imageWidth > x) {
				imageHeight = imageHeight * (x / imageWidth);
				imageWidth = x;
				if (imageHeight > y) {
					imageWidth = imageWidth * (y / imageHeight);
					imageHeight = y;
				}
			} else if (imageHeight > y) {
				imageWidth = imageWidth * (y / imageHeight);
				imageHeight = y;
				if (imageWidth > x) {
					imageHeight = imageHeight * (x / imageWidth);
					imageWidth = x;
				}
			}
			// End Resizing

			TB_WIDTH = imageWidth + 30;
			TB_HEIGHT = imageHeight + 60;
			jQuery("#TB_window").append("<a href='' id='TB_ImageOff'><span class='screen-reader-text'>"+thickboxL10n.close+"</span><img id='TB_Image' src='"+url+"' width='"+imageWidth+"' height='"+imageHeight+"' alt='"+caption+"'/></a>" + "<div id='TB_caption'>"+caption+"<div id='TB_secondLine'>" + TB_imageCount + TB_PrevHTML + TB_NextHTML + "</div></div><div id='TB_closeWindow'><button type='button' id='TB_closeWindowButton'><span class='screen-reader-text'>"+thickboxL10n.close+"</span><span class='tb-close-icon'></span></button></div>");

			jQuery("#TB_closeWindowButton").click(tb_remove);

			if (!(TB_PrevHTML === "")) {
				function goPrev(){
					if(jQuery(document).unbind("click",goPrev)){jQuery(document).unbind("click",goPrev);}
					jQuery("#TB_window").remove();
					jQuery("body").append("<div id='TB_window'></div>");
					tb_show(TB_PrevCaption, TB_PrevURL, imageGroup);
					return false;
				}
				jQuery("#TB_prev").click(goPrev);
			}

			if (!(TB_NextHTML === "")) {
				function goNext(){
					jQuery("#TB_window").remove();
					jQuery("body").append("<div id='TB_window'></div>");
					tb_show(TB_NextCaption, TB_NextURL, imageGroup);
					return false;
				}
				jQuery("#TB_next").click(goNext);

			}

			jQuery(document).bind('keydown.thickbox', function(e){
				if ( e.which == 27 ){ // close
					tb_remove();

				} else if ( e.which == 190 ){ // display previous image
					if(!(TB_NextHTML == "")){
						jQuery(document).unbind('thickbox');
						goNext();
					}
				} else if ( e.which == 188 ){ // display next image
					if(!(TB_PrevHTML == "")){
						jQuery(document).unbind('thickbox');
						goPrev();
					}
				}
				return false;
			});

			tb_position();
			jQuery("#TB_load").remove();
			jQuery("#TB_ImageOff").click(tb_remove);
			jQuery("#TB_window").css({'visibility':'visible'}); //for safari using css instead of show
			};

			imgPreloader.src = url;
		}else{//code to show html

			var queryString = url.replace(/^[^\?]+\??/,'');
			var params = tb_parseQuery( queryString );

			TB_WIDTH = (params['width']*1) + 30 || 630; //defaults to 630 if no parameters were added to URL
			TB_HEIGHT = (params['height']*1) + 40 || 440; //defaults to 440 if no parameters were added to URL
			ajaxContentW = TB_WIDTH - 30;
			ajaxContentH = TB_HEIGHT - 45;

			if(url.indexOf('TB_iframe') != -1){// either iframe or ajax window
					urlNoQuery = url.split('TB_');
					jQuery("#TB_iframeContent").remove();
					if(params['modal'] != "true"){//iframe no modal
						jQuery("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><button type='button' id='TB_closeWindowButton'><span class='screen-reader-text'>"+thickboxL10n.close+"</span><span class='tb-close-icon'></span></button></div></div><iframe frameborder='0' hspace='0' allowtransparency='true' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW + 29)+"px;height:"+(ajaxContentH + 17)+"px;' >"+thickboxL10n.noiframes+"</iframe>");
					}else{//iframe modal
					jQuery("#TB_overlay").unbind();
						jQuery("#TB_window").append("<iframe frameborder='0' hspace='0' allowtransparency='true' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW + 29)+"px;height:"+(ajaxContentH + 17)+"px;'>"+thickboxL10n.noiframes+"</iframe>");
					}
			}else{// not an iframe, ajax
					if(jQuery("#TB_window").css("visibility") != "visible"){
						if(params['modal'] != "true"){//ajax no modal
						jQuery("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><button type='button' id='TB_closeWindowButton'><span class='screen-reader-text'>"+thickboxL10n.close+"</span><span class='tb-close-icon'></span></button></div></div><div id='TB_ajaxContent' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px'></div>");
						}else{//ajax modal
						jQuery("#TB_overlay").unbind();
						jQuery("#TB_window").append("<div id='TB_ajaxContent' class='TB_modal' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px;'></div>");
						}
					}else{//this means the window is already up, we are just loading new content via ajax
						jQuery("#TB_ajaxContent")[0].style.width = ajaxContentW +"px";
						jQuery("#TB_ajaxContent")[0].style.height = ajaxContentH +"px";
						jQuery("#TB_ajaxContent")[0].scrollTop = 0;
						jQuery("#TB_ajaxWindowTitle").html(caption);
					}
			}

			jQuery("#TB_closeWindowButton").click(tb_remove);

				if(url.indexOf('TB_inline') != -1){
					jQuery("#TB_ajaxContent").append(jQuery('#' + params['inlineId']).children());
					jQuery("#TB_window").bind('tb_unload', function () {
						jQuery('#' + params['inlineId']).append( jQuery("#TB_ajaxContent").children() ); // move elements back when you're finished
					});
					tb_position();
					jQuery("#TB_load").remove();
					jQuery("#TB_window").css({'visibility':'visible'});
				}else if(url.indexOf('TB_iframe') != -1){
					tb_position();
					jQuery("#TB_load").remove();
					jQuery("#TB_window").css({'visibility':'visible'});
				}else{
					var load_url = url;
					load_url += -1 === url.indexOf('?') ? '?' : '&';
					jQuery("#TB_ajaxContent").load(load_url += "random=" + (new Date().getTime()),function(){//to do a post change this load method
						tb_position();
						jQuery("#TB_load").remove();
						tb_init("#TB_ajaxContent a.thickbox");
						jQuery("#TB_window").css({'visibility':'visible'});
					});
				}

		}

		if(!params['modal']){
			jQuery(document).bind('keydown.thickbox', function(e){
				if ( e.which == 27 ){ // close
					tb_remove();
					return false;
				}
			});
		}

		$closeBtn = jQuery( '#TB_closeWindowButton' );
		/*
		 * If the native Close button icon is visible, move focus on the button
		 * (e.g. in the Network Admin Themes screen).
		 * In other admin screens is hidden and replaced by a different icon.
		 */
		if ( $closeBtn.find( '.tb-close-icon' ).is( ':visible' ) ) {
			$closeBtn.focus();
		}

	} catch(e) {
		//nothing here
	}
}

//helper functions below
function tb_showIframe(){
	jQuery("#TB_load").remove();
	jQuery("#TB_window").css({'visibility':'visible'}).trigger( 'thickbox:iframe:loaded' );
}

function tb_remove() {
 	jQuery("#TB_imageOff").unbind("click");
	jQuery("#TB_closeWindowButton").unbind("click");
	jQuery( '#TB_window' ).fadeOut( 'fast', function() {
		jQuery( '#TB_window, #TB_overlay, #TB_HideSelect' ).trigger( 'tb_unload' ).unbind().remove();
		jQuery( 'body' ).trigger( 'thickbox:removed' );
	});
	jQuery( 'body' ).removeClass( 'modal-open' );
	jQuery("#TB_load").remove();
	if (typeof document.body.style.maxHeight == "undefined") {//if IE 6
		jQuery("body","html").css({height: "auto", width: "auto"});
		jQuery("html").css("overflow","");
	}
	jQuery(document).unbind('.thickbox');
	return false;
}

function tb_position() {
var isIE6 = typeof document.body.style.maxHeight === "undefined";
jQuery("#TB_window").css({marginLeft: '-' + parseInt((TB_WIDTH / 2),10) + 'px', width: TB_WIDTH + 'px'});
	if ( ! isIE6 ) { // take away IE6
		jQuery("#TB_window").css({marginTop: '-' + parseInt((TB_HEIGHT / 2),10) + 'px'});
	}
}

function tb_parseQuery ( query ) {
   var Params = {};
   if ( ! query ) {return Params;}// return empty object
   var Pairs = query.split(/[;&]/);
   for ( var i = 0; i < Pairs.length; i++ ) {
      var KeyVal = Pairs[i].split('=');
      if ( ! KeyVal || KeyVal.length != 2 ) {continue;}
      var key = unescape( KeyVal[0] );
      var val = unescape( KeyVal[1] );
      val = val.replace(/\+/g, ' ');
      Params[key] = val;
   }
   return Params;
}

function tb_getPageSize(){
	var de = document.documentElement;
	var w = window.innerWidth || self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
	var h = window.innerHeight || self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight;
	arrayPageSize = [w,h];
	return arrayPageSize;
}

function tb_detectMacXFF() {
  var userAgent = navigator.userAgent.toLowerCase();
  if (userAgent.indexOf('mac') != -1 && userAgent.indexOf('firefox')!=-1) {
    return true;
  }
}

/*! This file is auto-generated */
!function(s){s(document).ready(function(){s(".accordion-container").on("click keydown",".accordion-section-title",function(e){var n,o,a,i,t;"keydown"===e.type&&13!==e.which||(e.preventDefault(),n=s(this),o=n.closest(".accordion-section"),a=o.find("[aria-expanded]").first(),i=o.closest(".accordion-container"),t=i.find(".open"),e=t.find("[aria-expanded]").first(),n=o.find(".accordion-section-content"),o.hasClass("cannot-expand")||(i.addClass("opening"),o.hasClass("open")?(o.toggleClass("open"),n.toggle(!0).slideToggle(150)):(e.attr("aria-expanded","false"),t.removeClass("open"),t.find(".accordion-section-content").show().slideUp(150),n.toggle(!1).slideToggle(150),o.toggleClass("open")),setTimeout(function(){i.removeClass("opening")},150),a&&a.attr("aria-expanded",String("false"===a.attr("aria-expanded")))))})})}(jQuery);
/*! This file is auto-generated */
window.wp=window.wp||{},wp.sanitize={stripTags:function(t){var e=(t=t||"").replace(/<!--[\s\S]*?(-->|$)/g,"").replace(/<(script|style)[^>]*>[\s\S]*?(<\/\1>|$)/gi,"").replace(/<\/?[a-z][\s\S]*?(>|$)/gi,"");return e!==t?wp.sanitize.stripTags(e):e},stripTagsAndEncodeText:function(t){var e=wp.sanitize.stripTags(t),a=document.createElement("textarea");try{a.textContent=e,e=wp.sanitize.stripTags(a.value)}catch(t){}return e}};
/*! This file is auto-generated */
!function(c,l,m){"use strict";function u(e){return e=e||"",e=l.sanitize.stripTagsAndEncodeText(e),(e=m.trim(e))||c.Menus.data.l10n.unnamed}wpNavMenu.originalInit=wpNavMenu.init,wpNavMenu.options.menuItemDepthPerLevel=20,wpNavMenu.options.sortableItems="> .customize-control-nav_menu_item",wpNavMenu.options.targetTolerance=10,wpNavMenu.init=function(){this.jQueryExtensions()},c.Menus=c.Menus||{},c.Menus.data={itemTypes:[],l10n:{},settingTransport:"refresh",phpIntMax:0,defaultSettingValues:{nav_menu:{},nav_menu_item:{}},locationSlugMappedToName:{}},"undefined"!=typeof _wpCustomizeNavMenusSettings&&m.extend(c.Menus.data,_wpCustomizeNavMenusSettings),c.Menus.generatePlaceholderAutoIncrementId=function(){return-Math.ceil(c.Menus.data.phpIntMax*Math.random())},c.Menus.AvailableItemModel=Backbone.Model.extend(m.extend({id:null},c.Menus.data.defaultSettingValues.nav_menu_item)),c.Menus.AvailableItemCollection=Backbone.Collection.extend({model:c.Menus.AvailableItemModel,sort_key:"order",comparator:function(e){return-e.get(this.sort_key)},sortByField:function(e){this.sort_key=e,this.sort()}}),c.Menus.availableMenuItems=new c.Menus.AvailableItemCollection(c.Menus.data.availableMenuItems),c.Menus.insertAutoDraftPost=function(n){var i=m.Deferred(),e=l.ajax.post("customize-nav-menus-insert-auto-draft",{"customize-menus-nonce":c.settings.nonce["customize-menus"],wp_customize:"on",customize_changeset_uuid:c.settings.changeset.uuid,params:n});return e.done(function(t){t.post_id&&(c("nav_menus_created_posts").set(c("nav_menus_created_posts").get().concat([t.post_id])),"page"===n.post_type&&(c.section.has("static_front_page")&&c.section("static_front_page").activate(),c.control.each(function(e){"dropdown-pages"===e.params.type&&e.container.find('select[name^="_customize-dropdown-pages-"]').append(new Option(n.post_title,t.post_id))})),i.resolve(t))}),e.fail(function(e){var t=e||"";void 0!==e.message&&(t=e.message),console.error(t),i.rejectWith(t)}),i.promise()},c.Menus.AvailableMenuItemsPanelView=l.Backbone.View.extend({el:"#available-menu-items",events:{"input #menu-items-search":"debounceSearch","focus .menu-item-tpl":"focus","click .menu-item-tpl":"_submit","click #custom-menu-item-submit":"_submitLink","keypress #custom-menu-item-name":"_submitLink","click .new-content-item .add-content":"_submitNew","keypress .create-item-input":"_submitNew",keydown:"keyboardAccessible"},selected:null,currentMenuControl:null,debounceSearch:null,$search:null,$clearResults:null,searchTerm:"",rendered:!1,pages:{},sectionContent:"",loading:!1,addingNew:!1,initialize:function(){var n=this;c.panel.has("nav_menus")&&(this.$search=m("#menu-items-search"),this.$clearResults=this.$el.find(".clear-results"),this.sectionContent=this.$el.find(".available-menu-items-list"),this.debounceSearch=_.debounce(n.search,500),_.bindAll(this,"close"),m("#customize-controls, .customize-section-back").on("click keydown",function(e){var t=m(e.target).is(".item-delete, .item-delete *"),e=m(e.target).is(".add-new-menu-item, .add-new-menu-item *");!m("body").hasClass("adding-menu-items")||t||e||n.close()}),this.$clearResults.on("click",function(){n.$search.val("").focus().trigger("input")}),this.$el.on("input","#custom-menu-item-name.invalid, #custom-menu-item-url.invalid",function(){m(this).removeClass("invalid")}),c.panel("nav_menus").container.bind("expanded",function(){n.rendered||(n.initList(),n.rendered=!0)}),this.sectionContent.scroll(function(){var e=n.$el.find(".accordion-section.open .available-menu-items-list").prop("scrollHeight"),t=n.$el.find(".accordion-section.open").height();!n.loading&&m(this).scrollTop()>.75*e-t&&(e=m(this).data("type"),t=m(this).data("object"),"search"===e?n.searchTerm&&n.doSearch(n.pages.search):n.loadItems([{type:e,object:t}]))}),c.previewer.bind("url",this.close),n.delegateEvents())},search:function(e){var t=m("#available-menu-items-search"),n=m("#available-menu-items .accordion-section").not(t);e&&this.searchTerm!==e.target.value&&(""===e.target.value||t.hasClass("open")?""===e.target.value&&(t.removeClass("open"),n.show(),this.$clearResults.removeClass("is-visible")):(n.fadeOut(100),t.find(".accordion-section-content").slideDown("fast"),t.addClass("open"),this.$clearResults.addClass("is-visible")),this.searchTerm=e.target.value,this.pages.search=1,this.doSearch(1))},doSearch:function(t){var e,n=this,i=m("#available-menu-items-search"),a=i.find(".accordion-section-content"),o=l.template("available-menu-item");if(n.currentRequest&&n.currentRequest.abort(),!(t<0)){if(1<t)i.addClass("loading-more"),a.attr("aria-busy","true"),l.a11y.speak(c.Menus.data.l10n.itemsLoadingMore);else if(""===n.searchTerm)return a.html(""),void l.a11y.speak("");i.addClass("loading"),n.loading=!0,e=c.previewer.query({excludeCustomizedSaved:!0}),_.extend(e,{"customize-menus-nonce":c.settings.nonce["customize-menus"],wp_customize:"on",search:n.searchTerm,page:t}),n.currentRequest=l.ajax.post("search-available-menu-items-customizer",e),n.currentRequest.done(function(e){1===t&&a.empty(),i.removeClass("loading loading-more"),a.attr("aria-busy","false"),i.addClass("open"),n.loading=!1,e=new c.Menus.AvailableItemCollection(e.items),n.collection.add(e.models),e.each(function(e){a.append(o(e.attributes))}),e.length<20?n.pages.search=-1:n.pages.search=n.pages.search+1,e&&1<t?l.a11y.speak(c.Menus.data.l10n.itemsFoundMore.replace("%d",e.length)):e&&1===t&&l.a11y.speak(c.Menus.data.l10n.itemsFound.replace("%d",e.length))}),n.currentRequest.fail(function(e){e.message&&(a.empty().append(m('<li class="nothing-found"></li>').text(e.message)),l.a11y.speak(e.message)),n.pages.search=-1}),n.currentRequest.always(function(){i.removeClass("loading loading-more"),a.attr("aria-busy","false"),n.loading=!1,n.currentRequest=null})}},initList:function(){var t=this;_.each(c.Menus.data.itemTypes,function(e){t.pages[e.type+":"+e.object]=0}),t.loadItems(c.Menus.data.itemTypes)},loadItems:function(e,t){var i=this,a=[],o={},s=l.template("available-menu-item"),e=_.isString(e)&&_.isString(t)?[{type:e,object:t}]:e;_.each(e,function(e){var t,n=e.type+":"+e.object;-1!==i.pages[n]&&((t=m("#available-menu-items-"+e.type+"-"+e.object)).find(".accordion-section-title").addClass("loading"),o[n]=t,a.push({object:e.object,type:e.type,page:i.pages[n]}))}),0!==a.length&&(i.loading=!0,e=c.previewer.query({excludeCustomizedSaved:!0}),_.extend(e,{"customize-menus-nonce":c.settings.nonce["customize-menus"],wp_customize:"on",item_types:a}),(e=l.ajax.post("load-available-menu-items-customizer",e)).done(function(e){var n;_.each(e.items,function(e,t){return 0===e.length?(0===i.pages[t]&&o[t].find(".accordion-section-title").addClass("cannot-expand").removeClass("loading").find(".accordion-section-title > button").prop("tabIndex",-1),void(i.pages[t]=-1)):("post_type:page"!==t||o[t].hasClass("open")||o[t].find(".accordion-section-title > button").click(),e=new c.Menus.AvailableItemCollection(e),i.collection.add(e.models),n=o[t].find(".available-menu-items-list"),e.each(function(e){n.append(s(e.attributes))}),void(i.pages[t]+=1))})}),e.fail(function(e){"undefined"!=typeof console&&console.error&&console.error(e)}),e.always(function(){_.each(o,function(e){e.find(".accordion-section-title").removeClass("loading")}),i.loading=!1}))},itemSectionHeight:function(){var e=window.innerHeight,t=this.$el.find(".accordion-section:not( #available-menu-items-search ) .accordion-section-content"),n=this.$el.find('.accordion-section:not( #available-menu-items-search ) .available-menu-items-list:not(":only-child")'),e=e-(46*(1+t.length)+14);120<e&&e<290&&(t.css("max-height",e),n.css("max-height",e-60))},select:function(e){this.selected=m(e),this.selected.siblings(".menu-item-tpl").removeClass("selected"),this.selected.addClass("selected")},focus:function(e){this.select(m(e.currentTarget))},_submit:function(e){"keypress"===e.type&&13!==e.which&&32!==e.which||this.submit(m(e.currentTarget))},submit:function(e){var t;(e=e||this.selected)&&this.currentMenuControl&&(this.select(e),t=m(this.selected).data("menu-item-id"),(t=this.collection.findWhere({id:t}))&&(this.currentMenuControl.addItemToMenu(t.attributes),m(e).find(".menu-item-handle").addClass("item-added")))},_submitLink:function(e){"keypress"===e.type&&13!==e.which||this.submitLink()},submitLink:function(){var e,t=m("#custom-menu-item-name"),n=m("#custom-menu-item-url"),i=n.val().trim();this.currentMenuControl&&(e=/^((\w+:)?\/\/\w.*|\w+:(?!\/\/$)|\/|\?|#)/,""!==t.val()?e.test(i)?(i={title:t.val(),url:i,type:"custom",type_label:c.Menus.data.l10n.custom_label,object:"custom"},this.currentMenuControl.addItemToMenu(i),n.val("").attr("placeholder","https://"),t.val("")):n.addClass("invalid"):t.addClass("invalid"))},_submitNew:function(e){"keypress"===e.type&&13!==e.which||this.addingNew||(e=m(e.target).closest(".accordion-section"),this.submitNew(e))},submitNew:function(n){var i=this,a=n.find(".create-item-input"),e=a.val(),t=n.find(".available-menu-items-list"),o=t.data("type"),s=t.data("object"),r=t.data("type_label");if(this.currentMenuControl&&"post_type"===o){if(""===m.trim(a.val()))return a.addClass("invalid"),void a.focus();a.removeClass("invalid"),n.find(".accordion-section-title").addClass("loading"),i.addingNew=!0,a.attr("disabled","disabled"),c.Menus.insertAutoDraftPost({post_title:e,post_type:s}).done(function(e){var t=new c.Menus.AvailableItemModel({id:"post-"+e.post_id,title:a.val(),type:o,type_label:r,object:s,object_id:e.post_id,url:e.url});i.currentMenuControl.addItemToMenu(t.attributes),c.Menus.availableMenuItemsPanel.collection.add(t),e=n.find(".available-menu-items-list"),(t=m(l.template("available-menu-item")(t.attributes))).find(".menu-item-handle:first").addClass("item-added"),e.prepend(t),e.scrollTop(),a.val("").removeAttr("disabled"),i.addingNew=!1,n.find(".accordion-section-title").removeClass("loading")})}},open:function(e){var t,n=this;this.currentMenuControl=e,this.itemSectionHeight(),c.section.has("publish_settings")&&c.section("publish_settings").collapse(),m("body").addClass("adding-menu-items"),t=function(){n.close(),m(this).off("click",t)},m("#customize-preview").on("click",t),_(this.currentMenuControl.getMenuItemControls()).each(function(e){e.collapseForm()}),this.$el.find(".selected").removeClass("selected"),this.$search.focus()},close:function(e){(e=e||{}).returnFocus&&this.currentMenuControl&&this.currentMenuControl.container.find(".add-new-menu-item").focus(),this.currentMenuControl=null,this.selected=null,m("body").removeClass("adding-menu-items"),m("#available-menu-items .menu-item-handle.item-added").removeClass("item-added"),this.$search.val("").trigger("input")},keyboardAccessible:function(e){var t=13===e.which,n=27===e.which,i=9===e.which&&e.shiftKey,a=m(e.target).is(this.$search);t&&!this.$search.val()||(a&&i?(this.currentMenuControl.container.find(".add-new-menu-item").focus(),e.preventDefault()):n&&this.close({returnFocus:!0}))}}),c.Menus.MenusPanel=c.Panel.extend({attachEvents:function(){c.Panel.prototype.attachEvents.call(this);var t=this.container.find(".panel-meta"),n=t.find(".customize-help-toggle"),i=t.find(".customize-panel-description"),a=m("#screen-options-wrap"),o=t.find(".customize-screen-options-toggle");o.on("click keydown",function(e){if(!c.utils.isKeydownButNotEnterEvent(e))return e.preventDefault(),i.not(":hidden")&&(i.slideUp("fast"),n.attr("aria-expanded","false")),"true"===o.attr("aria-expanded")?(o.attr("aria-expanded","false"),t.removeClass("open"),t.removeClass("active-menu-screen-options"),a.slideUp("fast")):(o.attr("aria-expanded","true"),t.addClass("open"),t.addClass("active-menu-screen-options"),a.slideDown("fast")),!1}),n.on("click keydown",function(e){c.utils.isKeydownButNotEnterEvent(e)||(e.preventDefault(),"true"===o.attr("aria-expanded")&&(o.attr("aria-expanded","false"),n.attr("aria-expanded","true"),t.addClass("open"),t.removeClass("active-menu-screen-options"),a.slideUp("fast"),i.slideDown("fast")))})},ready:function(){var e=this;e.container.find(".hide-column-tog").click(function(){e.saveManageColumnsState()}),c.section("menu_locations",function(e){e.headContainer.prepend(l.template("nav-menu-locations-header")(c.Menus.data))})},saveManageColumnsState:_.debounce(function(){var e=this;e._updateHiddenColumnsRequest&&e._updateHiddenColumnsRequest.abort(),e._updateHiddenColumnsRequest=l.ajax.post("hidden-columns",{hidden:e.hidden(),screenoptionnonce:m("#screenoptionnonce").val(),page:"nav-menus"}),e._updateHiddenColumnsRequest.always(function(){e._updateHiddenColumnsRequest=null})},2e3),checked:function(){},unchecked:function(){},hidden:function(){return m(".hide-column-tog").not(":checked").map(function(){var e=this.id;return e.substring(0,e.length-5)}).get().join(",")}}),c.Menus.MenuSection=c.Section.extend({initialize:function(e,t){c.Section.prototype.initialize.call(this,e,t),this.deferred.initSortables=m.Deferred()},ready:function(){var e,t,n=this;if(void 0===n.params.menu_id)throw new Error("params.menu_id was not defined");n.active.validate=function(){return!!c.has(n.id)&&!!c(n.id).get()},n.populateControls(),n.navMenuLocationSettings={},n.assignedLocations=new c.Value([]),c.each(function(e,t){t=t.match(/^nav_menu_locations\[(.+?)]/);t&&(n.navMenuLocationSettings[t[1]]=e).bind(function(){n.refreshAssignedLocations()})}),n.assignedLocations.bind(function(e){n.updateAssignedLocationsInSectionTitle(e)}),n.refreshAssignedLocations(),c.bind("pane-contents-reflowed",function(){n.contentContainer.parent().length&&(n.container.find(".menu-item .menu-item-reorder-nav button").attr({tabindex:"0","aria-hidden":"false"}),n.container.find(".menu-item.move-up-disabled .menus-move-up").attr({tabindex:"-1","aria-hidden":"true"}),n.container.find(".menu-item.move-down-disabled .menus-move-down").attr({tabindex:"-1","aria-hidden":"true"}),n.container.find(".menu-item.move-left-disabled .menus-move-left").attr({tabindex:"-1","aria-hidden":"true"}),n.container.find(".menu-item.move-right-disabled .menus-move-right").attr({tabindex:"-1","aria-hidden":"true"}))}),t=function(){var e="field-"+m(this).val()+"-active";n.contentContainer.toggleClass(e,m(this).prop("checked"))},(e=c.panel("nav_menus").contentContainer.find(".metabox-prefs:first").find(".hide-column-tog")).each(t),e.on("click",t)},populateControls:function(){var e,t,n=this,i=n.id+"[name]",a=c.control(i);a||(a=new c.controlConstructor.nav_menu_name(i,{type:"nav_menu_name",label:c.Menus.data.l10n.menuNameLabel,section:n.id,priority:0,settings:{default:n.id}}),c.control.add(a),a.active.set(!0)),(e=c.control(n.id))||(e=new c.controlConstructor.nav_menu(n.id,{type:"nav_menu",section:n.id,priority:998,settings:{default:n.id},menu_id:n.params.menu_id}),c.control.add(e),e.active.set(!0)),i=n.id+"[locations]",(a=c.control(i))||(a=new c.controlConstructor.nav_menu_locations(i,{section:n.id,priority:999,settings:{default:n.id},menu_id:n.params.menu_id}),c.control.add(a.id,a),e.active.set(!0)),a=n.id+"[auto_add]",(e=c.control(a))||(e=new c.controlConstructor.nav_menu_auto_add(a,{type:"nav_menu_auto_add",label:"",section:n.id,priority:1e3,settings:{default:n.id}}),c.control.add(e),e.active.set(!0)),e=n.id+"[delete]",(t=c.control(e))||(t=new c.Control(e,{section:n.id,priority:1001,templateId:"nav-menu-delete-button"}),c.control.add(t.id,t),t.active.set(!0),t.deferred.embedded.done(function(){t.container.find("button").on("click",function(){var e=n.params.menu_id;c.Menus.getMenuControl(e).setting.set(!1)})}))},refreshAssignedLocations:function(){var n=this.params.menu_id,i=[];_.each(this.navMenuLocationSettings,function(e,t){e()===n&&i.push(t)}),this.assignedLocations.set(i)},updateAssignedLocationsInSectionTitle:function(e){var n=this.container.find(".accordion-section-title:first");n.find(".menu-in-location").remove(),_.each(e,function(e){var t=m('<span class="menu-in-location"></span>'),e=c.Menus.data.locationSlugMappedToName[e];t.text(c.Menus.data.l10n.menuLocation.replace("%s",e)),n.append(t)}),this.container.toggleClass("assigned-to-menu-location",0!==e.length)},onChangeExpanded:function(e,t){var n,i=this;e&&(wpNavMenu.menuList=i.contentContainer,wpNavMenu.targetList=wpNavMenu.menuList,m("#menu-to-edit").removeAttr("id"),wpNavMenu.menuList.attr("id","menu-to-edit").addClass("menu"),_.each(c.section(i.id).controls(),function(e){"nav_menu_item"===e.params.type&&e.actuallyEmbed()}),t.completeCallback&&(n=t.completeCallback),t.completeCallback=function(){"resolved"!==i.deferred.initSortables.state()&&(wpNavMenu.initSortables(),i.deferred.initSortables.resolve(wpNavMenu.menuList),c.control("nav_menu["+String(i.params.menu_id)+"]").reflowMenuItems()),_.isFunction(n)&&n()}),c.Section.prototype.onChangeExpanded.call(i,e,t)},highlightNewItemButton:function(){c.utils.highlightButton(this.contentContainer.find(".add-new-menu-item"),{delay:2e3})}}),c.Menus.createNavMenu=function(e){var t=c.Menus.generatePlaceholderAutoIncrementId(),n="nav_menu["+String(t)+"]";return c.create(n,n,{},{type:"nav_menu",transport:c.Menus.data.settingTransport,previewer:c.previewer}).set(m.extend({},c.Menus.data.defaultSettingValues.nav_menu,{name:e||""})),c.section.add(new c.Menus.MenuSection(n,{panel:"nav_menus",title:u(e),customizeAction:c.Menus.data.l10n.customizingMenus,priority:10,menu_id:t}))},c.Menus.NewMenuSection=c.Section.extend({attachEvents:function(){var t=this,e=t.container,n=t.contentContainer,i=/^nav_menu\[/;function a(){var t;e.find(".add-new-menu-notice").prop("hidden",(t=0,c.each(function(e){i.test(e.id)&&!1!==e.get()&&(t+=1)}),0<t))}function o(e){i.test(e.id)&&(e.bind(a),a())}t.headContainer.find(".accordion-section-title").replaceWith(l.template("nav-menu-create-menu-section-title")),e.on("click",".customize-add-menu-button",function(){t.expand()}),n.on("keydown",".menu-name-field",function(e){13===e.which&&t.submit()}),n.on("click","#customize-new-menu-submit",function(e){t.submit(),e.stopPropagation(),e.preventDefault()}),c.each(o),c.bind("add",o),c.bind("removed",function(e){i.test(e.id)&&(e.unbind(a),a())}),a(),c.Section.prototype.attachEvents.apply(t,arguments)},ready:function(){this.populateControls()},populateControls:function(){var e=this,t=e.id+"[name]",n=c.control(t);n||(n=new c.controlConstructor.nav_menu_name(t,{label:c.Menus.data.l10n.menuNameLabel,description:c.Menus.data.l10n.newMenuNameDescription,section:e.id,priority:0}),c.control.add(n.id,n),n.active.set(!0)),t=e.id+"[locations]",(n=c.control(t))||(n=new c.controlConstructor.nav_menu_locations(t,{section:e.id,priority:1,menu_id:"",isCreating:!0}),c.control.add(t,n),n.active.set(!0)),t=e.id+"[submit]",(n=c.control(t))||(n=new c.Control(t,{section:e.id,priority:1,templateId:"nav-menu-submit-new-button"}),c.control.add(t,n),n.active.set(!0))},submit:function(){var t,e=this.contentContainer,n=e.find(".menu-name-field").first(),i=n.val();if(!i)return n.addClass("invalid"),void n.focus();t=c.Menus.createNavMenu(i),n.val(""),n.removeClass("invalid"),e.find(".assigned-menu-location input[type=checkbox]").each(function(){var e=m(this);e.prop("checked")&&(c("nav_menu_locations["+e.data("location-id")+"]").set(t.params.menu_id),e.prop("checked",!1))}),l.a11y.speak(c.Menus.data.l10n.menuAdded),t.focus({completeCallback:function(){t.highlightNewItemButton()}})},selectDefaultLocation:function(e){var t=c.control(this.id+"[locations]"),n={};null!==e&&(n[e]=!0),t.setSelections(n)}}),c.Menus.MenuLocationControl=c.Control.extend({initialize:function(e,t){var n=e.match(/^nav_menu_locations\[(.+?)]/);this.themeLocation=n[1],c.Control.prototype.initialize.call(this,e,t)},ready:function(){var n=this,i=/^nav_menu\[(-?\d+)]/;n.setting.validate=function(e){return""===e?0:parseInt(e,10)},n.container.find(".create-menu").on("click",function(){var e=c.section("add_menu");e.selectDefaultLocation(this.dataset.locationId),e.focus()}),n.container.find(".edit-menu").on("click",function(){var e=n.setting();c.section("nav_menu["+e+"]").focus()}),n.setting.bind("change",function(){var e=0!==n.setting();n.container.find(".create-menu").toggleClass("hidden",e),n.container.find(".edit-menu").toggleClass("hidden",!e)}),c.bind("add",function(e){var t=e.id.match(i);t&&!1!==e()&&(t=t[1],t=new Option(u(e().name),t),n.container.find("select").append(t))}),c.bind("remove",function(e){var e=e.id.match(i);e&&(e=parseInt(e[1],10),n.setting()===e&&n.setting.set(""),n.container.find("option[value="+e+"]").remove())}),c.bind("change",function(e){var t=e.id.match(i);t&&(t=parseInt(t[1],10),!1===e()?(n.setting()===t&&n.setting.set(""),n.container.find("option[value="+t+"]").remove()):n.container.find("option[value="+t+"]").text(u(e().name)))})}}),c.Menus.MenuItemControl=c.Control.extend({initialize:function(e,t){var n=this;n.expanded=new c.Value(!1),n.expandedArgumentsQueue=[],n.expanded.bind(function(e){var t=n.expandedArgumentsQueue.shift(),t=m.extend({},n.defaultExpandedArguments,t);n.onChangeExpanded(e,t)}),c.Control.prototype.initialize.call(n,e,t),n.active.validate=function(){var e=c.section(n.section()),e=!!e&&e.active();return e}},embed:function(){var e=this.section();e&&((e=c.section(e))&&e.expanded()||c.settings.autofocus.control===this.id)&&this.actuallyEmbed()},actuallyEmbed:function(){"resolved"!==this.deferred.embedded.state()&&(this.renderContent(),this.deferred.embedded.resolve())},ready:function(){if(void 0===this.params.menu_item_id)throw new Error("params.menu_item_id was not defined");this._setupControlToggle(),this._setupReorderUI(),this._setupUpdateUI(),this._setupRemoveUI(),this._setupLinksUI(),this._setupTitleUI()},_setupControlToggle:function(){var i=this;this.container.find(".menu-item-handle").on("click",function(e){e.preventDefault(),e.stopPropagation();var t=i.getMenuControl(),n=m(e.target).is(".item-delete, .item-delete *"),e=m(e.target).is(".add-new-menu-item, .add-new-menu-item *");!m("body").hasClass("adding-menu-items")||n||e||c.Menus.availableMenuItemsPanel.close(),t.isReordering||t.isSorting||i.toggleForm()})},_setupReorderUI:function(){var o=this,e=l.template("menu-item-reorder-nav");o.container.find(".item-controls").after(e),o.container.find(".menu-item-reorder-nav").find(".menus-move-up, .menus-move-down, .menus-move-left, .menus-move-right").on("click",function(){var e=m(this);e.focus();var t=e.is(".menus-move-up"),n=e.is(".menus-move-down"),i=e.is(".menus-move-left"),a=e.is(".menus-move-right");t?o.moveUp():n?o.moveDown():i?o.moveLeft():a&&o.moveRight(),e.focus()})},_setupUpdateUI:function(){var e,s=this,t=s.setting();s.elements={},s.elements.url=new c.Element(s.container.find(".edit-menu-item-url")),s.elements.title=new c.Element(s.container.find(".edit-menu-item-title")),s.elements.attr_title=new c.Element(s.container.find(".edit-menu-item-attr-title")),s.elements.target=new c.Element(s.container.find(".edit-menu-item-target")),s.elements.classes=new c.Element(s.container.find(".edit-menu-item-classes")),s.elements.xfn=new c.Element(s.container.find(".edit-menu-item-xfn")),s.elements.description=new c.Element(s.container.find(".edit-menu-item-description")),_.each(s.elements,function(n,i){n.bind(function(e){n.element.is("input[type=checkbox]")&&(e=e?n.element.val():"");var t=s.setting();t&&t[i]!==e&&((t=_.clone(t))[i]=e,s.setting.set(t))}),t&&("classes"!==i&&"xfn"!==i||!_.isArray(t[i])?n.set(t[i]):n.set(t[i].join(" ")))}),s.setting.bind(function(n,i){var e,t=s.params.menu_item_id,a=[],o=[];!1===n?(e=c.control("nav_menu["+String(i.nav_menu_term_id)+"]"),s.container.remove(),_.each(e.getMenuItemControls(),function(e){i.menu_item_parent===e.setting().menu_item_parent&&e.setting().position>i.position?a.push(e):e.setting().menu_item_parent===t&&o.push(e)}),_.each(a,function(e){var t=_.clone(e.setting());t.position+=o.length,e.setting.set(t)}),_.each(o,function(e,t){var n=_.clone(e.setting());n.position=i.position+t,n.menu_item_parent=i.menu_item_parent,e.setting.set(n)}),e.debouncedReflowMenuItems()):(_.each(n,function(e,t){s.elements[t]&&s.elements[t].set(n[t])}),s.container.find(".menu-item-data-parent-id").val(n.menu_item_parent),n.position===i.position&&n.menu_item_parent===i.menu_item_parent||s.getMenuControl().debouncedReflowMenuItems())}),e=function(){s.elements.url.element.toggleClass("invalid",s.setting.notifications.has("invalid_url"))},s.setting.notifications.bind("add",e),s.setting.notifications.bind("removed",e)},_setupRemoveUI:function(){var r=this;r.container.find(".item-delete").on("click",function(){var e,t,n,i=!0,a=0,o=r.params.original_item_id,s=r.getMenuControl().$sectionContent.find(".menu-item");m("body").hasClass("adding-menu-items")||(i=!1),t=r.container.nextAll(".customize-control-nav_menu_item:visible").first(),n=r.container.prevAll(".customize-control-nav_menu_item:visible").first(),e=(t.length?t.find(!1===i?".item-edit":".item-delete"):n.length?n.find(!1===i?".item-edit":".item-delete"):r.container.nextAll(".customize-control-nav_menu").find(".add-new-menu-item")).first(),_.each(s,function(e){var t;m(e).is(":visible")&&(t=e.getAttribute("id").match(/^customize-control-nav_menu_item-(-?\d+)$/,""))&&(t=parseInt(t[1],10),(t=c.control("nav_menu_item["+String(t)+"]"))&&o==t.params.original_item_id&&a++)}),a<=1&&((s=m("#menu-item-tpl-"+r.params.original_item_id)).removeClass("selected"),s.find(".menu-item-handle").removeClass("item-added")),r.container.slideUp(function(){r.setting.set(!1),l.a11y.speak(c.Menus.data.l10n.itemDeleted),e.focus()}),r.setting.set(!1)})},_setupLinksUI:function(){this.container.find("a.original-link").on("click",function(e){e.preventDefault(),c.previewer.previewUrl(e.target.toString())})},_setupTitleUI:function(){var i;this.container.find(".edit-menu-item-title").on("blur",function(){m(this).val(m.trim(m(this).val()))}),i=this.container.find(".menu-item-title"),this.setting.bind(function(e){var t,n;e&&(n=(t=m.trim(e.title))||e.original_title||c.Menus.data.l10n.untitled,e._invalid&&(n=c.Menus.data.l10n.invalidTitleTpl.replace("%s",n)),t||e.original_title?i.text(n).removeClass("no-title"):i.text(n).addClass("no-title"))})},getDepth:function(){var e=this,t=e.setting(),n=0;if(!t)return 0;for(;t&&t.menu_item_parent&&(n+=1,e=c.control("nav_menu_item["+t.menu_item_parent+"]"));)t=e.setting();return n},renderContent:function(){var e,t=this,n=t.setting();t.params.title=n.title||"",t.params.depth=t.getDepth(),t.container.data("item-depth",t.params.depth),e=["menu-item","menu-item-depth-"+String(t.params.depth),"menu-item-"+n.object,"menu-item-edit-inactive"],n._invalid?(e.push("menu-item-invalid"),t.params.title=c.Menus.data.l10n.invalidTitleTpl.replace("%s",t.params.title)):"draft"===n.status&&(e.push("pending"),t.params.title=c.Menus.data.pendingTitleTpl.replace("%s",t.params.title)),t.params.el_classes=e.join(" "),t.params.item_type_label=n.type_label,t.params.item_type=n.type,t.params.url=n.url,t.params.target=n.target,t.params.attr_title=n.attr_title,t.params.classes=_.isArray(n.classes)?n.classes.join(" "):n.classes,t.params.xfn=n.xfn,t.params.description=n.description,t.params.parent=n.menu_item_parent,t.params.original_title=n.original_title||"",t.container.addClass(t.params.el_classes),c.Control.prototype.renderContent.call(t)},getMenuControl:function(){var e=this.setting();return e&&e.nav_menu_term_id?c.control("nav_menu["+e.nav_menu_term_id+"]"):null},expandControlSection:function(){var e=this.container.closest(".accordion-section");e.hasClass("open")||e.find(".accordion-section-title:first").trigger("click")},_toggleExpanded:c.Section.prototype._toggleExpanded,expand:c.Section.prototype.expand,expandForm:function(e){this.expand(e)},collapse:c.Section.prototype.collapse,collapseForm:function(e){this.collapse(e)},toggleForm:function(e,t){(e=void 0===e?!this.expanded():e)?this.expand(t):this.collapse(t)},onChangeExpanded:function(e,t){var n,i=this,a=this.container,o=a.find(".menu-item-settings:first");void 0===e&&(e=!o.is(":visible")),o.is(":visible")!==e?e?(c.control.each(function(e){i.params.type===e.params.type&&i!==e&&e.collapseForm()}),n=function(){a.removeClass("menu-item-edit-inactive").addClass("menu-item-edit-active"),i.container.trigger("expanded"),t&&t.completeCallback&&t.completeCallback()},a.find(".item-edit").attr("aria-expanded","true"),o.slideDown("fast",n),i.container.trigger("expand")):(n=function(){a.addClass("menu-item-edit-inactive").removeClass("menu-item-edit-active"),i.container.trigger("collapsed"),t&&t.completeCallback&&t.completeCallback()},i.container.trigger("collapse"),a.find(".item-edit").attr("aria-expanded","false"),o.slideUp("fast",n)):t&&t.completeCallback&&t.completeCallback()},focus:function(e){var t=this,n=(e=e||{}).completeCallback,i=function(){t.expandControlSection(),e.completeCallback=function(){t.container.find(".menu-item-settings").find("input, select, textarea, button, object, a[href], [tabindex]").filter(":visible").first().focus(),n&&n()},t.expandForm(e)};c.section.has(t.section())?c.section(t.section()).expand({completeCallback:i}):i()},moveUp:function(){this._changePosition(-1),l.a11y.speak(c.Menus.data.l10n.movedUp)},moveDown:function(){this._changePosition(1),l.a11y.speak(c.Menus.data.l10n.movedDown)},moveLeft:function(){this._changeDepth(-1),l.a11y.speak(c.Menus.data.l10n.movedLeft)},moveRight:function(){this._changeDepth(1),l.a11y.speak(c.Menus.data.l10n.movedRight)},_changePosition:function(e){var t,n=this,i=_.clone(n.setting()),a=[];if(1!==e&&-1!==e)throw new Error("Offset changes by 1 are only supported.");if(n.setting()){if(_(n.getMenuControl().getMenuItemControls()).each(function(e){e.setting().menu_item_parent===i.menu_item_parent&&a.push(e.setting)}),a.sort(function(e,t){return e().position-t().position}),-1===(t=_.indexOf(a,n.setting)))throw new Error("Expected setting to be among siblings.");0===t&&e<0||t===a.length-1&&0<e||((t=a[t+e])&&t.set(m.extend(_.clone(t()),{position:i.position})),i.position+=e,n.setting.set(i))}},_changeDepth:function(e){if(1!==e&&-1!==e)throw new Error("Offset changes by 1 are only supported.");var t,n,i=this,a=_.clone(i.setting()),o=[];if(_(i.getMenuControl().getMenuItemControls()).each(function(e){e.setting().menu_item_parent===a.menu_item_parent&&o.push(e)}),o.sort(function(e,t){return e.setting().position-t.setting().position}),-1===(t=_.indexOf(o,i)))throw new Error("Expected control to be among siblings.");-1===e?a.menu_item_parent&&(n=c.control("nav_menu_item["+a.menu_item_parent+"]"),_(o).chain().slice(t).each(function(e,t){e.setting.set(m.extend({},e.setting(),{menu_item_parent:i.params.menu_item_id,position:t}))}),_(i.getMenuControl().getMenuItemControls()).each(function(e){var t;e.setting().menu_item_parent===n.setting().menu_item_parent&&e.setting().position>n.setting().position&&(t=_.clone(e.setting()),e.setting.set(m.extend(t,{position:t.position+1})))}),a.position=n.setting().position+1,a.menu_item_parent=n.setting().menu_item_parent,i.setting.set(a)):1===e&&0!==t&&(t=o[t-1],a.menu_item_parent=t.params.menu_item_id,a.position=0,_(i.getMenuControl().getMenuItemControls()).each(function(e){e.setting().menu_item_parent===a.menu_item_parent&&(a.position=Math.max(a.position,e.setting().position))}),a.position+=1,i.setting.set(a))}}),c.Menus.MenuNameControl=c.Control.extend({ready:function(){var e,n=this;n.setting&&(e=n.setting(),n.nameElement=new c.Element(n.container.find(".menu-name-field")),n.nameElement.bind(function(e){var t=n.setting();t&&t.name!==e&&((t=_.clone(t)).name=e,n.setting.set(t))}),e&&n.nameElement.set(e.name),n.setting.bind(function(e){e&&n.nameElement.set(e.name)}))}}),c.Menus.MenuLocationsControl=c.Control.extend({ready:function(){var d=this;d.container.find(".assigned-menu-location").each(function(){function t(e){var t=c("nav_menu["+String(e)+"]");e&&t&&t()?n.find(".theme-location-set").show().find("span").text(u(t().name)):n.find(".theme-location-set").hide()}var n=m(this),e=n.find("input[type=checkbox]"),i=new c.Element(e),a=c("nav_menu_locations["+e.data("location-id")+"]"),o=""===d.params.menu_id,s=o?_.noop:function(e){i.set(e)},r=o?_.noop:function(e){a.set(e?d.params.menu_id:0)};s(a.get()===d.params.menu_id),e.on("change",function(){r(this.checked)}),a.bind(function(e){s(e===d.params.menu_id),t(e)}),t(a.get())})},setSelections:function(i){this.container.find(".menu-location").each(function(e,t){var n=t.dataset.locationId;t.checked=n in i&&i[n]})}}),c.Menus.MenuAutoAddControl=c.Control.extend({ready:function(){var n=this,e=n.setting();n.active.validate=function(){var e=c.section(n.section()),e=!!e&&e.active();return e},n.autoAddElement=new c.Element(n.container.find("input[type=checkbox].auto_add")),n.autoAddElement.bind(function(e){var t=n.setting();t&&t.name!==e&&((t=_.clone(t)).auto_add=e,n.setting.set(t))}),e&&n.autoAddElement.set(e.auto_add),n.setting.bind(function(e){e&&n.autoAddElement.set(e.auto_add)})}}),c.Menus.MenuControl=c.Control.extend({ready:function(){var t,n,i=this,a=c.section(i.section()),o=i.params.menu_id,e=i.setting();if(void 0===this.params.menu_id)throw new Error("params.menu_id was not defined");i.active.validate=function(){var e=!!a&&a.active();return e},i.$controlSection=a.headContainer,i.$sectionContent=i.container.closest(".accordion-section-content"),this._setupModel(),c.section(i.section(),function(e){e.deferred.initSortables.done(function(e){i._setupSortable(e)})}),this._setupAddition(),this._setupTitle(),e&&(t=u(e.name),c.control.each(function(e){e.extended(c.controlConstructor.widget_form)&&"nav_menu"===e.params.widget_id_base&&(e.container.find(".nav-menu-widget-form-controls:first").show(),e.container.find(".nav-menu-widget-no-menus-message:first").hide(),0===(n=e.container.find("select")).find("option[value="+String(o)+"]").length&&n.append(new Option(t,o)))}),(e=m("#available-widgets-list .widget-tpl:has( input.id_base[ value=nav_menu ] )")).find(".nav-menu-widget-form-controls:first").show(),e.find(".nav-menu-widget-no-menus-message:first").hide(),0===(n=e.find(".widget-inside select:first")).find("option[value="+String(o)+"]").length&&n.append(new Option(t,o))),_.defer(function(){i.updateInvitationVisibility()})},_setupModel:function(){var n=this,i=n.params.menu_id;n.setting.bind(function(e){var t;!1===e?n._handleDeletion():(t=u(e.name),c.control.each(function(e){e.extended(c.controlConstructor.widget_form)&&"nav_menu"===e.params.widget_id_base&&e.container.find("select").find("option[value="+String(i)+"]").text(t)}))})},_setupSortable:function(e){var a=this;if(!e.is(a.$sectionContent))throw new Error("Unexpected menuList.");e.on("sortstart",function(){a.isSorting=!0}),e.on("sortstop",function(){setTimeout(function(){var e=a.$sectionContent.sortable("toArray"),t=[],n=0,i=10;a.isSorting=!1,a.$sectionContent.scrollLeft(0),_.each(e,function(e){var e=e.match(/^customize-control-nav_menu_item-(-?\d+)$/,"");e&&(e=parseInt(e[1],10),(e=c.control("nav_menu_item["+String(e)+"]"))&&t.push(e))}),_.each(t,function(e){var t;!1!==e.setting()&&(t=_.clone(e.setting()),n+=1,i+=1,t.position=n,e.priority(i),t.menu_item_parent=parseInt(e.container.find(".menu-item-data-parent-id").val(),10),t.menu_item_parent||(t.menu_item_parent=0),e.setting.set(t))})})}),a.isReordering=!1,this.container.find(".reorder-toggle").on("click",function(){a.toggleReordering(!a.isReordering)})},_setupAddition:function(){var t=this;this.container.find(".add-new-menu-item").on("click",function(e){t.$sectionContent.hasClass("reordering")||(m("body").hasClass("adding-menu-items")?(m(this).attr("aria-expanded","false"),c.Menus.availableMenuItemsPanel.close(),e.stopPropagation()):(m(this).attr("aria-expanded","true"),c.Menus.availableMenuItemsPanel.open(t)))})},_handleDeletion:function(){var e,n=this.params.menu_id,i=0,t=c.section(this.section()),a=function(){t.container.remove(),c.section.remove(t.id)};t&&t.expanded()?t.collapse({completeCallback:function(){a(),l.a11y.speak(c.Menus.data.l10n.menuDeleted),c.panel("nav_menus").focus()}}):a(),c.each(function(e){/^nav_menu\[/.test(e.id)&&!1!==e()&&(i+=1)}),c.control.each(function(e){var t;e.extended(c.controlConstructor.widget_form)&&"nav_menu"===e.params.widget_id_base&&((t=e.container.find("select")).val()===String(n)&&t.prop("selectedIndex",0).trigger("change"),e.container.find(".nav-menu-widget-form-controls:first").toggle(0!==i),e.container.find(".nav-menu-widget-no-menus-message:first").toggle(0===i),e.container.find("option[value="+String(n)+"]").remove())}),(e=m("#available-widgets-list .widget-tpl:has( input.id_base[ value=nav_menu ] )")).find(".nav-menu-widget-form-controls:first").toggle(0!==i),e.find(".nav-menu-widget-no-menus-message:first").toggle(0===i),e.find("option[value="+String(n)+"]").remove()},_setupTitle:function(){var d=this;d.setting.bind(function(e){var t,n,i,a,o,s,r;e&&(t=c.section(d.section()),n=d.params.menu_id,i=t.headContainer.find(".accordion-section-title"),a=t.contentContainer.find(".customize-section-title h3"),o=t.headContainer.find(".menu-in-location"),s=a.find(".customize-action"),r=u(e.name),i.text(r),o.length&&o.appendTo(i),a.text(r),s.length&&s.prependTo(a),c.control.each(function(e){/^nav_menu_locations\[/.test(e.id)&&e.container.find("option[value="+n+"]").text(r)}),t.contentContainer.find(".customize-control-checkbox input").each(function(){m(this).prop("checked")&&m(".current-menu-location-name-"+m(this).data("location-id")).text(r)}))})},toggleReordering:function(e){var t=this.container.find(".add-new-menu-item"),n=this.container.find(".reorder-toggle"),i=this.$sectionContent.find(".item-title");(e=Boolean(e))!==this.$sectionContent.hasClass("reordering")&&(this.isReordering=e,this.$sectionContent.toggleClass("reordering",e),this.$sectionContent.sortable(this.isReordering?"disable":"enable"),this.isReordering?(t.attr({tabindex:"-1","aria-hidden":"true"}),n.attr("aria-label",c.Menus.data.l10n.reorderLabelOff),l.a11y.speak(c.Menus.data.l10n.reorderModeOn),i.attr("aria-hidden","false")):(t.removeAttr("tabindex aria-hidden"),n.attr("aria-label",c.Menus.data.l10n.reorderLabelOn),l.a11y.speak(c.Menus.data.l10n.reorderModeOff),i.attr("aria-hidden","true")),e&&_(this.getMenuItemControls()).each(function(e){e.collapseForm()}))},getMenuItemControls:function(){var t=[],n=this.params.menu_id;return c.control.each(function(e){"nav_menu_item"===e.params.type&&e.setting()&&n===e.setting().nav_menu_term_id&&t.push(e)}),t},reflowMenuItems:function(){var e=this.getMenuItemControls(),a=function(n){var t=[],i=n.currentParent;_.each(n.menuItemControls,function(e){i===e.setting().menu_item_parent&&t.push(e)}),t.sort(function(e,t){return e.setting().position-t.setting().position}),_.each(t,function(t){n.currentAbsolutePosition+=1,t.priority.set(n.currentAbsolutePosition),t.container.hasClass("menu-item-depth-"+String(n.currentDepth))||(_.each(t.container.prop("className").match(/menu-item-depth-\d+/g),function(e){t.container.removeClass(e)}),t.container.addClass("menu-item-depth-"+String(n.currentDepth))),t.container.data("item-depth",n.currentDepth),n.currentDepth+=1,n.currentParent=t.params.menu_item_id,a(n),--n.currentDepth,n.currentParent=i}),t.length&&(_(t).each(function(e){e.container.removeClass("move-up-disabled move-down-disabled move-left-disabled move-right-disabled"),0===n.currentDepth?e.container.addClass("move-left-disabled"):10===n.currentDepth&&e.container.addClass("move-right-disabled")}),t[0].container.addClass("move-up-disabled").addClass("move-right-disabled").toggleClass("move-down-disabled",1===t.length),t[t.length-1].container.addClass("move-down-disabled").toggleClass("move-up-disabled",1===t.length))};a({menuItemControls:e,currentParent:0,currentDepth:0,currentAbsolutePosition:0}),this.updateInvitationVisibility(e),this.container.find(".reorder-toggle").toggle(1<e.length)},debouncedReflowMenuItems:_.debounce(function(){this.reflowMenuItems.apply(this,arguments)},0),addItemToMenu:function(e){var t,n,i,a=0,o=10,s=e.id||"";return _.each(this.getMenuItemControls(),function(e){!1!==e.setting()&&(o=Math.max(o,e.priority()),0===e.setting().menu_item_parent&&(a=Math.max(a,e.setting().position)))}),a+=1,o+=1,delete(e=m.extend({},c.Menus.data.defaultSettingValues.nav_menu_item,e,{nav_menu_term_id:this.params.menu_id,original_title:e.title,position:a})).id,i=c.Menus.generatePlaceholderAutoIncrementId(),t="nav_menu_item["+String(i)+"]",n={type:"nav_menu_item",transport:c.Menus.data.settingTransport,previewer:c.previewer},(n=c.create(t,t,{},n)).set(e),s=new c.controlConstructor.nav_menu_item(t,{type:"nav_menu_item",section:this.id,priority:o,settings:{default:t},menu_item_id:i,original_item_id:s}),c.control.add(s),n.preview(),this.debouncedReflowMenuItems(),l.a11y.speak(c.Menus.data.l10n.itemAdded),s},updateInvitationVisibility:function(e){e=e||this.getMenuItemControls();this.container.find(".new-menu-item-invitation").toggle(0===e.length)}}),m.extend(c.controlConstructor,{nav_menu_location:c.Menus.MenuLocationControl,nav_menu_item:c.Menus.MenuItemControl,nav_menu:c.Menus.MenuControl,nav_menu_name:c.Menus.MenuNameControl,nav_menu_locations:c.Menus.MenuLocationsControl,nav_menu_auto_add:c.Menus.MenuAutoAddControl}),m.extend(c.panelConstructor,{nav_menus:c.Menus.MenusPanel}),m.extend(c.sectionConstructor,{nav_menu:c.Menus.MenuSection,new_menu:c.Menus.NewMenuSection}),c.bind("ready",function(){c.Menus.availableMenuItemsPanel=new c.Menus.AvailableMenuItemsPanelView({collection:c.Menus.availableMenuItems}),c.bind("saved",function(e){(e.nav_menu_updates||e.nav_menu_item_updates)&&c.Menus.applySavedData(e)}),c.state("changesetStatus").bind(function(e){"publish"===e&&(c("nav_menus_created_posts")._value=[])}),c.previewer.bind("focus-nav-menu-item-control",c.Menus.focusMenuItemControl)}),c.Menus.applySavedData=function(e){var u={},r={};_(e.nav_menu_updates).each(function(n){var e,t,i,a,o,s,r,d;if("inserted"===n.status){if(!n.previous_term_id)throw new Error("Expected previous_term_id");if(!n.term_id)throw new Error("Expected term_id");if(s="nav_menu["+String(n.previous_term_id)+"]",!c.has(s))throw new Error("Expected setting to exist: "+s);if(t=c(s),!c.section.has(s))throw new Error("Expected control to exist: "+s);if(a=c.section(s),!(o=t.get()))throw new Error("Did not expect setting to be empty (deleted).");o=m.extend(_.clone(o),n.saved_value),u[n.previous_term_id]=n.term_id,e="nav_menu["+String(n.term_id)+"]",i=c.create(e,e,o,{type:"nav_menu",transport:c.Menus.data.settingTransport,previewer:c.previewer}),(d=a.expanded())&&a.collapse(),o=new c.Menus.MenuSection(e,{panel:"nav_menus",title:o.name,customizeAction:c.Menus.data.l10n.customizingMenus,type:"nav_menu",priority:a.priority.get(),menu_id:n.term_id}),c.section.add(o),c.control.each(function(e){var t;e.extended(c.controlConstructor.widget_form)&&"nav_menu"===e.params.widget_id_base&&(e=(t=e.container.find("select")).find("option[value="+String(n.previous_term_id)+"]"),t.find("option[value="+String(n.term_id)+"]").prop("selected",e.prop("selected")),e.remove())}),t.callbacks.disable(),t.set(!1),t.preview(),i.preview(),t._dirty=!1,a.container.remove(),c.section.remove(s),r=0,c.each(function(e){/^nav_menu\[/.test(e.id)&&!1!==e()&&(r+=1)}),(s=m("#available-widgets-list .widget-tpl:has( input.id_base[ value=nav_menu ] )")).find(".nav-menu-widget-form-controls:first").toggle(0!==r),s.find(".nav-menu-widget-no-menus-message:first").toggle(0===r),s.find("option[value="+String(n.previous_term_id)+"]").remove(),l.customize.control.each(function(e){/^nav_menu_locations\[/.test(e.id)&&e.container.find("option[value="+String(n.previous_term_id)+"]").remove()}),c.each(function(e){var t=c.state("saved").get();/^nav_menu_locations\[/.test(e.id)&&e.get()===n.previous_term_id&&(e.set(n.term_id),e._dirty=!1,c.state("saved").set(t),e.preview())}),d&&o.expand()}else if("updated"===n.status){if(d="nav_menu["+String(n.term_id)+"]",!c.has(d))throw new Error("Expected setting to exist: "+d);o=c(d),_.isEqual(n.saved_value,o.get())||(d=c.state("saved").get(),o.set(n.saved_value),o._dirty=!1,c.state("saved").set(d))}}),_(e.nav_menu_item_updates).each(function(e){e.previous_post_id&&(r[e.previous_post_id]=e.post_id)}),_(e.nav_menu_item_updates).each(function(e){var t,n,i,a,o,s;if("inserted"===e.status){if(!e.previous_post_id)throw new Error("Expected previous_post_id");if(!e.post_id)throw new Error("Expected post_id");if(t="nav_menu_item["+String(e.previous_post_id)+"]",!c.has(t))throw new Error("Expected setting to exist: "+t);if(i=c(t),!c.control.has(t))throw new Error("Expected control to exist: "+t);if(s=c.control(t),!(o=i.get()))throw new Error("Did not expect setting to be empty (deleted).");if((o=_.clone(o)).menu_item_parent<0){if(!r[o.menu_item_parent])throw new Error("inserted ID for menu_item_parent not available");o.menu_item_parent=r[o.menu_item_parent]}u[o.nav_menu_term_id]&&(o.nav_menu_term_id=u[o.nav_menu_term_id]),n="nav_menu_item["+String(e.post_id)+"]",a=c.create(n,n,o,{type:"nav_menu_item",transport:c.Menus.data.settingTransport,previewer:c.previewer}),e=new c.controlConstructor.nav_menu_item(n,{type:"nav_menu_item",menu_id:e.post_id,section:"nav_menu["+String(o.nav_menu_term_id)+"]",priority:s.priority.get(),settings:{default:n},menu_item_id:e.post_id}),s.container.remove(),c.control.remove(t),c.control.add(e),i.callbacks.disable(),i.set(!1),i.preview(),a.preview(),i._dirty=!1,e.container.toggleClass("menu-item-edit-inactive",s.container.hasClass("menu-item-edit-inactive"))}}),_.each(e.widget_nav_menu_updates,function(e,t){t=c(t);t&&(t._value=e,t.preview())})},c.Menus.focusMenuItemControl=function(e){e=c.Menus.getMenuItemControl(e);e&&e.focus()},c.Menus.getMenuControl=function(e){return c.control("nav_menu["+e+"]")},c.Menus.getMenuItemControl=function(e){return c.control("nav_menu_item["+e+"]")}}(wp.customize,wp,jQuery);
!function(xe){var we=Math.abs,Se=Math.max,ze=Math.min,ke=Math.round;function Ce(){return xe("<div/>")}xe.imgAreaSelect=function(o,n){var t,i,r,c,d,a,s,u,l,h,f,m,e,p,y,g,v,b,x,w,S,z,k,C,A,W,I,K=xe(o),P=Ce(),N=Ce(),H=Ce().add(Ce()).add(Ce()).add(Ce()),M=Ce().add(Ce()).add(Ce()).add(Ce()),E=xe([]),O={left:0,top:0},T={left:0,top:0},L=0,j="absolute",D={x1:0,y1:0,x2:0,y2:0,width:0,height:0},R=document.documentElement,X=navigator.userAgent;function Y(e){return e+O.left-T.left}function $(e){return e+O.top-T.top}function q(e){return e-O.left+T.left}function B(e){return e-O.top+T.top}function Q(e){return Se(e.pageX||0,G(e).x)-T.left}function F(e){return Se(e.pageY||0,G(e).y)-T.top}function G(e){e=e.originalEvent||{};return e.touches&&e.touches.length?{x:e.touches[0].pageX,y:e.touches[0].pageY}:{x:0,y:0}}function J(e){var t=e||h,e=e||f;return{x1:ke(D.x1*t),y1:ke(D.y1*e),x2:ke(D.x2*t),y2:ke(D.y2*e),width:ke(D.x2*t)-ke(D.x1*t),height:ke(D.y2*e)-ke(D.y1*e)}}function U(e,t,o,i,s){var n=s||h,s=s||f;(D={x1:ke(e/n||0),y1:ke(t/s||0),x2:ke(o/n||0),y2:ke(i/s||0)}).width=D.x2-D.x1,D.height=D.y2-D.y1}function V(){t&&K.width()&&(O={left:ke(K.offset().left),top:ke(K.offset().top)},d=K.innerWidth(),a=K.innerHeight(),O.top+=K.outerHeight()-a>>1,O.left+=K.outerWidth()-d>>1,e=ke(n.minWidth/h)||0,p=ke(n.minHeight/f)||0,y=ke(ze(n.maxWidth/h||1<<24,d)),g=ke(ze(n.maxHeight/f||1<<24,a)),"1.3.2"!=xe().jquery||"fixed"!=j||R.getBoundingClientRect||(O.top+=Se(document.body.scrollTop,R.scrollTop),O.left+=Se(document.body.scrollLeft,R.scrollLeft)),T=/absolute|relative/.test(s.css("position"))?{left:ke(s.offset().left)-s.scrollLeft(),top:ke(s.offset().top)-s.scrollTop()}:"fixed"==j?{left:xe(document).scrollLeft(),top:xe(document).scrollTop()}:{left:0,top:0},r=Y(0),c=$(0),(D.x2>d||D.y2>a)&&ne())}function Z(e){if(b){switch(P.css({left:Y(D.x1),top:$(D.y1)}).add(N).width(A=D.width).height(W=D.height),N.add(H).add(E).css({left:0,top:0}),H.width(Se(A-H.outerWidth()+H.innerWidth(),0)).height(Se(W-H.outerHeight()+H.innerHeight(),0)),xe(M[0]).css({left:r,top:c,width:D.x1,height:a}),xe(M[1]).css({left:r+D.x1,top:c,width:A,height:D.y1}),xe(M[2]).css({left:r+D.x2,top:c,width:d-D.x2,height:a}),xe(M[3]).css({left:r+D.x1,top:c+D.y2,width:A,height:a-D.y2}),A-=E.outerWidth(),W-=E.outerHeight(),E.length){case 8:xe(E[4]).css({left:A>>1}),xe(E[5]).css({left:A,top:W>>1}),xe(E[6]).css({left:A>>1,top:W}),xe(E[7]).css({top:W>>1});case 4:E.slice(1,3).css({left:A}),E.slice(2,4).css({top:W})}!1!==e&&(xe.imgAreaSelect.onKeyPress!=me&&xe(document).unbind(xe.imgAreaSelect.keyPress,xe.imgAreaSelect.onKeyPress),n.keys&&xe(document)[xe.imgAreaSelect.keyPress](xe.imgAreaSelect.onKeyPress=me)),ge&&H.outerWidth()-H.innerWidth()==2&&(H.css("margin",0),setTimeout(function(){H.css("margin","auto")},0))}}function _(e){V(),Z(e),x=Y(D.x1),w=$(D.y1),S=Y(D.x2),z=$(D.y2)}function ee(e,t){n.fadeSpeed?e.fadeOut(n.fadeSpeed,t):e.hide()}function te(e){var t=q(Q(e))-D.x1,e=B(F(e))-D.y1;I||(V(),I=!0,P.one("mouseout",function(){I=!1})),m="",n.resizable&&(e<=n.resizeMargin?m="n":e>=D.height-n.resizeMargin&&(m="s"),t<=n.resizeMargin?m+="w":t>=D.width-n.resizeMargin&&(m+="e")),P.css("cursor",m?m+"-resize":n.movable?"move":""),i&&i.toggle()}function oe(e){xe("body").css("cursor",""),!n.autoHide&&D.width*D.height!=0||ee(P.add(M),function(){xe(this).hide()}),xe(document).off("mousemove touchmove",re),P.on("mousemove touchmove",te),n.onSelectEnd(o,J())}function ie(e){return"mousedown"==e.type&&1!=e.which||(te(e),V(),m?(xe("body").css("cursor",m+"-resize"),x=Y(D[/w/.test(m)?"x2":"x1"]),w=$(D[/n/.test(m)?"y2":"y1"]),xe(document).on("mousemove touchmove",re).one("mouseup touchend",oe),P.off("mousemove touchmove",te)):n.movable?(u=r+D.x1-Q(e),l=c+D.y1-F(e),P.off("mousemove touchmove",te),xe(document).on("mousemove touchmove",de).one("mouseup touchend",function(){n.onSelectEnd(o,J()),xe(document).off("mousemove touchmove",de),P.on("mousemove touchmove",te)})):K.mousedown(e)),!1}function se(e){v&&(e?(S=Se(r,ze(r+d,x+we(z-w)*v*(x<S||-1))),z=ke(Se(c,ze(c+a,w+we(S-x)/v*(w<z||-1)))),S=ke(S)):(z=Se(c,ze(c+a,w+we(S-x)/v*(w<z||-1))),S=ke(Se(r,ze(r+d,x+we(z-w)*v*(x<S||-1)))),z=ke(z)))}function ne(){x=ze(x,r+d),w=ze(w,c+a),we(S-x)<e&&((S=x-e*(S<x||-1))<r?x=r+e:r+d<S&&(x=r+d-e)),we(z-w)<p&&((z=w-p*(z<w||-1))<c?w=c+p:c+a<z&&(w=c+a-p)),S=Se(r,ze(S,r+d)),z=Se(c,ze(z,c+a)),se(we(S-x)<we(z-w)*v),we(S-x)>y&&(S=x-y*(S<x||-1),se()),we(z-w)>g&&(z=w-g*(z<w||-1),se(!0)),D={x1:q(ze(x,S)),x2:q(Se(x,S)),y1:B(ze(w,z)),y2:B(Se(w,z)),width:we(S-x),height:we(z-w)},Z(),n.onSelectChange(o,J())}function re(e){return S=/w|e|^$/.test(m)||v?Q(e):Y(D.x2),z=/n|s|^$/.test(m)||v?F(e):$(D.y2),ne(),!1}function ce(e,t){S=(x=e)+D.width,z=(w=t)+D.height,xe.extend(D,{x1:q(x),y1:B(w),x2:q(S),y2:B(z)}),Z(),n.onSelectChange(o,J())}function de(e){return x=Se(r,ze(u+Q(e),r+d-D.width)),w=Se(c,ze(l+F(e),c+a-D.height)),ce(x,w),e.preventDefault(),!1}function ae(){xe(document).off("mousemove touchmove",ae),V(),S=x,z=w,ne(),m="",M.is(":visible")||P.add(M).hide().fadeIn(n.fadeSpeed||0),b=!0,xe(document).off("mouseup touchend",ue).on("mousemove touchmove",re).one("mouseup touchend",oe),P.off("mousemove touchmove",te),n.onSelectStart(o,J())}function ue(){xe(document).off("mousemove touchmove",ae).off("mouseup touchend",ue),ee(P.add(M)),U(q(x),B(w),q(x),B(w)),this instanceof xe.imgAreaSelect||(n.onSelectChange(o,J()),n.onSelectEnd(o,J()))}function le(e){return 1<e.which||M.is(":animated")||(V(),u=x=Q(e),l=w=F(e),xe(document).on({"mousemove touchmove":ae,"mouseup touchend":ue})),!1}function he(){_(!1)}function fe(){t=!0,ye(n=xe.extend({classPrefix:"imgareaselect",movable:!0,parent:"body",resizable:!0,resizeMargin:10,onInit:function(){},onSelectStart:function(){},onSelectChange:function(){},onSelectEnd:function(){}},n)),P.add(M).css({visibility:""}),n.show&&(b=!0,V(),Z(),P.add(M).hide().fadeIn(n.fadeSpeed||0)),setTimeout(function(){n.onInit(o,J())},0)}var me=function(e){var t,o=n.keys,i=e.keyCode,s=isNaN(o.alt)||!e.altKey&&!e.originalEvent.altKey?!isNaN(o.ctrl)&&e.ctrlKey?o.ctrl:!isNaN(o.shift)&&e.shiftKey?o.shift:isNaN(o.arrows)?10:o.arrows:o.alt;if("resize"==o.arrows||"resize"==o.shift&&e.shiftKey||"resize"==o.ctrl&&e.ctrlKey||"resize"==o.alt&&(e.altKey||e.originalEvent.altKey)){switch(i){case 37:s=-s;case 39:t=Se(x,S),x=ze(x,S),S=Se(t+s,x),se();break;case 38:s=-s;case 40:t=Se(w,z),w=ze(w,z),z=Se(t+s,w),se(!0);break;default:return}ne()}else switch(x=ze(x,S),w=ze(w,z),i){case 37:ce(Se(x-s,r),w);break;case 38:ce(x,Se(w-s,c));break;case 39:ce(x+ze(s,d-q(S)),w);break;case 40:ce(x,w+ze(s,a-B(z)));break;default:return}return!1};function pe(e,t){for(var o in t)void 0!==n[o]&&e.css(t[o],n[o])}function ye(e){if(e.parent&&(s=xe(e.parent)).append(P.add(M)),xe.extend(n,e),V(),null!=e.handles){for(E.remove(),E=xe([]),k=e.handles?"corners"==e.handles?4:8:0;k--;)E=E.add(Ce());E.addClass(n.classPrefix+"-handle").css({position:"absolute",fontSize:0,zIndex:L+1||1}),0<=!parseInt(E.css("width"))&&E.width(5).height(5),(C=n.borderWidth)&&E.css({borderWidth:C,borderStyle:"solid"}),pe(E,{borderColor1:"border-color",borderColor2:"background-color",borderOpacity:"opacity"})}for(h=n.imageWidth/d||1,f=n.imageHeight/a||1,null!=e.x1&&(U(e.x1,e.y1,e.x2,e.y2),e.show=!e.hide),e.keys&&(n.keys=xe.extend({shift:1,ctrl:"resize"},e.keys)),M.addClass(n.classPrefix+"-outer"),N.addClass(n.classPrefix+"-selection"),k=0;k++<4;)xe(H[k-1]).addClass(n.classPrefix+"-border"+k);pe(N,{selectionColor:"background-color",selectionOpacity:"opacity"}),pe(H,{borderOpacity:"opacity",borderWidth:"border-width"}),pe(M,{outerColor:"background-color",outerOpacity:"opacity"}),(C=n.borderColor1)&&xe(H[0]).css({borderStyle:"solid",borderColor:C}),(C=n.borderColor2)&&xe(H[1]).css({borderStyle:"dashed",borderColor:C}),P.append(N.add(H).add(i)).append(E),ge&&((C=(M.css("filter")||"").match(/opacity=(\d+)/))&&M.css("opacity",C[1]/100),(C=(H.css("filter")||"").match(/opacity=(\d+)/))&&H.css("opacity",C[1]/100)),e.hide?ee(P.add(M)):e.show&&t&&(b=!0,P.add(M).fadeIn(n.fadeSpeed||0),_()),v=(C=(n.aspectRatio||"").split(/:/))[0]/C[1],K.add(M).unbind("mousedown",le),n.disable||!1===n.enable?(P.off({"mousemove touchmove":te,"mousedown touchstart":ie}),xe(window).off("resize",he)):(!n.enable&&!1!==n.disable||((n.resizable||n.movable)&&P.on({"mousemove touchmove":te,"mousedown touchstart":ie}),xe(window).resize(he)),n.persistent||K.add(M).on("mousedown touchstart",le)),n.enable=n.disable=void 0}this.remove=function(){ye({disable:!0}),P.add(M).remove()},this.getOptions=function(){return n},this.setOptions=ye,this.getSelection=J,this.setSelection=U,this.cancelSelection=ue,this.update=_;for(var ge=(/msie ([\w.]+)/i.exec(X)||[])[1],ve=/opera/i.test(X),X=/webkit/i.test(X)&&!/chrome/i.test(X),be=K;be.length;)L=Se(L,isNaN(be.css("z-index"))?L:be.css("z-index")),"fixed"==be.css("position")&&(j="fixed"),be=be.parent(":not(body)");L=n.zIndex||L,ge&&K.attr("unselectable","on"),xe.imgAreaSelect.keyPress=ge||X?"keydown":"keypress",ve&&(i=Ce().css({width:"100%",height:"100%",position:"absolute",zIndex:L+2||2})),P.add(M).css({visibility:"hidden",position:j,overflow:"hidden",zIndex:L||"0"}),P.css({zIndex:L+2||2}),N.add(H).css({position:"absolute",fontSize:0}),o.complete||"complete"==o.readyState||!K.is("img")?fe():K.one("load",fe),!t&&ge&&7<=ge&&(o.src=o.src)},xe.fn.imgAreaSelect=function(e){return e=e||{},this.each(function(){xe(this).data("imgAreaSelect")?e.remove?(xe(this).data("imgAreaSelect").remove(),xe(this).removeData("imgAreaSelect")):xe(this).data("imgAreaSelect").setOptions(e):e.remove||(void 0===e.enable&&void 0===e.disable&&(e.enable=!0),xe(this).data("imgAreaSelect",new xe.imgAreaSelect(this,e)))}),e.instance?xe(this).data("imgAreaSelect"):this}}(jQuery);
/**
 * @output wp-includes/js/customize-models.js
 */

/* global _wpCustomizeHeader */
(function( $, wp ) {
	var api = wp.customize;
	/** @namespace wp.customize.HeaderTool */
	api.HeaderTool = {};


	/**
	 * wp.customize.HeaderTool.ImageModel
	 *
	 * A header image. This is where saves via the Customizer API are
	 * abstracted away, plus our own Ajax calls to add images to and remove
	 * images from the user's recently uploaded images setting on the server.
	 * These calls are made regardless of whether the user actually saves new
	 * Customizer settings.
	 *
	 * @memberOf wp.customize.HeaderTool
	 * @alias wp.customize.HeaderTool.ImageModel
	 *
	 * @constructor
	 * @augments Backbone.Model
	 */
	api.HeaderTool.ImageModel = Backbone.Model.extend(/** @lends wp.customize.HeaderTool.ImageModel.prototype */{
		defaults: function() {
			return {
				header: {
					attachment_id: 0,
					url: '',
					timestamp: _.now(),
					thumbnail_url: ''
				},
				choice: '',
				selected: false,
				random: false
			};
		},

		initialize: function() {
			this.on('hide', this.hide, this);
		},

		hide: function() {
			this.set('choice', '');
			api('header_image').set('remove-header');
			api('header_image_data').set('remove-header');
		},

		destroy: function() {
			var data = this.get('header'),
				curr = api.HeaderTool.currentHeader.get('header').attachment_id;

			// If the image we're removing is also the current header,
			// unset the latter.
			if (curr && data.attachment_id === curr) {
				api.HeaderTool.currentHeader.trigger('hide');
			}

			wp.ajax.post( 'custom-header-remove', {
				nonce: _wpCustomizeHeader.nonces.remove,
				wp_customize: 'on',
				theme: api.settings.theme.stylesheet,
				attachment_id: data.attachment_id
			});

			this.trigger('destroy', this, this.collection);
		},

		save: function() {
			if (this.get('random')) {
				api('header_image').set(this.get('header').random);
				api('header_image_data').set(this.get('header').random);
			} else {
				if (this.get('header').defaultName) {
					api('header_image').set(this.get('header').url);
					api('header_image_data').set(this.get('header').defaultName);
				} else {
					api('header_image').set(this.get('header').url);
					api('header_image_data').set(this.get('header'));
				}
			}

			api.HeaderTool.combinedList.trigger('control:setImage', this);
		},

		importImage: function() {
			var data = this.get('header');
			if (data.attachment_id === undefined) {
				return;
			}

			wp.ajax.post( 'custom-header-add', {
				nonce: _wpCustomizeHeader.nonces.add,
				wp_customize: 'on',
				theme: api.settings.theme.stylesheet,
				attachment_id: data.attachment_id
			} );
		},

		shouldBeCropped: function() {
			if (this.get('themeFlexWidth') === true &&
						this.get('themeFlexHeight') === true) {
				return false;
			}

			if (this.get('themeFlexWidth') === true &&
				this.get('themeHeight') === this.get('imageHeight')) {
				return false;
			}

			if (this.get('themeFlexHeight') === true &&
				this.get('themeWidth') === this.get('imageWidth')) {
				return false;
			}

			if (this.get('themeWidth') === this.get('imageWidth') &&
				this.get('themeHeight') === this.get('imageHeight')) {
				return false;
			}

			if (this.get('imageWidth') <= this.get('themeWidth')) {
				return false;
			}

			return true;
		}
	});


	/**
	 * wp.customize.HeaderTool.ChoiceList
	 *
	 * @memberOf wp.customize.HeaderTool
	 * @alias wp.customize.HeaderTool.ChoiceList
	 *
	 * @constructor
	 * @augments Backbone.Collection
	 */
	api.HeaderTool.ChoiceList = Backbone.Collection.extend({
		model: api.HeaderTool.ImageModel,

		// Ordered from most recently used to least.
		comparator: function(model) {
			return -model.get('header').timestamp;
		},

		initialize: function() {
			var current = api.HeaderTool.currentHeader.get('choice').replace(/^https?:\/\//, ''),
				isRandom = this.isRandomChoice(api.get().header_image);

			// Overridable by an extending class.
			if (!this.type) {
				this.type = 'uploaded';
			}

			// Overridable by an extending class.
			if (typeof this.data === 'undefined') {
				this.data = _wpCustomizeHeader.uploads;
			}

			if (isRandom) {
				// So that when adding data we don't hide regular images.
				current = api.get().header_image;
			}

			this.on('control:setImage', this.setImage, this);
			this.on('control:removeImage', this.removeImage, this);
			this.on('add', this.maybeRemoveOldCrop, this);
			this.on('add', this.maybeAddRandomChoice, this);

			_.each(this.data, function(elt, index) {
				if (!elt.attachment_id) {
					elt.defaultName = index;
				}

				if (typeof elt.timestamp === 'undefined') {
					elt.timestamp = 0;
				}

				this.add({
					header: elt,
					choice: elt.url.split('/').pop(),
					selected: current === elt.url.replace(/^https?:\/\//, '')
				}, { silent: true });
			}, this);

			if (this.size() > 0) {
				this.addRandomChoice(current);
			}
		},

		maybeRemoveOldCrop: function( model ) {
			var newID = model.get( 'header' ).attachment_id || false,
			 	oldCrop;

			// Bail early if we don't have a new attachment ID.
			if ( ! newID ) {
				return;
			}

			oldCrop = this.find( function( item ) {
				return ( item.cid !== model.cid && item.get( 'header' ).attachment_id === newID );
			} );

			// If we found an old crop, remove it from the collection.
			if ( oldCrop ) {
				this.remove( oldCrop );
			}
		},

		maybeAddRandomChoice: function() {
			if (this.size() === 1) {
				this.addRandomChoice();
			}
		},

		addRandomChoice: function(initialChoice) {
			var isRandomSameType = RegExp(this.type).test(initialChoice),
				randomChoice = 'random-' + this.type + '-image';

			this.add({
				header: {
					timestamp: 0,
					random: randomChoice,
					width: 245,
					height: 41
				},
				choice: randomChoice,
				random: true,
				selected: isRandomSameType
			});
		},

		isRandomChoice: function(choice) {
			return (/^random-(uploaded|default)-image$/).test(choice);
		},

		shouldHideTitle: function() {
			return this.size() < 2;
		},

		setImage: function(model) {
			this.each(function(m) {
				m.set('selected', false);
			});

			if (model) {
				model.set('selected', true);
			}
		},

		removeImage: function() {
			this.each(function(m) {
				m.set('selected', false);
			});
		}
	});


	/**
	 * wp.customize.HeaderTool.DefaultsList
	 *
	 * @memberOf wp.customize.HeaderTool
	 * @alias wp.customize.HeaderTool.DefaultsList
	 *
	 * @constructor
	 * @augments wp.customize.HeaderTool.ChoiceList
	 * @augments Backbone.Collection
	 */
	api.HeaderTool.DefaultsList = api.HeaderTool.ChoiceList.extend({
		initialize: function() {
			this.type = 'default';
			this.data = _wpCustomizeHeader.defaults;
			api.HeaderTool.ChoiceList.prototype.initialize.apply(this);
		}
	});

})( jQuery, window.wp );

/**
 * @output wp-includes/js/customize-views.js
 */

(function( $, wp, _ ) {

	if ( ! wp || ! wp.customize ) { return; }
	var api = wp.customize;

	/**
	 * wp.customize.HeaderTool.CurrentView
	 *
	 * Displays the currently selected header image, or a placeholder in lack
	 * thereof.
	 *
	 * Instantiate with model wp.customize.HeaderTool.currentHeader.
	 *
	 * @memberOf wp.customize.HeaderTool
	 * @alias wp.customize.HeaderTool.CurrentView
	 *
	 * @constructor
	 * @augments wp.Backbone.View
	 */
	api.HeaderTool.CurrentView = wp.Backbone.View.extend(/** @lends wp.customize.HeaderTool.CurrentView.prototype */{
		template: wp.template('header-current'),

		initialize: function() {
			this.listenTo(this.model, 'change', this.render);
			this.render();
		},

		render: function() {
			this.$el.html(this.template(this.model.toJSON()));
			this.setButtons();
			return this;
		},

		setButtons: function() {
			var elements = $('#customize-control-header_image .actions .remove');
			if (this.model.get('choice')) {
				elements.show();
			} else {
				elements.hide();
			}
		}
	});


	/**
	 * wp.customize.HeaderTool.ChoiceView
	 *
	 * Represents a choosable header image, be it user-uploaded,
	 * theme-suggested or a special Randomize choice.
	 *
	 * Takes a wp.customize.HeaderTool.ImageModel.
	 *
	 * Manually changes model wp.customize.HeaderTool.currentHeader via the
	 * `select` method.
	 *
	 * @memberOf wp.customize.HeaderTool
	 * @alias wp.customize.HeaderTool.ChoiceView
	 *
	 * @constructor
	 * @augments wp.Backbone.View
	 */
	api.HeaderTool.ChoiceView = wp.Backbone.View.extend(/** @lends wp.customize.HeaderTool.ChoiceView.prototype */{
		template: wp.template('header-choice'),

		className: 'header-view',

		events: {
			'click .choice,.random': 'select',
			'click .close': 'removeImage'
		},

		initialize: function() {
			var properties = [
				this.model.get('header').url,
				this.model.get('choice')
			];

			this.listenTo(this.model, 'change:selected', this.toggleSelected);

			if (_.contains(properties, api.get().header_image)) {
				api.HeaderTool.currentHeader.set(this.extendedModel());
			}
		},

		render: function() {
			this.$el.html(this.template(this.extendedModel()));

			this.toggleSelected();
			return this;
		},

		toggleSelected: function() {
			this.$el.toggleClass('selected', this.model.get('selected'));
		},

		extendedModel: function() {
			var c = this.model.get('collection');
			return _.extend(this.model.toJSON(), {
				type: c.type
			});
		},

		select: function() {
			this.preventJump();
			this.model.save();
			api.HeaderTool.currentHeader.set(this.extendedModel());
		},

		preventJump: function() {
			var container = $('.wp-full-overlay-sidebar-content'),
				scroll = container.scrollTop();

			_.defer(function() {
				container.scrollTop(scroll);
			});
		},

		removeImage: function(e) {
			e.stopPropagation();
			this.model.destroy();
			this.remove();
		}
	});


	/**
	 * wp.customize.HeaderTool.ChoiceListView
	 *
	 * A container for ChoiceViews. These choices should be of one same type:
	 * user-uploaded headers or theme-defined ones.
	 *
	 * Takes a wp.customize.HeaderTool.ChoiceList.
	 *
	 * @memberOf wp.customize.HeaderTool
	 * @alias wp.customize.HeaderTool.ChoiceListView
	 *
	 * @constructor
	 * @augments wp.Backbone.View
	 */
	api.HeaderTool.ChoiceListView = wp.Backbone.View.extend(/** @lends wp.customize.HeaderTool.ChoiceListView.prototype */{
		initialize: function() {
			this.listenTo(this.collection, 'add', this.addOne);
			this.listenTo(this.collection, 'remove', this.render);
			this.listenTo(this.collection, 'sort', this.render);
			this.listenTo(this.collection, 'change', this.toggleList);
			this.render();
		},

		render: function() {
			this.$el.empty();
			this.collection.each(this.addOne, this);
			this.toggleList();
		},

		addOne: function(choice) {
			var view;
			choice.set({ collection: this.collection });
			view = new api.HeaderTool.ChoiceView({ model: choice });
			this.$el.append(view.render().el);
		},

		toggleList: function() {
			var title = this.$el.parents().prev('.customize-control-title'),
				randomButton = this.$el.find('.random').parent();
			if (this.collection.shouldHideTitle()) {
				title.add(randomButton).hide();
			} else {
				title.add(randomButton).show();
			}
		}
	});


	/**
	 * wp.customize.HeaderTool.CombinedList
	 *
	 * Aggregates wp.customize.HeaderTool.ChoiceList collections (or any
	 * Backbone object, really) and acts as a bus to feed them events.
	 *
	 * @memberOf wp.customize.HeaderTool
	 * @alias wp.customize.HeaderTool.CombinedList
	 *
	 * @constructor
	 * @augments wp.Backbone.View
	 */
	api.HeaderTool.CombinedList = wp.Backbone.View.extend(/** @lends wp.customize.HeaderTool.CombinedList.prototype */{
		initialize: function(collections) {
			this.collections = collections;
			this.on('all', this.propagate, this);
		},
		propagate: function(event, arg) {
			_.each(this.collections, function(collection) {
				collection.trigger(event, arg);
			});
		}
	});

})( jQuery, window.wp, _ );

/*! This file is auto-generated */
!function(n,w,t,v){"use strict";var l={},o={};w.mce=w.mce||{},w.mce.views={register:function(e,t){l[e]=w.mce.View.extend(_.extend(t,{type:e}))},unregister:function(e){delete l[e]},get:function(e){return l[e]},unbind:function(){_.each(o,function(e){e.unbind()})},setMarkers:function(e,a){var r,t,d=[{content:e}],c=this;return _.each(l,function(s,o){t=d.slice(),d=[],_.each(t,function(e){var t,n,i=e.content;if(e.processed)d.push(e);else{for(;i&&(t=s.prototype.match(i));)t.index&&d.push({content:i.substring(0,t.index)}),t.options.editor=a,n=(r=c.createInstance(o,t.content,t.options)).loader?".":r.text,d.push({content:r.ignore?n:'<p data-wpview-marker="'+r.encodedText+'">'+n+"</p>",processed:!0}),i=i.slice(t.index+t.content.length);i&&d.push({content:i})}})}),(e=_.pluck(d,"content").join("")).replace(/<p>\s*<p data-wpview-marker=/g,"<p data-wpview-marker=").replace(/<\/p>\s*<\/p>/g,"</p>")},createInstance:function(e,t,n,i){var s,e=this.get(e);return-1!==t.indexOf("[")&&-1!==t.indexOf("]")&&(t=t.replace(/\[[^\]]+\]/g,function(e){return e.replace(/[\r\n]/g,"")})),!i&&(s=this.getInstance(t))?s:(s=encodeURIComponent(t),n=_.extend(n||{},{text:t,encodedText:s}),o[s]=new e(n))},getInstance:function(e){return"string"==typeof e?o[encodeURIComponent(e)]:o[v(e).attr("data-wpview-text")]},getText:function(e){return decodeURIComponent(v(e).attr("data-wpview-text")||"")},render:function(t){_.each(o,function(e){e.render(null,t)})},update:function(e,t,n,i){var s=this.getInstance(n);s&&s.update(e,t,n,i)},edit:function(n,i){var s=this.getInstance(i);s&&s.edit&&s.edit(s.text,function(e,t){s.update(e,n,i,t)})},remove:function(e,t){var n=this.getInstance(t);n&&n.remove(e,t)}},w.mce.View=function(e){_.extend(this,e),this.initialize()},w.mce.View.extend=Backbone.View.extend,_.extend(w.mce.View.prototype,{content:null,loader:!0,initialize:function(){},getContent:function(){return this.content},render:function(e,t){null!=e&&(this.content=e),e=this.getContent(),(this.loader||e)&&(t&&this.unbind(),this.replaceMarkers(),e?this.setContent(e,function(e,t){v(t).data("rendered",!0),this.bindNode.call(this,e,t)},!!t&&null):this.setLoader())},bindNode:function(){},unbindNode:function(){},unbind:function(){this.getNodes(function(e,t){this.unbindNode.call(this,e,t)},!0)},getEditors:function(t){_.each(tinymce.editors,function(e){e.plugins.wpview&&t.call(this,e)},this)},getNodes:function(n,i){this.getEditors(function(e){var t=this;v(e.getBody()).find('[data-wpview-text="'+t.encodedText+'"]').filter(function(){var e;return null==i||(e=!0===v(this).data("rendered"),i?e:!e)}).each(function(){n.call(t,e,this,this)})})},getMarkers:function(n){this.getEditors(function(e){var t=this;v(e.getBody()).find('[data-wpview-marker="'+this.encodedText+'"]').each(function(){n.call(t,e,this)})})},replaceMarkers:function(){this.getMarkers(function(e,t){var n,i=t===e.selection.getNode();this.loader||v(t).text()===tinymce.DOM.decode(this.text)?(n=e.$('<div class="wpview wpview-wrap" data-wpview-text="'+this.encodedText+'" data-wpview-type="'+this.type+'" contenteditable="false"></div>'),e.undoManager.ignore(function(){e.$(t).replaceWith(n)}),i&&setTimeout(function(){e.undoManager.ignore(function(){e.selection.select(n[0]),e.selection.collapse()})})):e.dom.setAttrib(t,"data-wpview-marker",null)})},removeMarkers:function(){this.getMarkers(function(e,t){e.dom.setAttrib(t,"data-wpview-marker",null)})},setContent:function(n,i,e){_.isObject(n)&&(n.sandbox||n.head||-1!==n.body.indexOf("<script"))?this.setIframes(n.head||"",n.body,i,e):_.isString(n)&&-1!==n.indexOf("<script")?this.setIframes("",n,i,e):this.getNodes(function(e,t){-1!==(n=n.body||n).indexOf("<iframe")&&(n+='<span class="mce-shim"></span>'),e.undoManager.transact(function(){t.innerHTML="",t.appendChild(_.isString(n)?e.dom.createFragment(n):n),e.dom.add(t,"span",{class:"wpview-end"})}),i&&i.call(this,e,t)},e)},setIframes:function(p,f,m,e){var t,g=this;-1!==f.indexOf("[")&&-1!==f.indexOf("]")&&(t=new RegExp("\\[\\/?(?:"+n.mceViewL10n.shortcodes.join("|")+")[^\\]]*?\\]","g"),f=f.replace(t,function(e){return e.replace(/</g,"&lt;").replace(/>/g,"&gt;")})),this.getNodes(function(t,e){var n,i,s,o,a,r=t.dom,d="",c=t.getBody().className||"",l=t.getDoc().getElementsByTagName("head")[0];if(tinymce.each(r.$('link[rel="stylesheet"]',l),function(e){e.href&&-1===e.href.indexOf("skins/lightgray/content.min.css")&&-1===e.href.indexOf("skins/wordpress/wp-content.css")&&(d+=r.getOuterHTML(e))}),g.iframeHeight&&r.add(e,"span",{"data-mce-bogus":1,style:{display:"block",width:"100%",height:g.iframeHeight}},"\u200b"),t.undoManager.transact(function(){e.innerHTML="",n=r.add(e,"iframe",{src:tinymce.Env.ie?'javascript:""':"",frameBorder:"0",allowTransparency:"true",scrolling:"no",class:"wpview-sandbox",style:{width:"100%",display:"block"},height:g.iframeHeight}),r.add(e,"span",{class:"mce-shim"}),r.add(e,"span",{class:"wpview-end"})}),n.contentWindow){if(l=n.contentWindow,(i=l.document).open(),i.write('<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />'+p+d+'<style>html {background: transparent;padding: 0;margin: 0;}body#wpview-iframe-sandbox {background: transparent;padding: 1px 0 !important;margin: -1px 0 0 !important;}body#wpview-iframe-sandbox:before,body#wpview-iframe-sandbox:after {display: none;content: "";}iframe {max-width: 100%;}</style></head><body id="wpview-iframe-sandbox" class="'+c+'">'+f+"</body></html>"),i.close(),g.iframeHeight&&(a=!0,setTimeout(function(){a=!1,u()},3e3)),v(l).on("load",u).on("unload",function(){t.isHidden()||(v(e).data("rendered",null),setTimeout(function(){w.mce.views.render()}))}),s=l.MutationObserver||l.WebKitMutationObserver||l.MozMutationObserver)i.body?h():i.addEventListener("DOMContentLoaded",h,!1);else for(o=1;o<6;o++)setTimeout(u,700*o);m&&m.call(g,t,e)}function u(){var e;a||n.contentWindow&&(e=v(n),g.iframeHeight=v(i.body).height(),e.height()!==g.iframeHeight&&(e.height(g.iframeHeight),t.nodeChanged()))}function h(){new s(_.debounce(u,100)).observe(i.body,{attributes:!0,childList:!0,subtree:!0})}},e)},setLoader:function(e){this.setContent('<div class="loading-placeholder"><div class="dashicons dashicons-'+(e||"admin-media")+'"></div><div class="wpview-loading"><ins></ins></div></div>')},setError:function(e,t){this.setContent('<div class="wpview-error"><div class="dashicons dashicons-'+(t||"no")+'"></div><p>'+e+"</p></div>")},match:function(e){e=t.next(this.type,e);if(e)return{index:e.index,content:e.content,options:{shortcode:e.shortcode}}},update:function(n,i,s,o){_.find(l,function(e,t){e=e.prototype.match(n);if(e)return v(s).data("rendered",!1),i.dom.setAttrib(s,"data-wpview-text",encodeURIComponent(n)),w.mce.views.createInstance(t,n,e.options,o).render(),i.selection.select(s),i.nodeChanged(),i.focus(),!0})},remove:function(e,t){this.unbindNode.call(this,e,t),e.dom.remove(t),e.focus()}})}(window,window.wp,window.wp.shortcode,window.jQuery),function(n,e,s,i){var t,o,a,r,d,c;function l(e){var t={};return n.tinymce?!e||-1===e.indexOf("<")&&-1===e.indexOf(">")?e:(r=r||new n.tinymce.html.Schema(t),d=d||new n.tinymce.html.DomParser(t,r),(c=c||new n.tinymce.html.Serializer(t,r)).serialize(d.parse(e,{forced_root_block:!1}))):e.replace(/<[^>]+>/g,"")}a={state:[],edit:function(e,t){var n=this.type,i=s[n].edit(e);this.pausePlayers&&this.pausePlayers(),_.each(this.state,function(e){i.state(e).on("update",function(e){t(s[n].shortcode(e).string(),"gallery"===n)})}),i.on("close",function(){i.detach()}),i.open()}},t=_.extend({},a,{state:["gallery-edit"],template:s.template("editor-gallery"),initialize:function(){var e=s.gallery.attachments(this.shortcode,s.view.settings.post.id),t=this.shortcode.attrs.named,n=this;e.more().done(function(){e=e.toJSON(),_.each(e,function(e){e.sizes&&(t.size&&e.sizes[t.size]?e.thumbnail=e.sizes[t.size]:e.sizes.thumbnail?e.thumbnail=e.sizes.thumbnail:e.sizes.full&&(e.thumbnail=e.sizes.full))}),n.render(n.template({verifyHTML:l,attachments:e,columns:t.columns?parseInt(t.columns,10):s.galleryDefaults.columns}))}).fail(function(e,t){n.setError(t)})}}),o=_.extend({},a,{action:"parse-media-shortcode",initialize:function(){var t=this,e=null;this.url&&(this.loader=!1,this.shortcode=s.embed.shortcode({url:this.text})),t.editor&&(e=t.editor.getBody().clientWidth),wp.ajax.post(this.action,{post_ID:s.view.settings.post.id,type:this.shortcode.tag,shortcode:this.shortcode.string(),maxwidth:e}).done(function(e){t.render(e)}).fail(function(e){t.url?(t.ignore=!0,t.removeMarkers()):t.setError(e.message||e.statusText,"admin-media")}),this.getEditors(function(e){e.on("wpview-selected",function(){t.pausePlayers()})})},pausePlayers:function(){this.getNodes(function(e,t,n){n=i("iframe.wpview-sandbox",n).get(0);(n=n&&n.contentWindow)&&n.mejs&&_.each(n.mejs.players,function(e){try{e.pause()}catch(e){}})})}}),a=_.extend({},o,{action:"parse-embed",edit:function(e,t){var n=s.embed.edit(e,this.url),i=this;this.pausePlayers(),n.state("embed").props.on("change:url",function(e,t){t&&e.get("url")&&(n.state("embed").metadata=e.toJSON())}),n.state("embed").on("select",function(){var e=n.state("embed").metadata;i.url?t(e.url):t(s.embed.shortcode(e).string())}),n.on("close",function(){n.detach()}),n.open()}}),e.register("gallery",_.extend({},t)),e.register("audio",_.extend({},o,{state:["audio-details"]})),e.register("video",_.extend({},o,{state:["video-details"]})),e.register("playlist",_.extend({},o,{state:["playlist-edit","video-playlist-edit"]})),e.register("embed",_.extend({},a)),e.register("embedURL",_.extend({},a,{match:function(e){e=/(^|<p>(?:<span data-mce-type="bookmark"[^>]+>\s*<\/span>)?)(https?:\/\/[^\s"]+?)((?:<span data-mce-type="bookmark"[^>]+>\s*<\/span>)?<\/p>\s*|$)/gi.exec(e);if(e)return{index:e.index+e[1].length,content:e[2],options:{url:!0}}}}))}(window,window.wp.mce.views,window.wp.media,window.jQuery);
