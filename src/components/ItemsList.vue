<template>
    <div>
        <CreateItem/> <br> 
        <ItemTable v-bind:items="items"/>
    </div>
</template>

<script>
    import ItemTable from './Items/Table.vue'
    import CreateItem from './Items/Create.vue'
    export default {
        name : "ItemsList",
        components : {
            ItemTable, CreateItem
        },
        data(){
            return {
                items:[
                    {
                        id:1,
                        tipe : true,
                        jenis:"Sepatu", 
                        nama:"Boots", 
                        harga:25000,
                    },
                    {
                        id:2,
                        tipe: true,
                        jenis:"Sepatu", 
                        nama:"Heels", 
                        harga:20000,
                    },
                    {
                        id:3,
                        tipe: false,
                        service : "3", 
                        harga:6000,
                    },
                    {
                        id:4,
                        tipe: false,
                        service : "2", 
                        harga:8000,
                    },
                ]
            }
        },
        methods:{
            fItem(tipe){
                if(tipe === true)
                    return this.items.filter(item => item.tipe === true)
                else
                    return this.items.filter(item => item.tipe === false)
            },
        }  
    }
</script>

<style scoped>

</style>