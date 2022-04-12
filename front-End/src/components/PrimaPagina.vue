<template>
    <div>
        <div class="logo">
            <img src="../assets/img-re.png" alt="background" class="mx-auto d-block" style="margin-bottom: -2px" />
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FBF5EB" fill-opacity="1" d="M0,96L40,101.3C80,107,160,117,240,149.3C320,181,400,235,480,234.7C560,235,640,181,720,160C800,139,880,149,960,176C1040,203,1120,245,1200,272C1280,299,1360,309,1400,314.7L1440,320L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
        </svg>
        <div class="pp">
            <div>
                <a href="file/registrati.html">
                    <router-link to="pagina-registrazione" tag="button" class="btn">Registrati</router-link>
                </a>
            </div>
            <div>
                <a href="file/accesso.html">
                    <router-link to="pagina-accesso" tag="button" id="acc" class="btn">Accedi</router-link>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PrimaPagina',
};
</script>

<style></style>
