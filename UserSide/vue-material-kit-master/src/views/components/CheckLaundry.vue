<template>
    <div>
        <div id="inputs">
            <div class="md-layout">
                <div class="md-layout-item md-size-30 md-xsmall-size-100 md-small-size-50 md-medium-size-25">
                    <md-field>
                        <label>Nomor Laundry</label>
                        <md-input v-model="floatingLabel" type="text"></md-input>
                    </md-field>
                </div>
                <div class="md-layout-item md-size-30 md-xsmall-size-100 md-small-size-50 md-medium-size-25">
                    <md-field>
                        <label>Nomor Telpon</label>
                        <md-input v-model="floatingLabel" v-model-number="phone" type="number" ></md-input>
                    </md-field>
                </div>
                <div class="md-layout-item md-size-30 md-xsmall-size-100 md-small-size-50 md-medium-size-25">
                    <md-button class="md-primary">CARI</md-button>                
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>