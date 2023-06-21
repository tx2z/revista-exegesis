import{c as A,m as T,b as j}from"./vuex.esm-bundler.55d3d5b3.js";import{A as w,T as B}from"./TitleDescription.8ae9e95f.js";import{C as D}from"./Card.0a3b54f8.js";import{C as F}from"./Tabs.5bdc95fd.js";import{C as x}from"./Tooltip.c4cc47a2.js";import{C as f,S as q}from"./Schema.8349f855.js";import{_ as y,r as a,o as s,c as b,b as p,f as g,F as L,G as N,w as n,a as i,B as O,y as h,t as r,d as l,x as U,C as V}from"./_plugin-vue_export-helper.a81c6319.js";import{S as M}from"./index.fae5bbc8.js";import"./default-i18n.0e8bc810.js";import"./_commonjsHelpers.f84db168.js";import"./helpers.51e5fd9c.js";import"./WpTable.3e09f0c1.js";import"./Index.3662e61b.js";import"./Caret.19bf2275.js";import"./Row.d42459be.js";import"./RequiresUpdate.52f5acf2.js";import"./postContent.f08c6962.js";import"./index.4dbecc01.js";import"./cleanForSlug.d16f1e3a.js";import"./constants.e56e1512.js";import"./html.a669733f.js";import"./Index.048705a6.js";import"./JsonValues.870a4901.js";import"./MaxCounts.12b45bab.js";import"./SaveChanges.c85e9ba4.js";import"./RadioToggle.cfd7da6d.js";import"./ProBadge.c7f4f378.js";import"./RobotsMeta.b9d9406e.js";import"./Checkbox.ec732dfe.js";import"./Checkmark.36fbf255.js";import"./SettingsRow.bc3a4ca9.js";import"./GoogleSearchPreview.170d666f.js";import"./HtmlTagsEditor.5ebef317.js";import"./Editor.5cedc7bc.js";import"./UnfilteredHtml.ceff4936.js";import"./Slide.4392623f.js";import"./TruSeoScore.1eab6bb1.js";import"./Information.050096cc.js";import"./Textarea.35929fe6.js";import"./Blur.17ef7d02.js";const z={components:{CustomFields:f,CustomFieldsLite:f},props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean},computed:{...A(["isUnlicensed"])}},G={class:"aioseo-sa-ct-custom-fields-view"};function E(t,m,o,C,c,u){const _=a("custom-fields",!0),d=a("custom-fields-lite");return s(),b("div",G,[t.isUnlicensed?g("",!0):(s(),p(_,{key:0,type:o.type,object:o.object,options:o.options,"show-bulk":o.showBulk},null,8,["type","object","options","show-bulk"])),t.isUnlicensed?(s(),p(d,{key:1,type:o.type,object:o.object,options:o.options,"show-bulk":o.showBulk},null,8,["type","object","options","show-bulk"])):g("",!0)])}const P=y(z,[["render",E]]);const Q={components:{Advanced:w,CoreCard:D,CoreMainTabs:F,CoreTooltip:x,CustomFields:P,Schema:q,SvgCircleQuestionMark:M,TitleDescription:B},data(){return{internalDebounce:null,strings:{label:this.$t.__("Label:",this.$td),name:this.$t.__("Slug:",this.$td)},tabs:[{slug:"title-description",name:this.$t.__("Title & Description",this.$td),access:"aioseo_search_appearance_settings",pro:!1},{slug:"schema",name:this.$t.__("Schema Markup",this.$td),access:"aioseo_search_appearance_settings",pro:!0},{slug:"custom-fields",name:this.$t.__("Custom Fields",this.$td),access:"aioseo_search_appearance_settings",pro:!0},{slug:"advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_search_appearance_settings",pro:!1}]}},computed:{...T(["options","dynamicOptions","settings"]),postTypes(){return this.$aioseo.postData.postTypes.filter(t=>t.name!=="attachment")}},methods:{...j(["changeTab"]),processChangeTab(t,m){this.internalDebounce||(this.internalDebounce=!0,this.changeTab({slug:`${t}SA`,value:m}),setTimeout(()=>{this.internalDebounce=!1},50))}}},R={class:"aioseo-search-appearance-content-types"},H={class:"aioseo-description"},I=i("br",null,null,-1),J=i("br",null,null,-1);function K(t,m,o,C,c,u){const _=a("svg-circle-question-mark"),d=a("core-tooltip"),v=a("core-main-tabs"),k=a("core-card");return s(),b("div",R,[(s(!0),b(L,null,N(u.postTypes,(e,$)=>(s(),p(k,{key:$,slug:`${e.name}SA`},{header:n(()=>[i("div",{class:O(["icon dashicons",`${e.icon||"dashicons-admin-post"}`])},null,2),h(" "+r(e.label)+" ",1),l(d,{"z-index":"99999"},{tooltip:n(()=>[i("div",H,[h(r(c.strings.label)+" ",1),i("strong",null,r(e.label),1),I,h(" "+r(c.strings.name)+" ",1),i("strong",null,r(e.name),1),J])]),default:n(()=>[l(_)]),_:2},1024)]),tabs:n(()=>[l(v,{tabs:c.tabs,showSaveButton:!1,active:t.settings.internalTabs[`${e.name}SA`],internal:"",onChanged:S=>u.processChangeTab(e.name,S)},null,8,["tabs","active","onChanged"])]),default:n(()=>[l(V,{name:"route-fade",mode:"out-in"},{default:n(()=>[(s(),p(U(t.settings.internalTabs[`${e.name}SA`]),{object:e,separator:t.options.searchAppearance.global.separator,options:t.dynamicOptions.searchAppearance.postTypes[e.name],type:"postTypes"},null,8,["object","separator","options"]))]),_:2},1024)]),_:2},1032,["slug"]))),128))])}const Ot=y(Q,[["render",K]]);export{Ot as default};
