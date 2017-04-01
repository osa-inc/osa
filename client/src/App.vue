<template>
  <div id="app">
    <div class="container">
      <h1 class="title">おおおぉぅぅぅぅるぅぅ</h1>
      <editortab></editortab>
    </div>
  </div>
</template>

<script>
import Editortab from 'components/EditorTab'

export default {
  components: {
    Editortab
  }
}
</script>

<style lang="scss">
@import '~animate.css';
.animated {
  animation-duration: .377s;
}

@import '~bulma';

@import '~wysiwyg.css/wysiwyg.sass';

$fa-font-path: '~font-awesome/fonts/';
@import '~font-awesome/scss/font-awesome';
</style>
