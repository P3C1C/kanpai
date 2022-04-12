<template>
    <div>
        <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
            <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
        </a>
        <div class="titoli" style="display: inline-block">Modifica Profilo</div>

        <div class="imgProfilo">
            <img src="../assets/imgUser.png" alt="" />
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Nome</span>
            <div>
                <input type="text" class="nomePro" />
            </div>
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Indirizzo</span>
            <div>
                <input type="text" class="nomePro" />
            </div>
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Biografia</span>
            <div>
                <textarea class="inputdesc" maxlength="100" placeholder="Racconta qualcosa su di te"></textarea>
            </div>
        </div>

        <div class="bottonecrea">
            <button class="btn"><i class="bi bi-plus-circle-fill"></i> Conferma</button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ModificaProfiloBar',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
