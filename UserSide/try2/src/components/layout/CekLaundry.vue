<template>
    <div>
        <section style="padding:80px">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Lacak Laundrymu</h2>
                <h3 class="section-subheading text-muted">Cek progres laundrymu disini</h3>
                </div>
            </div>
            <div>
                <form action="#" class="form-inline ">
                    <b-form-input v-model="idInvoice" placeholder="Masukan No. Struk"></b-form-input>
                    <b-form-input v-model="verivicator" placeholder="Masukan no.HP / tanggal masuk"></b-form-input>
                    <b-button varian="primary" type="submit">Cek!</b-button>
                </form>
            </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'CekLaundry'
    }
</script>

<style lang="scss" scoped>

</style>