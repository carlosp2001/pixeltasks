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
        <div class="list-item-check-box">
          <img src="../../assets/check-icon.svg" alt="Check Icon" width="80%">
        </div>

      </div>
      <div class="list-item">
        <div class="list-item-text">
          Sonreir
        </div>
        <div class="list-item-check-box">
        </div>
      </div>
      <div class="list-item">
        <div class="list-item-text">
          Sonreir
        </div>
        <div class="list-item-check-box">
        </div>

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
  .list-container .list-item:not(:last-child)
    margin-bottom 40px
  .list-item
    //display flex
    //width 100%
    //margin-bottom 10px
    //background-color #42b983
    //&-text
    //  padding-left 55px
    //  color white
    //  position absolute
    //  height 127px
    //  display flex
    //  align-items center
    //&-icon
    //  width 68%
    //  background-color #42b983
    //  position absolute
    //  display flex
    //  justify-content right
    //&-container
    //  width 100%
    width 100%
    height 100px
    border-radius 23px
    background-color #3A68B2
    position relative
    border solid 3px #E3E4E3
    display flex
    justify-content space-between
    padding-right 20px
    padding-left 20px
    align-items center
    &-text
      color white
      display flex
      z-index 1
      height 100%
      align-items center
    &-check-box
      height 85px
      width 85px
      background-color #1592E6
      z-index 1
      border-radius 8px
      display flex
      align-content center
      justify-content center
    &::after
      content ""
      background-color #3A68B2
      opacity 0.46
      position absolute
      width 100%
      height 100px
      top 15px
      left -10px
      z-index 0
      border-radius 23px
</style>
