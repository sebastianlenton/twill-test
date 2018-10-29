<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Project Tags" name="browsers.projecttags"> <a17-browserfield :name="fieldName('projecttags')" item-label="project tags" :max="10" endpoint="/projecttags/browser" modal-title="Attach project tags" :draggable="true" >Add up to 10 project tags</a17-browserfield></a17-inputframe>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
