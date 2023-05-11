<template>
  <div class="avatar" :class="getSize(size)">
    <img
      :src="img"
      :alt="alt"
      :class="[getClasses(shadow, circular, borderRadius, fixedSize)]"
    />
  </div>
</template>

<script>
export default {
  name: "MaterialAvatar",
  props: {
    img: {
      type: String,
      required: true,
    },
    alt: {
      type: String,
      default: "",
    },
    size:  {
      type: String,
      default: "",
    },
    shadow: {
      type: String,
      default: "",
    },
    borderRadius:  {
      type: String,
      default: "",
    },
    circular:  {
      type: Boolean,
      default: false,
    },
    fixedSize: {
      type: Boolean,
      default: false
    }
  },
  methods: {
    getSize: (size) => (size ? `avatar-${size}` : null),
    getClasses: (shadow, circular, borderRadius, fixedSize) => {
      let shadowValue, circularValue, borderRadiusValue, fixedSizeValue;

      if (shadow) {
        shadowValue = shadow === "regular" ? "shadow" : `shadow-${shadow}`;
      } else {
        shadowValue = null;
      }

      circularValue = circular ? "rounded-circle" : null;

      borderRadiusValue = borderRadius ? `border-radius-${borderRadius}` : null;

      if(fixedSize){
        fixedSizeValue = 'fixedSize'
      }else{
        fixedSizeValue = null;
      }

      return `${shadowValue} ${circularValue} ${borderRadiusValue} ${fixedSizeValue}`;
    },
  },
};
</script>

<style>
.fixedSize{
  object-fit: cover;
  width: 100%;
  height: 200px;
}
</style>
