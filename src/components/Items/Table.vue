<template>
    <div>
        <h3>List Harga Satuan</h3>
        <table >
            <tr>
                <th>Kelas</th>
                <th>Nama Item</th>
                <th>Harga</th>
                <th>Edit/Delete</th>
            </tr>
            <tr v-bind:key="item.id" v-for="item in satuans">
                <td> {{item.jenis}} </td>
                <td> {{item.nama}} </td>
                <td> Rp{{item.harga}} </td>
                <td><button></button></td>
            </tr>

        </table>

        <h3>List Harga Kiloan</h3>
        <div v-if="!items.tipe">
        <table>
            <tr>
                <th>Service</th>
                <th>Harga</th>
                <th>Edit/Delete</th>
            </tr>
            <tr v-bind:key="item.id" v-for="item in kiloans">   
                <td> {{item.service}} Hari </td>
                <td> Rp{{item.harga}} </td>
                <td><button></button></td>
            </tr>            
        </table>
        </div>
        
    </div>
</template>

<script>
    export default {
        name: "ItemTable",
        props: ["items"],
        computed: {
            satuans: function () {
                return this.items.filter(function (item) {
                return item.tipe
                })
            },
            kiloans: function () {
                return this.items.filter(function (item) {
                return item.tipe
                })
            },
            } 
    }
</script>

<style scoped>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>