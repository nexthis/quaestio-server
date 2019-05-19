<template>
    <v-container>
        <v-layout row wrap align-center>
            <v-flex xs12 sm6 class="mt-5" :offset-sm6="index%2 ==0 ? true : false" v-for="(item,index) in changes" :key="index">
                <v-card>
                    <v-card-title>
                        <h4 class="display-1">{{item.title}} </h4> 
                        <v-spacer></v-spacer>
                        <img class="icon" :src="'storage/'+item.image" >
                        <p class="subheading mt-4">{{item.text}}</p>
                    </v-card-title>
                </v-card>
            </v-flex>

        </v-layout>
        <div class="text-xs-center mt-4">
            <v-pagination :length="length"  v-model="page"></v-pagination>
        </div>
    </v-container>
</template>


<script>
export default {
    props:{
        route:String, //Get route url 
    },
    mounted(){
        this.fetchChanges();
    },
    data () {
      return {
        page: 1,
        length: 1,
        changes: [],
      }
    },
    methods:{
        fetchChanges(){
            axios.get(this.route+`?page=${this.page}`).then((request)=>{
                console.log(request);
                this.length = request.data.last_page;
                this.changes = request.data.data;
            })
        }
    },
    watch: {
        page: function(value){
            this.fetchChanges();
            console.log('jest');
        }
    }

}
</script>

<style lang="scss" scoped>
.icon{
    width: 50px;
    height: 50px;
}
</style>
