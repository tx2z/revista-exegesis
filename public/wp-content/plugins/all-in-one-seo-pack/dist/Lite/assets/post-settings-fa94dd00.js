var z=Object.defineProperty;var E=(s,t,c)=>t in s?z(s,t,{enumerable:!0,configurable:!0,writable:!0,value:c}):s[t]=c;var C=(s,t,c)=>(E(s,typeof t!="symbol"?t+"":t,c),c);import{_ as g,r as a,o as _,c as m,d as o,a as n,t as d,w as p,b as S,f as x,y as P,F as W,G as F,C as G,x as Y,A,k as I}from"./js/_plugin-vue_export-helper.a81c6319.js";import{c as Z,a as q}from"./js/vue-router.af49358c.js";import{l as j}from"./js/index.251e7289.js";import{l as J}from"./js/index.fae5bbc8.js";import{l as K}from"./js/index.0b123ab1.js";import{s as L,i as V,f as Q,g as X}from"./js/index.4dbecc01.js";import{i as O,s as N,h as ss,T as es}from"./js/postContent.f08c6962.js";import{d as ts}from"./js/debounce.3293acde.js";import{A as D}from"./js/App.5f527bb6.js";import{_ as os}from"./js/default-i18n.0e8bc810.js";import{e as ns}from"./js/elemLoaded.9a6eb745.js";import{l as is}from"./js/loadTruSeo.e907a9e5.js";import{m as H,b as as}from"./js/vuex.esm-bundler.55d3d5b3.js";import{C as U}from"./js/SettingsRow.bc3a4ca9.js";import{B as rs}from"./js/Phone.4111ef03.js";import{C as cs}from"./js/Tabs.5bdc95fd.js";import{B as ls}from"./js/Checkbox.ec732dfe.js";import{B as ds}from"./js/RadioToggle.cfd7da6d.js";import{S as _s}from"./js/Settings.910f29ef.js";import{d as us}from"./js/Caret.19bf2275.js";import"./js/client.e7a26247.js";import"./js/_commonjsHelpers.f84db168.js";import"./js/helpers.51e5fd9c.js";import"./js/constants.e56e1512.js";import"./js/cleanForSlug.d16f1e3a.js";import"./js/html.a669733f.js";import"./js/toNumber.59ef8803.js";/* empty css                */import"./js/params.597cd0f5.js";import"./js/WpTable.3e09f0c1.js";import"./js/Index.3662e61b.js";import"./js/Row.d42459be.js";import"./js/RequiresUpdate.52f5acf2.js";import"./js/Index.048705a6.js";import"./js/JsonValues.870a4901.js";import"./js/SaveChanges.c85e9ba4.js";import"./js/LicenseKeyBar.67a3e313.js";import"./js/LogoGear.e7086274.js";import"./js/Portal.76dcdd17.js";import"./js/TruSeoScore.1eab6bb1.js";import"./js/MaxCounts.12b45bab.js";import"./js/Tooltip.c4cc47a2.js";import"./js/Plus.3cb7669b.js";import"./js/Editor.5cedc7bc.js";import"./js/Blur.17ef7d02.js";import"./js/GoogleSearchPreview.170d666f.js";import"./js/HtmlTagsEditor.5ebef317.js";import"./js/UnfilteredHtml.ceff4936.js";import"./js/Slide.4392623f.js";import"./js/popup.b60b699f.js";import"./js/Table.fb54dbce.js";import"./js/PostTypes.9ab32454.js";import"./js/InternalOutbound.14248481.js";import"./js/RequiredPlans.5c16d60d.js";import"./js/Image.01180f39.js";import"./js/Img.6c4e3996.js";import"./js/FacebookPreview.74fc401f.js";import"./js/Profile.0d5b59ce.js";import"./js/TwitterPreview.a823113e.js";import"./js/Book.4fda1364.js";import"./js/Build.3f9239df.js";import"./js/Redirects.cbc3caf3.js";import"./js/Index.2cc2f3a4.js";import"./js/strings.ab2d1a4c.js";import"./js/isString.a41bd70d.js";import"./js/ProBadge.c7f4f378.js";import"./js/External.bfa99ff9.js";import"./js/Exclamation.09d9f31b.js";import"./js/Gear.7e79093b.js";import"./js/Card.0a3b54f8.js";import"./js/Eye.122d2005.js";import"./js/preload-helper.b149fa8b.js";import"./js/Information.050096cc.js";import"./js/Checkmark.36fbf255.js";const T=()=>{let s=L.state.currentPost.postStatus;return V()&&(s=window.wp.data.select("core/editor").getCurrentPostAttribute("status")),s};class ps{constructor(){C(this,"previousPostSlug");C(this,"previousPostStatus");C(this,"updatingRedirects",!1);C(this,"update",ts(()=>{const t=O(),c=T();this.previousPostSlug===t&&this.previousPostStatus===c||(this.previousPostSlug=t,this.previousPostStatus=c,this.updatingRedirects=!0,L.dispatch("redirects/getPostRedirects",{},{root:!0}).finally(()=>{this.updatingRedirects=!1}))},2500));const t=window.aioseo.addons.find(c=>c.sku==="aioseo-redirects");!window.aioseo.currentPost||!t||!t.isActive||window.aioseo.redirectsWatcherSet||(this.initWatchers(),window.aioseo.redirectsWatcherSet=!0)}initWatchers(){if(!Q()&&V()){const t=window.setInterval(()=>{window.wp.data.select("core/editor").getCurrentPost().id&&(window.clearInterval(t),this.previousPostSlug=O(),this.previousPostStatus=T(),this.watchBlockEditor())},50)}}watchBlockEditor(){window.wp.data.subscribe(()=>{this.updatingRedirects||this.update()})}}new ps;(function(s){const t="all-in-one-seo-pack";if(!V()||!N())return;const c=s.plugins.registerPlugin,f=s.editPost.PluginSidebarMoreMenuItem,e=s.editPost.PluginSidebar,r=s.element.Fragment,i=s.element.createElement,l=window.aioseo.user.capabilities.aioseo_page_analysis,$=window.aioseo.currentPost.seo_score,y=os("N/A",t),w=function(b){return!l||!ss()?"score-disabled":80<b?"score-green":50<b?"score-orange":1<b?"score-red":"score-disabled"},v=i("svg",{width:24,height:24,fill:"none",viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},i("path",{d:"M11.9811 23.7877C18.5428 23.7877 23.8623 18.4684 23.8623 11.9066C23.8623 5.34477 18.5428 0.0253906 11.9811 0.0253906C5.41924 0.0253906 0.0998535 5.34477 0.0998535 11.9066C0.0998535 18.4684 5.41924 23.7877 11.9811 23.7877ZM10.0892 4.37389C9.92824 4.12859 9.6301 4.01391 9.35674 4.11048C9.04535 4.22048 8.74079 4.34987 8.44488 4.49781C8.18513 4.6277 8.05479 4.92439 8.11199 5.21372L8.31571 6.24468C8.36815 6.51003 8.25986 6.77935 8.0543 6.95044C7.72937 7.22084 7.42944 7.52654 7.16069 7.86489C6.99366 8.07521 6.73011 8.18668 6.46987 8.13409L5.45923 7.92995C5.17534 7.87259 4.88492 8.00678 4.75864 8.27251C4.68731 8.42264 4.61997 8.57591 4.55683 8.73224C4.49369 8.88855 4.43564 9.04574 4.38258 9.20355C4.28872 9.4829 4.40211 9.78694 4.64318 9.95035L5.50129 10.5321C5.72226 10.6819 5.8323 10.9505 5.80561 11.2198C5.76265 11.6532 5.76441 12.0857 5.80825 12.5112C5.83598 12.7804 5.72684 13.0494 5.5064 13.2L4.64996 13.785C4.40958 13.9493 4.29718 14.2535 4.3918 14.5324C4.49961 14.8502 4.62641 15.1609 4.7714 15.4629C4.89868 15.728 5.18943 15.8609 5.47301 15.8026L6.48336 15.5947C6.7434 15.5412 7.00735 15.6517 7.17499 15.8615C7.43997 16.193 7.73956 16.499 8.07114 16.7733C8.27723 16.9437 8.38649 17.2127 8.33498 17.4782L8.13487 18.5095C8.07868 18.7992 8.2102 19.0955 8.47059 19.2244C8.61773 19.2971 8.76793 19.3659 8.92112 19.4303C9.07434 19.4947 9.22835 19.5539 9.38302 19.6081C9.83552 19.7664 10.4688 19.1996 10.937 18.7805C11.1679 18.5738 11.3103 18.2813 11.3119 17.9682C11.3119 17.9665 11.3119 17.9648 11.3119 17.9632V16.2386C11.3119 16.2204 11.3125 16.2022 11.3139 16.1843C9.93098 15.847 8.90283 14.5775 8.90283 13.0629V11.2317C8.90283 11.0925 9.01342 10.9797 9.14984 10.9797H10.0064V9.17798C10.0064 8.92921 10.204 8.72754 10.4478 8.72754C10.6916 8.72754 10.8892 8.92921 10.8892 9.17798V10.9797H13.2067V9.17798C13.2067 8.92921 13.4043 8.72754 13.6481 8.72754C13.8919 8.72754 14.0895 8.92921 14.0895 9.17798V10.9797H14.9461C15.0825 10.9797 15.193 11.0925 15.193 11.2317V13.0629C15.193 14.6253 14.0989 15.927 12.6497 16.2135C12.6501 16.2218 12.6502 16.2302 12.6502 16.2386V17.9557C12.6502 18.275 12.7969 18.5727 13.0347 18.7801C13.5113 19.1958 14.1555 19.7576 14.6053 19.5987C14.9167 19.4887 15.2213 19.3593 15.5172 19.2113C15.7769 19.0814 15.9073 18.7848 15.8501 18.4954L15.6464 17.4644C15.5939 17.1991 15.7022 16.9298 15.9078 16.7587C16.2327 16.4883 16.5326 16.1826 16.8013 15.8442C16.9684 15.634 17.2319 15.5225 17.4922 15.575L18.5028 15.7792C18.7867 15.8366 19.0771 15.7024 19.2034 15.4366C19.2747 15.2865 19.3421 15.1333 19.4052 14.9769C19.4683 14.8206 19.5264 14.6634 19.5795 14.5056C19.6733 14.2263 19.5599 13.9222 19.3189 13.7588L18.4607 13.177C18.2398 13.0272 18.1297 12.7586 18.1564 12.4893C18.1994 12.056 18.1976 11.6234 18.1538 11.1979C18.1261 10.9287 18.2352 10.6598 18.4556 10.5092L19.3121 9.92409C19.5525 9.75989 19.6649 9.45566 19.5702 9.17674C19.4624 8.85899 19.3356 8.5482 19.1907 8.24628C19.0634 7.98121 18.7726 7.84823 18.489 7.90657L17.4787 8.11444C17.2187 8.16796 16.9547 8.05746 16.7871 7.84769C16.5221 7.51615 16.2225 7.2101 15.8909 6.93588C15.6848 6.76543 15.5756 6.49649 15.6271 6.23094L15.8272 5.19968C15.8834 4.90999 15.7519 4.61365 15.4914 4.48481C15.3443 4.412 15.1941 4.34331 15.0409 4.27886C14.8877 4.21444 14.7337 4.1552 14.579 4.10107C14.3053 4.00526 14.0073 4.12099 13.8472 4.36697L13.277 5.24259C13.1302 5.46808 12.867 5.58035 12.6031 5.55312C12.1784 5.5093 11.7545 5.51109 11.3375 5.55581C11.0737 5.58411 10.8101 5.47276 10.6625 5.24782L10.0892 4.37389Z",fillRule:"evenodd",clipRule:"evenodd",fill:"#005AE0"})),h=i("div",{id:"aioseo-post-settings-sidebar-button",className:w($)},v,i("span",{id:"aioseo-post-score-disabled"},y),i("span",{id:"aioseo-post-score"},$),i("span",{},"/100")),u=window.aioseo.user;c("aioseo-post-settings-sidebar",{render:function(){return!u.capabilities.aioseo_page_analysis&&!u.capabilities.aioseo_page_general_settings&&!u.capabilities.aioseo_page_social_settings&&!u.capabilities.aioseo_page_schema_settings&&!u.capabilities.aioseo_page_advanced_settings?null:i(r,{},i(f,{target:"aioseo-post-settings-sidebar",icon:v},"AIOSEO"),i(e,{name:"aioseo-post-settings-sidebar",icon:h,title:"AIOSEO"},i("div",{id:"aioseo-post-settings-sidebar",className:"aioseo-post-settings-sidebar"},i("div",{id:"aioseo-post-settings-sidebar-vue",className:"aioseo-post-settings-sidebar-vue"},i("div",{className:"aioseo-loading-spinner dark",style:{left:0,right:0,margin:"30px auto"}},i("div",{className:"double-bounce1"},null),i("div",{className:"double-bounce2"},null))))))}})})(window.wp);const ms={data(){return{strings:{areaServedDescription:this.$t.__("The geographic area where a service or offered item is provided.",this.$td)}}}},hs={class:"aioseo-col col-xs-12 text-xs-left"},gs={class:"field-description"};function fs(s,t,c,f,e,r){const i=a("base-input");return _(),m("div",hs,[o(i,{type:"text",size:"medium"}),n("span",gs,d(e.strings.areaServedDescription),1)])}const bs=g(ms,[["render",fs],["__scopeId","data-v-edba6303"]]);const $s={data(){return{strings:{streetAddress:this.$t.__("Address Line 1",this.$td),streetAddress2:this.$t.__("Address Line 2",this.$td),zipCode:this.$t.__("Zip Code",this.$td),city:this.$t.__("City",this.$td),state:this.$t.__("State",this.$td),country:this.$t.__("Country",this.$td)}}}},vs={class:"columns field-row"},ys={class:"aioseo-col col-xs-12 text-xs-left"},ws={class:"field-description"},Cs={class:"aioseo-col col-xs-12 text-xs-left"},xs={class:"field-description mt-8"},Ss={class:"aioseo-address-wrapper"},Ps={class:"aioseo-col col-xs-12 col-sm-12 col-md-4 text-xs-left"},Ls={class:"field-description mt-8"},As={class:"aioseo-col col-xs-12 col-sm-12 col-md-4 text-xs-left"},Is={class:"field-description mt-8"},Vs={class:"aioseo-col col-xs-12 col-sm-12 col-md-4 text-xs-left"},Ds={class:"field-description mt-8"},Hs={class:"aioseo-col col-xs-12 col-sm-6 text-xs-left"},Bs={class:"field-description mt-8"};function Os(s,t,c,f,e,r){const i=a("base-input"),l=a("base-select");return _(),m("div",vs,[n("div",ys,[n("span",ws,d(e.strings.streetAddress),1),o(i,{type:"text",size:"medium"})]),n("div",Cs,[n("span",xs,d(e.strings.streetAddress2),1),o(i,{type:"text",size:"medium"})]),n("div",Ss,[n("div",Ps,[n("span",Ls,d(e.strings.zipCode),1),o(i,{type:"text",size:"medium"})]),n("div",As,[n("span",Is,d(e.strings.city),1),o(i,{type:"text",size:"medium"})]),n("div",Vs,[n("span",Ds,d(e.strings.state),1),o(i,{type:"text",size:"medium"})])]),n("div",Hs,[n("span",Bs,d(e.strings.country),1),o(l,{size:"medium",options:s.$constants.COUNTRY_LIST},null,8,["options"])])])}const Ts=g($s,[["render",Os],["__scopeId","data-v-bf2b69da"]]);const ks={components:{BasePhone:rs},data(){return{strings:{emailAddress:this.$t.__("Email Address",this.$td),phoneNumber:this.$t.__("Phone Number",this.$td),faxNumber:this.$t.__("Fax Number",this.$td)}}}},Rs={class:"aioseo-col col-xs-12 text-xs-left"},Ns={class:"field-description"},Us={class:"aioseo-col col-xs-12 text-xs-left"},Ms={class:"field-description mt-8"},zs={class:"aioseo-col col-xs-12 text-xs-left"},Es={class:"field-description mt-8"};function Ws(s,t,c,f,e,r){const i=a("base-input"),l=a("base-phone");return _(),m("div",null,[n("div",Rs,[n("span",Ns,d(e.strings.emailAddress),1),o(i,{type:"text",size:"medium"})]),n("div",Us,[n("span",Ms,d(e.strings.phoneNumber),1),o(l)]),n("div",zs,[n("span",Es,d(e.strings.faxNumber),1),o(l)])])}const Fs=g(ks,[["render",Ws],["__scopeId","data-v-b7e41a38"]]);const Gs={data(){return{strings:{vatID:this.$t.__("VAT ID:",this.$td),taxID:this.$t.__("Tax ID:",this.$td)}}}},Ys={class:"aioseo-col col-xs-12 text-xs-left"},Zs={class:"field-description"},qs={class:"aioseo-col col-xs-12 text-xs-left"},js={class:"field-description mt-8"};function Js(s,t,c,f,e,r){const i=a("base-input");return _(),m("div",null,[n("div",Ys,[n("span",Zs,d(e.strings.vatID),1),o(i,{type:"text",size:"medium"})]),n("div",qs,[n("span",js,d(e.strings.taxID),1),o(i,{type:"text",size:"medium"})])])}const Ks=g(Gs,[["render",Js],["__scopeId","data-v-16be9b8e"]]),Qs={data(){return{strings:{businessType:this.$t.__("Type",this.$td)}}}};function Xs(s,t,c,f,e,r){const i=a("base-select");return _(),m("div",null,[o(i,{size:"large",options:s.$constants.LOCAL_SEO_BUSINESS_TYPES},null,8,["options"])])}const se=g(Qs,[["render",Xs]]),ee={};function te(s,t){return _(),m("div")}const oe=g(ee,[["render",te]]),ne={};function ie(s,t){return _(),m("div")}const ae=g(ne,[["render",ie]]);const re={data(){return{strings:{name:this.$t.__("name",this.$td),nameDesc:this.$t.__("Your name or company name.",this.$td)}}}},ce={class:"aioseo-col col-xs-12 text-xs-left"},le={class:"field-description"};function de(s,t,c,f,e,r){const i=a("base-input");return _(),m("div",ce,[o(i,{type:"text",size:"medium"}),n("span",le,d(e.strings.nameDesc),1)])}const _e=g(re,[["render",de],["__scopeId","data-v-0f8f3d3c"]]);const ue={data(){return{currencies:this.$constants.CURRENCY_LIST,strings:{priceIndicator:this.$t.__("Price Indicator",this.$td),currenciesAccepted:this.$t.__("Currencies Accepted",this.$td),paymentMethods:this.$t.__("Payment Methods Accepted",this.$td)}}}},pe={class:"aioseo-col col-xs-12 text-xs-left"},me={class:"field-description"},he={class:"aioseo-col col-xs-12 text-xs-left"},ge={class:"field-description mt-8"},fe={class:"aioseo-col col-xs-12 text-xs-left"},be={class:"field-description mt-8"};function $e(s,t,c,f,e,r){const i=a("base-select"),l=a("base-input");return _(),m("div",null,[n("div",pe,[n("span",me,d(e.strings.priceIndicator),1),o(i,{size:"medium",options:e.currencies},null,8,["options"])]),n("div",he,[n("span",ge,d(e.strings.currenciesAccepted),1),o(i,{size:"medium",label:"currenciesAccepted","track-by":"value",class:"aioseo-multiselect",options:e.currencies,multiple:""},null,8,["options"])]),n("div",fe,[n("span",be,d(e.strings.paymentMethods),1),o(l,{type:"text",size:"medium"})])])}const ve=g(ue,[["render",$e],["__scopeId","data-v-eae40702"]]);const ye={components:{CoreSettingsRow:U,LocalBusinessAreaServed:bs,LocalBusinessBusinessAddress:Ts,LocalBusinessBusinessContact:Fs,LocalBusinessBusinessIds:Ks,LocalBusinessBusinessType:se,LocalBusinessImage:oe,LocalBusinessMap:ae,LocalBusinessName:_e,LocalBusinessPaymentInfo:ve},data(){return{strings:{pageName:this.$t.__("Business Info",this.$td),name:this.$t.__("Name",this.$td),businessType:this.$t.__("Type",this.$td),image:this.$t.__("Image",this.$td),urls:this.$t.__("URLs",this.$td),websiteDesc:this.$t.__("Website URL",this.$td),aboutDesc:this.$t.__("About Page URL",this.$td),contactDesc:this.$t.__("Contact Page URL",this.$td),businessAddress:this.$t.__("Address",this.$td),businessContact:this.$t.__("Contact Info",this.$td),businessIDs:this.$t.__("IDs",this.$td),paymentInfo:this.$t.__("Payment Info",this.$td),areaServed:this.$t.__("Area Served",this.$td),map:this.$t.__("Map",this.$td)}}}},we={class:"aioseo-tab-content aioseo-localseo-info"};function Ce(s,t,c,f,e,r){const i=a("local-business-name"),l=a("core-settings-row"),$=a("local-business-business-type"),y=a("local-business-image"),w=a("local-business-business-address"),v=a("local-business-map"),h=a("local-business-business-contact"),u=a("local-business-business-ids"),b=a("local-business-payment-info"),M=a("local-business-area-served");return _(),m("div",we,[o(l,{name:e.strings.name,class:"info-name-row",align:""},{content:p(()=>[o(i)]),_:1},8,["name"]),o(l,{name:e.strings.businessType,class:"info-business-type",align:""},{content:p(()=>[o($)]),_:1},8,["name"]),o(l,{class:"info-business-image",name:e.strings.image,align:""},{content:p(()=>[o(y)]),_:1},8,["name"]),o(l,{name:e.strings.businessAddress,class:"info-businessaddress-row",align:""},{content:p(()=>[o(w)]),_:1},8,["name"]),o(l,{name:e.strings.map,align:""},{content:p(()=>[o(v)]),_:1},8,["name"]),o(l,{name:e.strings.businessContact,class:"info-businesscontact-row",align:""},{content:p(()=>[o(h)]),_:1},8,["name"]),o(l,{name:e.strings.businessIDs,class:"info-businessids-row",align:""},{content:p(()=>[o(u)]),_:1},8,["name"]),o(l,{name:e.strings.paymentInfo,class:"info-paymentinfo-row",align:""},{content:p(()=>[o(b)]),_:1},8,["name"]),o(l,{name:e.strings.areaServed,class:"info-area-row",align:""},{content:p(()=>[o(M)]),_:1},8,["name"])])}const xe=g(ye,[["render",Ce]]);const Se={components:{BaseCheckbox:ls,BaseRadioToggle:ds,CoreSettingsRow:U},data(){return{selectTimezone:[{value:"none",label:this.$t.__("Select your timezone",this.$td)}],strings:{pageName:this.$t.__("Opening Hours",this.$td),useDefaults:this.$t.__("Use Defaults",this.$td),useDefaultsDesc:this.$t.__("Will default opening hours set globally",this.$td),showOpeningHours:this.$t.__("Show Opening Hours",this.$td),labels:this.$t.__("Labels",this.$td),closedLabel:this.$t.__("Closed",this.$td),closedLabelDesc:this.$t.__("Displayed when the business is closed.",this.$td),closed:this.$t.__("Closed",this.$td),settings:this.$t.__("Settings",this.$td),open24h:this.$t.__("Open 24h",this.$td),open24Label:this.$t.__("Open 24h",this.$td),open24LabelDesc:this.$t.__("Displayed when the business is open all day long.",this.$td),alwaysOpen:this.$t.__("Open 24/7",this.$td),use24hFormat:this.$t.__("Use 24h format",this.$td),twoSets:this.$t.__("I have two sets of opening hours per day",this.$td),timezone:this.$t.__("Timezone",this.$td),hours:this.$t.__("Hours",this.$td)},weekdays:{monday:this.$t.__("Monday",this.$td),tuesday:this.$t.__("Tuesday",this.$td),wednesday:this.$t.__("Wednesday",this.$td),thursday:this.$t.__("Thursday",this.$td),friday:this.$t.__("Friday",this.$td),saturday:this.$t.__("Saturday",this.$td),sunday:this.$t.__("Sunday",this.$td)}}},computed:{...H(["currentPost"]),toggled:function(){return!0},unToggled:function(){return!1},closedLabel:{get(){return this.currentPost.local_seo.openingHours.closedLabel},set(s){this.currentPost.local_seo.openingHours.closedLabel=s}}},methods:{getSelectOptions(s){return this.currentPost.local_seo.openingHours.use24hFormat?this.$constants.HOURS_24H_FORMAT.find(t=>t.value===s):this.$constants.HOURS_12H_FORMAT.find(t=>t.value===s)},saveDay(s,t,c){this.currentPost.local_seo.openingHours.days[s][t]=c},getWeekDay(s){return this.currentPost.local_seo.openingHours.days[s]}}},Pe={class:"aioseo-tab-content aioseo-localseo-opening"},Le={class:"aioseo-col col-xs-12 text-xs-left"},Ae={key:0},Ie={class:"aioseo-col col-xs-12 text-xs-left"},Ve={class:"aioseo-col col-xs-12 text-xs-left"},De={class:"field-description"},He={class:"field-description mt-10"},Be={class:"aioseo-col col-xs-12 text-xs-left"},Oe={class:"field-description mt-8"},Te={class:"field-description mt-10"},ke={class:"aioseo-col col-xs-12 text-xs-left"},Re={class:"aioseo-col col-xs-12 text-xs-left"},Ne={class:"aioseo-col col-xs-12 text-xs-left"},Ue={class:"aioseo-col-day text-xs-left"},Me={class:"aioseo-col-hours text-xs-left"},ze=n("span",{class:"separator"},"-",-1),Ee={class:"aioseo-col-alwaysopen text-xs-left"};function We(s,t,c,f,e,r){const i=a("base-radio-toggle"),l=a("core-settings-row"),$=a("base-input"),y=a("base-toggle"),w=a("base-select"),v=a("base-checkbox");return _(),m("div",Pe,[o(l,{name:e.strings.useDefaults,align:""},{content:p(()=>[n("div",Le,[o(i,{name:"useDefaults",modelValue:s.currentPost.local_seo.openingHours.useDefaults,"onUpdate:modelValue":t[0]||(t[0]=h=>s.currentPost.local_seo.openingHours.useDefaults=h),options:[{label:s.$constants.GLOBAL_STRINGS.no,value:!1},{label:s.$constants.GLOBAL_STRINGS.yes,value:!0}]},null,8,["modelValue","options"])])]),_:1},8,["name"]),s.currentPost.local_seo.openingHours.useDefaults?x("",!0):(_(),m("div",Ae,[o(l,{name:e.strings.showOpeningHours,class:"info-openinghours-row",align:""},{content:p(()=>[n("div",Ie,[o(i,{name:"openingHours",modelValue:s.currentPost.local_seo.openingHours.show,"onUpdate:modelValue":t[1]||(t[1]=h=>s.currentPost.local_seo.openingHours.show=h),options:[{label:s.$constants.GLOBAL_STRINGS.no,value:!1},{label:s.$constants.GLOBAL_STRINGS.yes,value:!0}]},null,8,["modelValue","options"])])]),_:1},8,["name"]),s.currentPost.local_seo.openingHours.show?(_(),S(l,{key:0,name:e.strings.labels,class:"info-labels-row",align:""},{content:p(()=>[n("div",Ve,[n("span",De,d(e.strings.closedLabel),1),o($,{type:"text",size:"medium",modelValue:s.currentPost.local_seo.openingHours.labels.closed,"onUpdate:modelValue":t[2]||(t[2]=h=>s.currentPost.local_seo.openingHours.labels.closed=h)},null,8,["modelValue"]),n("span",He,d(e.strings.closedLabelDesc),1)]),n("div",Be,[n("span",Oe,d(e.strings.open24Label),1),o($,{size:"medium",modelValue:s.currentPost.local_seo.openingHours.labels.alwaysOpen,"onUpdate:modelValue":t[3]||(t[3]=h=>s.currentPost.local_seo.openingHours.labels.alwaysOpen=h)},null,8,["modelValue"]),n("span",Te,d(e.strings.open24LabelDesc),1)])]),_:1},8,["name"])):x("",!0),s.currentPost.local_seo.openingHours.show?(_(),S(l,{key:1,name:e.strings.settings,class:"info-settings-row",align:""},{content:p(()=>[n("div",ke,[o(y,{modelValue:s.currentPost.local_seo.openingHours.alwaysOpen,"onUpdate:modelValue":t[4]||(t[4]=h=>s.currentPost.local_seo.openingHours.alwaysOpen=h)},{default:p(()=>[P(d(e.strings.alwaysOpen),1)]),_:1},8,["modelValue"])]),n("div",Re,[o(y,{modelValue:s.currentPost.local_seo.openingHours.use24hFormat,"onUpdate:modelValue":t[5]||(t[5]=h=>s.currentPost.local_seo.openingHours.use24hFormat=h)},{default:p(()=>[P(d(e.strings.use24hFormat),1)]),_:1},8,["modelValue"])])]),_:1},8,["name"])):x("",!0),s.currentPost.local_seo.openingHours.show&&!s.currentPost.local_seo.openingHours.alwaysOpen?(_(),S(l,{key:2,name:e.strings.hours,class:"info-hours-row",align:""},{content:p(()=>[n("div",Ne,[(_(!0),m(W,null,F(e.weekdays,(h,u)=>(_(),m("div",{class:"aioseo-col-flex text-xs-left",key:u},[n("div",Ue,d(h),1),n("div",Me,[o(w,{disabled:r.getWeekDay(u).open24h||r.getWeekDay(u).closed,size:"medium",options:s.currentPost.local_seo.openingHours.use24hFormat?s.$constants.HOURS_24H_FORMAT:s.$constants.HOURS_12H_FORMAT,modelValue:r.getSelectOptions(r.getWeekDay(u).openTime),"onUpdate:modelValue":b=>r.saveDay(u,"openTime",b.value)},null,8,["disabled","options","modelValue","onUpdate:modelValue"]),ze,o(w,{disabled:r.getWeekDay(u).open24h||r.getWeekDay(u).closed,size:"medium",options:s.currentPost.local_seo.openingHours.use24hFormat?s.$constants.HOURS_24H_FORMAT:s.$constants.HOURS_12H_FORMAT,modelValue:r.getSelectOptions(r.getWeekDay(u).closeTime),"onUpdate:modelValue":b=>r.saveDay(u,"closeTime",b.value)},null,8,["disabled","options","modelValue","onUpdate:modelValue"])]),n("div",Ee,[o(v,{disabled:r.getWeekDay(u).closed,size:"medium",modelValue:r.getWeekDay(u).open24h,"onUpdate:modelValue":b=>r.getWeekDay(u).open24h=b},{default:p(()=>[P(d(e.strings.open24h),1)]),_:2},1032,["disabled","modelValue","onUpdate:modelValue"]),o(v,{size:"medium",class:"closed-label",modelValue:r.getWeekDay(u).closed,"onUpdate:modelValue":b=>r.getWeekDay(u).closed=b},{default:p(()=>[P(d(e.strings.closed),1)]),_:2},1032,["modelValue","onUpdate:modelValue"])])]))),128))])]),_:1},8,["name"])):x("",!0)]))])}const Fe=g(Se,[["render",We]]),Ge={};function Ye(s,t){return _(),m("div")}const Ze=g(Ge,[["render",Ye]]),qe={};function je(s,t){return _(),m("div")}const Je=g(qe,[["render",je]]);const Ke={components:{LocalBusinessMapCustomMarker:Ze,LocalBusinessMapDefaultStyle:Je},data(){return{strings:{}}}},Qe={class:"aioseo-tab-content aioseo-localseo-maps"};function Xe(s,t,c,f,e,r){const i=a("local-business-map-default-style"),l=a("local-business-map-custom-marker");return _(),m("div",Qe,[o(i),o(l)])}const st=g(Ke,[["render",Xe]]),et={components:{BusinessInfo:xe,CoreMainTabs:cs,OpeningHours:Fe,Maps:st,SvgSettings:_s},watch:{currentPost:{deep:!0,handler(){us(this.savePostState,250)}}},data(){return{tab:"business-info",tabs:[{slug:"business-info",icon:"svg-settings",name:this.$t.__("Business Info",this.$td)},{slug:"opening-hours",icon:"svg-settings",name:this.$t.__("Opening Hours",this.$td)},{slug:"maps",icon:"svg-settings",name:this.$t.__("Maps",this.$td)}]}},computed:{...H(["currentPost"])},methods:{...as(["savePostState"]),processChangeTab(s){this.tab=s}}},tt={class:"aioseo-app aioseo-post-settings"};function ot(s,t,c,f,e,r){const i=a("core-main-tabs");return _(),m("div",tt,[o(i,{tabs:e.tabs,showSaveButton:!1,active:e.tab,internal:"",disableMobile:"",onChanged:t[0]||(t[0]=l=>r.processChangeTab(l))},null,8,["tabs","active"]),o(G,{name:"route-fade",mode:"out-in"},{default:p(()=>[(_(),S(Y(e.tab)))]),_:1})])}const nt=g(et,[["render",ot]]),it={components:{"main-view":nt},computed:{...H(["currentPost"])},async created(){await X(this.$.appContext.app)}};function at(s,t,c,f,e,r){const i=a("main-view");return _(),m("div",null,[s.currentPost.id?(_(),S(i,{key:0})):x("",!0)])}const rt=g(it,[["render",at]]),k=Z({history:q(),routes:[{path:"/",component:D}]}),B=s=>(s=j(s),s=J(s),s=K(s),s.use(L),s.use(k),L._vm=s,k.app=s,s.config.globalProperties.$truSeo=new es,window.addEventListener("load",()=>is(s)),s),R=()=>{B(A({data(){return{tableContext:"post",screenContext:"sidebar"}},render:()=>I(D)})).mount("#aioseo-post-settings-sidebar-vue")};if(window.aioseo.currentPost){const s=window.aioseo.currentPost.context;document.querySelector(`#aioseo-${s}-settings-metabox`)&&N()&&(!window.wp.blockEditor&&window.wp.blocks&&window.wp.oldEditor&&(window.wp.blockEditor=window.wp.editor),B(A({data(){return{tableContext:s,screenContext:"metabox"}},render:()=>I(D)})).mount(`#aioseo-${s}-settings-metabox`),s==="post"&&(document.getElementById("aioseo-post-settings-sidebar-vue")?R():(ns("#aioseo-post-settings-sidebar-vue","aioseoSidebarVisible"),document.addEventListener("animationstart",function(f){f.animationName==="aioseoSidebarVisible"&&R()},{passive:!0}))))}window.aioseo.currentPost&&window.aioseo.localBusiness&&document.getElementById("aioseo-location-settings-metabox")&&B(A({data(){return{screenContext:"metabox"}},render:()=>I(rt)})).mount("#aioseo-location-settings-metabox");
