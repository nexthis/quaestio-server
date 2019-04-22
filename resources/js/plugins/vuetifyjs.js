// Libraries
import Vue from 'vue'
import Vuetify from 'vuetify'

// Helpers
import colors from 'vuetify/es5/util/colors'

Vue.use(Vuetify, {
  theme: {
    primary: "#00bad6",
    secondary: colors.red.lighten4, 
    accent: "#00cb8c"
  }
})