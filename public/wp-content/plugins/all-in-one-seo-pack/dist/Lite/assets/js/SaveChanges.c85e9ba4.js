import{b as a}from"./vuex.esm-bundler.55d3d5b3.js";const r={emits:["changes-saved"],methods:{...a(["saveChanges","saveHtaccess","saveNetworkRobots"]),processSaveChanges(){this.$store.commit("loading",!0);let s=!1,e=!1,t="saveChanges";setTimeout(()=>{s=!0,e&&this.$store.commit("loading",!1)},1500),this.$store.state.route.name==="htaccess-editor"&&(t="saveHtaccess",this.$store.commit("setHtaccessError",null)),this.$aioseo.data.isNetworkAdmin&&this.$store.state.route.name==="robots-editor"&&(t="saveNetworkRobots"),this[t]().then(o=>{o&&o.body.redirection||(s||this.$store.state.route.name==="htaccess-editor"?this.$store.commit("loading",!1):e=!0,this.$bus.$emit("changes-saved"))})}}};export{r as S};
