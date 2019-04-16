<template>
    <div class="i-divider primary">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="i-divider__svg i-divider__svg--rotate"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fafafa;"></path></svg>    
        <h1 class="i-divider--center white--text display-1 text-xs-center"><slot></slot></h1>
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="i-divider__svg"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fafafa;"></path></svg>    
    </div>
</template>

<script>
export default {
    
}
</script>


<style lang="scss" scoped>
.i-divider{
    $self: &;
    width: 100%;
    min-height: 200px;
    position: relative;
    &__svg{
        position: absolute;
        bottom: 0;
        left: 0;
        height: 80px;
        width: 100%;
        &--rotate{
            top: 0;
            transform: rotate(180deg);
        }
    }

    &--center{
        position: absolute;
        left: 50%;
        top: 50%;
        width: 100%;
        transform: translate(-50%,-50%);
    }
}
</style>
