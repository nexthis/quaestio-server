<template>
  <div class="hero primary">
    <v-container grid-list-lg>
      <slot></slot>
    </v-container>

    <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="hero__svg"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fafafa;"></path></svg>    
  </div>
</template>

<script>
export default {
  mounted() {
    //console.log('Component mounted.')
    //972.526
  }
};
</script>

<style lang="scss" scoped>
.hero {
  width: 100%;
  height: 70vh;
  position: relative;
  &__svg {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 150px;
    width: 100%;
    @media screen and (max-width: 600px) {
          height: 100px;
    }
  }
  .container{
    @media only screen and (min-width: 1904px){
      max-width: 1185px;
    }
  }
}
</style>
