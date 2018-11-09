<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Title" :name="fieldName('title')" type="text" in-store="value" ></a17-textfield><a17-wysiwyg label="Copy" :name="fieldName('copy')" :options='{"modules":{"toolbar":["link"],"syntax":false}}' placeholder='Enter copy...' in-store="value" ></a17-wysiwyg>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
