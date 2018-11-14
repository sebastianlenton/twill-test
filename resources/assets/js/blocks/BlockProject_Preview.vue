<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Project preview" name="browsers.projects"> <a17-browserfield :name="fieldName('projects')" item-label="project preview" :max="1" endpoint="/designpages/projects/browser" modal-title="Attach project preview" :draggable="true" >Add one project preview</a17-browserfield></a17-inputframe><a17-textfield label="Column width (1-12)" :name="fieldName('project_preview_width')" type="number" note="Enter a value between 1 and 12." :maxlength="2" in-store="value" ></a17-textfield><a17-singlecheckbox :name="fieldName('row_end')" label="Force row end?" :initial-value="false" :has-default-store="true" in-store="currentValue"
></a17-singlecheckbox>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
