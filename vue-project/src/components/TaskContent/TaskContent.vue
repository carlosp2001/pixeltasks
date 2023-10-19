<template>
  <div class="task-content">
    <div class="task-content-title">
      Mis Tareas
      <img src="../../assets/delete-icon.svg" alt="Trash Icon">
    </div>
    <div class="list-container">
      <TaskItem v-for="task in items" :key="task.id"
                :content="task.content" :done="task.done"
                :my-id="parseInt(task.id)"/>
    </div>

  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import { Prop } from 'vue-property-decorator';
import TaskItem from '@/components/TaskContent/TaskItem.vue';

@Component({
  components: {
    TaskItem,
  },
})
export default class TaskContent extends Vue {
  @Prop() items!:object;
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
</style>
