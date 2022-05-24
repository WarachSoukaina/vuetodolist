<template>
 
    <div class="Todolistcontainer " >
        <div class="heading">
            <h2 id="title">TODO List Of Today</h2>
            <hr>
            <add-item-form-vue 
            v-on:reloadlist="getList()"/>
            
        </div>
           <list-view-vue :items="items"
           v-on:reloadlist="getList()" />
    </div>
</template>

<script>

import addItemFormVue from './addItemForm.vue'
import listViewVue from './listView.vue' 
    
    export default {

        components:{
            addItemFormVue,
            listViewVue
        },
        
        data() {
            return {
                items: []
              
            }
        },
        methods: {
            getList(){ // get items from DB 
                axios.get('api/items')
                 .then( response => {
                     this.items =response.data
                 })
                 .catch( error => {
                     console.log( error);
                 }) 
           }
        },
        created(){
            this.getList();
        }
    }
</script>

<style scoped>
    .Todolistcontainer{
        width:400px;
        margin: auto;
        border-radius: 10px;
       
    }

    .heading {
        background: #e6e6e6;
        padding: 10px;
        border-radius: 10px;
    }

    #title {
        text-align: center;
    }

    
</style>