<template>
    <div>
        <div class="titoli">Preferiti</div>
        <div class="preferiti">
            <router-link to="pagina-bar" tag="a" class="pref">
                <img src="../assets/es.png" alt="casa" />
                <div class="testo">
                    <div>
                        <img src="../assets/cuore.png" alt="cuoricino" style="width: 16px; height: 16px" />
                        Bar pistacchio
                    </div>
                </div>
            </router-link>
            <router-link to="pagina-bar" tag="a" class="pref">
                <img src="../assets/es.png" alt="casa" />
                <div class="testo">
                    <div>
                        <img src="../assets/cuore.png" alt="cuoricino" style="width: 16px; height: 16px" />
                        Bar pistacchio
                    </div>
                </div>
            </router-link>
        </div>

        <div class="menu">
            <router-link to="pagina-home" tag="a" class="link">
                <img src="../assets/bx_bxs-home.png" alt="casa" />
                Home
            </router-link>
            <router-link to="#" tag="a" class="link">
                <img src="../assets/cuore.png" alt="cuore" />
                Preferiti
            </router-link>
            <router-link to="crea-evento-utente" tag="a" class="link">
                <img src="../assets/bx_bx-plus-circle.png" alt="zircles" />
            </router-link>
            <router-link to="pagina-scopri" tag="a" class="link">
                <img src="../assets/bx_bxs-drink.png" alt="bicchiere" />
                Scopri
            </router-link>
            <router-link to="#" tag="a" class="link">
                <img src="../assets/bx_bxs-user.png" alt="utente" />
                Profilo
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PaginaPreferiti',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
