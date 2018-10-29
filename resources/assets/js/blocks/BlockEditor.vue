<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-wysiwyg label="WYSIWYG Editor" :name="fieldName('editor')" note="Test note" :options='{"modules":{"toolbar":[{"list":"ordered"},{"list":"bullet"}],"syntax":false}}' placeholder='Case study text' :maxlength='200' in-store="value" ></a17-wysiwyg>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
