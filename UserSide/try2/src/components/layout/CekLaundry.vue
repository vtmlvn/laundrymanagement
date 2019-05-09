<template>
    <div>
        <section id="claundry" style="padding:80px">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Lacak Laundrymu</h2>
                <h3 class="section-subheading text-muted">Cek progres laundrymu disini</h3>
                </div>
            </div>
            <div style="width:70%; margin-left:auto; margin-right:auto;">
                <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                    <b-form-group
                        id="inpDepo1"
                        label="No. Struk:"
                        label-for="inp1"
                    >
                        <b-form-input
                            id="inp1"
                            v-model="form.inv"
                            type="text"
                            required
                            placeholder="A0382"
                        ></b-form-input>
                    </b-form-group>
                    <b-form-group
                        id="inpDepo2"
                        label="Nama"
                        label-for="inp2"
                    >
                        <b-form-input
                            id="inp2"
                            v-model="form.name"
                            type="text"
                            placeholder="Mbak Paua Yam"
                        ></b-form-input>
                    </b-form-group>
                    <b-form-group
                        id="inpDepo3"
                        label="Tanggal Cetak Struk :"
                        label-for="inp3"
                    >
                        <b-form-input
                            id="inp3"
                            v-model="form.date"
                            type="date"
                            min="2018-01-01"
                        ></b-form-input>
                    </b-form-group>
                    <b-button type="submit" variant="primary">Cari</b-button>
                    <b-button type="reset" variant="danger">Reset</b-button>
                </b-form>
                <b-card class="mt-3" header="Hasil Form">
                    <pre class="m-0">{{ form }}</pre>
                </b-card>
            </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'CekLaundry',
        data(){
            return{
                form:{
                    inv: '', 
                    name: '', 
                    date: '', 
                },
                show: true,
            }
        },
        methods: {
            onSubmit(evt) {
                evt.preventDefault()
                alert(JSON.stringify(this.form))
            },
            onReset(evt) {
                evt.preventDefault()
                // Reset our form values
                this.form.inv = ''
                this.form.name = ''
                this.form.date = ''
                // Trick to reset/clear native browser form validation state
                this.show = false
                this.$nextTick(() => {
                this.show = true
                })
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>