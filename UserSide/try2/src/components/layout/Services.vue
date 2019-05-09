<template>
    <div>
        <section id="services">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Service</h2>
                <h3 class="section-subheading text-muted">Berbagai macam servis untuk semua kebutuhan laundry anda</h3>
                </div>
            </div>
            <b-tabs content-class="mt-7" justified>
                <b-tab title="Kiloan" active>
                    <b-table striped hover fixed small :items="kilo" :fields="desc"></b-table>
                </b-tab>
                <b-tab title="Household">
                    <b-table striped hover fixed small :items="household" :fields="desc"></b-table>                   
                </b-tab>
                <b-tab title="Peripheral">
                    <b-table striped hover fixed small :items="peripheral" :fields="desc"></b-table>
                </b-tab>
                <b-tab title="Drycleaning">
                    <b-table striped hover fixed small :items="dryclean" :fields="desc"></b-table>
                </b-tab>
                <b-tab title="Bleaching">
                    <b-table striped hover fixed small :items="bleaching" :fields="desc"></b-table>                    
                </b-tab>
            </b-tabs>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'Services',
        data(){
            return{
                desc:
                {
                    nama:{
                        label : "Nama Service",
                        sortable : false,
                    },
                    harga:{
                        label : "Harga",
                        sortable : true,
                    },
                },
                kilo: [
                    {nama: "3 Hari", harga: "6000"},
                    {nama: "2 Hari", harga: "8000"},
                    {nama: "1 Hari", harga: "10000"},
                    {nama: "12 Jam", harga: "12000"},
                    {nama: "4 Jam", harga: "14000"},
                ],
                household: [
                    {nama: "Bantal", harga: "15000"},
                    {nama: "Guling", harga: "20000"},
                    {nama: "Balmut", harga: "25000"},
                    {nama: "Boneka Small", harga: "10000"},
                    {nama: "Boneka Medium", harga: "20000"},
                    {nama: "Boneka Large", harga: "30000"},
                    {nama: "Boneka Jumbo", harga: "50000"},
                    {nama: "Selimut", harga: "15000"},
                    {nama: "Bedcover Single", harga: "20000"},
                    {nama: "Bedcover Double", harga: "30000"},
                    {nama: "Bedcover King", harga: "40000"},
                    {nama: "Sprei", harga: "7000"},
                    {nama: "Karpet Lite", harga: "12500/m2"},
                    {nama: "Karpet Standard", harga: "14000/m2"},
                    {nama: "Karpet Medium", harga: "18000/m2"},
                    {nama: "Karpet Super", harga: "25000/m2"},
                    {nama: "Permadani", harga: "35000/m2"},
                    {nama: "Kasur Busa", harga: "15000/m2"},
                    {nama: "Kasur Lantai", harga: "17000/m2"},
                ],
                peripheral:[
                    {nama:"Daypack", harga:"15000"},
                    {nama:"Koper", harga:"25000"},
                    {nama:"Waistbag", harga:"15000"},
                    {nama:"Carrier", harga:"35000"},
                    {nama:"Leather Bag", harga:"25000"},
                    {nama:"Helmet Half face", harga:"15000"},
                    {nama:"Helmet Fullface", harga:"20000"},
                    {nama:"Sleeping Bag", harga:"20000"},
                    {nama:"Keset", harga:"7000"},
                    {nama:"Sajadah", harga:"10000"},
                    {nama:"Mukena", harga:"7000"},
                ],
                dryclean:[
                    {nama:"Jas/Blazer", harga:"25000"},
                    {nama:"Kemeja", harga:"10000"},
                    {nama:"Batik", harga:"15000"},
                    {nama:"Seragam Atasan", harga:"20000"},
                    {nama:"Celana", harga:"10000"},
                    {nama:"Denim Pants", harga:"20000"},
                    {nama:"Denim Jacket", harga:"25000"},
                    {nama:"Jacket Parachute", harga:"15000"},
                    {nama:"Sweater", harga:"15000"},
                    {nama:"Winter Jacket", harga:"35000"},
                    {nama:"Wearpack", harga:"20000"},
                    {nama:"Jas Lab", harga:"20000"},
                    {nama:"Tshirt", harga:"10000"},
                    {nama:"Jersey", harga:""},
                    {nama:"Dress/Gaun", harga:""},
                    {nama:"Kebaya Atasan", harga:""},
                    {nama:"Songket", harga:""},
                    {nama:"Baju Adat Atas", harga:"25000"},
                    {nama:"Baju Adat Set", harga:"45000"},
                ],
                bleaching:[
                    {nama:"Baju", harga:"15000"},
                    {nama:"Celana", harga:"25000"},
                ],
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>