<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Experiment preview" name="browsers.experiments"> <a17-browserfield :name="fieldName('experiments')" item-label="experiment preview" :max="1" endpoint="/designpages/experiments/browser" modal-title="Attach experiment preview" :draggable="true" >Add one experiment preview</a17-browserfield></a17-inputframe><a17-textfield label="Column width (1-12)" :name="fieldName('experiment_preview_width')" type="text" :maxlength="2" in-store="value" ></a17-textfield><a17-singlecheckbox :name="fieldName('row_end')" label="Force row end?" :initial-value="false" :has-default-store="true" in-store="currentValue"
></a17-singlecheckbox>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
