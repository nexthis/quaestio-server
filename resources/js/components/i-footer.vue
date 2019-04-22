<template>
    <div class="i-footer primary">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="i-footer__svg"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fafafa;"></path></svg>    
        <slot></slot>
    </div>

</template>


<style lang="scss" scoped>
.i-footer{
    width: 100%;
    height: auto;
    padding-top: 150px;
    padding-bottom: 20px;
    position: relative;
    &__svg {
        position: absolute;
        top: 0;
        left: 0;
        height: 150px;
        width: 100%;
        transform: rotate(180deg);
        @media screen and (max-width: 600px) {
            height: 100px;
        }
    }
    @media screen and (max-width: 600px) {
        padding-top: 100px;
    }
}
</style>
