<template>
  <div class="sidebar-menu">
    <MenuItem item-name="Tareas" :icon="require('@/assets/tasks.svg')" is-active="true"/>
    <MenuItem item-name="Perfil" :icon="require('@/assets/profile.svg')"/>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import MenuItem from './MenuItem.vue';

@Component({
  components: {
    MenuItem,
  },
})
export default class SidebarMenu extends Vue {

}
</script>

<style lang="stylus">
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
