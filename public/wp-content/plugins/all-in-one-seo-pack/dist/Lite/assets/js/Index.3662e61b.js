import{C as T}from"./index.fae5bbc8.js";import{B as V,a as x}from"./Caret.19bf2275.js";import{G as A,a as w}from"./Row.d42459be.js";import{_ as M,r as f,c,a as o,e as d,b as r,w as u,f as a,t as n,B as H,o as e,y as s,F as B,G as b,d as L}from"./_plugin-vue_export-helper.a81c6319.js";const S={emits:["cta-button-click"],components:{CoreAlert:T,BaseButton:V,GridColumn:A,GridRow:w,SvgCircleCheck:x},props:{type:{type:Number,default(){return 1},validator(i){return[1,2,3,4,5].includes(i)}},featureList:Array,sameTab:Boolean,ctaButtonAction:Boolean,ctaButtonLoading:Boolean,ctaLink:{type:String,required:!1},learnMoreLink:{type:String,required:!1},buttonText:{type:String,required:!1},floating:{type:Boolean,default(){return!0}},showLink:{type:Boolean,default(){return!0}},ctaButtonVisible:{type:Boolean,default(){return!0}},ctaButtonVisibleWarning:String,alignTop:{type:Boolean,default(){return!1}}},data(){return{target:"_blank",strings:{upgradeToPro:this.$t.sprintf(this.$t.__("Upgrade to %1$s",this.$td),"Pro"),ctaHeader:this.$t.sprintf(this.$t.__("This feature is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s comes with many additional features to help take your site's SEO to the next level!",this.$td),"AIOSEO","Pro"),learnMoreAllFeatures:this.$t.__("Learn more about all features",this.$td),seeAllFeatures:this.$t.__("See all features",this.$td)}}},methods:{ctaButtonClick(i){this.ctaButtonAction&&(i.preventDefault(),this.$emit("cta-button-click"))}},mounted(){this.sameTab&&(this.target="_self")}},F={class:"aioseo-cta-background"},W={key:0,class:"type-1"},D={class:"header-text"},P={class:"description"},N=["href"],O={key:1,class:"type-2"},E={class:"header-text"},G={class:"description"},q=o("br",null,null,-1),z=o("br",null,null,-1),I=["href"],R={class:"featured-image"},U={key:2,class:"type-3"},j={class:"sub-header"},J={class:"header-text"},K={key:3,class:"type-4"},Q={class:"header-text"},X={class:"description"};function Y(i,Z,t,p,l,v){const h=f("svg-circle-check"),y=f("grid-column"),k=f("grid-row"),C=f("core-alert"),m=f("base-button");return e(),c("div",{class:H(["aioseo-cta",{floating:t.floating,"align-top":t.alignTop}])},[o("div",F,[t.type===1?(e(),c("div",W,[o("div",D,[d(i.$slots,"header-text",{},()=>[s(n(l.strings.ctaHeader),1)])]),o("div",P,[d(i.$slots,"description",{},()=>[s(n(l.strings.ctaDescription),1)])]),t.featureList?(e(),r(k,{key:0,class:"feature-list"},{default:u(()=>[(e(!0),c(B,null,b(t.featureList,(_,g)=>(e(),r(y,{md:"6",key:g},{default:u(()=>[L(h),s(" "+n(_),1)]),_:2},1024))),128))]),_:1})):a("",!0),!t.ctaButtonVisible&&t.ctaButtonVisibleWarning?(e(),r(C,{key:1,type:"yellow",innerHTML:t.ctaButtonVisibleWarning},null,8,["innerHTML"])):a("",!0),t.ctaButtonVisible?(e(),r(m,{key:2,type:"green",tag:"a",href:t.ctaLink,target:l.target,onClick:v.ctaButtonClick,loading:t.ctaButtonLoading},{default:u(()=>[s(n(t.buttonText),1)]),_:1},8,["href","target","onClick","loading"])):a("",!0),t.showLink?(e(),c("a",{key:3,class:"learn-more",href:t.learnMoreLink,target:"_blank"},[d(i.$slots,"learn-more-text",{},()=>[s(n(l.strings.learnMoreAllFeatures),1)])],8,N)):a("",!0)])):a("",!0),t.type===2?(e(),c("div",O,[o("div",null,[o("div",E,[d(i.$slots,"header-text",{},()=>[s(n(l.strings.ctaHeader),1)])]),o("div",G,[d(i.$slots,"description",{},()=>[s(n(l.strings.ctaDescription),1)])]),t.featureList&&t.featureList.length<=5?(e(),r(k,{key:0,class:"feature-list"},{default:u(()=>[(e(!0),c(B,null,b(t.featureList,(_,g)=>(e(),r(y,{md:"12",key:g},{default:u(()=>[L(h),s(" "+n(_),1)]),_:2},1024))),128))]),_:1})):a("",!0),t.featureList&&t.featureList.length>5?(e(),r(k,{key:1,class:"feature-list"},{default:u(()=>[(e(!0),c(B,null,b(t.featureList,(_,g)=>(e(),r(y,{md:"6",key:g},{default:u(()=>[L(h),s(" "+n(_),1)]),_:2},1024))),128))]),_:1})):a("",!0),!t.ctaButtonVisible&&t.ctaButtonVisibleWarning?(e(),r(C,{key:2,type:"yellow",innerHTML:t.ctaButtonVisibleWarning},null,8,["innerHTML"])):a("",!0),t.ctaButtonVisible?(e(),r(m,{key:3,type:"green",tag:"a",href:t.ctaLink,target:l.target,onClick:v.ctaButtonClick,loading:t.ctaButtonLoading},{default:u(()=>[s(n(t.buttonText),1)]),_:1},8,["href","target","onClick","loading"])):a("",!0),q,z,t.showLink?(e(),c("a",{key:4,class:"learn-more",href:t.learnMoreLink,target:"_blank"},[d(i.$slots,"learn-more-text",{},()=>[s(n(l.strings.learnMoreAllFeatures),1)])],8,I)):a("",!0)]),o("div",R,[d(i.$slots,"featured-image")])])):a("",!0),t.type===3?(e(),c("div",U,[o("div",j,n(l.strings.upgradeToPro),1),o("div",J,[d(i.$slots,"header-text",{},()=>[s(n(l.strings.ctaHeader),1)])]),t.featureList?(e(),r(k,{key:0,class:"feature-list"},{default:u(()=>[(e(!0),c(B,null,b(t.featureList,(_,g)=>(e(),r(y,{md:"6",key:g},{default:u(()=>[L(h),s(" "+n(_),1)]),_:2},1024))),128))]),_:1})):a("",!0),!t.ctaButtonVisible&&t.ctaButtonVisibleWarning?(e(),r(C,{key:1,type:"yellow",innerHTML:t.ctaButtonVisibleWarning},null,8,["innerHTML"])):a("",!0),t.ctaButtonVisible?(e(),r(m,{key:2,type:"green",tag:"a",href:t.ctaLink,target:l.target,onClick:v.ctaButtonClick,loading:t.ctaButtonLoading,size:"medium"},{default:u(()=>[s(n(t.buttonText),1)]),_:1},8,["href","target","onClick","loading"])):a("",!0),t.showLink?(e(),r(m,{key:3,type:"gray",tag:"a",href:t.learnMoreLink,target:"_blank",size:"medium"},{default:u(()=>[d(i.$slots,"learn-more-text",{},()=>[s(n(l.strings.seeAllFeatures),1)])]),_:3},8,["href"])):a("",!0)])):a("",!0),t.type===4?(e(),c("div",K,[o("div",Q,[d(i.$slots,"header-text",{},()=>[s(n(l.strings.ctaHeader),1)])]),o("div",X,[d(i.$slots,"description",{},()=>[s(n(l.strings.ctaDescription),1)])])])):a("",!0)])],2)}const at=M(S,[["render",Y]]);export{at as C};
