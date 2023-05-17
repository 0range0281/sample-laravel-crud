<template>
    <div class="todoListContainer">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form
                v-on:reloadlist="getList()"
            />
        </div>
        <list-view 
            :items="items"
            v-on:reloadlist="getList()"
        />
    </div>
</template>

<script>
import addItemForm from "./addItemForm"
import listView from "./listView"

export default {
    components: {
        addItemForm,
        listView
    },
    data: function () {
        return {
            items: []
        }
    },
    methods: {
        getList () {
            axios.get('api/items')
            .then( response => {
                this.items = response.data
            })
            .catch( error => {
                console.log( error );
            })
        }
    },
    created() {
        this.getList();
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

.todoListContainer {
    width: 350px;
    margin: auto;
}

.heading {
    background: #e6e6e6;
    padding: 10px;
    margin-top: 100px;
    border-radius: 8px;
    background: #343434	;
}

#title {
    text-align: center;
    font-family: 'Pacifico', cursive;
    font-weight: 400;
    font-size: 37px;
    color: white;
}
</style>