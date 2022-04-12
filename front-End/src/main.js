import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";

import PrimaPagina from "@/components/PrimaPagina.vue";
import PaginaRegistrazione from "@/components/PaginaRegistrazione.vue";
import PaginaAccesso from "@/components/PaginaAccesso.vue";
import PaginaHome from "@/components/PaginaHome.vue";
import EventoUtente from "@/components/EventoUtente.vue";
import EventoBar from "@/components/EventoBar.vue";
import PaginaBar from "@/components/PaginaBar.vue";
import PaginaPreferiti from "@/components/PaginaPreferiti.vue";
import CreaEventoUtente from "@/components/CreaEventoUtente.vue";
import CreaEventoBar from "@/components/CreaEventoBar.vue";
import ModificaEventoBar from "@/components/ModificaEventoBar.vue";
import ModificaEventoUtente from "@/components/ModificaEventoUtente.vue";
import PaginaScopri from "@/components/PaginaScopri.vue";
import AreaPersonaleUtente from "@/components/AreaPersonaleUtente.vue";
import AreaPersonaleBar from "@/components/AreaPersonaleBar.vue";
import ModificaProfiloUtente from "@/components/ModificaProfiloUtente.vue";
import ModificaProfiloBar from "@/components/ModificaProfiloBar.vue";
import CreatiDaMe from "@/components/CreatiDaMe.vue";
import PaginaImpostazioni from "@/components/PaginaImpostazioni.vue";
import FAQ from "@/components/FAQ.vue";
import PaginaPrivacy from "@/components/PaginaPrivacy.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "",
        name: "Prima Pagina",
        component: PrimaPagina,
    },
    {
        path: "/pagina-registrazione",
        name: "Pagina Registrazione",
        component: PaginaRegistrazione,
    },
    {
        path: "/pagina-accesso",
        name: "Pagina Accesso",
        component: PaginaAccesso,
    },
    {
        path: "/pagina-home",
        name: "Pagina Home",
        component: PaginaHome,
    },
    {
        path: "/evento-utente",
        name: "Evento Utente",
        component: EventoUtente,
    },
    {
        path: "/evento-bar",
        name: "Evento Bar",
        component: EventoBar,
    },
    {
        path: "/pagina-bar",
        name: "Pagina Bar",
        component: PaginaBar,
    },
    {
        path: "/pagina-preferiti",
        name: "Pagina Preferiti",
        component: PaginaPreferiti,
    },
    {
        path: "/crea-evento-utente",
        name: "Crea Evento Utente",
        component: CreaEventoUtente,
    },
    {
        path: "/crea-evento-bar",
        name: "Crea Evento Bar",
        component: CreaEventoBar,
    },
    {
        path: "/modifica-evento-bar",
        name: "Modifica Evento Bar",
        component: ModificaEventoBar,
    },
    {
        path: "/modifica-evento-utente",
        name: "Modifica Evento Utente",
        component: ModificaEventoUtente,
    },
    {
        path: "/pagina-scopri",
        name: "Pagina Scopri",
        component: PaginaScopri,
    },
    {
        path: "/area-personale-utente",
        name: "Area Personale Utente",
        component: AreaPersonaleUtente,
    },
    {
        path: "/area-personale-bar",
        name: "Area Personale Bar",
        component: AreaPersonaleBar,
    },
    {
        path: "/modifica-profilo-utente",
        name: "Modifica Profilo Utente",
        component: ModificaProfiloUtente,
    },
    {
        path: "/modifica-profilo-bar",
        name: "Modifica Profilo Bar",
        component: ModificaProfiloBar,
    },
    {
        path: "/creati-da-me",
        name: "Creati Da Me",
        component: CreatiDaMe,
    },
    {
        path: "/pagina-impostazioni",
        name: "Pagina Impostazioni",
        component: PaginaImpostazioni,
    },
    {
        path: "/faq",
        name: "FAQ",
        component: FAQ,
    },
    {
        path: "/pagina-privacy",
        name: "Pagina Privacy",
        component: PaginaPrivacy,
    },
];

const router = new VueRouter({
    mode: "history",
    routes, // short for `routes: routes`
});

Vue.config.productionTip = false;

new Vue({
    render: (h) => h(App),
    router,
}).$mount("#app");
