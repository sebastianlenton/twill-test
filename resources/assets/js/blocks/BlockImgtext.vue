<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.imgfullwidth" > <a17-mediafield :name="fieldName('imgfullwidth')" crop-context="imgfullwidth" >TODO img size validation</a17-mediafield> </a17-inputframe><a17-inputframe label="Image (mobile override)" name="medias.imgfullwidth-mobile" > <a17-mediafield :name="fieldName('imgfullwidth-mobile')" crop-context="imgfullwidth-mobile" >TODO img size validation</a17-mediafield> </a17-inputframe><a17-wysiwyg label="Caption" :name="fieldName('caption')" :options='{"modules":{"toolbar":["link"],"syntax":false}}' placeholder='Enter caption text...' :maxlength='400' in-store="value" ></a17-wysiwyg><a17-textfield label="Element width (columns)" :name="fieldName('width')" type="text" note="Enter a value between 1 and 12." in-store="value" ></a17-textfield><a17-singlecheckbox :name="fieldName('aligntoright')" label="Align to right?" :initial-value="false" :has-default-store="true" in-store="currentValue"
></a17-singlecheckbox><a17-singlecheckbox :name="fieldName('endofrow')" label="End of row?" :initial-value="false" :has-default-store="true" in-store="currentValue"
></a17-singlecheckbox><a17-textfield label="Padding Top (in px)" :name="fieldName('paddingtop')" type="text" note="Enter a value between 45 and 250. Enter the number only." in-store="value" ></a17-textfield><a17-textfield label="Padding Bottom (px)" :name="fieldName('paddingbottom')" type="text" note="Enter a value between 45 and 250. Enter the number only." in-store="value" ></a17-textfield><a17-textfield label="Link URL" :name="fieldName('link')" type="text" note="Enter an optional link URL." in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
