<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-wysiwyg label="Copy" :name="fieldName('content')" :options='{"modules":{"toolbar":["link"],"syntax":false}}' placeholder='Enter copy...' in-store="value" ></a17-wysiwyg><a17-textfield label="Left Column Position" :name="fieldName('leftposition')" type="text" note="Enter a value between 1 and 11." in-store="value" ></a17-textfield><a17-singlecheckbox :name="fieldName('endofrow')" label="End of row?" :initial-value="false" :has-default-store="true" in-store="currentValue"
></a17-singlecheckbox>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
