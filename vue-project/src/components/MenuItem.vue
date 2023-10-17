<template>
  <div :class="{'menu-item menu-item-active' : isActive, 'menu-item' : !isActive}">
    <div class="image_container">
      <img :src="icon" alt="Icono Tareas" width="100%">
    </div>
    <div class="task_menu_item">
      <h1>{{ itemName }}</h1>
    </div>
  </div>
</template>

<script lang="ts">
import { Vue, Component, Prop } from 'vue-property-decorator';

@Component
export default class MenuItem extends Vue {
  @Prop() itemName!: string;

  @Prop() icon!: string;

  @Prop() isActive!: boolean;
}
</script>

<style lang="stylus">
.menu-item
  font-family 'Baskervville'
  color #606060
  width 100%
  height 45%
  border-radius 20px
  margin-bottom 10px
  display flex
  justify-content left
  align-content center
  gap 40px
  &-active
    background-color #FDB713
.image_container
  margin-left 5%
  display flex
  width 12%
  justify-content center
  align-content center
.task_menu_item
  display flex
  justify-content center
  align-content center
</style>
