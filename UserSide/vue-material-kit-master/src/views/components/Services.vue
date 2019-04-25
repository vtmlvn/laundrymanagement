<template>
    <div>
        <div class="md-layout-item md-size-100 md-small-size-100">
          <tabs
            :tab-name="['Kiloan', 'Household', 'Peripheral', 'Drycleaning', 'Bleaching']"
            :tab-icon="['', '']"
            plain
            flex-column
            nav-pills-icons
            color-button="primary"
          >
            <!-- here you can add your content for tab-content -->
            <template slot="tab-pane-1">
                <pre style="font-family:'Montserrat', sans-serif;">
                <b>Cuci Kering</b>     : Rp4.500,00
                <b>Setrika</b>         : Rp4.500,00 
                <b>Cuci Komplit</b>    : 
                    3 Hari  : Rp6.000,00
                    2 Hari  : Rp8.000,00
                    1 Hari  : Rp10.000,00
                    8 Jam   : Rp12.000,00
                    3 Jam   : Rp15.000,00
                </pre>
            </template>
            <template slot="tab-pane-2">
              <pre style="font-family:'Montserrat', sans-serif; ">
        <b id="name">Bantal</b> : Rp15.000,00
        <b id="name">Guling</b> : Rp20.000,00
        <b id="name">Boneka</b> :
            <aa id="name">Small</aa> : Rp10.000,00
            <aa id="name">Medium</aa> : Rp20.000,00 
            <aa id="name">Large</aa> : Rp30.000,00
            <aa id="name">Jumbo</aa> : Rp50.000,00
        <b id="name">Selimut</b> : Rp15.000,00
        <b id="name">Bedcover</b> :
            <aa id="name">Single</aa> : Rp20.000,00
            <aa id="name">Double</aa> : Rp30.000,00
            <aa id="name">King</aa> : Rp40.000,00
        <b id="name">Sprei</b> : Rp7.000,00
        <b id="name">Karpet</b> :
            <aa id="name">Lite</aa> : Rp12.500,00/m2
            <aa id="name">Standard</aa> : Rp14.000,00/m2
            <aa id="name">Medium</aa> : Rp18.000,00/m2
            <aa id="name">Super</aa> : Rp25.000,00/m2
              </pre>
            </template>
            <template slot="tab-pane-3">
              <pre style="font-size:20px; font-family:'Montserrat', sans-serif; ">
        <b id="name">Bantal</b> : Rp15.000,00
        <b id="name">Boneka</b> :
            <aa id="name">Small</aa> : Rp10.000,00
        <b id="name">Selimut</b> : Rp15.000,00
        <b id="name">Bedcover</b> :
            <aa id="name">Single</aa> : Rp20.000,00
        <b id="name">Sprei</b> : Rp7.000,00
        <b id="name">Karpet</b> :
            <aa id="name">Lite</aa> : Rp12.500,00/m2
              </pre>
            </template>
            <template slot="tab-pane-4">
              <pre style="font-size:20px; font-family:'Montserrat', sans-serif; ">
        <b id="name">Bantal</b> : Rp15.000,00
        <b id="name">Boneka</b> :
            <aa id="name">Small</aa> : Rp10.000,00
        <b id="name">Selimut</b> : Rp15.000,00
        <b id="name">Bedcover</b> :
            <aa id="name">Single</aa> : Rp20.000,00
        <b id="name">Sprei</b> : Rp7.000,00
        <b id="name">Karpet</b> :
            <aa id="name">Lite</aa> : Rp12.500,00/m2
              </pre>
            </template>
            <template slot="tab-pane-5">
              <pre style="font-size:20px; font-family:'Montserrat', sans-serif; ">
        <b id="name">Bantal</b> : Rp15.000,00
        <b id="name">Boneka</b> :
            <aa id="name">Small</aa> : Rp10.000,00
        <b id="name">Selimut</b> : Rp15.000,00
        <b id="name">Bedcover</b> :
            <aa id="name">Single</aa> : Rp20.000,00
        <b id="name">Sprei</b> : Rp7.000,00
        <b id="name">Karpet</b> :
            <aa id="name">Lite</aa> : Rp12.500,00/m2
              </pre>
            </template>
          </tabs>
        </div>
    </div>
</template>

<script>
import { Tabs } from "@/components";

    export default {
        components: {
            Tabs
        }
    };
</script>

<style lang="scss" scoped>
#name{
    padding-right: 25px;
}
</style>