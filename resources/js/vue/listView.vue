<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
            <list-item
                :item="item"
                class="item"
                v-on:itemchanged="$emit('reloadlist')"
            />
        </div>
    </div>
</template>

<script>
import listItem from "./listItem"

export default {
    props: ['items'],
    components: {
        listItem
    }
}
</script>

<style scoped>
.item {
    background: #023020;
    padding: 8px;
    margin-top: 10px;
    border-radius: 10px;
}
</style>