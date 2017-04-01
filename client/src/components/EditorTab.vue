<template>
  <div id="app" class="box is-parent">
    <tabs animation="slide" :only-fade="false">
      <tab-pane label="Markdown">
        <div class="box is-child">
          <markdown></markdown> 
        </div>
      </tab-pane>
      <tab-pane label="うぃっじうぃっぐ">
        <div class="box is-child">
          <quill></quill>
        </div>
      </tab-pane>
    </tabs>
  </div>
</template>

<script>
import { Tabs, TabPane } from 'vue-bulma-tabs'
import Quill from 'components/Quill'
import Markdown from 'components/Markdown'

export default {
  components: {
    Tabs,
    TabPane,
    Markdown,
    Quill
  }
}
</script>