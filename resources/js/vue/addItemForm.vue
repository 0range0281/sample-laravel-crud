<template>
    <div class="addItem">
        <input type="text" placeholder="What is your focus for today?" v-model="item.name"/>
        <font-awesome-icon
            icon="plus-square"
            @click="addItem()"
            :class="[ item.name ? 'active' : 'inactive', 'plus']"
        />
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            item: {
                name: ""
            }
        }
    },
    methods: {
        addItem() {
            if (this.item.name == '') {
                return;
            }

            axios.post('api/item/store', {
                item: this.item
            })
            .then( response => {
                if (response.status == 201) {
                    this.item.name = "";
                    this.$emit('reloadlist');
                }
            })
            .catch (error => {
                console.log ( error );
            })
        }
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Arvo:ital@1&display=swap');

.addItem {
    display: flex;
    justify-content: center;
    align-items: center;
}
input {
    background: #f7f7f7;
    border: 0px;
    outline: none;
    padding: 5px;
    margin-right: 10px;
    width: 100%;
    border-radius: 10px;
    text-align: center;
    font-family: 'Arvo', serif;
    font-style: italic;
}
.plus {
    font-size: 20px;
}
.active {
    color: #0FFF50;
}
.inactive {
    color: #999999;
}
</style>