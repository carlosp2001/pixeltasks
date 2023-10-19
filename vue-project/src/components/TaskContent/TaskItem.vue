<template>
  <div class="list-item">
    <div class="list-item-text">
      {{ content }}
    </div>
    <div class="list-item-check-box" @click="sendRequest">
      <img v-if="done" src="../../assets/check-icon.svg" alt="Check Icon" width="80%">
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import { Prop } from 'vue-property-decorator';
import axios from 'axios';

@Component({
  components: {
  },
})
export default class TaskItem extends Vue {
  @Prop() content!:string;

  @Prop() done!:boolean;

  @Prop() myId!:number;

  private sendRequest() {
    if (this.done) {
      this.done = false;
      axios.put(`${process.env.VUE_APP_PROJECT_URL}api/task/${this.myId}/undone`);
    } else {
      this.done = true;
      axios.put(`${process.env.VUE_APP_PROJECT_URL}api/task/${this.myId}/done`);
    }
  }
}
</script>

<style lang="stylus">
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
