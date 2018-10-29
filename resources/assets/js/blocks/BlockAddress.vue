<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Address 1" :name="fieldName('address1')" type="text" in-store="value" ></a17-textfield><a17-textfield label="Address 2" :name="fieldName('address2')" type="text" in-store="value" ></a17-textfield><a17-textfield label="Address 3" :name="fieldName('address3')" type="text" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
