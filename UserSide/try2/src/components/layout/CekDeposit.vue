<template>
    <div>
        <section style="padding:80px">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Cek Deposit</h2>
                <h3 class="section-subheading text-muted">Cek sisa deposit yang bisa anda gunakan</h3>
                </div>
            </div>
            <div>
                <b-form inline style="text-align:center;">
                    <b-form-input v-model="NamaDepan" style="padding-left:30px" placeholder="Masukan Nama Depan"></b-form-input>
                    <b-form-input v-model="verivicator" placeholder="Masukan no.HP / tanggal ulang tahun"></b-form-input>
                    <b-button varian="primary" type="submit">Cek!</b-button>
                </b-form>
            </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'CekDeposit'
    }
</script>

<style lang="scss" scoped>

</style>