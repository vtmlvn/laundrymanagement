<template>
    <form @submit.prevent="proceed">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Owner</label>
                    <input class="form-control" type="text" value="" v-model="taskForm.owner">
                </div>
                <div class="form-group" v-if="id">
                    <label for="">Progress ({{taskForm.progress}}%)</label><br />
                    <range-slider class="slider" min="0" max="100" step="1" v-model="taskForm.progress" @change="sliderChange"></range-slider>
                </div>
                <div class="form-group">
                    <label for="">Start Date</label>
                    <datepicker v-model="taskForm.start_date" :bootstrapStyling="true"></datepicker>
                </div>
                <div class="form-group">
                    <label for="">Due Date</label>
                    <datepicker v-model="taskForm.due_date" :bootstrapStyling="true"></datepicker>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Type</label><br>
                    <input type="radio" id="satuanButton" name="laundryType" value="satuan" v-model="taskForm.type" @click="switchType()" style="margin-left:5px">Satuan
                    <input type="radio" id="kiloanButton" name="laundryType" value="kiloan" v-model="taskForm.type" @click="switchType()" style="margin-left:10px">Kiloan
                </div>
                <div id="satuan" style="display: none">
                    <div class="form-group">
                        <label for="">Description</label>
                        <input class="form-control" type="text" value="" v-model="taskForm.description">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input class="form-control" type="number" value="" v-model="taskForm.price">
                    </div>
                </div>
                <div id="kiloan" style="display: none">
                    <div class="form-group">
                        <label for="">Total Weight</label>
                        <input class="form-control" type="number" step=".01" value="" v-model="taskForm.quantity">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input class="form-control" type="number" :value="price" disabled>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">
            <span v-if="id">Update</span>
            <span v-else>Save</span>
        </button>
        <router-link to="/task" class="btn btn-danger waves-effect waves-light m-t-10" v-show="id">Cancel</router-link>
    </form>
</template>

<script>
    import datepicker from 'vuejs-datepicker'
    import RangeSlider from 'vue-range-slider'
    import 'vue-range-slider/dist/vue-range-slider.css'
    import helper from '../../services/helper'

    var showDetailedForm = function() {
        if (document.getElementById("satuanButton").checked) {
            document.getElementById("satuan").style.display = 'block';
            document.getElementById("kiloan").style.display = 'none';
        } 
        else if (document.getElementById("kiloanButton").checked) {
            document.getElementById("kiloan").style.display = 'block';
            document.getElementById("satuan").style.display = 'none';
        }
    }

    export default {
        data() {
            return {
                taskForm: new Form({
                    'owner' : '',
                    'type' : '',
                    'description' : '',
                    'quantity' : 0,
                    'price' : 0,
                    'start_date' : '',
                    'due_date' : '',
                    'status' : 0
                })
            };
        },
        computed : {
            price : function() {
                if(this.taskForm.type == "kiloan") {
                    this.taskForm.description = 'Kiloan';
                    this.taskForm.price = Math.round(this.taskForm.quantity * 5000);
                    return this.taskForm.price;
                }
            }
        },
        components : { datepicker,RangeSlider },
        props: ['id'],
        mounted() {
            if(this.id)
                this.getTasks();
        },
        methods: {
            sliderChange(value){
                this.taskForm.progress = value;
            },
            proceed(){
                this.taskForm.start_date = moment(this.taskForm.start_date).format('YYYY-MM-DD');
                this.taskForm.due_date = moment(this.taskForm.due_date).format('YYYY-MM-DD');
                if(this.id)
                    this.updateTask();
                else
                    this.storeTask();
            },
            storeTask(){
                this.taskForm.post('/api/task/')
                .then(response => {
                    toastr['success'](response.message);
                    this.$emit('completed',response.task)
                })
                .catch(response => {
                    toastr['error'](response.message);
                });
            },
            getTasks(){
                axios.get('/api/task/'+this.id)
                .then(response => {
                    this.taskForm.owner = response.data.owner;
                    this.taskForm.type = response.data.type;
                    this.taskForm.description = response.data.description;
                    this.taskForm.quantity = response.data.quantity;
                    this.taskForm.price = response.data.price;
                    this.taskForm.start_date = response.data.start_date;
                    this.taskForm.due_date = response.data.due_date;
                })
                .catch(response => {
                    toastr['error'](response.message);
                });
            },
            updateTask(){
                this.taskForm.patch('/api/task/'+this.id)
                .then(response => {
                    if(response.type == 'error')
                        toastr['error'](response.message);
                    else {
                        this.$router.push('/task');
                    }
                })
                .catch(response => {
                    toastr['error'](response.message);
                });
            },
            switchType(){
                showDetailedForm();
            }
        }
    }
</script>
<style>
    .slider{
        width: 100%;
    }
</style>
