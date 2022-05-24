<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
        
        <list-item-vue
        :item="item"
        class="item"
        v-on:itemchanged="$emit('reloadlist')"
        />
        </div>

    </div>
</template>

<script>

import listItemVue from './listItem.vue'

    export default {
        props: ['items'], // send items to ListItem Component 
        components: {
            listItemVue
        }
    }
</script>

<style scoped>
.item {
    background: #e6e6e6;
    padding: 5px;
    margin-top: 5px;

}
</style>