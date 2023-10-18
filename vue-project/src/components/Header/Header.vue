<template>
  <div class="header">
    <div class="welcome_message">
      Hola Carlos!
    </div>
    <div class="pending_tasks_message">
      Tienes 3 tareas pendientes
    </div>
    <div class="input_container">
      <input type="text" name="task-input" id="task-input" placeholder="¿Qué tarea estás pensando hacer?">
      <img src="../../assets/button.svg">
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

@Component({
  components: {
  },
})
export default class Header extends Vue {

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
