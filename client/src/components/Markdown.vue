<template>
  <div class="mdeditor">
    <textarea class="form-control mdtext" rows="10" v-model="mdtext" debounce="300"></textarea>
    <div class="preview" v-html="markdown"></div>
  </div>
</template>

<script>
import sd from 'showdown'
var converter
export default {
  props: ['mdtext'],
  created () {
    converter = new sd.Converter()
    converter.setFlavor('github')
  },
  computed: {
    markdown () {
      return converter.makeHtml(this.mdtext)
    }
  }
}
</script>

<style scoped>
.mdtext {
  display: inline;
  width: 49%;
}
textarea, .mdeditor div {
  border: none;
  border-right: none;
  display: inline-block;
  width: 49%;
  height: 100%;
  vertical-align: top;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0 20px;
  height: 20em;
}
textarea {
  border: none;
  border-right: 1px solid #ccc;
  resize: none;
  outline: none;
  background-color: #f6f6f6;
  font-size: 14px;
  font-family: 'Monaco', courier, monospace;
  padding: 20px;
  height: 20em;
}
.mdeditor div.preview {
  overflow: auto;
}

</style>