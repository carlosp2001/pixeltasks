<template>
  <div id="app">
    <div class="container">
      <Sidebar />
      <Header :tasks-amount="tasks.length.toString()"
              :new-task="newTask" :items="tasks"/>
      <TaskContent :items="tasks" />
    </div>
  </div>
</template>

<script lang="ts">
import axios from 'axios';
import { Component, Vue } from 'vue-property-decorator';
import Counter from './components/Counter.vue';
import CounterByTen from './components/CounterByTen.vue';
import Sidebar from './components/Sidebar/Sidebar.vue';
import Header from './components/Header/Header.vue';
import TaskContent from './components/TaskContent/TaskContent.vue';

@Component({
  components: {
    Counter,
    CounterByTen,
    Sidebar,
    Header,
    TaskContent,
  },
})
export default class App extends Vue {
  private tasks: any[] = [];

  private newTask: string = '';

  created() {
    this.getTasks();
  }

  private getTasks() {
    axios.get(`${process.env.VUE_APP_PROJECT_URL}api/task`)
      .then((response) => {
        // Almacena las tareas obtenidas en la variable tareas
        this.tasks = response.data;
      })
      .catch((error) => {
        console.error('Error al obtener las tareas', error);
      });
  }
}
</script>
<style lang="stylus">
@import url('https://fonts.googleapis.com/css2?family=Arimo&family=Baskervville&display=swap');
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
    grid-template-rows repeat(4, 1fr)
    grid-template-columns repeat(4, 1fr)
    grid-template-areas: \
      "sidebar header header header" \
      "sidebar task-content task-content task-content" \
      "sidebar task-content task-content task-content" \
      "sidebar task-content task-content task-content"
  .pixel-logo-img
    margin-top 50px
    width 75%
    margin-bottom 170px
  .sidebar-menu
    width 100%
    height 200px
</style>
