import {TweenMax} from 'gsap'

export const AroundTheWorld = (el) =>{
    
    TweenMax.to('.around-the-world__space',2,{scale:3.1,transformOrigin:'center',delay:0.5})
    el.querySelectorAll('.around-the-world__star').forEach((element)=>{
        TweenMax.to(element,2,{ attr:{cx:Math.random()*1000,cy:Math.random()*700},delay:1 })
    })

}

export const OnlinePage = (el) =>{
    TweenMax.to('.online-page__rectangle--opacity',2,{ opacity:0.3})
    TweenMax.staggerFromTo('.online-page__line',1,{ scaleX:0 }, { scaleX:1},0.2,OnlinePageAfter) 
}

const OnlinePageAfter = ()  => {
    TweenMax.to('.online-page__rectangle',2,{ opacity:1})

}


export const CodeReview = (el) =>{
    TweenMax.staggerFromTo('.code-review__line',2,{ scaleX:0 }, { scaleX:1},0.2)
    //TweenMax.to('.code-review__arrow', 1, {drawSVG:0});
}
