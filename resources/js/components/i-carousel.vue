<template>
    <v-card flat class="v-card--border">
        <v-window
            v-model="window"
            horizontal>
            <v-card-title >
                <slot></slot>
            </v-card-title>
        </v-window>

        <v-card-actions>
            <v-btn fab @click="prev" color="primary">
                <v-icon dark>keyboard_arrow_left</v-icon>
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn fab @click="next" color="primary">
                <v-icon dark>keyboard_arrow_right</v-icon>
            </v-btn>
        </v-card-actions>


    </v-card>
</template>

<script>
export default {
    data: () => ({
      length: 4,
      window: 0
    }),
    
    methods: {
      next () {
        this.window = this.window + 1 === this.length
          ? 0
          : this.window + 1
      },
      prev () {
        this.window = this.window - 1 < 0
          ? this.length - 1
          : this.window - 1
      }
    }

}
</script>