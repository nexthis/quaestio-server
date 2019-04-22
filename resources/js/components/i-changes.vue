<template>
    <v-container>
        <v-layout row wrap align-center>
            <v-flex xs12 sm6 offset-sm6>
                <v-card>
                    <v-card-title>
                        <h1>asdasd</h1>
                    </v-card-title>
                </v-card>
            </v-flex>
            <v-flex xs12 sm6 class="mt-5">
                <v-card>
                    <v-card-title>
                        <h1>asdasd</h1>
                    </v-card-title>
                </v-card>
            </v-flex>
            <v-flex xs12 sm6 offset-sm6 class="mt-5">
                <v-card>
                    <v-card-title>
                        <h1>asdasd</h1>
                    </v-card-title>
                </v-card>
            </v-flex>

        </v-layout>
        <div class="text-xs-center mt-4">
            <v-pagination :length="6"  v-model="page"></v-pagination>
        </div>
    </v-container>
</template>


<script>
export default {
    data () {
      return {
        page: 1
      }
    }
}
</script>