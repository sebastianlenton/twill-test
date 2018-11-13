<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.experiment_image" > <a17-mediafield :name="fieldName('experiment_image')" crop-context="experiment_image" >Minimum image width: TODO ENTER WIDTH</a17-mediafield> </a17-inputframe><a17-textfield label="Image Width (columns, 1-12)" :name="fieldName('image_width')" type="text" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
