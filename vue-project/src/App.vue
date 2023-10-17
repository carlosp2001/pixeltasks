<template>
  <div id="app">
    <div class="container">
      <Sidebar />
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import Counter from './components/Counter.vue';
import CounterByTen from './components/CounterByTen.vue';
import Sidebar from './components/Sidebar.vue';

@Component({
  components: {
    Counter,
    CounterByTen,
    Sidebar,
  },
})
export default class App extends Vue {

}
</script>
<style lang="stylus">
@import url('https://fonts.googleapis.com/css2?family=Baskervville&display=swap');
  body
    margin 0
  #app
    font-family 'Avenir', Helvetica, Arial, sans-serif
    -webkit-font-smoothing antialiased
    -moz-osx-font-smoothing grayscale
    text-align center
    //padding 3px
    margin 0
  .container
    background #FFFFFF
    display grid
    grid-template-rows 540px 540px
    grid-template-columns repeat(4, 1fr)
    grid-template-areas: "sidebar . . .""sidebar . . ."
  .sidebar
    grid-area sidebar
    background #FAF9F9
  .pixel-logo-img
    margin-top 50px
    width 75%
    margin-bottom 170px
  .sidebar-menu
    width 100%
    height 200px
</style>
