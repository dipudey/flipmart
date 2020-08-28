<template>
  <div id="home">

    <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">



          <!-- ============================================== HOT DEALS ============================================== -->
          <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                <h3 class="section-title">hot deals</h3>

                <!-- Owlcarousel -->

                <carousel>

                    <img src="https://placeimg.com/200/200/any?1">

                    <img src="https://placeimg.com/200/200/any?2">

                    <img src="https://placeimg.com/200/200/any?3">

                    <img src="https://placeimg.com/200/200/any?4">

                </carousel>

          </div>


  </div>
</template>
<script>
import carousel from 'vue-owl-carousel'

export default {
  name: "",
  data: () => ({
    img: 'p25.jpg'
  }),
  components: { carousel },
}
</script>
<style lang="scss" scoped>
</style>
