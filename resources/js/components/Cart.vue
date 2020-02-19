<template>
    <div>
        <table class="table table-bordered">
          <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Qunatity</th>
            <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for = "item in items" :key="item.id">
              <td>{{item.id}}</td>
              <td>{{item.name}}</td>
              <td>{{item.price}}</td>
              <td> <span @click="show = false && item.id " v-if="show">{{item.quantity}}</span><input type="text"  v-if="!show" v-model="qunatity"> <button @click="$emit('click' , save )">edit</button></td>
              <td>{{item.quantity * item.price}}</td>
            </tr>
          </tbody>
        </table>
    </div>
</template>

<script>
export default {
  props: ['items'],
    data(){
        return{
            qunatity: '',
            show: true
        }
    },
    methods: {
      save() {
        this.show = false;
      },
      update(item) {
        this.qunatity = item.qunatity;
      }
    }
}
</script>

<style>
 
</style>