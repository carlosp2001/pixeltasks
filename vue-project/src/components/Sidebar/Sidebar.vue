<template>
  <div class="sidebar">
    <img src="../../assets/pixellogo.png" alt="pixel-logo" class="pixel-logo-img">
    <SidebarMenu/>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component, { mixins } from 'vue-class-component';
import SidebarMenu from './SidebarMenu.vue';

@Component({
  components: {
    SidebarMenu,
  },
})
export default class Sidebar extends Vue {

}
</script>
