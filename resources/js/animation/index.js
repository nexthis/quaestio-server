import Vue from 'vue';
import ScrollMonitor from 'scrollmonitor';
import {AroundTheWorld,OnlinePage,CodeReview} from './effects'

Vue.directive('animation', {
    inserted: function (el,binding) {
        let animete =null;
        switch(binding.expression.toLowerCase()){
            case 'aroundtheworld':{
                animete= AroundTheWorld;
            }
            break;
            case 'onlinepage':{
                animete= OnlinePage;

            }
            break;
            case 'codereview':{
                animete= CodeReview;
            }
            break;
        }

       const watch = ScrollMonitor.create(el,{top: -300,bottom: -300});
       watch.enterViewport(() => {
            animete(el);
            watch.destroy()
       });
    }
})