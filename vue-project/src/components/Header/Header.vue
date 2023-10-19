<template>
  <div class="header">
    <div class="welcome_message">
      Hola!
    </div>
    <div class="pending_tasks_message">
      Tienes {{ tasksAmount }} tareas pendientes
    </div>
    <div class="input_container">
      <input type="text" id="task-input" placeholder="¿Qué
   tarea estás pensando hacer?" v-model="currentInput">
      <img src="../../assets/button.svg" @click="addNewTask">
    </div>
  </div>
</template>

<script lang="ts">
import axios from 'axios';
import Vue from 'vue';
import { Prop, Component } from 'vue-property-decorator';

@Component({
  components: {
  },
})
export default class Header extends Vue {
  private currentInput = '';

  @Prop() tasksAmount!: string;

  @Prop() items!: any[];

  private addNewTask() {
    console.log(this.currentInput);
    axios.post(`${process.env.VUE_APP_PROJECT_URL}api/task`, { content: this.currentInput })
      .then((response) => {
        console.log(response.data);
        this.items.push(response.data);
      }).catch((error) => {
        console.log(error);
      });
  }
}
</script>

<style lang="stylus">
.header
  grid-area header
  font-family 'Verb Condensed Regular', sans-serif
  color #8E8E8E
  font-size 42px
.welcome_message
  display flex
  justify-content left
  padding 50px
.pending_tasks_message
  color black
  display flex
  justify-content left
  margin-left 50px
.input_container
  padding 50px
  display flex
  justify-content space-between
#task-input
  font-size 34px
  width 65%
  height 110px
  border-radius 10px
  border 3px solid #FDB713;
  &::placeholder
    padding-left 25px
</style>
