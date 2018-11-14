<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="News story" name="browsers.newsitems"> <a17-browserfield :name="fieldName('newsitems')" item-label="news story" :max="1" endpoint="/designpages/newsitems/browser" modal-title="Attach news story" :draggable="true" >Add one news story</a17-browserfield></a17-inputframe><a17-textfield label="Column width (1-12)" :name="fieldName('news_width')" type="number" note="Enter a value between 1 and 12." :maxlength="2" in-store="value" ></a17-textfield><a17-singlecheckbox :name="fieldName('row_end')" label="Force row end?" :initial-value="false" :has-default-store="true" in-store="currentValue"
></a17-singlecheckbox>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
