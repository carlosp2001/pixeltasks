<template>
  <div class="task-content">
    <div class="task-content-title">
      Mis Tareas
      <img src="../../assets/delete-icon.svg" alt="Trash Icon">
    </div>
    <div class="list-container">
      <div class="list-item">
        <div class="list-item-text">
          Sonreir
        </div>
        <img src="../../assets/list-item-container.svg" alt="list-item" class="list-item-container">
      </div>
      <div class="list-item">
        <img src="../../assets/list-item-container.svg" alt="list-item">
      </div>
      <div class="list-item">
        <img src="../../assets/list-item-container.svg" alt="list-item">
      </div>
      <div class="list-item">
        <img src="../../assets/list-item-container.svg" alt="list-item">
      </div>

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
export default class TaskContent extends Vue {

}
</script>

<style lang="stylus">
  .task-content
    font-family Baskerville, 'sans-serif'
    font-weight bold
    font-size 49px
    padding-left 50px
    padding-right 50px
    grid-area task-content
    &-title
      display flex
      justify-content space-between
  .list-container
    margin-top 20px
    display flex
    flex-direction column
    font-weight normal
  .list-item
    display flex
    &-text
      padding-left 55px
      color white
      position absolute
      height 127px
      display flex
      align-items center




</style>
