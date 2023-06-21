import"./default-i18n.0e8bc810.js";import{u as U}from"./Wizard.b09ab7d7.js";import{W as B}from"./WpTable.3e09f0c1.js";import"./constants.e56e1512.js";import{_ as H,r as n,c as m,d as t,w as i,b as v,f as h,o as c,a as s,y as d,t as a,D as P,F as V,G as F}from"./_plugin-vue_export-helper.a81c6319.js";import"./index.4dbecc01.js";import"./SaveChanges.c85e9ba4.js";import{a as O,m as k,b as y}from"./vuex.esm-bundler.55d3d5b3.js";import{B as D}from"./Checkbox.ec732dfe.js";import{C as Y,S as G}from"./index.fae5bbc8.js";import{C as q}from"./Index.048705a6.js";import{C as j}from"./ProBadge.c7f4f378.js";import{C as Q}from"./Tooltip.c4cc47a2.js";import{G as J,a as K}from"./Row.d42459be.js";import{S as X}from"./Caret.19bf2275.js";import{W as Z,a as ee,b as se}from"./Header.df05af20.js";import{W as te,a as oe}from"./Steps.2543cf64.js";import"./_commonjsHelpers.f84db168.js";import"./Index.3662e61b.js";import"./helpers.51e5fd9c.js";import"./RequiresUpdate.52f5acf2.js";import"./postContent.f08c6962.js";import"./cleanForSlug.d16f1e3a.js";import"./html.a669733f.js";import"./Checkmark.36fbf255.js";import"./Logo.c7083a99.js";const ne={setup(){const{strings:o}=U();return{composableStrings:o}},components:{BaseCheckbox:D,CoreAlert:Y,CoreModal:q,CoreProBadge:j,CoreTooltip:Q,GridColumn:J,GridRow:K,SvgCircleQuestionMark:G,SvgClose:X,WizardBody:Z,WizardCloseAndExit:te,WizardContainer:ee,WizardHeader:se,WizardSteps:oe},mixins:[B],data(){return{loading:!1,stage:"smart-recommendations",showModal:!1,loadingModal:!1,strings:O(this.composableStrings,{setupSiteAnalyzer:this.$t.__("Setup Site Analyzer + Smart Recommendations",this.$td),description:this.$t.sprintf(this.$t.__("Get helpful suggestions from %1$s on how to optimize your website content, so you can rank higher in search results.",this.$td),"AIOSEO"),yourEmailAddress:this.$t.__("Your Email Address",this.$td),yourEmailIsNeeded:this.$t.__("Your email is needed so you can receive SEO recommendations. This email will also be used to connect your site with our SEO API.",this.$td),helpMakeAioseoBetter:this.$t.sprintf(this.$t.__("Help make %1$s better for everyone",this.$td),"AIOSEO"),yesCountMeIn:this.$t.__("Yes, count me in",this.$td),wouldYouLikeToPurchase:this.$t.__("Would you like to purchase and install the following features now?",this.$td),theseFeaturesAreAvailable:this.$t.__("An upgrade is required to unlock the following features.",this.$td),youWontHaveAccess:this.$t.__("You won't have access to this functionality until the extensions have been purchased and installed.",this.$td),illDoItLater:this.$t.__("I'll do it later",this.$td),purchaseAndInstallNow:this.$t.__("Purchase and Install Now",this.$td),bonusText:this.$t.sprintf(this.$t.__("%1$sBonus:%2$s You can upgrade your plan today and %3$ssave %4$s off%5$s (discount auto-applied).",this.$td),"<strong>","</strong>","<strong>",this.$constants.DISCOUNT_PERCENTAGE,"</strong>"),usageTrackingTooltip:this.$t.sprintf(this.$t.__("Complete documentation on usage tracking is available %1$shere%2$s.",this.$td),this.$t.sprintf('<strong><a href="%1$s" target="_blank">',this.$links.getDocUrl("usageTracking")),"</a></strong>")})}},computed:{...k(["internalOptions"]),...k("wizard",{smartRecommendations:"smartRecommendations",presetFeatures:"features"}),selectedFeaturesNeedsUpsell(){let o=!1;return this.presetFeatures.forEach(r=>{this.needsUpsell(this.features.find(g=>g.value===r))&&(o=!0)}),o}},methods:{...y(["saveConnectToken"]),...y("wizard",["saveWizard"]),purchase(){this.modalLoading=!0;const o=`&license-redirect=${btoa(this.$aioseo.urls.aio.wizard)}#/license-key`;window.open("https://aioseo.com/pricing/?features[]="+this.getSelectedUpsellFeatures.map(r=>r.value).join("&features[]=")+o),this.$router.push(this.getNextLink)},saveAndContinue(){this.loading=!0,this.saveWizard("smartRecommendations").then(()=>{if(!this.selectedFeaturesNeedsUpsell)return this.$router.push(this.getNextLink);this.showModal=!0,this.loading=!1})},skipStep(){this.saveWizard(),this.$router.push(this.getNextLink)},preventUncheck(o){o.preventDefault(),o.stopPropagation()}},mounted(){this.smartRecommendations.accountInfo=this.$aioseo.user.data.data.user_email}},ie={class:"aioseo-wizard-smart-recommendations"},re={class:"header"},ae={class:"description"},le={class:"aioseo-settings-row no-border small-padding"},de={class:"settings-name"},ce={class:"name small-margin"},ue={class:"aioseo-description"},me={key:0,class:"aioseo-settings-row no-border no-margin small-padding"},pe={class:"settings-name"},_e={class:"name small-margin"},he=["innerHTML"],ge={class:"go-back"},fe=s("div",{class:"spacer"},null,-1),ve={class:"aioseo-modal-body"},ke=["innerHTML"],ye={class:"settings-name"},we={class:"name small-margin"},be={class:"aioseo-description-text"},Ce=["innerHTML"],$e={class:"actions"},Ae=s("div",{class:"spacer"},null,-1),ze={class:"go-back"};function Se(o,r,g,Te,e,u){const w=n("wizard-header"),b=n("wizard-steps"),C=n("base-input"),$=n("svg-circle-question-mark"),A=n("core-tooltip"),z=n("base-toggle"),p=n("router-link"),_=n("base-button"),S=n("wizard-body"),T=n("wizard-close-and-exit"),M=n("wizard-container"),L=n("svg-close"),I=n("core-pro-badge"),f=n("grid-column"),N=n("base-checkbox"),x=n("grid-row"),W=n("core-alert"),E=n("core-modal");return c(),m("div",ie,[t(w),t(M,null,{default:i(()=>[t(S,null,{footer:i(()=>[s("div",ge,[t(p,{to:o.getPrevLink,class:"no-underline"},{default:i(()=>[d("←")]),_:1},8,["to"]),d("   "),t(p,{to:o.getPrevLink},{default:i(()=>[d(a(e.strings.goBack),1)]),_:1},8,["to"])]),fe,t(_,{type:"gray",onClick:u.skipStep},{default:i(()=>[d(a(e.strings.skipThisStep),1)]),_:1},8,["onClick"]),t(_,{type:"blue",loading:e.loading,onClick:u.saveAndContinue},{default:i(()=>[d(a(e.strings.saveAndContinue)+" →",1)]),_:1},8,["loading","onClick"])]),default:i(()=>[t(b),s("div",re,a(e.strings.setupSiteAnalyzer),1),s("div",ae,a(e.strings.description),1),s("div",le,[s("div",de,[s("div",ce,a(e.strings.yourEmailAddress),1)]),t(C,{size:"medium",modelValue:o.smartRecommendations.accountInfo,"onUpdate:modelValue":r[0]||(r[0]=l=>o.smartRecommendations.accountInfo=l)},null,8,["modelValue"]),s("div",ue,a(e.strings.yourEmailIsNeeded),1)]),o.$isPro?h("",!0):(c(),m("div",me,[s("div",pe,[s("div",_e,[d(a(e.strings.helpMakeAioseoBetter)+" ",1),t(A,null,{tooltip:i(()=>[s("div",{innerHTML:e.strings.usageTrackingTooltip},null,8,he)]),default:i(()=>[t($)]),_:1})])]),t(z,{modelValue:o.smartRecommendations.usageTracking,"onUpdate:modelValue":r[1]||(r[1]=l=>o.smartRecommendations.usageTracking=l)},{default:i(()=>[d(a(e.strings.yesCountMeIn),1)]),_:1},8,["modelValue"])]))]),_:1}),t(T)]),_:1}),e.showModal?(c(),v(E,{key:0,"no-header":"",onClose:r[4]||(r[4]=l=>e.showModal=!1)},{body:i(()=>[s("div",ve,[s("button",{class:"close",onClick:r[3]||(r[3]=P(l=>e.showModal=!1,["stop"]))},[t(L,{onClick:r[2]||(r[2]=l=>e.showModal=!1)})]),s("h3",null,a(e.strings.wouldYouLikeToPurchase),1),s("div",{class:"available-features",innerHTML:e.strings.theseFeaturesAreAvailable},null,8,ke),(c(!0),m(V,null,F(o.getSelectedUpsellFeatures,(l,R)=>(c(),m("div",{key:R,class:"aioseo-settings-row feature-grid small-padding medium-margin"},[t(x,null,{default:i(()=>[t(f,{xs:"11"},{default:i(()=>[s("div",ye,[s("div",we,[d(a(l.name)+" ",1),o.needsUpsell(l)?(c(),v(I,{key:0})):h("",!0)]),s("div",be,a(l.description),1)])]),_:2},1024),t(f,{xs:"1"},{default:i(()=>[t(N,{round:"",class:"no-clicks",type:"green",modelValue:!0,onClick:u.preventUncheck},null,8,["onClick"])]),_:1})]),_:2},1024)]))),128)),s("div",{class:"available-features no-access",innerHTML:e.strings.youWontHaveAccess},null,8,Ce),s("div",$e,[Ae,s("div",ze,[t(p,{to:o.getNextLink},{default:i(()=>[d(a(e.strings.illDoItLater),1)]),_:1},8,["to"])]),t(_,{type:"green",loading:e.loadingModal,onClick:u.purchase},{default:i(()=>[d(a(e.strings.purchaseAndInstallNow),1)]),_:1},8,["loading","onClick"])]),t(W,{type:"yellow",innerHTML:e.strings.bonusText},null,8,["innerHTML"])])]),_:1})):h("",!0)])}const ss=H(ne,[["render",Se]]);export{ss as default};
